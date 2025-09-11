<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::latest()->get();
        return view('admin.blog-categories', compact('categories'));
    }

    public function addCategory(Request $request)
    {

        // Validate the request data

        $request->validate([
            'name' => 'required|string|unique:categories,name',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new category
        Category::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard')->with('success', 'Category added successfully.');
    }
}
