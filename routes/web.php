<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/major", MajorController::class);

Route::resource('/st', StudentController::class);

Route::resource('/cus', CustomerController::class);

Route::resource('/product', ProductController::class);
