<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/farmer_registration', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'sendOtp']);
