<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductDBTest extends TestCase
{
    /**
     * Test creating a product
     *
     * @return void
     */
    public function testProductCreation()
    {
    	$pass = false;
    	$productFound = null;

		$this->createProduct(1, 'Test title 1', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

        $productFound = $this->retrieveProduct(1, 'Test title 1', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

    	if(isset($productFound)){
    		$pass = true;
    		$this->removeProduct($productFound->id);
    	}

        $this->assertTrue($pass);
    }

    public function testProductDeletion(){
    	$pass = false;

    	$productCreated = $this->createProduct(1, 'Test title 2', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

 		$this->removeProduct($productCreated->id);

        $productFound = $this->retrieveProduct(1, 'Test title 2', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

        if(!isset($productFound)){
    		$pass = true;
    	}

    	$this->assertTrue($pass);
    }

    public function testProductUpdate(){
    	$pass = false;
    	$updated_title = 'UPDATED TITLE TEST';
    	$productFound = null;

    	$productCreated = $this->createProduct(1, 'Test title 2', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');
    	$productCreated->title = $updated_title;
    	$productCreated->save();


        $productFound = $this->retrieveProduct(1, $updated_title, 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

        if(isset($productFound)){
    		$pass = true;
    		$this->removeProduct($productFound->id);
    	}

    	$this->assertTrue($pass);
    }

    public function testProductQuery(){
    	$pass = true;

    	$min = 12.34;
    	$max = 1234;
        $productsFound = Product::where('price', '>=', $min)
						        ->where('price', '<=', $max)
						        ->get();
		
		foreach ($productsFound as $product) {
			$price = $product->price;

			if($price < $min || $price > $max){
				$pass =  false;
				break;
			}
		}

    	$this->assertTrue($pass);
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

    private function retrieveProduct($user_id, $title, $description, $price, $category_id, $image){
    	return Product::where('user_id', $user_id)
						        ->where('title', $title)
						        ->where('description', $description)
						        ->where('price', $price)
						        ->where('category_id', $category_id)
						        ->where('image', $image)
						        ->first();
    }

    private function removeProduct($product_id){
    	Product::destroy($product_id);
    }
}
