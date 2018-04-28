<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{
    User,
    Post,
    Category,
    Like,
    Comment
};

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAuthUserProfile()
    {
        $user = Auth::user();
        $users = User::where('id', '!=', $user->id)->get();
        $posts = Post::where('user_id', $user->id)->with('category', 'comments', 'likes')->orderBy('created_at', 'desc')->paginate(6);
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
        $posts = Post::where('user_id', $user->id)->with('category','comments', 'likes')->orderBy('created_at', 'desc')->paginate(6);
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

    public function getMyPosts() {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $posts = Post::where('user_id', Auth::user()->id)->with('category', 'user', 'comments', 'likes')->orderBy('created_at', 'desc')->Paginate(6);
        return view('home.index', [
            'users' => $users,
            'posts' => $posts
        ]);
    }
}
