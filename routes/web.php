<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;


Route::get('/', [UserController::class, "showRegister"]);
Route::post('/register', [UserController::class, "register"]);
Route::get('/homepage', [HomepageController::class, 'index']);
