<x-layout>
    <x-header />

<div style="border:2px solid black;padding:15px;border-radius:10px;margin-top:95px;
            display:grid;width:35%;margin-left:32%;margin-bottom:10%;">
<h2 class="text-2xl font-bold uppercase mb-1">
    Sell Your Car
</h2>

<form method="POST" action="/listing" enctype="multipart/form-data">
@csrf
<div  class="mb-6">
    <label for="title" class="inline-block text-lg mb-2"
    >Brand: </label
>
    <select class="p-2 w-full" name="brand" id="brand">
    <option disabled selected hidden>Choose..</option>
        <option>Audi</option>
        <option>Mazda</option>
        <option>BMW</option>
        <option>Mercedes</option>
        <option>Toyota</option>
        <option>Volkswagen</option>
        <option>Seat</option>
   </select>
</div>

<div class="mb-6">
    <label for="title" class="inline-block text-lg mb-2"
        >Car Model: </label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="model"
        placeholder="Type car model"
        value="{{old('model')}}"

    />
    @error('model')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="title" class="inline-block text-lg mb-2"
        >Color: </label
    >
    <select class="p-2 w-full" name="color" id="color">
        <option disabled selected hidden>Choose..</option>
            <option>Red</option>
            <option>White</option>
            <option>Blue</option>
            <option>Black</option>
            <option>Gray</option>
            <option>Silver</option>
            <option>Orange</option>
       </select>
    @error('color')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="title" class="inline-block text-lg mb-2"
        >Production Year: </label
    >
    <input
        type="number"
        class="border border-gray-200 rounded p-2 w-full"
        name="production_year"
        placeholder="eg: 2013"
        value="{{old('production_year')}}"

    />
    @error('production_year')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="mileage" class="inline-block text-lg mb-2"
        >Mileage: </label
    >
    <select name="mileage" id="mileage">
        <option> 0 - 50.000</option>
        <option> 50.000 - 100.000</option>
        <option> 100.000 - 150.000</option>
        <option> 150.000 - 200.000</option>
        <option> 200.000 - 250.000</option>
        <option> 250.000 - 300.000</option>
        <option> 300.000+ </option>
    </select>

    @error('mileage')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="fuel_type" class="inline-block text-lg mb-2"
        >Fuel Type: </label
    >
   <select name="fuel_type" id="fuel_type">
    <option>Petrol</option>
    <option>Diesel</option>
   </select>

    @error('fuel_type')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="transmission" class="inline-block text-lg mb-2"
        >Transmission: </label
    >
    <select name="transmission" id="transmission">
    <option>Manual</option>
    <option>Automatic</option>
    </select>

    @error('transmission')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="type" class="inline-block text-lg mb-2"
        >Type: </label
    >
    <select name="type" id="type">
    <option>Sedan</option>
    <option>Coupe</option>
    <option>Hatchback</option>
    <option>Wagon</option>
    <option>Minivan</option>
    <option>SUV</option>
    <option>Pickup Truck</option>
    </select>

    @error('type')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="image" class="inline-block text-lg mb-2"
        >Cover Image: </label
    >
    <input
        type="file"
        class="border border-gray-200 rounded p-2 w-full"
        accept="image/*"
        name="image"
    />
    @error('image')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="images" class="inline-block text-lg mb-2"
        >Images: </label
    >
    <input
        type="file"
        id="images"
        class="border border-gray-200 rounded p-2 w-full"
        accept="image/*"
        name="imageFile[]" multiple
    />
    @error('imageFile[]')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>


<div class="mb-6">
    <label for="description" class="inline-block text-lg mb-2"
        >Description: </label
    >
    <textarea style="margin-top:10px"
            name="description"
            id="description"
            cols="15"
            rows="7"
            placeholder="-Describe ur car with a few sentences "
        ></textarea>

    @error('description')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<div class="mb-6">
    <label for="price" class="inline-block text-lg mb-2"
        >Price: </label
    >
    <input type="text" name="price" id="price" value="{{ number_format(isset($price) ? $price : 0, 0, '.', ',') }}" onkeyup="formatPrice(this);">

    <script>
        function formatPrice(element) {
            if(element.value != ""){
    element.value = parseInt(element.value.replace(/,/g, '')).toLocaleString();
}else{
    element.value = '';
}
        }
    </script>
    €
    @error('price')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
</div>

<button class="border-solid border-2 border-black rounded p-1" style="margin-top:10px" type="submit"> List for Sale </button>
</form>

</div>

<x-footer />
</x-layout>
