<x-header />
<x-layout>

    @if (session('success'))
    <div style="text-align:center;margin-top:10px" x-data="{show: true}" x-init="setTimeout(() => show = false, 2500)" x-show="show">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
    @endif
    
    @if(count($listings) == 1)    
    <h2 class="center">Manage your Listing</h2>
    @else
    <h2 class="center">Manage your Listings</h2>
    @endif
    
    <table class="center">
        <tbody style="border:2px solid black;padding:5px;border-radius:10px">
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
                      <button>Edit</button> </a>
                </td>
                <td>
                <form method="POST" action="/listings/{{$listing->id}}">
                    @csrf 
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')"> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>
                    <p>No Listings Found</p>
                </td>
            </tr>
            @endunless
        </tbody>
    </table>

    <x-footer />
</x-layout>