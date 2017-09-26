<?php

use Illuminate\Database\Seeder;
use App\ProductImage;

class ProductImagesTableSeeder extends Seeder
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
            ProductImage::create([
            	'product_id' => $faker->numberBetween(1,50),
                'description' => $faker->sentence,
                'images' => '0xA1B2C3D4',
                'url' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
