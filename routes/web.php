<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',
    'App\Http\Controllers\ProductController@welcome')
    ->name('home');

Route::get('/product/{product}',
    'App\Http\Controllers\ProductController@detail')
    ->name('product');

Route::get('/addToCart/{product}',
    'App\Http\Controllers\ProductController@addToCart')
    ->name('cart.add');

Route::get('/cartDetail',
    'App\Http\Controllers\CartController@show')
    ->name('cart.show');

Route::get('/cart/{operation}/{product}',
    'App\Http\Controllers\CartController@operation')
    ->name('cart.operation');