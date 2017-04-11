<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use GuzzleHttp\Tests\Psr7\Str;
use Illuminate\Http\Request;
use Entities;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;
use Ixudra\Curl\Facades\Curl;
use Services\MoviesService;
use \stdClass;
class MovieController extends Controller
{

    protected $moviesService;


    public function __construct(MoviesService $moviesService)
    {
        $this->moviesService = $moviesService;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->input('page');

        if(is_null($page)||$page<1)
        {
            $page=1;
        }

        $terms = $request->input('q');
        return response()->json($this->moviesService->getMovies($page,$terms));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "form.blade.php";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBase64(Request $request)
    {
        $data = (object) $request->json()->all();


        $errText="";
        if(!isset($data->title) AND empty($data->title))
        {
            $errText.="title is required;";
        }

        if(!isset($data->imdb_id) AND empty($data->imdb_id))
        {
            $errText.="imdb_id is required;";
        }


        if(!isset($data->year) AND empty($data->year))
        {
            $errText.="year is required;";
        }
        else if(ctype_digit($data->year)==false)
        {
            $errText.="Invalid year format,only digits;";
        }
        if(!isset($data->country) AND empty($data->country))
        {
            $errText.="country is required;";
        }


        if(strlen($errText)>0)
        {
            return  response(json_encode(array("message"=>"Validation failed.","errors"=>$errText)), 422)
                ->header('Content-Type', 'application/json');
        }

        $mov=new stdClass();

        $mov->title=$data->title;
        $mov->year=$data->year;
        $mov->country=$data->country;
        $mov->imdb_id=$data->imdb_id;

        if(isset($data->director))
            $mov->director=$data->director;
        else
            $mov->director="";

        if(isset($data->poster))
            $mov->poster=$data->poster;
        else
            $mov->poster="";


        if(isset($data->imdb_rating))
            $mov->imdb_rating=$data->imdb_rating;
        else
            $mov->imdb_rating="0";


        if(isset($data->imdb_votes))
            $mov->imdb_votes=$data->imdb_votes;
        else
            $mov->imdb_votes="0";


        return response()->json($this->moviesService->createBase64Movie($mov));

    }

    public function storeMulti(Request $request)
    {

        $errText="";

        if(empty($request->input('title')))
        {
            $errText.="title is required;";
        }

        if(empty($request->input('imdb_id')))
        {
            $errText.="imdb_id is required;";
        }


        if(empty($request->input('year')))
        {
            $errText.="year is required;";
        }
        else if(ctype_digit($request->input('year'))==false)
        {
            $errText.="Invalid year format,only digits;";
        }
        if(empty($request->input('country')))
        {
            $errText.="country is required;";
        }

        if(strlen($errText)>0)
        {
            return  response(json_encode(array("message"=>"Validation failed.","errors"=>$errText)), 422)
                ->header('Content-Type', 'application/json');
        }

        $mov=new stdClass();

        $mov->title=$request->input('title') ;
        $mov->year=$request->input('year') ;
        $mov->country=$request->input('country');
        $mov->imdb_id=$request->input('imdb_id') ;
        $mov->director=$request->input('director');
        $mov->imdb_rating=$request->input('imdb_rating');
        $mov->imdb_votes=$request->input('imdb_votes');


        return response()->json($this->moviesService->createMultiMovie($mov,$request->file('poster')));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_null($this->moviesService->getMovie($id)))
            return  response(json_encode(array("message"=>"The requested resource does not exist.")), 404)
                ->header('Content-Type', 'application/json');
        return response()->json($this->moviesService->getMovie($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}