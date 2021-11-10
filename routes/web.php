<?php

use Illuminate\Support\Facades\Route;


// Client - Fontend
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;

// Client - Admin
use App\Http\Controllers\Admin\DashBoardController;


Route::redirect('/', 'trang-chu', 301);
Route::namespace('Client')->group(function () {
    Route::get('/trang-chu', [HomeController::class, 'index'])->name('home');
    Route::get('/san-pham', [ProductController::class, 'index'])->name('product.client');
    Route::get('/chi-tiet-san-pham', [ProductController::class, 'detail'])->name('product.detail.client');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::namespace('Admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resources([
        'users'        => '\App\Http\Controllers\Admin\UserController',
        'categories' => '\App\Http\Controllers\Admin\CategoryController',
        'products' => '\App\Http\Controllers\Admin\ProductController',
    ]);


    // Hiển thị Dashboard
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
});
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
