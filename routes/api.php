<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\PaymodeController;
use App\Http\Controllers\api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/customers', CustomerController::class);
Route::apiResource('/paymodes', PaymodeController::class);
Route::apiResource('/products', ProductController::class);