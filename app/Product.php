<?php

namespace App;

use Laravel\Scout\Searchable; /* Searchable is Laravel's Scout Search Implementation */
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use Searchable;/* Searchable is Laravel's Scout Search Implementation */

	protected $table = 'products';

	// fillable specifies which fields to be mass assigned
    protected $fillable = ['title', 'description', 'price', 'user_id', 'category_id', 'image', 'views'];
    
    // Don't need to specify guarded if you have $fillable, because, whatever is not in fillable is guarded
    // guarded specifies which fields are not mass assignable
    // protected $guarded = ['id', 'user_id', 'created_at']

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function category(){
    	return $this->belongsTo('App\ProductCategory', 'category_id');
    }

    public function comments(){
    	return $this->hasMany('App\ProductComment', 'product_id', 'id');
    }
	/* Search Function */
	public function searchableAs()
	{
		$array = $this->toArray();
		return 'products_index';
	}
}
