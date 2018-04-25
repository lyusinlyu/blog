<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

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
        $posts = $user->with('posts')->get();
        return view('profile.index', [
            'users' => $users,
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function showUserProfile($id)
    {
        $user = User::find($id);
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $posts = $user->with('posts')->get();
        return view('profile.index', [
            'user' => $user,
            'users' => $users,
            'posts' => $posts
        ]);
    }

    public function updateAuthUserProfile(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'gender' => 'string|nullable|in:male,female',
            'date_of_birth' => 'nullable|date'
        ]);
        $user->update($data);
        return back();
    }
}
