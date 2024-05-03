<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    } //pendiente :p
}
