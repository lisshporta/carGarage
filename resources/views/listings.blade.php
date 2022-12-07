<x-header/>
<x-layout>

    <x-flash />
    <div style="display:flex;justify-content:space-between">
<x-search />

    @auth
<p style="text-align:center;margin-top:10px;margin-right:45%">
Welcome back <a style="color: black ; text-decoration:none;" href="/profile">{{auth()->user()->name}}</a>
</p>
@endauth

    </div>

@unless(count($listings) == 0)    
<div class="emri">
@foreach($listings as $listing)
<div style="border:2px solid black;padding:15px;border-radius: 10px;margin-bottom:20px ">

<h2>
   <a style="color: black ; text-decoration:none" href="/listings/{{$listing->id}}">{{$listing->brand}} , {{$listing->model}}</a>
</h2>

<p>
    <img class="width="400" height="80"
        src="{{asset('images/no-image.png')}}" style="margin-bottom: 10px" alt="" />
        <br>
   Production Year: {{$listing->production_year}}
    <br>
    Mileage: {{$listing->mileage}} km

</p>

</div>
@endforeach


</div>

@else 
<p>No Listings Found</p>
@endunless
</div>
</div>
<section style="text-align:left;margin-left:20px; margin-bottom:75px">
    {{$listings->links()}}
</section>

<x-footer />

</x-layout>