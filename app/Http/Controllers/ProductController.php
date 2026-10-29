<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve active products and their categories
        $products = Product::with('category')
            ->where('is_active', true)
            ->latest()
            ->get();

        // Send products to the products page
        return view('products.index', compact('products'));
    }
}
