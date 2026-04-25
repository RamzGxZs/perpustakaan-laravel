<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

use function Symfony\Component\Clock\now;

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


Route::get('/books', [BookController::class, 'index']);

Route::get('/about', function () {
	return view('about');
})->name('about');

Route::get('/', function () {
	$trendingBooks = Book::query()
		->where('created_at', '>=', Carbon::now()->subWeek())
		->orderBy('book_readed', 'desc')
		->take(10)
		->get();

	return view('index', compact('trendingBooks'));
})->name('index');
