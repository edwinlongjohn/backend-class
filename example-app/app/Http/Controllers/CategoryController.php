<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        //$categories = Category::orderBy('name', 'desc')->get();
        //$categories = Category::orderBy('name', 'asc')->get();
        //$categories = Category::latest()->get();
        //$categories = Category::first();
        //$categories = Category::orderBy('name', 'asc')->get();
        //$categories = Category::all();
        $categories = Category::where('name', 'Artwork')->get();
        return view('categories', compact('categories'));
    }
}
