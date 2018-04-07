<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAuthUserProfile()
    {
        $auth_user = Auth::user();
        $users = User::where('id', '!=', $auth_user)->get();
        $data = [
            'auth_user' => $auth_user,
            'users' => $users
        ];
        return view('profile.index')->with('data', $data);
    }

    public function showUserProfile(Request $request, $id)
    {
        $auth_user = Auth::user();
        $users = User::where('id', '!=', $auth_user->id)->get();
        $user = User::find($id);
        $data = [
            'auth_user' => $auth_user,
            'users' => $users,
            'user' => $user
        ];
        return view('profile.index')->with('data', $data);
    }
}
