<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->name('dashboard.index');

Route::resource('category',CategoryController::class);

Route::resource('brand',BrandController::class);

Route::prefix('auth')->controller(AuthController::class)->name('auth.')->group(function(){
    Route::get('/login','login')->name('login');
    Route::post('/login/store','store')->name('login.store');
});

