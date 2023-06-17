<?php

use App\Http\Controllers\CoachesController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'coach'
], function () {
    Route::get('/', [CoachesController::class, 'index'])->name('index');

    Route::get('/{coach}', [CoachesController::class, 'show'])->name('show')
        ->where('coach', '[0-9]+');

    Route::post('/', [CoachesController::class, 'store'])->name('store');

    Route::patch('/{coach}', [CoachesController::class, 'update'])->name('update');

    Route::delete('/{coach}', [CoachesController::class, 'destroy'])->name('destroy');
});
