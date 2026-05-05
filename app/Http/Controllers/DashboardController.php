<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
	{
		return view('dashboard.index', [
			'bookCount' => Book::query()->count(''),
			'recentBooks' => Book::query()->where('created_at', '>=', Carbon::now()->subWeek())->paginate(10)
		]);
	}
}
