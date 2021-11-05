<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('client.home.index');
// });

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [ProductController::class, 'index'])->name('product.client');
Route::get('/chi-tiet-san-pham', [ProductController::class, 'detail'])->name('product.detail.client');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
