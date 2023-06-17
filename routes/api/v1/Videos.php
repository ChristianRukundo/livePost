<?php


use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;


Route::group([
    'as' => 'videos',

], function () {

    Route::get('/', [VideoController::class, 'index'])->name('index');

    Route::get('/{id}', [VideoController::class, 'show'])->name('show')
        ->where('video', '[0-9]+');

    Route::post('/', [VideoController::class, 'store'])->name('store');

    Route::patch('/{id}', [VideoController::class, 'update'])->name('update');

    // Route::delete('/{id}', [VideoController::class, 'destroy'])->name('destroy');
    // Example route definition
    Route::delete('/{id}', [VideoController::class, 'destroy'])->name('videos.destroy');
});
