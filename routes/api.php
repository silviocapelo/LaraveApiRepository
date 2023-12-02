<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('orders', [PostController::class, 'index']);
    Route::get('orders/{id}', [PostController::class, 'show']);
    Route::post('orders', [PostController::class, 'store']);
    Route::put('orders/{id}', [PostController::class, 'update']);
    Route::delete('orders/{id}', [PostController::class, 'delete']);
