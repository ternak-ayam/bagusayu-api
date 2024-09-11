<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;

Route::group([], function () {
   Route::get('/', function () {
       return redirect()->route('admin.products.index');
   });
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::resource('user', UserController::class)->only('index');

   Route::prefix('products')->as('products.')->group(function () {
     Route::get('/', [ProductController::class, 'index'])->name('index');
     Route::get('create', [ProductController::class, 'create'])->name('create');
     Route::get('{product}/edit', [ProductController::class, 'edit'])->name('edit');
     Route::get('{product}/delete', [ProductController::class, 'destroy'])->name('delete');
     Route::post('/', [ProductController::class, 'store'])->name('store');
     Route::put('{product}', [ProductController::class, 'update'])->name('update');
   });
});
