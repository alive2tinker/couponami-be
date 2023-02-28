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


Route::post('register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::get('checkUser', [\App\Http\Controllers\Api\AuthController::class, 'checkUser']);
Route::post('reset-password', [\App\Http\Controllers\Api\AuthController::class, 'resetPass']);
Route::post('favoriteCoupon/{user}/{coupon}', [\App\Http\Controllers\FavoriteController::class, 'registerFavorite']);
Route::delete('unfavoriteCoupon/{user}/{coupon}', [\App\Http\Controllers\FavoriteController::class, 'deleteFavorite']);
Route::get('settings', \App\Http\Controllers\ListSettingsController::class);
Route::post('registerToken', [\App\Http\Controllers\Api\AuthController::class, 'registerToken']);
Route::localized(function () {
    Orion::resource('categories', \App\Http\Controllers\CategoryController::class);
    Orion::resource('stores', \App\Http\Controllers\StoreController::class);
    Orion::resource('coupons', \App\Http\Controllers\CouponController::class);
    Route::get('user/{user}/favorites', [\App\Http\Controllers\FavoriteController::class, 'list']);
});
