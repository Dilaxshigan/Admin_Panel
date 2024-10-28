<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\reviewController;
use App\Http\Controllers\productController;

Route::get("/", [reviewController::class, 'review'])->name('review');
Route::get("/add-review", [reviewController::class, 'add_review'])->name('add_review');
Route::post("/store-review", [reviewController::class, 'store_review'])->name('store_review');
Route::get("/delete-review/{id}", [reviewController::class, 'delete_review'])->name('delete_review');
Route::get("/edit-review/{id}", [reviewController::class, 'edit_review'])->name('edit_review');
Route::post("/update-review/{id}", [reviewController::class, 'update_review'])->name('update_review');

Route::get("/product", [productController::class, 'product'])->name('product');
Route::get("/add-product", [productController::class, 'add_product'])->name('add_product');
Route::post("/store-product", [productController::class, 'store_product'])->name('store_product');
Route::get("/delete-product/{id}", [productController::class, 'delete_product'])->name('delete_product');
