<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function manage()
    {
        if (auth()->user()->is_admin) {
            return view('users.manage', ['users' => request()->user()->get()]);
        }
        else {
            return redirect('/')->with(['success' => 'You do not have permission to perform this action.']);
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with(['success' => 'User Deleted!']);
    }
}
