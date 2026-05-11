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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::get('login', [\App\Http\Controllers\AuthController::class, 'notAccess'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('flowers', [\App\Http\Controllers\FlowerController::class, 'store']);
    Route::delete('flowers/{id}', [\App\Http\Controllers\FlowerController::class, 'destroy']);
});

Route::get('flowers/{id}', [\App\Http\Controllers\FlowerController::class, 'show']);
Route::get('flowers', [\App\Http\Controllers\FlowerController::class, 'index']);



Route::middleware('auth:sanctum')->group(function () {
    Route::post('orders', [\App\Http\Controllers\OrderController::class, 'store']);
    Route::patch('orders/{id}', [\App\Http\Controllers\OrderController::class, 'update']);
    Route::get('orders/user/{id}', [\App\Http\Controllers\OrderController::class, 'show_by_user']);
});

Route::get('orders/{id}', [\App\Http\Controllers\OrderController::class, 'show']);
Route::get('orders', [\App\Http\Controllers\OrderController::class, 'index']);