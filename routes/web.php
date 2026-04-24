<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// auth route

// login route
Route::prefix('auth')->middleware('guest')->group(function () {

	Route::get('/login', function () {
		return view('auth.login.index');
	})->name('login');

	Route::post('/login', [AuthController::class, 'authenticate']);

	Route::get('/register', function () {
		return view('auth.register.index');
	})->name('register');

	Route::post('/register', [AuthController::class, 'store'])->name('register');
});


// views route
Route::middleware(['auth'])->group(function () {

	Route::get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/', function () {
	return view('index');
})->name('index');
