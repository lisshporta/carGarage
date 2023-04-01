<x-header />
<x-layout>
   <x-listing-card :listing="$listing" />
   @if ($similarListings->isNotEmpty())
   <h2 class="mt-8 ml-5 font-bold text-3xl">Similar Vehicles</h2>

     @foreach($similarListings as $similarListing)
     <div class="mb-5" style="display: inline-block; width: 33%;">
       <x-listing-card :listing="$similarListing" />
     </div>
     @endforeach
     @endif



<x-footer />
</x-layout>
