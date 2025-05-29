<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All Listings
Route::get('/', function () {
    return view('Listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});

// Single Listing
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});