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
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'production_year' => 'required',
            'mileage' => 'required',
            'fuel_type' => 'required',
            'transmission' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Listing::create($formFields);

        return redirect('/')->with(['success' => 'Car Listed for Sale!']);
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
