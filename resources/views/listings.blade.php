<x-header/>
<x-layout>

@unless(count($listings) == 0)    
<div class="emri">
@foreach($listings as $listing)
<div style="border:2px solid lightgray;padding:15px;border-radius: 10px;margin-bottom:20px ">

<h2>
   <a href="/listings/{{$listing->id}}">{{$listing->model}}</a>
</h2>

<p>
    <img class="width="400" height="80"
        src="{{asset('images/no-image.png')}}" style="margin-bottom: 10px" alt="" />
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
</div>
</div>
<section style="text-align:left;margin-left:20px; margin-bottom:10px">
    {{$listings->links()}}
</section>

</x-layout>