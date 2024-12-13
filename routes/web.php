<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/produk', [HomeController::class, 'produk'])->name('frontend.produk');

//Auth Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);

//Slider
// Route::get('/slider', [SliderController::class, 'index'])->middleware(['auth']);
Route::group(['prefix' => 'slider', 'controller' => SliderController::class, 'middleware' => ['auth']], function () {
    Route::get('/', 'index')->name('slider.index');
    Route::get('/create', 'create')->name('slider.create');
    // Route::get('m_bb/del', 'm_bb_del')->name('m_bb.del');
});