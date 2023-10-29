<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {

        if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == '1') {
            return view('admin.products.index', [
                'products' => Product::paginate(50)
            ]);
        }else if (\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == '2'){
            $user_id = $request->user()->id;
            $products = Product::where('user_id', $user_id)->get();
            return view('admin.products.myproducts', ['products' => $products]);


        }else{
                return redirect('/');
            }
        }

    public function edit(Product $product){
        return view('admin.products.edit', compact('product'));
    }

    public function update(Product $product){
        if (\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == '1' || \Illuminate\Support\Facades\Auth::user()->role == '2') {
        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'image',
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($product->id)],
            'price' => 'required',
            'excerpt' => 'required',
            'url' => 'required',
            'materials' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
//            'published_at' => 'required'
        ]);
        if (isset($attributes['image'])){
            $attributes['image'] = request()->file('image')->store('image');
        }
        $product->update($attributes);
        return back()->with('succes', 'Product aangepast');
            }else {
            return redirect('/');
        }
    }

    public function destroy(Product $product)
    {

        if (\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == '1' || \Illuminate\Support\Facades\Auth::user()->role == '2') {
            $product->delete();

            return back()->with('succes', 'Product verwijderd');
        } else {
            return redirect('/');
        }
    }

    public function statusupdate($id){
        $product = Product::select('status')->where('id', '=', $id)->first();

        if($product->status === 1){
            $status = 0;
        } else {
            $status = 1;
        }

        $values = array('status' => $status);
        Product::where('id', $id)->update($values);

        return redirect('/admin/products');
    }
}
