<x-header />
<x-layout>

    <table>
        <tbody>
            @unless($listings->isEmpty())
            @foreach($listings as $listing)
            <tr>
                <td>
                    <a href="/listings/{{$listing->id}}">
                        {{$listing->brand}}
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
                    <button> Delete</button>
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