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

Route::get('/', 'StoreController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio_four_columns', function () {
    return view('portfolio_four_columns');
});

Route::get('/portfolio_single_1', function () {
    return view('portfolio_single_1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'auth', 'role:admin']], function () {
    Route::resource('categories', 'CategoryController');
    Route::resource('subcategories', 'SubcategoryController');
    Route::resource('products', 'ProductController');
    Route::get('configurations', 'ConfigurationController@index');
    Route::put('configurations', 'ConfigurationController@update');
});
