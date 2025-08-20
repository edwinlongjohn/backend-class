<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('categories', compact('categories'));
    }
}
