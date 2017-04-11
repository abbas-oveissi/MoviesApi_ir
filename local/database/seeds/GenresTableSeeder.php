<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();

        $genres = array(
            array('id' => '1','name' => 'Crime','created_at' => '2016-12-13 23:04:44','updated_at' => '2016-12-13 23:04:44','system_data' => '1'),
            array('id' => '2','name' => 'Drama','created_at' => '2016-12-13 23:04:44','updated_at' => '2016-12-13 23:04:44','system_data' => '1'),
            array('id' => '3','name' => 'Action','created_at' => '2016-12-13 23:04:45','updated_at' => '2016-12-13 23:04:45','system_data' => '1'),
            array('id' => '4','name' => 'Biography','created_at' => '2016-12-13 23:04:45','updated_at' => '2016-12-13 23:04:45','system_data' => '1'),
            array('id' => '5','name' => 'History','created_at' => '2016-12-13 23:04:45','updated_at' => '2016-12-13 23:04:45','system_data' => '1'),
            array('id' => '6','name' => 'Adventure','created_at' => '2016-12-13 23:04:46','updated_at' => '2016-12-13 23:04:46','system_data' => '1'),
            array('id' => '7','name' => 'Fantasy','created_at' => '2016-12-13 23:04:46','updated_at' => '2016-12-13 23:04:46','system_data' => '1'),
            array('id' => '8','name' => 'Western','created_at' => '2016-12-13 23:04:46','updated_at' => '2016-12-13 23:04:46','system_data' => '1'),
            array('id' => '9','name' => 'Comedy','created_at' => '2016-12-13 23:04:47','updated_at' => '2016-12-13 23:04:47','system_data' => '1'),
            array('id' => '10','name' => 'Sci-Fi','created_at' => '2016-12-13 23:04:48','updated_at' => '2016-12-13 23:04:48','system_data' => '1')
        );


        foreach($genres as $genre){
            \Entities\Genre::create($genre);
        }
    }
}
