<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 

// All Listings
Route::get('/', [ListingController ::class, 'index']);

// Create Listing
Route::get('/listings/create', [ListingController ::class, 'create']);

// Single Listing
Route::get('/listings/{listing}', [listingController::class, 'show']);