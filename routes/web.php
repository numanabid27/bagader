<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', productsController::class);
    Route::resource('categories', CategoryController::class);
});

require __DIR__ . '/auth.php';


