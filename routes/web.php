<?php

use App\Http\Controllers\ChapterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\IndexController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Auth::routes();
Route::get('/trangchu', [HomeController::class, 'trangchu'])->name('trangchu');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/users', [HomeController::class, 'userr'])->name('users');
Route::resource('/danhmuc', DanhmucController::class,);
Route::resource('/truyen', TruyenController::class,);
Route::resource('/chapter', ChapterController::class,);
Route::get('/tim-kiem', [HomeController::class, 'timkiem']);

for ($i = 1; $i <= 100; $i++) {
    if (method_exists(PageController::class, "page$i")) {
        Route::get("/page$i", [PageController::class, "page$i"])->name("page$i");
    }
}





