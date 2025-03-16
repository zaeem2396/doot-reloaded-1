<?php

use App\Http\Controllers\AppSettingsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OptionController;
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

/* Login/Register routes */
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'registerUser']);
