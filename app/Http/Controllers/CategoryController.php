<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::latest()->get()
        ]);
    }

    public function show(Category $category) {
        return view('posts', [
            'title' => "All posts in category $category->name",
            'posts' => $category->posts->load('author', 'category')
        ]);
    }
}
