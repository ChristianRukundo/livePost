<?php

use App\Http\Controllers\ReadyMealsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'meal'
], function () {
    Route::get('/', [ReadyMealsController::class, 'index'])->name('index');

    Route::get('/{meal}', [ReadyMealsController::class, 'show'])->name('show')
        ->where('readyMeal', '[0-9]+');

    Route::post('/', [ReadyMealsController::class, 'store'])->name('store');

    Route::patch('/{meal}', [ReadyMealsController::class, 'update'])->name('update');

    Route::delete('/{meal}', [ReadyMealsController::class, 'destroy'])->name('destroy');
});
