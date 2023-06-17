<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'news'
], function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');

    Route::get('/{news}', [NewsController::class, 'show'])->name('show')
        ->where('news', '[0-9]+');

    Route::post('/', [NewsController::class, 'store'])->name('store');

    Route::patch('/{news}', [NewsController::class, 'update'])->name('update');

    Route::delete('/{news}', [NewsController::class, 'destroy'])->name('destroy');
});
