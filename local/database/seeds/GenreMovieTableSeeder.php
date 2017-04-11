<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_movie')->delete();
        DB::table('genre_movie')->insert(array('id' => '1','movie_id' => '1','genre_id' => '1','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '2','movie_id' => '1','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '3','movie_id' => '2','genre_id' => '1','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '4','movie_id' => '2','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '5','movie_id' => '3','genre_id' => '1','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '6','movie_id' => '3','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '7','movie_id' => '4','genre_id' => '3','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '8','movie_id' => '4','genre_id' => '1','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '9','movie_id' => '4','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '10','movie_id' => '5','genre_id' => '1','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '11','movie_id' => '5','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '12','movie_id' => '6','genre_id' => '4','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '13','movie_id' => '6','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '14','movie_id' => '6','genre_id' => '5','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '15','movie_id' => '7','genre_id' => '1','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '16','movie_id' => '7','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '17','movie_id' => '8','genre_id' => '6','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '18','movie_id' => '8','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '19','movie_id' => '8','genre_id' => '7','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '20','movie_id' => '9','genre_id' => '8','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '21','movie_id' => '10','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '22','movie_id' => '11','genre_id' => '6','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '23','movie_id' => '11','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '24','movie_id' => '11','genre_id' => '7','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '25','movie_id' => '12','genre_id' => '3','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '26','movie_id' => '12','genre_id' => '6','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '27','movie_id' => '12','genre_id' => '7','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '28','movie_id' => '13','genre_id' => '9','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '29','movie_id' => '13','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '30','movie_id' => '14','genre_id' => '3','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '31','movie_id' => '14','genre_id' => '6','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '32','movie_id' => '14','genre_id' => '10','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '33','movie_id' => '15','genre_id' => '6','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '34','movie_id' => '15','genre_id' => '2','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));
        DB::table('genre_movie')->insert(array('id' => '35','movie_id' => '15','genre_id' => '7','created_at' => NULL,'updated_at' => NULL,'system_data' => '1'));


    }
}
