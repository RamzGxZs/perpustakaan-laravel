<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
	public function index()
	{
		$books = Book::query()->get();

		return view('books.index', compact('books'));
	}
}
