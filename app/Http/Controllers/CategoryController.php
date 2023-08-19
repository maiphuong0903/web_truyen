<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    // public function store(Request $request)
    // {
    //     Category::create([
    //         'name' => $request->name
    //     ]);
    //     $categories = Category::all();
    //     return view('admin.category.list', compact('categories'));
    // }
    public function store(Request $request)
{
    $category = Category::create([
        'name' => $request->name
    ]);
    return response()->json($category);
}
}
