<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/checkout/{id}', [ProductController::class, 'checkout']);


Route::post('/admin/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/admin/products', [ProductController::class, 'store']);
    Route::patch('/admin/products/{id}/status', [ProductController::class, 'updateStatus']);
});