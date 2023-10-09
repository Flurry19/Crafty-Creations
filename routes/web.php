<?php

use App\Models\Listing;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
//    return Listing::find('myfirstlisting');
//    return view('listings');
    return view('index', [
        'products' => \App\Models\Product::all()]);
});

Route::get('/winkels', function () {
//    return Listing::find('myfirstlisting');
//    return view('listings');
    return view('shoppage', [
        'products' => \App\Models\Shop::all()]);
});

Route::get('/products/{product:slug}', function(\App\Models\Product $product){
    //Find a post by its slug and pass it to a view called 'listing'
    return view('product', [
        'product' => $product,
    ]);
});
//    ->where('slug', '[A-z_\-]+');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/categories/{category}', function(\App\Models\Category $category){
    return view('index', [
        'products' => $category->product
    ]);
});

Route::get('/shops/{shop}', function(\App\Models\Shop $shop){
    return view('index', [
        'products' => $shop->product
    ]);
});


