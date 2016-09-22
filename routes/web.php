<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'EventController@index');

Route::resource('/event', 'EventController');
Route::get('/event?id={id}', 'EventController@show');


Route::get('/profil', 'ProfilController@index');
