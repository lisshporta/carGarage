<x-header />
<x-layout>
   <x-listing-card :listing="$listing" />
   @if($similarListings->count() > 0)
   <h2 class="mt-8 ml-5 font-bold text-3xl">Similar Vehicles</h2>

     @foreach($similarListings as $similarListing)
     <div class="mb-5" style="display: inline-block; width: 33%;">
       <x-listing-card :listing="$similarListing" />
     </div>
     @endforeach
    @else
   <h2 class="mt-8 ml-5 font-bold text-3xl">No similar vehicles found.</h2>
    @endif


     @if($sellerListings->isEmpty())
     <h2 class="mb-20 ml-5 font-bold text-3xl">No other listings found from {{ $listing->user->name }}</h2>
     @else
     <h2 class="mt-8 ml-5 font-bold text-3xl">Other Listings from {{ $listing->user->name }}</h2>
         @foreach($sellerListings as $sellerListing)
          <div class="mb-5" style="display: inline-block; width: 33%;">
            <x-listing-card :listing="$sellerListing" />
         </div>
         @endforeach
        @endif


<x-footer />
</x-layout>
