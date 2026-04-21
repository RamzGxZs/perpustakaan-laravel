<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// auth route

// login route
Route::prefix('auth')->group(function() {
    Route::get('/login', function () {
        return view('auth.login.index');
    })->name('login');

    Route::post('/login', [AuthController::class, 'authenticate']);

    Route::get('/register', function() {
        return view('auth.register.index');
    })->name('register');

    Route::post('/register', [AuthController::class, 'store'])->name('register');
});

// register route
Route::get('/auth/register', function () {
	return view('auth.register.index');
});






// views route
Route::get('/', function () {
	return view('index');
})->name('dashboard');
