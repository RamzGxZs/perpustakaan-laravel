<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoriesController extends Controller
{
	public function index(Request $request)
	{

		return view('dashboard.inventory', [
			'books' => Book::query()->paginate(10)
		]);
	}
}
