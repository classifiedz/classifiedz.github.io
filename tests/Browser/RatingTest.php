<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
/*use Tests\TestCase;*/
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use App\User;
use App\UserReview;

class RatingTest extends DuskTestCase
{

    /**
     * Testing like and dislike buttons in the Store page
     *
     * @return void
     */
    public function testLikeAndDislikeButtons()
    {
        //Initial Setup
        $isLiked = false;
        $isDisliked = false;
        $isUndisliked = false;

        $reviewer_name = 'Mr. Reviewer';
        $reviewer_username = 'MrReviewer';
        $reviewer_email = 'mr.reviewer@gmail.com';
        $reviewer_password = 'password';

        $reviewee_name = 'Mrs. Reviewee';
        $reviewee_username = 'MrsReviewee';
        $reviewee_email = 'mrs.reviewee@gmail.com';
        $reviewee_password = 'password';

        $reviewer = $this->createUser($reviewer_name, $reviewer_username, $reviewer_email, $reviewer_password);
        $reviewee = $this->createUser($reviewee_name, $reviewee_username, $reviewee_email, $reviewee_password);

        // Like a person's store, expects to have created a new rating entry in db with a like
        $this->pressRatingButton($reviewer, $reviewee, '@likeBtn');
        $ratingFound = $this->retrieveRating($reviewer->id, $reviewee->id);
        if(isset($ratingFound) && $ratingFound->liked){
            $isLiked = true;
        }

        // Dislike a person's store, expects to have updated your previous rating in db to a dislike
        $this->pressRatingButton($reviewer, $reviewee, '@dislikeBtn');
        $ratingFound = $this->retrieveRating($reviewer->id, $reviewee->id);
        if(isset($ratingFound) && !$ratingFound->liked){
            $isDisliked = true;
        }

        // When user clicks on dislike when it has already been clicked, it removes your rating entry from db
        $this->pressRatingButton($reviewer, $reviewee, '@dislikeBtn');
        $ratingFound = $this->retrieveRating($reviewer->id, $reviewee->id);
        if(!isset($ratingFound)){
            $isUndisliked = true;
        }

        $this->assertTrue($isLiked);
        $this->assertTrue($isDisliked);
        $this->assertTrue($isUndisliked);

        //Reset database to initial state
        $this->removeUser($reviewer->id);
        $this->removeUser($reviewee->id);
    }

    private function pressRatingButton($reviewer, $reviewee, $button){
        $this->browse(function ($browser) use ($reviewer, $reviewee, $button) {
            $browser->loginAs($reviewer)
                    ->visit("/store/$reviewee->username")
                    ->click($button);
        });
    }

    private function retrieveRating($reviewer_id, $reviewee_id){
        return UserReview::where('reviewer_id', $reviewer_id)->
                        where('reviewee_id', $reviewee_id)->first();
    }

    private function createUser($name, $username, $email, $password){
        return User::create([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
    }

    private function removeUser($user_id){
        User::destroy($user_id);
    }
}
