<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use App\User;
use App\Product;

class EditAdTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $updated = false;

        $user = User::where('id', 1)->first();
        $product = $this->createProduct($user->id, 'Test title', 'Test description', 20, 1, 'https://lorempixel.com/640/480/');

        $new_title = 'New title';
        $new_description = 'New Description';
        $new_price = 1250;

        $this->browse(function (Browser $browser) use($user, $product, $new_title, $new_description, $new_price) {
            $browser->loginAs($user)
                    ->visit("/ad/edit/$product->id")
                    ->type('title', $new_title)
                    ->type('description', $new_description)
                    ->type('price', $new_price)
                    ->check('show_chat')
                    ->check('terms')
                    ->press('Update')
                    ->assertPathIs('/store');
        });

        $updated_product = Product::where('id', $product->id)
                                    ->where('title', $new_title)
                                    ->where('description', $new_description)
                                    ->where('price', $new_price)
                                    ->first();

        
        if(isset($updated_product)){
            $updated = true;
        }

        $this->assertTrue($updated);

        if($updated){
            $this->removeProduct($product->id);
        }
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
