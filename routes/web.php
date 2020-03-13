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
Route::get('email', 'ContactController@index');
Route::get('/email/{id}/reply', 'ContactController@reply');
Route::Resources([
    'email' => 'ContactController',
]);
Route::post('/email/{id}', 'ContactController@response');

Route::view('/dashboard', 'dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    if (Auth::guest()) {
        //is a guest so redirect
        return redirect('/');
       }else return view('dashboard');
});
