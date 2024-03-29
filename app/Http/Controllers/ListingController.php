<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Image;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    public function index()
    {
        $listingCount = Listing::count();

        return view('listings', [
        'listings' => Listing::latest()
        ->filter(request(['search']))
        ->paginate(9)
        ])->with('listingCount', $listingCount);
    }

    public function show(Listing $listing)
{
    Listing::find($listing->id)->increment('views');

    $similarListings = Listing::where('brand', $listing->brand)
        ->where('id', '<>', $listing->id)
        ->inRandomOrder()
        ->limit(3)
        ->get();

    $sellerListings = Listing::where('user_id', $listing->user_id)
        ->where('id', '<>', $listing->id)
        ->inRandomOrder()
        ->limit(3)
        ->get();

    return view('listing', [
        'listing' => $listing,
        'similarListings' => $similarListings,
        'sellerListings' => $sellerListings,
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
            'color' => 'required',
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
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,webp|max:10000'
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
            $formFields['image_id'] = $fileModal->id;
        }

            if ($request->hasFile('image')) {
                $formFields['image'] = $request->file('image')->store('images', 'public');
            }

            $listing = Listing::create($formFields);

            return redirect('/listing/' . $listing->id)->with(['success' => 'Car Listed for Sale!']);
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
            'color' => 'required',
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
        return redirect('/manage')->with(['success' => 'Listing Deleted!']);
    }
    public function manage()
    {
        return view('listings.manage' , ['listings' => request()->user()->listings()->get()]);
    }
}
