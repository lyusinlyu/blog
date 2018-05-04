<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\{
    User,
    Post,
    Category,
    Like,
    Comment
};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $users = User::where('id', '!=', Auth::user()->id)->get();
            $posts = Post::with('category', 'user')->orderBy('created_at', 'desc')->paginate(6);
            return view('home.index', [
                'users' => $users,
                'posts' => $posts
            ]);
        }
    }
}
