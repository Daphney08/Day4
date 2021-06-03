<?php

use Illuminate\Support\Facades\Rout2e;


Route::get('/products', [
    App\Http\Controllers\LoginController::class,
    'products'
]);
Route::get('/category', [
    App\Http\Controllers\LoginController::class,
    'category'
]);
Route::get('/orders', [
    App\Http\Controllers\LoginController::class,
    'orders'
]);
Route::get('/customers ', [
    App\Http\Controllers\LoginController::class,
    'customers'
]);
Route::get('/products/create', [
    App\Http\Controllers\LoginController::class,
    'products_create'
]);
Route::get('/category/create', [
    App\Http\Controllers\LoginController::class,
    'category_create'
]);
Route::get('/orders/create', [
    App\Http\Controllers\LoginController::class,
    'orders_create'
]);
Route::get('/customers/create', [
    App\Http\Controllers\LoginController::class,
    'customers_create'
]);