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

	Route::prefix('dashboard')->group(function () {
		Route::get('/', function () {
			return view('dashboard.index');
		})->name('dashboard');

		Route::get('inventory', function () {
			return view('dashboard.inventory');
		})->name('dashboard.inventory');

		Route::get('catalog', function () {
			return view('dashboard.catalog');
		})->name('dashboard.catalog');

		Route::get('user-management', function () {
			return view('dashboard.user-management');
		})->name('dashboard.user-management');
	});

	Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});




Route::prefix('books')->group(function () {
	Route::get('/', [BookController::class, 'index']);
});

Route::prefix('reads')->group(function () {
	Route::get('/', function () {
		return view('reads.index');
	});
});


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
