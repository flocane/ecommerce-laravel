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

// HOME

Route::get('/home', 'homeController@index')->name('home');
Route::get('/FAQ', 'homeController@about');
Route::get('/contact', 'homeController@contact');
Route::post('/contact', 'homeController@store');
Route::get('/perfil', 'homeController@perfil');
Route::get('/perfilAdm', 'homeController@perfilAdm')->middleware('admin');
Route::get('/login', 'homeController@login');
Route::get('/carrito', 'homeController@carrito');
Route::get('/registro', 'homeController@registro');
Route::get('/product', 'homeController@product');

// PRODUCTOS
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/create', 'ProductController@store');
Route::get('/products/show','ProductController@show'); 
Route::get('/products/{id}/update','ProductController@edit')->name('products.edit')->middleware('admin');
Route::patch('/products/{id}/update', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}/', 'ProductController@destroy')->name('products.destroy');
Route::post('products/search', 'ProductController@search')->name('products.search');
// USERS 
Route::get('/users/index', 'UsersController@index')->name('users.index');
Route::get('/users/show/{id}', 'UsersController@show')->name('users.show');
Route::get('/users/{id}/update', 'UserController@edit')->name('users.edit');
Route::patch('/users/{id}/update', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy')->name('users.detroy');