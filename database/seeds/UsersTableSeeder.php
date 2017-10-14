<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Make everyones password identical
        $password = Hash::make('password');

        // Create admin account
        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@classifiedz.com',
            'password' => $password,
        ]);

        // Generate couple mock data
        for ($i = 0; $i < 24; $i++) {
            User::create([
                'name' => $faker->name,
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $password,
				'city'=> $faker->city,
				'phoneNumber' => $faker->phoneNumber
            ]);
        }
    }
}
