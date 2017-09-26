<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    protected $table = 'product_comments';

    public function product(){
    	return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
