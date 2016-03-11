<?php

/*
 * Site
 */

Route::get('/', 'ProductsController@index');

Route::get(
	'category/{id}',
	[
		'uses' => 'CategoriesController@listProducts',
		'as' => 'list_products'
	]
);

Route::get(
		'product/{url}',
		[
				'uses' => 'ProductsController@details',
				'as' => 'products_details'
		]
);

/*
 * Admin
 */
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => 'auth'], function() {
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
	        'as' => 'admin.products.categories'
	    ]
	);
});

Route::get('/admin/auth/login', 'Auth\AuthController@getLogin');

Route::post('/admin/auth/login',
	[
		'uses' => 'Auth\AuthController@postLogin',
		'as' => 'auth.login'
	]
);

Route::get(
	'/admin/auth/logout',
	[
		'uses' => 'Auth\AuthController@getLogout',
		'as' => 'auth.logout'
	]
);