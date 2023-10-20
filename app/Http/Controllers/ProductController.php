<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => Product::latest()->filter(request('search'))->get()
            ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
