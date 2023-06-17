<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'products'
], function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');

    Route::get('/{product}', [ProductController::class, 'show'])->name('show')
        ->where('product', '[0-9]+');

    Route::post('/', [ProductController::class, 'store'])->name('store');

    Route::patch('/{product}', [ProductController::class, 'update'])->name('update');

    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
});
