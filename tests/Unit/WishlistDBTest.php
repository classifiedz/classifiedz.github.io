<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Wishlist;
use App\Product;

class WishlistDBTest extends TestCase
{
    /**
     * Test creating wishlist item
     *
     * @return void
     */
    public function testWishlistCreation()
    {
    	$pass = false;
    	$wishlistFound = null;

    	$product = $this->createProduct(1, 'Test title', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

    	$user_id = 1;
    	$product_id = $product->id;
    	$this->createWishlist($user_id, $product_id);
    	$wishlistFound = $this->retrieveWishlist($user_id, $product_id);

    	if(isset($wishlistFound)){
    		$pass = true;
    		$this->removeWishlist($wishlistFound->id);
    	}

    	$this->removeProduct($product_id);
    	$this->assertTrue($pass);
    }

    public function testWishlistDeletion(){
    	$pass = false;

    	$product = $this->createProduct(1, 'Test title', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

    	$user_id = 1;
    	$product_id = $product->id;
    	$wishlistCreated = $this->createWishlist($user_id, $product_id);

    	$this->removeWishlist($wishlistCreated->id);

    	$wishlistFound = $this->retrieveWishlist($user_id, $product_id);

    	if(!isset($wishlistFound)){
    		$pass = true;
    	}

    	$this->removeProduct($product_id);
    	$this->assertTrue($pass);
    }

    private function createWishlist($user_id, $product_id){
    	$wishlist = [
    		'user_id' => $user_id,
    		'product_id' => $product_id,
    	];

    	return Wishlist::create($wishlist);
    }

    private function retrieveWishlist($user_id, $product_id){
    	return Wishlist::where('user_id', $user_id)
    	->where('product_id', $product_id)
    	->first();
    }

    private function removeWishlist($wishlist_id){
    	Wishlist::destroy($wishlist_id);
    }

    private function createProduct($user_id, $title, $description, $price, $category_id, $image){
    	$product = [
    		'user_id' => $user_id,
    		'title' => $title,
    		'description' => $description,
    		'price' => $price,
    		'category_id' => $category_id,
    		'image' => $image
    	];

    	return Product::create($product);
    }

    private function removeProduct($product_id){
    	Product::destroy($product_id);
    }
}
