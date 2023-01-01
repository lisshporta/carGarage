<x-header/>
<x-layout>

    <x-flash />
    <div style="display:flex;justify-content:space-between">
<x-search /> 
@auth
<p>Welcome back <a style="color: black ; text-decoration:none;" href="/profile">{{auth()->user()->name}}</a> </p>
@endauth
<p style="margin-right:10px">Total number of listings: {{$listingCount}}</p>
    </div>
   

@unless(count($listings) == 0)    
<div class="emri">
@foreach($listings as $listing)
<div style="border:2px solid black;padding:15px;border-radius: 10px;margin-bottom:20px ">

<h2>
   <a class="font-medium text-2xl" style="color: black ; text-decoration:none" href="/listings/{{$listing->id}}">{{$listing->brand}} , {{$listing->model}}</a>
</h2>

<p>
    <img class="width="400" height="80"
        src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.png')}}" style="margin-bottom: 10px" alt="" />
        <br>
  <p class="font-medium text-l"> Production Year: {{$listing->production_year}} </p>

  <p class="font-medium text-l">  Mileage: {{$listing->mileage}} km </p>

</p>

</div>
@endforeach


</div>

@else 
<p style="margin-left:10px">No Listings Found</p>
@endunless
</div>
</div>
<section style="text-align:left;margin-left:20px;margin-bottom:75px;margin-right:20px">
    {{ $listings->appends(['search' => request('search')])->links() }}
</section>

<x-footer />

</x-layout>