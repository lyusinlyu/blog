<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    User
};

class PostsController extends Controller
{
    public function showPosts(Request $request, $user_id)
    {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $posts = $user->posts;
            dd($posts);
        }
    }

    public function showPost(Request $request, $user_id, $post_id)
    {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $post = $user->posts()->where('id', $post_id)->first();
            dd($post);
        }
    }
}
