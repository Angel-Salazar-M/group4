<?php

namespace App\Http\Controllers;

//use Illuminate\Auth\Events\Authenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if (Auth::attempt($credentials)) {

        }

        return back()->withErrors(['email' => 'Credenciales incorrectas', 'password' => 'Credenciales incorrectas']);

    }

    public function register(Request $request) {
        $verifiedData = $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:6|max:20,',
        ]);

        if( User::create($verifiedData) ) {
            return redirect('/');
        }

        return back()->withErrors([]);
    }

};

