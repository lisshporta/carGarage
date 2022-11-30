<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    public function index()
    {
        return view('listings' , [
        'listings' => Listing::latest('id')
        ->simplePaginate(9)
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listing', [
            'listing' => $listing
        ]);
    }

    public function create()
    {
        // Show form to create listing
    }

    public function store(Request $request)
    {
        // Store listing data to create listing
    }

    public function edit(Listing $listing)
    {
        // Show form to edit listing
    }

    public function update(Request $request, Listing $listing)
    {
        // Update the listing data
    }

    public function destroy(Listing $listing)
    {
        // Delete Listing
    }

    public function manage()
    {
        // Manage listing
    }
}
