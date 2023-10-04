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

Route::get('/products/{product}', function($id){
    //Find a post by its slug and pass it to a view called 'listing'
    return view('product', [
        'product' => \App\Models\Product::find($id),
    ]);
})->where('slug', '[A-z_\-]+');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
