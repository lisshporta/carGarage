<x-header />
<x-layout>

   <x-flash />


    <table class="center">
        <tbody style="border:2px solid black;padding:5px;border-radius:10px;margin-bottom:7%">
            <tr>
                <td>
                    <h2 class="text-2xl font-bold uppercase text-center mb-5 mt-1">Manage Users</h2>
                </td>
            </tr>
            @unless($users->isEmpty())
            @foreach($users as $user)
            <tr>
                <td>
                    <h1>
                        {{ $user->name }} , {{ $user->email }} , {{ $user->created_at }}
                    </h1>
                </td>
                <td>
                <form method="POST" action="/users/{{$user->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="border border-black rounded p-1" onclick="return confirm('Are you sure?')">Delete
                        <i class="fa fa-trash"></i> </button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endunless
        </tbody>
    </table>

    <x-footer />
</x-layout>