
<x-header />

<x-layout>
<div class="center">
    <div style="border:2px solid black;padding:15px;border-radius: 10px ">

<h2>
    {{$listing->brand}} , {{$listing->model}}
</h2>
<p>
    <img class="width="800" height="160"
    src="{{asset('images/no-image.png')}}" style="margin-bottom: 12px" alt="" />
    <br>
Brand: {{$listing->brand}}
    <br>
Model: {{$listing->model}}
    <br>
 Produciton Year: {{$listing->production_year}}
    <br>
 Mileage: {{$listing->mileage}} km
    <br>
 Fuel Type: {{$listing->fuel_type}}
    <br>
 Transmission: {{$listing->transmission}}
    <br>
 Type: {{$listing->type}}
    <br>
 Description: {{$listing->description}}  
 {{-- <textarea> {{$listing->description}}  </textarea> --}}
    <br>
 Price : {{$listing->price}} € 

</p>
<div style="display:flex; justify-content:space-between">
<a style="color:black; text-decoration:none" href="/listings/{{$listing->id}}/edit"><button>Edit Listing</button></a>
<br>
<a style="color: black ; text-decoration:none" href="/"><button>Back To Homepage!</button></a>
</div>
    </div>
</div>
<x-footer />
</x-layout>   
