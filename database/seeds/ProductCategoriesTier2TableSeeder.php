<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoriesTier2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();

        $clothing_id = 1;
        $electronics_id = 2;
        $home_id = 3;
        $vehicles_id = 4;
        $others_id = 5;

        $clothing = 5;
        $electronics = 6;
        $home = 5;
        $vehicles = 4;
        $others = 3;

        $listOfId = array($clothing_id, $electronics_id, $home_id, $vehicles_id, $others_id);
        $itemsOfEachCategory = array($clothing, $electronics, $home, $vehicles, $others);
        
        $parent_category_id = array();
        for ($i=0; $i < count($listOfId) ; $i++) { 
            for ($j=0; $j < $itemsOfEachCategory[$i] ; $j++) { 
                array_push($parent_category_id, $listOfId[$i]);
            }
        }

        $names = array('Bags', 'Jewellery', 'Outfits & Outerwear', 'Shoes', 'Accessories & Others', 'Accessories', 'Computers', 'Consoles & Video Games', 'Phones, Tablets & Smart Watches', 'TVs & Media', 'Others', 'Home Appliances', 'Indoor', 'Outdoor', 'Renovation Materials', 'Others', 'Motorized', 'Unmotorized', 'Vehicle Parts', 'Others', 'Community', 'Real Estates', 'Job & Services');

        $size = count($names);

        for ($i = 0; $i < $size; $i++) {
            ProductCategory::create([
            	'name' => $names[$i],
            	'parent_category_id' => $parent_category_id[$i]
            ]);
        }
    }
}
