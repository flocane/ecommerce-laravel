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

//Contacto
Route::get('/contact', 'ContactFormControler@create');
Route::post('/contact', 'ContactFormControler@store');
//Reset Mail

Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');


//Route::post('/contact', 'homeController@store');
Route::get('/perfil', 'homeController@perfil') ->middleware('auth');
Route::get('/perfilAdm', 'homeController@perfilAdm')->middleware('admin');
//Route::get('/login', 'homeController@login');
// Route::get('/registro', 'homeController@register');

// PRODUCTOS

Route::get('/product', 'ProductController@index')->name('products');
Route::get('product-detail/{id}', 'ProductController@detail');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/create', 'ProductController@store');
Route::get('/products/show','ProductController@show');
Route::get('/products/{id}/update','ProductController@edit')->name('products.edit')->middleware('admin');
Route::patch('/products/{id}/update', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}/', 'ProductController@destroy')->name('products.destroy');
Route::post('products/search', 'ProductController@search')->name('products.search');

//CARRITO
Route::get('/cart', 'CartController@cart');
Route::get('/add-to-cart/{id}', 'CartController@addToCart');
Route::get('/deleteCart/{id}', 'CartController@deleteCart');
Route::get('/checkout', 'CartController@checkout');
// USERS|
Route::get('/users/index', 'UsersController@index')->name('users.index');
Route::get('/users/show/{id}', 'UsersController@show')->name('users.show')->middleware('auth');
Route::get('/users/{id}/edit/', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::post('/users/update/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy')->name('users.detroy')->middleware('auth');






