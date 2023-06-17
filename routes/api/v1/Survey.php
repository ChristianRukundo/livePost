<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'categories'
], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');

    Route::get('/{category}', [CategoryController::class, 'show'])->name('show')
        ->where('category', '[0-9]+');

    Route::post('/', [CategoryController::class, 'store'])->name('store');

    Route::patch('/{category}', [CategoryController::class, 'update'])->name('update');

    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('destroy');
});
