<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class, 'show']);

// Display login form
Route::get('/login', [UserController::class, 'login']);

// Authenticate user
Route::post('/authenticate', [UserController::class, 'authenticate']);

// Log out user
Route::get('/logout', [UserController::class, 'logout']);
