<?php

use App\Http\Controllers\AppSettingsController;
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

Route::get('/', function () {
    return view('index');
});
