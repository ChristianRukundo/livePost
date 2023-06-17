<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Route::middleware('')
//     ->prefix('')
//     ->name('users.')
//     ->group(function () {
//         Route::get('users', [UserController::class, 'index'])->name('index ')->withoutMiddleware('auth');

//         Route::get('users/{user}', [UserController::class, 'show'])->name('show')->where('user', '[0-9]+');

//         Route::post('users', [UserController::class, 'store'])->name('store');

//         Route::patch('users/{user}', [UserController::class, 'update'])->name('update');

//         Route::delete('users/{user}', [UserController::class, 'destroy'])->name('destroy');
//     });

Route::group([
    // 'middleware' => 'auth',
    'prefix' => '',
    'as' => 'users'
], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::get('/{user}', [UserController::class, 'show'])->name('show')
        ->where('user', '[0-9]+');

    Route::post('/', [UserController::class, 'store'])->name('store');

    Route::patch('/{user}', [UserController::class, 'update'])->name('update');

    Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');

    // Route::apiResource('',UserController::class);
});
