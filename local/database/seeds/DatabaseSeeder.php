<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenreMovieTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
    }
}
