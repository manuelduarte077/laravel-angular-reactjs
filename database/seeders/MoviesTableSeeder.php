<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

    public function run()
    {
        Movie::truncate();


        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++){
            Movie::create([
                'title' => $faker->sentence(),
                'synopsis' => $faker->sentence(),
                'year' => $faker->randomDigit(),
                'cover' => $faker->sentence(),
            ]);
        }

    }
}
