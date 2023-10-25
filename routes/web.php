<?php

use App\Models\Listing;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/products/{product:slug}', [\App\Http\Controllers\ProductController::class, 'show']);

Route::get('/shops', [\App\Http\Controllers\ShopController::class, 'index']);
Route::get('/shops/{shop:slug}', [\App\Http\Controllers\ShopController::class, 'show']);

Route::get('/categories/{category:slug}', [\App\Http\Controllers\CategoryController::class, 'show']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('guest');

Route::get('/logout', [\App\Http\Controllers\SessionController::class, 'logout']);

Route::get('/admin/products/create', [\App\Http\Controllers\ProductController::class, 'create'])->middleware('admin');

Auth::routes();









