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

Route::Resources([
    'prod' => 'ProductsController',
    'cat' => 'CategoriesController'
]);

Route::get('/', 'ContactController@create');
Route::post('/', 'ContactController@store');
Route::get('darts', 'ProductController@darts');
Route::get('billards', 'ProductController@billards');
Route::get('pinballs', 'ProductController@pinballs');
Route::get('soccer-tables', 'ProductController@soccerTables');
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('email', 'ContactController@index');
Route::get('/email/{id}/reply', 'ContactController@reply');
Route::Resources([
    'email' => 'ContactController',
]);
Route::post('/email/{id}', 'ContactController@response');

=======
Route::view('/test', 'test');
>>>>>>> Gestion nav-bar admin
=======
Route::view('/dashboard', 'dashboard');
>>>>>>> redirection en vu du futur dashboard

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
