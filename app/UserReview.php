<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    protected $table = 'user_reviews';

    public function reviewee(){
    	return $this->belongsTo('App\User', 'reviewee_id');
    }

    public function reviewer(){
    	return $this->belongsTo('App\User', 'reviewer_id');
    }
}
