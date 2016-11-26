<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');	
// });

//Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/category', 'CategoryController@index');


Route::post('/category/add', 'CategoryController@store');

// TEST
Route::post('/category/add', 'CategoryController@store');
Route::post('/category/delete/{category_id?}', 'CategoryController@delete');
Route::post('/category/update/{category_id?}', 'CategoryController@update');


