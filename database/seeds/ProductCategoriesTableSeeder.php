<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();

        $names = ['Clothing', 'Electronics', 'Home', 'Vehicles', 'Others (General)'];

        $size = count($names);

        for ($i = 0; $i < $size; $i++) {
            ProductCategory::create([
            	'name' => $names[$i],
            ]);
        }
    }
}
