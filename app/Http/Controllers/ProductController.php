<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Psy\Util\Str;

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
        if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == '1' || \Illuminate\Support\Facades\Auth::user()->role == '2') {
            return view('admin.products.create');
        }else{
            return redirect('/login');
        }
    }

    public function store()
    {
//        $path = request()->file('image')->store('image');

        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'required|image',
            'slug' => ['required', Rule::unique('products', 'slug')],
            'price' => 'required',
            'excerpt' => 'required',
            'url' => 'required',
            'materials' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
//            'published_at' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['image'] = request()->file('image')->store('image');

        Product::create($attributes);
        return redirect('/');

    }

    public function filter(Request $request) {
        $start_price = $request->input('start_price');
        $end_price = $request->input('end_price');

        $query = Product::query();

        if ($start_price && $end_price) {
            $query->where('price', '>=', $start_price)
                ->where('price', '<=', $end_price);
        }

        $searchQuery = $request->input('search');
        if ($searchQuery) {
            $query->where('title', 'like', "%$searchQuery%");
//                ->orWhere('body', 'like', "%$searchQuery%")
//                ->orWhere('excerpt', 'like', "%$searchQuery%");
        }

    //        $categoryQuery = $request->input('categorysearch');
    //        if ($categoryQuery){
    //            $query->where('category_id', '===', $categoryQuery);
    //            var_dump('category_id', '===', $categoryQuery);
    //        }

        $products = $query->get();

        return view('index', compact('products'));
    }


}
