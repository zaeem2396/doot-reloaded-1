<?php

use App\Http\Controllers\AppSettingsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JwtController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* JWT routes */
Route::post('/verifyToken', [JwtController::class, 'verifyToken']);

/* App Setting route */
Route::group(['prefix' => 'app-settings'], function () {
    Route::post('create', [AppSettingsController::class, 'create']);
    Route::get('get', [AppSettingsController::class, 'get']);
});

/* Category route */
Route::group(['prefix' => 'category'], function () {
    Route::post('create', [CategoryController::class, 'create']);
    Route::get('get', [CategoryController::class, 'get']);
});

/* Options route */
Route::group(['prefix' => 'options'], function () {
    Route::post('create', [OptionController::class, 'create']);
    Route::get('get/{catId}/{subCatId}/{serviceId}', [OptionController::class, 'get']);
    Route::get('/', [OptionController::class, 'showOptions']);
});

Route::get('/', [IndexController::class, 'index']);
Route::get('/about-us', [IndexController::class, 'aboutUs']);
Route::get('/service/{name}', [CategoryController::class, 'index']);

/* Get Login/Register routes */
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

/* Post Login/Register routes */
Route::post('/login', [AuthController::class, 'loginUser']);
Route::post('/register', [AuthController::class, 'registerUser']);

/* City routes */
Route::get('/cities/{stateId}', [AuthController::class, 'getCities']);

/* Cart routes */
Route::group(['prefix' => 'cart'], function () {
    Route::post('add', [CartController::class, 'add']);
    Route::get('get', [CartController::class, 'get']);
    Route::post('remove', [CartController::class, 'remove']);
    Route::post('update', [CartController::class, 'update']);
});

/* Navi Mumbai and Thane pages */
Route::get('/home-cleaning-services-in-navi-mumbai', [StaticController::class, 'homeCleaningServiceInNaviMumbai']);
Route::get('/home-cleaning-services-in-thane', [StaticController::class, 'homeCleaningServiceInThane']);

/* Blog */
Route::get('/blog', [StaticController::class, 'blog']);
