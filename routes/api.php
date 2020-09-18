<?php

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
Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('register', [\App\Http\Controllers\UserController::class, 'register']);
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', [\App\Http\Controllers\UserController::class, 'logout']);
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
