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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rute baru mengarahkan kategory Controller
Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('is_admin');
//Rute Product
Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('is_admin');
