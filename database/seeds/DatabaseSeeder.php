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
    	// Clear tables
        /*Product::truncate();
        User::truncate();*/

        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
