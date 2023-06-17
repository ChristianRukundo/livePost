<?php

use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'recommendations'
], function () {
    Route::get('/', [RecommendationController::class, 'index'])->name('index');

    Route::get('/{recommendation}', [RecommendationController::class, 'show'])->name('show')
        ->where('recommendation', '[0-9]+');

    Route::post('/', [RecommendationController::class, 'store'])->name('store');

    Route::patch('/{recommendation}', [RecommendationController::class, 'update'])->name('update');

    Route::delete('/{recommendation}', [RecommendationController::class, 'destroy'])->name('destroy');
});
