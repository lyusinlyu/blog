<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User
};

class UsersController extends Controller
{
    public function showUsers()
    {
        $users = User::all();
        dd($users);
    }


    public function showUser(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->first();
        dd($user);
    }
}
