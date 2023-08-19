<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::all();

        return view('client.home')->with(['books' => $books, 'categories' => $categories]);
    }
}
