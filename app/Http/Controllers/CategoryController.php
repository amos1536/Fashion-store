<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Retrieve all categories from the database
        $categories = Category::all();

        // Send the categories to the Blade view
        return view('categories.index', compact('categories'));
    }
}
