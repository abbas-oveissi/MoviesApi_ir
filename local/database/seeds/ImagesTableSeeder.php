<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        $images = array(
            array('id' => '1','mime' => 'image/jpg','name' => 'tt0111161_screenshot1.jpg','movie_id' => '1','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '2','mime' => 'image/jpg','name' => 'tt0111161_screenshot2.jpg','movie_id' => '1','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '3','mime' => 'image/jpg','name' => 'tt0111161_screenshot3.jpg','movie_id' => '1','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '4','mime' => 'image/jpg','name' => 'tt0068646_screenshot1.jpg','movie_id' => '2','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '5','mime' => 'image/jpg','name' => 'tt0068646_screenshot2.jpg','movie_id' => '2','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '6','mime' => 'image/jpg','name' => 'tt0068646_screenshot3.jpg','movie_id' => '2','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '7','mime' => 'image/jpg','name' => 'tt0071562_screenshot1.jpg','movie_id' => '3','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '8','mime' => 'image/jpg','name' => 'tt0071562_screenshot2.jpg','movie_id' => '3','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '9','mime' => 'image/jpg','name' => 'tt0071562_screenshot3.jpg','movie_id' => '3','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '10','mime' => 'image/jpg','name' => 'tt0468569_screenshot1.jpg','movie_id' => '4','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '11','mime' => 'image/jpg','name' => 'tt0468569_screenshot2.jpg','movie_id' => '4','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '12','mime' => 'image/jpg','name' => 'tt0468569_screenshot3.jpg','movie_id' => '4','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '13','mime' => 'image/jpg','name' => 'tt0050083_screenshot1.jpg','movie_id' => '5','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '14','mime' => 'image/jpg','name' => 'tt0050083_screenshot2.jpg','movie_id' => '5','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '15','mime' => 'image/jpg','name' => 'tt0050083_screenshot3.jpg','movie_id' => '5','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '16','mime' => 'image/jpg','name' => 'tt0108052_screenshot1.jpg','movie_id' => '6','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '17','mime' => 'image/jpg','name' => 'tt0108052_screenshot2.jpg','movie_id' => '6','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '18','mime' => 'image/jpg','name' => 'tt0108052_screenshot3.jpg','movie_id' => '6','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '19','mime' => 'image/jpg','name' => 'tt0110912_screenshot1.jpg','movie_id' => '7','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '20','mime' => 'image/jpg','name' => 'tt0110912_screenshot2.jpg','movie_id' => '7','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '21','mime' => 'image/jpg','name' => 'tt0110912_screenshot3.jpg','movie_id' => '7','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '22','mime' => 'image/jpg','name' => 'tt0167260_screenshot1.jpg','movie_id' => '8','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '23','mime' => 'image/jpg','name' => 'tt0167260_screenshot2.jpg','movie_id' => '8','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '24','mime' => 'image/jpg','name' => 'tt0167260_screenshot3.jpg','movie_id' => '8','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '25','mime' => 'image/jpg','name' => 'tt0060196_screenshot1.jpg','movie_id' => '9','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '26','mime' => 'image/jpg','name' => 'tt0060196_screenshot2.jpg','movie_id' => '9','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '27','mime' => 'image/jpg','name' => 'tt0060196_screenshot3.jpg','movie_id' => '9','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '28','mime' => 'image/jpg','name' => 'tt0137523_screenshot1.jpg','movie_id' => '10','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '29','mime' => 'image/jpg','name' => 'tt0137523_screenshot2.jpg','movie_id' => '10','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '30','mime' => 'image/jpg','name' => 'tt0137523_screenshot3.jpg','movie_id' => '10','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '31','mime' => 'image/jpg','name' => 'tt0120737_screenshot1.jpg','movie_id' => '11','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '32','mime' => 'image/jpg','name' => 'tt0120737_screenshot2.jpg','movie_id' => '11','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '33','mime' => 'image/jpg','name' => 'tt0120737_screenshot3.jpg','movie_id' => '11','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '34','mime' => 'image/jpg','name' => 'tt0080684_screenshot1.jpg','movie_id' => '12','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '35','mime' => 'image/jpg','name' => 'tt0080684_screenshot2.jpg','movie_id' => '12','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '36','mime' => 'image/jpg','name' => 'tt0080684_screenshot3.jpg','movie_id' => '12','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '37','mime' => 'image/jpg','name' => 'tt0109830_screenshot1.jpg','movie_id' => '13','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '38','mime' => 'image/jpg','name' => 'tt0109830_screenshot2.jpg','movie_id' => '13','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '39','mime' => 'image/jpg','name' => 'tt0109830_screenshot3.jpg','movie_id' => '13','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '40','mime' => 'image/jpg','name' => 'tt1375666_screenshot1.jpg','movie_id' => '14','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '41','mime' => 'image/jpg','name' => 'tt1375666_screenshot2.jpg','movie_id' => '14','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '42','mime' => 'image/jpg','name' => 'tt1375666_screenshot3.jpg','movie_id' => '14','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '43','mime' => 'image/jpg','name' => 'tt0167261_screenshot1.jpg','movie_id' => '15','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '44','mime' => 'image/jpg','name' => 'tt0167261_screenshot2.jpg','movie_id' => '15','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1'),
            array('id' => '45','mime' => 'image/jpg','name' => 'tt0167261_screenshot3.jpg','movie_id' => '15','created_at' => '2016-12-15 13:09:51','updated_at' => '2016-12-15 13:09:51','system_data' => '1')
        );

        foreach($images as $image){
            \Entities\Image::create($image);
        }
    }
}
