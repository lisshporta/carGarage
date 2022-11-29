<x-layout>

@unless(count($listings) == 0)    

@foreach($listings as $listing)
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
@endforeach

@else 
<p>No Listings Found</p>
@endunless

</x-layout>
