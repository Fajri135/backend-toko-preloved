<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Tambahkan import ini

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// Ubah yang tadinya memanggil index, sekarang panggil fungsi home
Route::get('/', [ProductController::class, 'home'])->name('home');


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('admin.login');
})->name('login');


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
->name('admin.')
->group(function () {

    /*
    |--------------------------------------------------------------------------
    | HOME ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/home', function () {
        return view('admin.home.homeadmin');
    })->name('home');


    /*
    |--------------------------------------------------------------------------
    | PRODUCT LIST
    |--------------------------------------------------------------------------
    */

    Route::get('/product', function () {
        return view('admin.product.product');
    })->name('product');


    /*
    |--------------------------------------------------------------------------
    | CREATE PRODUCT
    |--------------------------------------------------------------------------
    */

    Route::get('/product/create', function () {
        return view('admin.product.createproduct');
    })->name('product.create');

});


/*
|--------------------------------------------------------------------------
| FALLBACK ROUTE
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    abort(404);
});