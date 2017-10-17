<?php

use Illuminate\Database\Seeder;
use App\Wishlist;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 150; $i++) {
            Wishlist::create([
            	'user_id' => $faker->numberBetween(1,25),
                'product_id' => $i+1,
            ]);
        }
    }
}
