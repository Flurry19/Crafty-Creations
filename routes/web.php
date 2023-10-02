<?php

use App\Models\Listing;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
//    return Listing::find('myfirstlisting');
//    return view('listings');
    return view('index', [
        'listings' => Listing::all()]);
});

Route::get('/listings/{listing}', function($slug){
    //Find a post by its slug and pass it to a view called 'listing'
    return view('listing', [
        'listing' => Listing::find($slug),
    ]);
})->where('slug', '[A-z_\-]+');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
