<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like($post_id)
    {
        $result = Like::where('post_id', $post_id)->first();
        if ($result === null) {
            Like::create([
            'user_id' => Auth::user()->id,
            'post_id' => $post_id
        ]);
        }
        return back();
    }

    public function unlike($post_id)
    {
        $like = Like::where('post_id', $post_id)->first();
        if ($like !== null) {
            $like->delete();
        }
        return back();
    }
}
