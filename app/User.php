<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'city', 'phoneNumber'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products(){
        return $this->hasMany('App\Product', 'user_id', 'id');
    }

    public function product_comments(){
        return $this->hasMany('App\ProductComment', 'user_id', 'id');
    }

    public function reviews(){
        return $this->hasMany('App\UserReview', 'reviewee_id', 'id');
    }

    public function reviews_written(){
        return $this->hasMany('App\UserReview', 'reviewer_id', 'id');
    }

    public function wishlist(){
        return $this->hasMany('App\Wishlist', 'user_id', 'id');
    }
}
