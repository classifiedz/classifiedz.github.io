<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
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
        for ($i = 0; $i < 50; $i++) {
            Product::create([
            	'user_id' => $faker->numberBetween(1,25),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
            ]);
        }
    }
}
