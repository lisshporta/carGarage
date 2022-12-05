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
            'production_year' => 'required|max:4|min:4',
            'mileage' => 'required',
            'fuel_type' => 'required',
            'transmission' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required|max:7',
        ]);

        // user_id gets the value from the id of the user logged in 
        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with(['success' => 'Car Listed for Sale!']);
    }

    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'production_year' => 'required|max:4|min:4',
            'mileage' => 'required',
            'fuel_type' => 'required',
            'transmission' => 'required',
            'type' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $listing->update($formFields);

        return back()->with(['success' => 'Listing Updated!']);
    }

    public function destroy(Listing $listing)
    {
        // Delete Listing
    }

    public function manage()
    {
        // Show Form to Manage listing
    }
}
