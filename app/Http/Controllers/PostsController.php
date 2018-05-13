<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Redirect;
use App\Models\{
    User,
    Post,
    Category,
    Like,
    Comment
};


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $posts = Post::where('user_id', Auth::user()->id)->with('category', 'user', 'comments', 'likes')->orderBy('created_at', 'desc')->Paginate(6);
        return view('home.index', [
            'users' => $users,
            'posts' => $posts
        ]);
    }

    public function show($post_id)
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        if($post_id) {
            $post = Post::where('id', $post_id)->with('category', 'comments', 'likes')->first();
            $user = User::where('id', $post->user_id)->first();
            $comments = $post->comments()->with('user')->orderBy('created_at', 'DESC')->paginate(6);
            $categories = Category::all();
            return view('posts.showPost', [
                'users' => $users,
                'categories' => $categories,
                'user' => $user,
                'post' => $post,
                'comments' => $comments
            ]);
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255'
        ]);
        $category = Category::where('title',$data['category'])->first();
        Post::create([
            'user_id' => Auth::user()->id,
            'category_id' => $category->id,
            'title' => $data['title'],
            'content' => $data['content']
        ]);
        return back();
    }

    public function update(Request $request, $post_id)
    {
        $data = $request->all();
        $data = $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255'
        ]);
        $category = Category::where('title', $data['category'])->first();
        Post::where('id', $post_id)->update([
            'user_id' => Auth::user()->id,
            'category_id' => $category->id,
            'title' => $data['title'],
            'content' => $data['content']
        ]);
        return back();
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('/');
    }
}
