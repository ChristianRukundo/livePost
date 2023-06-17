<?php

use App\Http\Controllers\ApplicationListController;
use App\Http\Controllers\CoachesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::prefix('users')->group(function () {
    require __DIR__ . '/User.php';
});
Route::prefix('videos')->group(function () {
    require __DIR__ . '/Videos.php';
});


Route::post('restaurants', [RestaurantController::class, 'store']);
Route::post('application-list', [ApplicationListController::class, 'store']);
Route::get('application-list-index', [ApplicationListController::class, 'index']);
Route::post('coaches', [CoachesController::class, 'store']);
Route::post('customers', [CustomersController::class, 'store']);
Route::get('coaches', [CoachesController::class, 'index']);


Route::prefix('categories')->group(function () {
    require __DIR__ . '/Categories.php';
});

Route::prefix('recommendations')->group(function () {
    require __DIR__ . '/Recommendations.php';
});

Route::prefix('readyMeals')->group(function () {
    require __DIR__ . '/ReadyMeals.php';
});


Route::prefix('recipes')->group(function () {
    require __DIR__ . '/Recipes.php';
});


Route::prefix('ingredients')->group(function () {
    require __DIR__ . '/Ingredients.php';
});


Route::prefix('products')->group(function () {
    require __DIR__ . '/Product.php';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
