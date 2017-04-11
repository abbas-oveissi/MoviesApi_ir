<?php namespace Repositories\Movie;


interface MovieInterface
{
    public function getMovies($page,$system_data);

    public function getMovieById($Id);

    public function findMoviesByTerms($terns,$page);

    public function getMoviesByGenreId($cat_id,$page);

    public function create($movie);

    public function getCountFindMoviesByTerms($terms);

    public function getCountMovies($system_data);

    public function getCountMoviesByGenreId($cat_id);
}