<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BrandController;


Route::resource('brand',BrandController::class);

