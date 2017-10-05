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

        /*$names = array('Electronics', 'Home Appliances, Furniture & Décor', 'Tools, Patio & Garden', 'Health, Beauty, & Fragrances', 'Clothing, Shoes & Jewelry', 'Toys & Video Games', 'Sports & Outdoors', 'Baby & Children', 'Cars, Vehicles & Parts', 'Movies, Books & Music', 'Free Stuff','Services', 'Others');*/
        $names = ['Clothing', 'Electronics', 'Home', 'Vehicles', 'Others'];

        $size = count($names);

        for ($i = 0; $i < $size; $i++) {
            ProductCategory::create([
            	'name' => $names[$i],
            ]);
        }
    }
}
