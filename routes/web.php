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

Route::get('/user',
    'App\Http\Controllers\UserController@edit')
    ->name('user.edit');

Route::post('/user/save',
    'App\Http\Controllers\UserController@save')
    ->name('user.save');

Route::get('/product/edit/{product}',
    'App\Http\Controllers\ProductController@edit')
    ->name('product.edit');

Route::post('/product/save',
    'App\Http\Controllers\ProductController@save')
    ->name('product.save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');