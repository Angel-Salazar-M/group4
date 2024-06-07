<?php

namespace App\Http\Controllers;

//  use Illuminate\Auth\Events\Authenticated;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->userable instanceof Doctor) {
                return redirect('/homedoctores');
            } else {
                return redirect('/homep');
            }
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
            'userable' => 'in:dogtor,patient',
            'medical_speciality' => 'exclude_unless:userable,dogtor|required',
            'medical_code' => 'exclude_unless:userable,dogtor|required',

            'gender' => 'exclude_unless:userable,patient|required',
            'age' => 'exclude_unless:userable,patient|required',
            'address' => 'exclude_unless:userable,patient|required',
            'civilStatus' => 'exclude_unless:userable,patient|required',
            'bloodType' => 'exclude_unless:userable,patient|required',
        ]);

        $user = User::create($verifiedData);

        if( $user ) {
            Auth::login($user);

            switch ($userableData['userable']) {
                case 'dogtor':
                    unset($userableData['userable']);
                    $user->userable()->associate(Doctor::create($userableData));
                    if($user->save()) {
                        return redirect('/homedoctores');
                    }
                    break;

                default:
                    unset($userableData['userable']);
                    $user->userable()->associate(Patient::create($userableData));
                    if($user->save()) {
                        return redirect('/homep');
                    }
                    break;
            }
        }

        return back()->withErrors(['nombre' => 'Credenciales incorrectas', 'email' => 'Credenciales incorrectas', 'password' => 'Credenciales']);
    }
};

