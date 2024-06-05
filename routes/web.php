<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addProduct', [ShowController::class, 'show']);
Route::post('/products', [ProductController::class, 'addProduct'])->name('products.store');