<x-header/>
<x-layout>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>


@if (session('success'))
<div style="text-align:center;margin-top:10px" x-data="{show: true}" x-init="setTimeout(() => show = false, 2500)" x-show="show">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
</div>
@endif
@auth

<div style="text-align:center;margin-top:10px">
Welcome back <a style="color: black ; text-decoration:none" href="/profile">{{auth()->user()->name}}</a>
</div>
@endauth


@unless(count($listings) == 0)    
<div class="emri">
@foreach($listings as $listing)
<div style="border:2px solid lightgray;padding:15px;border-radius: 10px;margin-bottom:20px ">

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
<div>


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