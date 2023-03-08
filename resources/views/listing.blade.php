<x-header />
<x-layout>

<div class="center">
    <div style="border:2px solid black;padding:15px;border-radius:10px;margin-bottom:7%">

      <p>Views: {{ $listing->views }} <i class='fa fa-eye'></i></p>
   <h2>
    {{ $listing->brand }} , {{ $listing->model }}
   </h2>
   <p>
      <img class="width="800" height="160"
      src="{{ $listing->image ? asset('storage/' .  $listing->image) : asset('/images/no-image.png')}}" style="margin-bottom: 12px" alt="" />
   </p>
   <div class="">
   <p>Brand: {{ $listing->brand }}</p>
   <p>Model: {{ $listing->model }}</p>
   <p>Produciton Year: {{ $listing->production_year }}</p>
   <p>Mileage: {{ $listing->mileage }} km</p>
   <p>Fuel Type: {{ $listing->fuel_type }}</p>
   <p>Transmission: {{ $listing->transmission }}</p>
   <p>Type: {{ $listing->type }}</p>
   <p>Description: {{ $listing->description }}</p>
   <p>Price : {{ $listing->price }} €</p>
   <p>Seller: {{ $listing->user->name }}</p>
      @if(!$listing->user->phone)
         <p>Contact Seller: No Phone Number!</p>
      @else
   <p>Contact Seller: {{ $listing->user->phone }}</p>
   @endif
</div>

<div class="text-right">
      <a style="color: black ; text-decoration:none" href="/"><button> <i class="fa fa-chevron-left"></i> Back To Homepage!</button></a>

</div>

<x-footer />
</x-layout>
