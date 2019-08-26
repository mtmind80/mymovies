<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
//Users
    Route::group(['prefix' => 'users'], function () {

        Route::get('/', 'Api\UsersController@index');
        Route::get('/{id}/show', 'Api\UsersController@show');
        Route::post('/', 'Api\UsersController@store');
        Route::patch('/{id}', 'Api\UsersController@update');
        Route::delete('/{id}', 'Api\UsersController@destroy');

    });
});
