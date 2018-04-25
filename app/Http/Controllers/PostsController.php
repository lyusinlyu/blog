<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Redirect;

class PostsController extends Controller
{
    public function showPost($id, $post_id)
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $user = User::where('id', $id)->first();
        if($post_id) {
            $post = Post::where('id', $post_id)->with('category', 'comments', 'likes')->first();
            $categories = Category::all();
            $commentsCount = $post->comments->count();
            $likesCount = $post->likes->count();
            return view('posts.showPost', [
                'users' => $users,
                'categories' => $categories,
                'user' => $user,
                'post' => $post,
                'commentsCount' => $commentsCount,
                'likesCount' => $likesCount
            ]);
        }
    }

    public function createPost(Request $request) {
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

    public function editPost(Request $request) {
        $data = $request->all();
        $id = $data['id'];
        $category = Category::where('title',$data['category'])->first();
        $data = $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255'
        ]);
        Post::where('id', $id)->update([
            'user_id' => Auth::user()->id,
            'category_id' => $category->id,
            'title' => $data['title'],
            'content' => $data['content']
        ]);
        return back();
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect('/me');
    }
}
