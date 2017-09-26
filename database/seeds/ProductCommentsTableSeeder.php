<?php

use Illuminate\Database\Seeder;
use App\ProductComment;


class ProductCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();
    	
        // Generate couple mock data
        for ($i = 0; $i < 100; $i++) {
            ProductComment::create([
                'product_id' => $faker->numberBetween(1,50),
                'user_id' => $faker->numberBetween(1,25),
                'comment' => $faker->paragraph,
            ]);
        }
    }
}
