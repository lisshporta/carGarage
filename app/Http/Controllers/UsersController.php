<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function manage()
    {
        return view('users.manage' , ['users' => request()->user()->get()]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with(['success' => 'User Deleted!']);
    }
}
