<?php

namespace Services;

use Entities\Movie;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Intervention\Image\Facades\Image;
use Repositories\Image\ImageInterface;
use Repositories\Movie\MovieInterface;
use Repositories\Genre\GenreInterface;

use \stdClass;
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:04 AM
 */
class MoviesService
{
    protected $movieRepo;
    protected $genreRepo;

    public function __construct(MovieInterface $movieRepo,GenreInterface $genreRepo,ImageInterface $image)
    {
        $this->movieRepo = $movieRepo;
        $this->genreRepo = $genreRepo;
        $this->image = $image;
    }


    public function createBase64Movie($movie)
    {
        DB::beginTransaction();


        $base64_str = substr($movie->poster, strpos($movie->poster, ",") + 1);
        $image = base64_decode($base64_str);
        $f = finfo_open();
        $mime_type = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);
        $file_extension = substr($mime_type, strpos($mime_type, "/") + 1);
        $png_url = "user-" . uniqid(rand(), true) . time() . "-poster." . $file_extension;
        $path = base_path() . "/../images/" . $png_url;
        try {
            Image::make($image)->save($path);

        } catch (Exception $ex)
        {
            $png_url="";
        }


        $movieDB=new Movie();
        try {


            $movieDB->title=$movie->title;
            $movieDB->year=$movie->year;
            $movieDB->country=$movie->country;
            $movieDB->imdb_id=$movie->imdb_id;
            $movieDB->director=$movie->director;
            $movieDB->imdb_rating=$movie->imdb_rating;
            $movieDB->imdb_votes=$movie->imdb_votes;
            $movieDB->system_data=0;
            $movieDB->poster=$png_url;


            $this->movieRepo->create($movieDB);

        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        $object = new stdClass();
        $object->id = $movieDB->id;
        $object->title = $movieDB->title;
        $object->poster  = URL::to('/')."/images/".$movieDB->poster;
        $object->year = $movieDB->year;
        $object->director = $movieDB->director;
        $object->country = $movieDB->country;
        $object->imdb_rating = $movieDB->imdb_rating;
        $object->imdb_votes = $movieDB->imdb_votes;
        $object->imdb_id = $movieDB->imdb_id;
        return $object;
    }

    public function createMultiMovie($movie,$file)
    {
        $png_url="";

        if(!is_null($file))
        {
            try {
                $png_url = "user-".uniqid(rand(), true).time()."-poster.".$file->getClientOriginalExtension();
                $file->move(
                    base_path() . '/../images/', $png_url
                );
            } catch (Exception $ex)
            {
                $png_url="";
            }
        }






        $movieDB=new Movie();
        DB::beginTransaction();
        try {


            $movieDB->title=$movie->title;
            $movieDB->year=$movie->year;
            $movieDB->country=$movie->country;
            $movieDB->imdb_id=$movie->imdb_id;
            $movieDB->director=$movie->director;
            $movieDB->imdb_rating=$movie->imdb_rating;
            $movieDB->imdb_votes=$movie->imdb_votes;
            $movieDB->system_data=0;
            $movieDB->poster=$png_url;

            $this->movieRepo->create($movieDB);
        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        $object = new stdClass();
        $object->id = $movieDB->id;
        $object->title = $movieDB->title;
        $object->poster  = URL::to('/')."/images/".$movie->poster;
        $object->year = $movieDB->year;
        $object->director = $movieDB->director;
        $object->country = $movieDB->country;
        $object->imdb_rating = $movieDB->imdb_rating;
        $object->imdb_votes = $movieDB->imdb_votes;
        $object->imdb_id = $movieDB->imdb_id;
        return $object;
    }

    public function getMovies($page ,$terms = null)
    {
        DB::beginTransaction();
        try {

            $count=-1;
            if(is_null($terms))
            {
                $movies = $this->movieRepo->getMovies($page,1);
                $count = $this->movieRepo->getCountMovies(1);

            }
            else
            {
                $movies = $this->movieRepo->findMoviesByTerms($terms,$page);
                $count = $this->movieRepo->getCountFindMoviesByTerms($terms);

            }

            $arr=array();
            $arr["data"]=array();

            foreach ($movies as $movie)
            {
                $object = new stdClass();
                $object->id = $movie->id;
                $object->title = $movie->title;
                $object->poster  = URL::to('/')."/images/".$movie->poster;
                $object->year = $movie->year;
                $object->country = $movie->country;
                $object->imdb_rating = $movie->imdb_rating;
                foreach ($movie->genre as $gen)
                {
                    $object->genres[]= $gen->name;
                }


                foreach ($movie->image as $im)
                {

                    $object->images[] =  URL::to('/')."/images/".$im->name;

                }
                $arr["data"][]=$object;
            }
            $arr["metadata"]=array(
                "current_page"=>$page,
                "per_page"=>10,
                "page_count"=>ceil($count/10),
                "total_count"=>$count);

        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();
        return $arr;
    }

    public function getGenres()
    {
        DB::beginTransaction();
        $arr=array();
        try {

            $genres = $this->genreRepo->getGenres();
            foreach ($genres as $genre)
            {
                $object = new stdClass();
                $object->id = $genre->id;
                $object->name = $genre->name;
                $arr[]=$object;
            }

        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();
        return $arr;
    }


    public function getMoviesByGenreId($catId,$page)
    {
        DB::beginTransaction();
        try {

            $movies = $this->movieRepo->getMoviesByGenreId($catId,$page);
            $count = $this->movieRepo->getCountMoviesByGenreId($catId);
            $arr=array();
            $arr["data"]=array();

            foreach ($movies as $movie)
            {
                $object = new stdClass();
                $object->id = $movie->id;
                $object->title = $movie->title;
                $object->poster  = URL::to('/')."/images/".$movie->poster;
                $object->year = $movie->year;
                $object->country = $movie->country;
                $object->imdb_rating = $movie->imdb_rating;
                foreach ($movie->genre as $gen)
                {
                    $object->genres[]= $gen->name;
                }


                foreach ($movie->image as $im)
                {

                    $object->images[] =  URL::to('/')."/images/".$im->name;

                }
                $arr["data"][]=$object;

            }
            $arr["metadata"]=array(
                "current_page"=>$page,
                "per_page"=>10,
                "page_count"=>ceil($count/10),
                "total_count"=>$count);
        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();
        return $arr;
    }


    public function getMovie($id)
    {
        DB::beginTransaction();
        $object = new stdClass();

        try {
            $movie = $this->movieRepo->getMovieById($id);

            if(is_null($movie))
                return null;
            $object->id = $movie->id;
            $object->title = $movie->title;
            $object->poster  = URL::to('/')."/images/".$movie->poster;
            $object->year = $movie->year;
            $object->rated = $movie->rated;
            $object->released = $movie->released;
            $object->runtime = $movie->runtime;
            $object->director = $movie->director;
            $object->writer = $movie->writer;
            $object->actors = $movie->actors;
            $object->plot = $movie->plot;
            $object->country = $movie->country;
            $object->awards = $movie->awards;
            $object->metascore = $movie->metascore;
            $object->imdb_rating = $movie->imdb_rating;
            $object->imdb_votes = $movie->imdb_votes;
            $object->imdb_id = $movie->imdb_id;
            $object->type = $movie->type;

            foreach ($movie->genre as $gen)
            {
                $object->genres[]= $gen->name;
            }


            foreach ($movie->image as $im)
            {

                $object->images[] =  URL::to('/')."/images/".$im->name;

            }


        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();
        return $object;
    }


}
