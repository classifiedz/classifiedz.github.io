<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	// fillable specifies which fields to be mass assigned
    protected $fillable = ['title', 'description', 'price', 'user_id'];
    
    // Don't need to specify guarded if you have $fillable, because, whatever is not in fillable is guarded
    // guarded specifies which fields are not mass assignable
    // protected $guarded = ['id', 'user_id', 'created_at']
}
