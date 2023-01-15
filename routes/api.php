<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['as' => 'api.'], function() {
    Orion::resource('categories', \App\Http\Controllers\CategoryController::class);
    Orion::resource('stores', \App\Http\Controllers\StoreController::class);
    Orion::resource('coupons', \App\Http\Controllers\CouponController::class);
    Orion::hasManyResource('users', 'favorites', \App\Http\Controllers\FavoriteController::class);
    Route::post('register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
});
