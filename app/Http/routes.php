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

/* Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function() {
	return view('layouts.admin');
});

Route::resource('users', 'UsersController');
Route::resource('products', 'ProductsController');
Route::resource('categories', 'CategoriesController');

Route::match(
    ['get', 'post'],
    'products/categories/{id}',
    [
        'uses' => 'productsController@categories',
        'as' => 'products.categories'
    ]
);