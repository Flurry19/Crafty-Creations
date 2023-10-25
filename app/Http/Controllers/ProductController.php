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

    public function create()
    {
        if (auth()->guest()){
            abort(403);
        }
        return view('create');
    }

//    public function store()
//    {
//       $image_path = '';
//       if ($request->hasFile('image')){
//           $image_path = $request->file('image')->store('image', 'public');
//       }
//       Product::create([
//           'title' => $request->title,
//           'price' => $request->title,
//           'excerpt' => $request->title,
//           'body' => $request->title,
//           'extra' => $request->title,
//           'image' => $request->title,
//           'image2' => $request->title,
//           'image3' => $request->title,
//           'image4' => $request->title,
//           'image5' => $request->title,
//           'image6' => $request->title,
//           'image7' => $request->title,
//           'image8' => $request->title,
//           'image9' => $request->title,
//           'image10' => $request->title,
//       ]);
//    }
}
