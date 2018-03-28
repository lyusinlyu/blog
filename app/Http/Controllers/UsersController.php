<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function showUsers(Request $request)
    {
        $users = User::all();
        if($users) {
            dd($users);
        }
    }


    public function showUser(Request $request, $id)
    {
        if($request->query('identificator') === 'email') {
            $email = $id;
            if($email) {
            $user = User::where('email', $email)->first();
            if($user) {
                dd($user);
            }
            // $user = User::create(
            //     [
            //         'name' => 'unknown',
            //         'surname' => 'unknown',
            //         'nickname' => 'unknown',
            //         'password' => 'default_pass',
            //         'email' => $email,
            //         'gender' => 'unknown',
            //         'date_of_birth' => '1970-12-12 00:00:00'
            //     ]
            // );
            // dd($user);

        }
        } else {
            $user = User::where('id', $id)->first();
            if($user) {
            dd($user);
            }
        }

    }

}
