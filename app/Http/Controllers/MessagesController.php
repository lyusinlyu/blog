<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{
    User,
    Message
};

class MessagesController extends Controller
{
    public function openChat($id)
    {
        if (Auth::user()) {
            $users = User::where('id', '!=', Auth::user()->id)->get();
            $ids = [Auth::user()->id, $id];
            $conversation_id = $ids[0] < $ids[1]?$ids[0].$ids[1]:$ids[1].$ids[0];
            $messages = Message::where('conversation_id', $conversation_id)->orderBy('created_at', 'asc')->get();
            return view('chat.chat', [
                'users' => $users,
                'messages' => $messages,
                'to_user_id' => $id
            ]);
        }
        return redirect('/');
    }
    public function sendMessage(Request $request, $id)
    {
        $data = $request->all();
        $ids = [Auth::user()->id, $id];
        $conversation_id = $ids[0] < $ids[1]?$ids[0].$ids[1]:$ids[1].$ids[0];
        Message::create([
            'conversation_id' => $conversation_id,
            'from_user_id' => Auth::user()->id,
            'to_user_id' => $id,
            'content' => $data['content']
        ]);
        return back();
    }
}
