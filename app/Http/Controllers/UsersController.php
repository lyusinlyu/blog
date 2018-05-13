<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function show(Request $request, $id)
    {
        $allowed_identificators = ['id', 'email'];
        $identificator = $request->query('identificator', 'id');
        if(!in_array($identificator, $allowed_identificators)) {
            $identificator = 'id';
        }
        $user = User::where($identificator, $id)->first();
        if(!$user) {
            abort(404);
        }
        $variables = [
            'user' => $user
        ];
        return view('users.show', $variables);
    }
}
