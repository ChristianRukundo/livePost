<?php

use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'recipes'
], function () {
    Route::get('/', [RecipesController::class, 'index'])->name('index');

    Route::get('/{recipe}', [RecipesController::class, 'show'])->name('show')
        ->where('recipe', '[0-9]+');

    Route::post('/', [RecipesController::class, 'store'])->name('store');

    Route::patch('/{recipe}', [RecipesController::class, 'update'])->name('update');

    Route::delete('/{recipe}', [RecipesController::class, 'destroy'])->name('destroy');
});
