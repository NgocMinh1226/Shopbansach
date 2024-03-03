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



