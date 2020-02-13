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
    return view('home');
});

Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@store');
Route::get('darts', 'ProductController@darts');
Route::get('billards', 'ProductController@billards');
Route::get('pinballs', 'ProductController@pinballs');
Route::get('soccer-tables', 'ProductController@soccerTables');


//Route::get('/{name}', 'ProductController@show');


