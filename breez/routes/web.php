<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserTypeController;




Route::get('/', function () {
    return view('index');
});



Route::middleware('auth')->group(function () {

    Route::get('/dashboard/{id}', [ShopController::class, 'index'])->name('dashboard');

    Route::get('/products/{id?}', [ProductsController::class, 'show'])
                ->name('admin.products');

    Route::get('/product/add/{id}', [ProductsController::class, 'addShow'])
                ->name('admin.add');

    Route::get('/product/edit/{id}', [ProductsController::class, 'edit'])
                ->name('admin.edit');

    Route::post('/product/update/{id}', [ProductsController::class, 'update'])
                ->name('admin.update');

    Route::get('/product/delete/{id}', [ProductsController::class, 'destroy'])
                ->name('admin.delete');

    Route::post('/products/addProduct/{id}', [ProductsController::class, 'store'])
                ->name('admin.addProduct');


});

require __DIR__.'/auth.php';
