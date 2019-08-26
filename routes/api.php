<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'api.request'], function (){
    //Movies
    Route::group(['prefix' => 'movies', 'middleware' => 'auth.basic'], function (){
        Route::get('/', 'Api\MoviesController@index');
        Route::get('/{id}/show', 'Api\MoviesController@show');
        // TMDB movie API calls
        Route::get('/tmdb', 'Api\MoviesController@searchTMDB');
        Route::get('/{id}/tmdblist', 'Api\MoviesController@listTMDB');



        Route::group(['middleware' => 'admin'], function (){
            Route::post('/', 'Api\MoviesController@store');
            Route::patch('/{id}', 'Api\MoviesController@update');
            Route::delete('/{id}', 'Api\MoviesController@destroy');
            //Directors
            Route::get('/director/{id}/{director_id}', 'Api\MoviesController@director');
            Route::delete('/director/{id}/{director_id}', 'Api\MoviesController@destroydirector');
        });
    });
    //Directors
    Route::group(['prefix' => 'directors', 'middleware' => 'auth.basic'], function (){
        Route::get('/', 'Api\DirectorsController@index');
        Route::get('/{id}/show', 'Api\DirectorsController@show');

        Route::group(['middleware' => 'admin'], function (){
            Route::post('/', 'Api\DirectorsController@store');
            Route::patch('/{id}', 'Api\DirectorsController@update');
            Route::delete('/{id}', 'Api\DirectorsController@destroy');
        });
    });

    //Users
    Route::group(['prefix' => 'users', 'middleware' => 'auth.basic'], function (){
        Route::group(['middleware' => 'admin'], function (){
            Route::get('/list/', 'Api\UsersController@index');
            Route::get('/show/{id}', 'Api\UsersController@show');
            Route::post('/add/', 'Api\UsersController@store');
            Route::patch('/update/{id}', 'Api\UsersController@update');
            Route::delete('/remove/{id}', 'Api\UsersController@destroy');
        });
    });

});


Route::get('{anythingelse?}', function (){
    return response([
        'status'  => 'error',
        'message' => 'page not found',
    ]);
})->where('anythingelse', '.*');
