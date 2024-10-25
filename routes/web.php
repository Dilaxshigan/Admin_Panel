<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\reviewController;
use App\Http\Controllers\productController;

Route::get("/", [reviewController::class, 'review'])->name('review');
Route::get("/add-review", [reviewController::class, 'add_review'])->name('add_review');
Route::post("/store-review", [reviewController::class, 'store_review'])->name('store_review');




Route::get("/product", [productController::class, 'product'])->name('product');
