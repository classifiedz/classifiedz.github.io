<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductCategoriesTier2TableSeeder::class);
        $this->call(ProductCategoriesTier3TableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductCommentsTableSeeder::class);
        $this->call(UserReviewsTableSeeder::class);
        $this->call(WishlistTableSeeder::class);
    }
}
