<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookedController;
use App\Http\Controllers\SearchController;

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

// Route::get('/', function () {
//     return view('layout.main');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('kostcfg');


Route::get('/room', [RoomController::class, 'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/admin', AdminController::class);
Route::resource('/kamar', KamarController::class);
// Route::resource('/customer', CustomerController::class);
Route::resource('/booking', BookedController::class);
Route::resource('/search', SearchController::class);
