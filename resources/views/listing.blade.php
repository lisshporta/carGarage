<x-layout>

<h2>
    {{$listing->name}}
</h2>
<p>
    <img class="width="400" height="80""
    src="{{asset('images/no-image.png')}}" alt="" />
    <br>
 Produciton Year : {{$listing->production_year}}
    <br>
 Mileage : {{$listing->mileage}} km
</p>

<a href="/">Back To Homepage!</a>

</x-layout>