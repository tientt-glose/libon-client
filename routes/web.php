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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('product', function () {
    return view('product.product-details-affiliate');
});

Route::get('book/{id}', 'BookController@detail')->name('book.detail');

Route::post('/borrow_book', 'CartController@borrowBook')->name('cart.borrow_book');
