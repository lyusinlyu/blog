<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAuthUserProfile()
    {
        $user = Auth::user();
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $data = [
            'users' => $users,
            'user' => $user
        ];
        return view('profile.index')->with('data', $data);
    }

    public function showUserProfile(Request $request, $id)
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $user = User::find($id);
        $data = [
            'users' => $users,
            'user' => $user
        ];
        return view('profile.index')->with('data', $data);
    }

    public function updateAuthUserProfile(Request $request)
    {
        $data = $request->all();
        $this->validator($data)->validate();
        event(new Registered($user = $this->update($data)));
        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());

    }

     /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/me';

    protected function validator($data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'string|nullable|in:male,female',
            'date_of_birth' => 'nullable|date'
        ]);
    }

    protected function update(array $data)
    {
        User::find(Auth::user()->id)->update($data);
    }
}
