<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->name('dashboard.index')->middleware(['auth']);

require __DIR__."/dashboard/category.php";
require __DIR__."/dashboard/brand.php";
require __DIR__."/dashboard/auth.php";