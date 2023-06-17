<?php

use App\Http\Controllers\IngredientsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'ingredients'
], function () {
    Route::get('/', [IngredientsController::class, 'index'])->name('index');

    Route::get('/{ingredient}', [IngredientsController::class, 'show'])->name('show')
        ->where('ingredient', '[0-9]+');

    Route::post('/', [IngredientsController::class, 'store'])->name('store');

    Route::patch('/{ingredient}', [IngredientsController::class, 'update'])->name('update');

    Route::delete('/{ingredient}', [IngredientsController::class, 'destroy'])->name('destroy');
});
