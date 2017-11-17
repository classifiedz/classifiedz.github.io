<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRating;
use App\Product;
use App\User;
use App\UserReview;


class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showStore($username)
    {
        $user = User::where('username', $username)->firstOrFail();
      
        $title = "$user->username's Store";
  		  
        if (Auth::check() && Auth::user()->id == $user->id) {
          $title = "My Store";
        }
      
        $likeCntr = 0;
        $dislikeCntr = 0;
        $liked = false;
        $disliked = false;

        foreach ($user->reviews as $review) {
          if($review->liked){
              $likeCntr++;

              if(Auth::check() && $review->reviewer_id == Auth::id()){
                $liked = true;
              }
          } else{
              $dislikeCntr++;

              if(Auth::check() && $review->reviewer_id == Auth::id()){
                $disliked = true;
              }
          }
        }

        // get rating from database.
        return view('yourstore', [
            'user' => $user,
            'likeCntr' => $likeCntr,
            'dislikeCntr' => $dislikeCntr,
            'liked' => $liked,
            'disliked' => $disliked,
            'title' => $title
        ]);
    }
 		 
    public function showYourStore()
    {
        $user = Auth::user();

        $likeCntr = 0;
        $dislikeCntr = 0;
        $liked = false;
        $disliked = false;

        foreach ($user->reviews as $review) {
          if($review->liked){
              $likeCntr++;

              if(Auth::check() && $review->reviewer_id == Auth::id()){
                $liked = true;
              }
          } else{
              $dislikeCntr++;

              if(Auth::check() && $review->reviewer_id == Auth::id()){
                $disliked = true;
              }
          }
        }

        return view('yourstore', [
            'user' => $user,
            'likeCntr' => $likeCntr,
            'dislikeCntr' => $dislikeCntr,
            'liked' => $liked,
            'disliked' => $disliked,
            'title' => 'My Store'
        ]);
    }

    public function  rateStore(StoreUserRating $request) {
        $reviewee_id = $request->reviewee_id;
        $reviewer_id = Auth::id();
        $liked = $request->liked;

        $reviewFound = UserReview::where('reviewer_id', $reviewer_id)->
                                      where('reviewee_id', $reviewee_id)->first();

        if(isset($reviewFound)){
            $reviewIsLiked = $reviewFound->liked;
            if($reviewIsLiked == $liked){
                //Remove your review
                UserReview::destroy($reviewFound->id);
            }

            //Toggle rating
            $reviewFound->liked = !$reviewIsLiked;
            $reviewFound->save();
        } else {
            //Creating a new review
            $user_review = [
                'reviewee_id' => $reviewee_id,
                'reviewer_id' => $reviewer_id,
                'liked' => $liked,
            ];

            UserReview::create($user_review);
        }

        $reviewee = User::where('id', $reviewee_id)->first();

        return redirect('/store/'.$reviewee->username);
    }

}
