<x-header />

<x-layout>
<div class="center">
    <div style="border:2px solid lightgray;padding:15px;border-radius: 10px ">

<h2>
    {{$listing->model}}
</h2>
<p>
    <img class="width="400" height="80""
    src="{{asset('images/no-image.png')}}" alt="" />
    <br>
Brand : {{$listing->brand}}
    <br>
Model : {{$listing->model}}
    <br>
 Produciton Year : {{$listing->production_year}}
    <br>
 Mileage : {{$listing->mileage}} km
    <br>
 Fuel Type : {{$listing->fuel_type}}
    <br>
 Transmission : {{$listing->transmission}}
</p>

<a href="/">Back To Homepage!</a>
    </div>
</div>
</x-layout>