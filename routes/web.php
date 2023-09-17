<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/listings/{listing}', function($slug){
    //Find a post by its slug and pass it to a view called 'listing'
//    'listing' = Listing::find($slug);
    return view('listing', [
        'listing' => Listing::find($slug)
    ]);
})->where('listing', '[A-z_\-]+');
