<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.categories', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required|string|max:255',
            'status' => 'required|string'
        ]);

        Category::create([
            'name' => $request->category_name,
            'status' => $request->status
        ]);
        
        return back()->with('success', 'category created successfully');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->category_name,
            'status' => $request->status,
        ]);
        return back()->with('success', 'category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('success', 'category deleted successfully');
    }
}
