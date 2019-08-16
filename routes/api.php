<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'api.request'], function (){
    Route::group(['prefix' => 'movies', 'middleware' => 'auth.basic'], function (){
        Route::get('/', 'Api\MoviesController@index');
        Route::get('/{id}/show', 'Api\MoviesController@show');
        Route::get('/tmdb', 'Api\MoviesController@searchTMDB');
        Route::get('/{id}/tmdblist', 'Api\MoviesController@listTMDB');



        Route::group(['middleware' => 'admin'], function (){
            Route::post('/', 'Api\MoviesController@store');
            Route::patch('/{id}', 'Api\MoviesController@update');
            Route::delete('/{id}', 'Api\MoviesController@destroy');
        });
    });
});

Route::get('{anythingelse?}', function (){
    return response([
        'status'  => 'error',
        'message' => 'page not found',
    ]);
})->where('anythingelse', '.*');
