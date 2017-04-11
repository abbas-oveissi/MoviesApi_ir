<?php
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:00 AM
 */

namespace Repositories\Movie;
use Entities\Movie;
use \stdClass;

class MovieRepository implements MovieInterface
{

    public function getMovieById($Id)
    {
        return Movie::with('genre','image')->find($Id);
    }

    public function findMoviesByTerms($terms,$page)
    {
        \Illuminate\Pagination\Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        return Movie::where('title','like',"%".$terms."%")
            ->simplePaginate(10);
    }

    public function getCountFindMoviesByTerms($terms)
    {
        return Movie::where('title','like',"%".$terms."%")
            ->count();
    }


    public function getMoviesByGenreId($cat_id,$page)
    {
        \Illuminate\Pagination\Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $posts = Movie::whereHas('genre', function ($query) use ($cat_id) {
            $query->where('genre_id', '=', $cat_id);
        })->simplePaginate(10);

        return $posts;
//        return $this->movie->select("movies.Name as MovieName","movies.*","categories.*")
//            ->join('categories', 'movies.Genre_ID', '=', 'categories.id')
//            ->where('categories.id','=',$cat_id)
//            ->get();
    }

    public function getCountMoviesByGenreId($cat_id)
    {

        $posts = Movie::whereHas('genre', function ($query) use ($cat_id) {
            $query->where('genre_id', '=', $cat_id);
        })->count();
        return $posts;
    }


    public function getMovies($page,$system_data)
    {
        \Illuminate\Pagination\Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $movies = Movie::with('genre', 'image')->where('system_data', $system_data)->simplePaginate(10);
        return $movies;
    }

    public function getCountMovies($system_data)
    {
        $count = Movie::with('genre', 'image')->where('system_data', $system_data)->count();
        return $count;
    }


    public function create($movie)
    {
        $movie->save();
    }

}