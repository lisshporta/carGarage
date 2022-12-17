<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    public function index()
    {
        $listingCount = Listing::count();
        return view('listings', [
        // 'listings' => Listing::orderBy('views', 'desc')
        'listings' => Listing::latest()
        ->filter(request(['search']))
        ->simplePaginate(9)
        ])->with('listingCount', $listingCount);
    }

    public function show(Listing $listing)
    {
        Listing::find($listing->id)->increment('views');
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

        $request->validate([
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,webp|max:2048'
          ]);

if ($request->hasfile('imageFile')) {
    foreach ($request->file('imageFile') as $file) {
        $name = $file->getClientOriginalName();
        $file->move(public_path().'/storage/uploads/', $name);
        $imgData[] = $name;
    }

    $fileModal = new Image();
    $fileModal->name = json_encode($imgData);
    $fileModal->image_path = json_encode($imgData);


    $fileModal->save();
}

            if ($request->hasFile('image')) {
                $formFields['image'] = $request->file('image')->store('images', 'public');
            }

            Listing::create($formFields);

            return redirect('/listings/manage')->with(['success' => 'Car Listed for Sale!']);
        }
    

    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        if($listing->user_id != auth()->id()) {
            abort('403' , 'Unauthorized Action');
        }

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

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        
        $listing->update($formFields);

        return back()->with(['success' => 'Listing Updated!']);
    }

    public function destroy(Listing $listing)
    {
    if ($listing->user_id != auth()->id()) {
        abort('403', 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/listings/manage')->with(['success' => 'Listing Deleted!']);
    }
    public function manage()
    {
        return view('listings.manage' , ['listings' => request()->user()->listings()->get()]);
    }
}
