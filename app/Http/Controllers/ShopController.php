<?php

namespace App\Http\Controllers;

use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        return view('shoppage', [
            'shops' => \App\Models\Shop::all()
        ]);
    }

    public function show(Shop $shop)
    {
        return view('index', [
            'products' => $shop->product
        ]);
    }
}
