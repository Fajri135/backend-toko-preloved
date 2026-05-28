<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// Public Routes (Bisa diakses Frontend tanpa login)
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/checkout/{id}', [ProductController::class, 'checkout']);

// Auth Route (Untuk Admin Login)
Route::post('/admin/login', [AuthController::class, 'login']);

// Protected Routes (Hanya bisa diakses Admin dengan token valid)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/admin/products', [ProductController::class, 'store']);
    Route::patch('/admin/products/{id}/status', [ProductController::class, 'updateStatus']);
});