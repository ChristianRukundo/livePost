<?php

use App\Http\Controllers\AccountingSystemController;
use App\Http\Controllers\AllergyController;
use App\Http\Controllers\ApplicationListController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\FoodOverviewController;
use App\Http\Controllers\PointSystemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PushNotificationController;
use App\Http\Controllers\ReadyMealsController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\RestaurantProfileSettingController;
use App\Http\Controllers\VideoController;
use App\Models\Allergy;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/video-list', [VideoController::class, 'index']);

Route::get('/video-list', [VideoController::class, 'index'])->name('video-list');
Route::post('/add-video', [VideoController::class, 'store']);
Route::post('/edit-video/{id}', [VideoController::class, 'update'])->name('edit-video');
Route::post('/edit-category/{id}', [CategoryController::class, 'update'])->name('edit-category');
Route::post('/edit-readyMeal/{id}', [ReadyMealsController::class, 'update'])->name('edit-readyMeal');
Route::post('/edit-recipe/{id}', [RecipesController::class, 'update'])->name('edit-recipe');
Route::get('/add-ready-meal', function () {
    return view('add-ready-meal');
});
Route::get('/add-recipe-ingredient', function () {
    return view('add-recipe-ingredient');
});
Route::get('/create-ingredient', function () {
    return view('create-ingredient');
});

Route::get('/add-allergy', [AllergyController::class, 'addAllergy']);
Route::post('/add-allergy', [AllergyController::class, 'store']);

Route::get('/edit-allergies/{allergy}', [AllergyController::class, 'updateGet']);
Route::post('/edit-allergies/{allergy}', [AllergyController::class, 'update']);


Route::delete('/delete-allergy/{allergy}', [AllergyController::class, 'destroy']);


Route::get('/create-recipe', function () {
    return view('create-recipe');
});

Route::get('/add-recommend', function () {
    return view('add-recommend');
});


Route::get('/request-coach', function () {
    return view('request-coach');
});

Route::post('/add-product', [ProductController::class, 'store'])->name('add-product');
// Route::post('add-application-list', [ApplicationListController::class, 'store']);
Route::post('/add-ready-meal', [ReadyMealsController::class, 'store']);
Route::post('/add-recipe', [RecipesController::class, 'store']);
Route::post('/add-category', [CategoryController::class, 'store']);
Route::get('/food-overview', [FoodOverviewController::class, 'index']);
Route::get('/ready-meal', [ReadyMealsController::class, 'index'])->name('ready-meal');
Route::get('/recipe', [RecipesController::class, 'index'])->name('recipe');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/push-notification', [PushNotificationController::class, 'index']);
Route::get('/recommendation', [RecommendationController::class, 'index'])->name('recommendation');
Route::get('/restaurant-profile-setting', [RestaurantProfileSettingController::class, 'index']);
Route::get('/manage-point-system', [PointSystemController::class, 'index']);
Route::post('/manage-point-system', [PointSystemController::class, 'store'])->name('manage-point-system');
Route::delete('/delete-point/{point}', [PointSystemController::class, 'destroy'])->name('delte-point');
Route::get('/applicant-list', [ApplicationListController::class, 'index']);
Route::get('/get-applicant-list', [ApplicationListController::class, 'getApplicants'])->name('get-applicant-list');
Route::get('/accounting-system', [AccountingSystemController::class, 'index']);
Route::get('/allergy-list', [AllergyController::class, 'index'])->name('allergy-list');
Route::get('/customer-list', [CustomersController::class, 'index']);
