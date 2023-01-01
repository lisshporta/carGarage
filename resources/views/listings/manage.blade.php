<x-header />
<x-layout>

   <x-flash />
    
   
    <table class="center">
        <tbody style="border:2px solid black;padding:5px;border-radius:10px;margin-bottom:7%">
            <tr>
                <td>
                    @if(count($listings) == 1)    
                    <h2 class="text-2xl font-bold uppercase text-center mb-5 mt-1">Manage your Listing</h2>
                    @else
                    <h2 class="text-2xl font-bold uppercase text-center mb-5 mt-1">Manage your Listings</h2>
                    @endif                
                </td>
            </tr>
            @unless($listings->isEmpty())
            @foreach($listings as $listing)
            <tr>
                <td>
                    <a style="color: black"  href="/listings/{{$listing->id}}">
                        {{$listing->brand}} , {{$listing->model}}
                    </a>
                </td>
                <td>
                    <a href="/listings/{{$listing->id}}/edit">
                      <button class="border border-black rounded p-1">Edit <i class="fa fa-edit"></i> </button> </a>
                </td>
                <td>
                <form method="POST" action="/listings/{{$listing->id}}">
                    @csrf 
                    @method('DELETE')
                    <button class="border border-black rounded p-1" onclick="return confirm('Are you sure?')">Delete 
                        <i class="fa fa-trash"></i> </button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>
                    <p>No Listings Found , <a href="/listings/create">Create one !</a> </p>
                </td>
            </tr>
            @endunless
        </tbody>
    </table>

    <x-footer />
</x-layout>