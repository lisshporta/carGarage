<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>carGarage</title>
</head>
<body>
    carGarage

    <h1>Homepage</h1>

@unless(count($listings) == 0)    

@foreach($listings as $listing)
<h2>
   <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
</h2>

<p>
   Production Year: {{$listing->production_year}}
    <br>
    Mileage : {{$listing->mileage}}

</p>
@endforeach

@else 
<p>No Listings Found</p>
@endunless

</body>
</html>