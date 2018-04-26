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

class CommentsController extends Controller
{
    public function createComment(Request $request, $post_id) {
        $data = $request->all();
        $data = $request->validate([
            'comment' => 'required|string|max:255'
        ]);
        Comment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $post_id,
            'content' => $data['comment']
        ]);
        return back();
    }
}
