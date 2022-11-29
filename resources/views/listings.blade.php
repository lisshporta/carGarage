<x-header/>
<x-layout>

@unless(count($listings) == 0)    
<div class="emri">
@foreach($listings as $listing)
<div style="border:2px solid lightgray;padding:15px;border-radius: 10px ">

<h2>
   <a href="/listings/{{$listing->id}}">{{$listing->model}}</a>
</h2>

<p>
    <img class="width="400" height="80"
        src="{{asset('images/no-image.png')}}" alt="" />
        <br>
   Model : {{$listing->brand}}, {{$listing->model}}
    <br>
    Mileage : {{$listing->mileage}} km

</p>
</div>
@endforeach
<div>


@else 
<p>No Listings Found</p>
@endunless


</x-layout>