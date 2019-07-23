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

Route::get('/', 'ProductController@index');
Route::get('cart', 'ProductController@cart');
Route::get('add-to-cart/{id}', 'ProductController@addToCart');
Route::patch('update-cart', 'ProductController@update');
Route::delete('remove-from-cart', 'ProductController@remove');
Route::post('clearCart', 'ProductController@clearCart');


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'ProductController@index')->name('Product');
