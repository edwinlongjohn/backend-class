<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,name',
            'status' => 'required|in:active,inactive',
        ]);

        Category::create([
            'name' => $request->category_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Category created successfully.');
    }

}
