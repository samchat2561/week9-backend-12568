<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Method:POST => http://127.0.0.1:8000/api/register
Route::post('/register', [AuthController::class, 'register'])->name('register');
