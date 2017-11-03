<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';

    protected $fillable = ['product_id', 'user_id'];

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function product(){
    	return $this->belongsTo('App\Product', 'product_id');
    }
}
