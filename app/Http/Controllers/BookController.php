<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Illuminate\Events\queueable;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get()->sortByDesc('id')->all();


        return view('admin.book.list', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.book.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'category_id' => $request->category,
            'code' => $request->code,
            'other' => $request->other,
            'description' => $request->description
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('public/images');
            $url = Storage::url($path);
            $data['image'] = $url;
        }

        Book::create($data);

        $books = Book::get()->sortByDesc('id')->all();

        return view('admin.book.list', compact('books'));
    }

    public function show($bookId)
    {
        $book = Book::find($bookId);

        return view('client.bookDetail', compact('book'));
    }

}
