<?php

namespace App\Http\Controllers;

//  use Illuminate\Auth\Events\Authenticated;
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
            'dui' => 'required',
            'birthday' => 'required',
            'phoneNumber' => 'required',
            'password'=> 'required|min:6|max:20,',
            'email'=> 'required|email|unique:users,email',
        ]);

        $userableData = $request->validate([

            'medicalSpeciality' => 'required',
            'medicalCode' => 'required',

            'name'=> 'required|min:3',
            'dui' => 'required',
            'birthday' => 'required',
            'phoneNumber' => 'required',
            'password'=> 'required|min:6|max:20,',
            'email'=> 'required|email|unique:users,email',

        ]);

        if( User::create($verifiedData) ) {
            return redirect('/');
        }

        return back()->withErrors(['nombre' => 'Credenciales incorrectas', 'email' => 'Credenciales incorrectas', 'password' => 'Credenciales']);
    }

};

