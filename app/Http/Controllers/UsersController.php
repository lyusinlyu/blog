<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Message;

class UsersController extends Controller
{
  public function showUsers()
 {
     dd(User::all());
 }


 public function showUser(Request $request, $id)
{
    dd(User::where('id', '=', $id)->first());
}


public function showPosts(Request $request, $user_id)
{
   dd(User::with('posts')->where('id', '=', $user_id)->get());
}

public function showPost(Request $request, $user_id, $post_id)
{
  $posts = User::with('posts')->where('id', '=', $user_id)->get();
  foreach ($posts as $post) {
    dd($post->posts->find($post_id));
  }
}

public function showCategories(Request $request, $user_id)
{
   dd(User::with('categories')->where('id', '=', $user_id)->get());
}

public function showCategory(Request $request, $user_id, $category_id)
{
  $categories = User::with('categories')->where('id', '=', $user_id)->get();
  foreach ($categories as $category) {
    dd($category->categories->find($category_id));
  }
}
}
