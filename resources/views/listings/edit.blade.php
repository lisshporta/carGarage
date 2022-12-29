<x-layout>
    <x-header />

        <x-flash />
    
    <div style="border:2px solid black;padding:15px;border-radius:10px;margin-top:95px;
                display:grid;width:35%;margin-left:32%;margin-bottom:10%">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Edit Listing : 
    </h2>
    
    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div  class="mb-6">
        <label for="title" class="inline-block text-lg mb-2"
        >Brand: </label
    >
       <select class="p-2 w-full" name="brand" id="brand">
        <option>{{$listing->brand}}</option>
        <option>Audi</option>
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
            value="{{$listing->model}}"
    
        />
        @error('model')
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
            value="{{$listing->production_year}}"
    
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
            <option>{{$listing->mileage}}</option>
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
        <option>{{$listing->fuel_type}}</option>
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
        <option>{{$listing->transmission}}</option>
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
        <option>{{$listing->type}}</option>
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
            >Add/Change Cover Image: </label
        >
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="image"

        />
        <img class="width="400" height="80"
        src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.png')}}" alt="" />
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
            >{{$listing->description}}</textarea>
    
        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>
    
    <div class="mb-6">
        <label for="price" class="inline-block text-lg mb-2"
            >Price: </label
        >
        <input
            type="number"
            class="border border-gray-200 rounded p-2"
            name="price"
            value="{{$listing->price}}"
    
        /> €
        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>
    
    <button class="border-solid border-2 border-black rounded p-1" style="margin-top:10px" type="submit"> Update Listing </button>
    </form>
    
    </div>
    
    <x-footer />
    </x-layout>