<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::group(['prefix' => 'v1'], function () {
    Route::get('genres/{id}/movies','Api\v1\GenreController@genreMovies');


    Route::resource('movies', 'Api\v1\MovieController');
    Route::resource('genres', 'Api\v1\GenreController');
    Route::post('movies', 'Api\v1\MovieController@storeBase64');
    Route::post('movies/multi', 'Api\v1\MovieController@storeMulti');
    Route::post('register', 'Auth\RegisterController@register');

});
