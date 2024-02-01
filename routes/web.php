<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\orders_viewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\views_asusController;
use App\Http\Controllers\views_macebookController;
use App\Http\Controllers\views_product_detailsController;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/major", MajorController::class);

Route::resource('/st', StudentController::class);

Route::resource('/customer', CustomerController::class);

Route::resource('/product', ProductController::class);

Route::resource('/views_product_details', views_product_detailsController::class);

Route::resource('/macbook_views', views_macebookController::class);

Route::resource('/asus_views', views_asusController::class);

Route::resource('/orders_views', orders_viewController::class);

