<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/dangnhap', 'App\Http\Controllers\CustomerController@login_customer');
Route::get('/dangky', 'App\Http\Controllers\CustomerController@register_customer');
Route::get('/dangxuat', 'App\Http\Controllers\CustomerController@logout_customer');

Route::post('/login-customer-login', 'App\Http\Controllers\CustomerController@login_customer_login');

Route::post('/add-customer', 'App\Http\Controllers\CustomerController@add_customer');


Route::get('/category-book', 'App\Http\Controllers\HomeController@category_book');
Route::get('/details-book/{product_id}', 'App\Http\Controllers\ProductController@details_product');
// Route::get('/details-book', 'App\Http\Controllers\ProductController@details_book');

Route::get('/cart', 'App\Http\Controllers\HomeController@cart');

Route::get('/user-profile', 'App\Http\Controllers\HomeController@user_profile');


//Cart
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'App\Http\Controllers\CartController@delete_to_cart');
Route::post('/update-cart-quantity', 'App\Http\Controllers\CartController@update_cart_quantity');


