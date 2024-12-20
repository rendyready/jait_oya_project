<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DashboardController;

//Home
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('frontend.layanan');

//Auth Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);

//Slider
Route::group(['prefix' => 'slider', 'controller' => SliderController::class, 'middleware' => ['auth']], function () {
    Route::get('/', 'index')->name('slider.index');
    Route::get('/create', 'create')->name('slider.create');
    Route::post('/insert', 'insert')->name('slider.insert');
    Route::get('/show', 'show')->name('slider.show');
    Route::get('/show_detail/{id}', 'show_detail')->name('slider.show_detail');
    Route::post('/edit', 'edit')->name('slider.edit');
    Route::post('/delete/{id}', 'delete')->name('slider.delete');
});

//Slider
Route::group(['prefix' => 'produk', 'controller' => ProdukController::class, 'middleware' => ['auth']], function () {
    Route::get('/', 'index')->name('produk.index');
    Route::post('/insert', 'insert')->name('produk.insert');
    Route::get('/show', 'show')->name('produk.show');
    Route::get('/show_detail/{id}', 'show_detail')->name('produk.show_detail');
    Route::post('/edit', 'edit')->name('produk.edit');
    Route::post('/delete/{id}', 'delete')->name('produk.delete');
});