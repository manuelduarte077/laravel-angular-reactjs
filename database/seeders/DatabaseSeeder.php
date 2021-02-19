<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Movie::factory(10)->create();
        $this->call([
            MoviesTableSeeder::class
        ]);
        
    }
}
 