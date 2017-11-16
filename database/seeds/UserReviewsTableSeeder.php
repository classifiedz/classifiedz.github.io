<?php

use Illuminate\Database\Seeder;
use App\UserReview;

class UserReviewsTableSeeder extends Seeder
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
            UserReview::create([
            	'reviewee_id' => $faker->numberBetween(1,25),
                'reviewer_id' => $faker->numberBetween(1,25),
                'comment' => $faker->sentence,
                'liked' => $faker->boolean,
            ]);
        }
    }
}
