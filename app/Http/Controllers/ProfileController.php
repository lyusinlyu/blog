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
        $user = Auth::user();
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $data = [
            'users' => $users,
            'user' => $user
        ];
        return view('profile.index')->with('data', $data);
    }

    public function showUserProfile(Request $request, $id)
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $user = User::find($id);
        $data = [
            'users' => $users,
            'user' => $user
        ];
        return view('profile.index')->with('data', $data);
    }

    public function updateAuthUserProfile(Request $request)
    {
        $data = $request->all();
        // dd($data);
    }
}
