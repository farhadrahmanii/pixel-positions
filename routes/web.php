<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\TagController;

Route::get('/', [JobController::class, 'index']);

// search and Tag Routes
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

// Job Routes
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs/create', [JobController::class, 'store'])->middleware('auth');

// Registeration and Login Routes for guests
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
