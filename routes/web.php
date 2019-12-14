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

Auth::routes();
// HOME

Route::get('/home', 'homeController@index')->name('home');
Route::get('/FAQ', 'homeController@about');
Route::get('/contact', 'homeController@contact');
Route::post('/contact', 'homeController@store');
Route::get('/perfil', 'homeController@perfil');
Route::get('/perfilAdm', 'homeController@perfilAdm')->middleware('admin');
//Route::get('/login', 'homeController@login');
// Route::get('/registro', 'homeController@register');

// PRODUCTOS

Route::get('/product', 'ProductController@index')->name('products');
Route::get('product-detail/{id}', 'ProductController@detail');



//CARRITO
Route::get('/cart', 'CartController@cart');
Route::get('/add-to-cart/{id}', 'CartController@addToCart');
Route::get('/deleteCart/{id}', 'CartController@deleteCart');
Route::get('/checkout', 'CartController@checkout');
// USERS 
Route::get('/users/index', 'UsersController@index')->name('users.index');
Route::get('/users/show/{id}', 'UsersController@show')->name('users.show');
Route::get('/users/{id}/update', 'UserController@edit')->name('users.edit');
Route::patch('/users/{id}/update', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy')->name('users.detroy');






