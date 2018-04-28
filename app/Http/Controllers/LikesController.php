<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikesController extends Controller
{
    public function addLike($id, $post_id) {
        $result = Like::where(['user_id' => $id, 'post_id' => $post_id])->first();
        if ($result === null) {
            Like::create([
            'user_id' => $id,
            'post_id' => $post_id
        ]);
        }
        return back();
    }

    public function removeLike($id, $post_id) {
        $like = Like::where(['user_id' => $id, 'post_id' => $post_id])->first();
        if ($like !== null) {
            $like->delete();
        }
        return back();
    }
}
