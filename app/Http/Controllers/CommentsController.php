<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function createComment(Request $request, $post_id)
    {
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

    public function editComment(Request $request, $post_id, $comment_id)
    {
        $data = $request->all();
        $data = $request->validate([
            'comment' => 'required|string|max:255'
        ]);
        Comment::where('id', $comment_id)->update([
            'user_id' => Auth::user()->id,
            'post_id' => $post_id,
            'content' => $data['comment']
        ]);
        return back();
    }

    public function deleteComment($comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->delete();
        return back();
    }
}
