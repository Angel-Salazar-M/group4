<?php

namespace App\Http\Controllers;

//  use Illuminate\Auth\Events\Authenticated;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->userable_type == "App\Models\Doctor") {
                return redirect('/doctor/welcome');
            } else {
                return redirect('/patient/welcome');
            }
        }


        return back()->withErrors(['email' => 'Credenciales incorrectas', 'password' => 'Credenciales incorrectas']);
    }

    public function register(Request $request)
    {


        // Validate the request data
        $verifiedData = $request->validate([
            'name' => 'required|min:3',
            'dui' => 'required',
            'birthday' => 'required',
            'phoneNumber' => 'required',
            'password' => 'required|min:6|max:20,',
            'email' => 'required|email|unique:users,email',
        ]);

        $userableData = $request->validate([
            'userable' => 'in:dogtor,patient',
            'place_address' => 'exclude_unless:userable,dogtor|required',
            'medical_speciality' => 'exclude_unless:userable,dogtor|required',
            'medical_code' => 'exclude_unless:userable,dogtor|required',

            'gender' => 'required|in:Hombre,Mujer',
            'address' => 'exclude_unless:userable,patient|required',
            'caretaker' => 'exclude_unless:userable,patient|required',
        ]);

        $user = User::create($verifiedData);

        if ($user) {
            Auth::login($user);

            switch ($userableData['userable']) {
                case 'dogtor':
                    unset($userableData['userable']);
                    $user->userable()->associate(Doctor::create($userableData));
                    if ($user->save()) {
                        return redirect('/doctor/welcome');
                    }
                    break;

                default:
                    unset($userableData['userable']);
                    $user->userable()->associate(Patient::create($userableData));
                    if ($user->save()) {
                        return redirect('/patient/welcome');
                    }
                    break;
            }
        }

        return back()->withErrors(['nombre' => 'Credenciales incorrectas', 'email' => 'Credenciales incorrectas', 'password' => 'Credenciales']);
    }
    public function uploadPhoto(Request $request)
    {
        $request->validate(
            [
                'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ],
            [
                'photo.required' => 'Please upload a profile photo.',
                'photo.image' => 'The file must be an image.',
                'photo.mimes' => 'Only jpg, jpeg, and png files are allowed.',
                'photo.max' => 'The photo size must not exceed 2MB.',
            ]
        );

        $user = auth()->user();

        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
        }

        $path = $request->file('photo')->store('profile_photos', 'public');

        $user->profile_photo = $path;
        $user->save();

        return back()->with('success', 'Profile photo updated successfully.');
    }

    public function updateDoctor(Request $request)
    {
        $user = auth()->user();

        $data = $request->validate([

            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phoneNumber' => 'nullable|string|max:20',
            'birthday' => 'nullable|date',
            'dui' => 'nullable|string|max:20',
            'medical_code' => 'nullable|string|max:50',
            'place_address' => 'nullable|string|max:255',
        ]);

        // Actualizar campos en la tabla users
        $user->update([
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'birthday' => $data['birthday'],
            'dui' => $data['dui'],
            'place_address' => $data['place_address'] ?? $user->place_address,
        ]);

        // Actualizar el código médico en el modelo relacionado Doctor
        if ($user->userable_type === Doctor::class && $user->userable) {
            $user->userable->update([
                'medical_code' => $data['medical_code'],
            ]);
        }

        // Refrescar el modelo para que la relación se actualice
        $user->refresh();

        return redirect('/doctor/profile')->with('success', 'Profile updated successfully.');
    }
    public function updatePatient(Request $request)
    {
        $user = auth()->user();

        $data = $request->validate([

            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phoneNumber' => 'nullable|string|max:20',
            'birthday' => 'nullable|date',
            'dui' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'caretaker' => 'required|boolean',
        ]);

        // Actualizar campos en la tabla users
        $user->update([
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'birthday' => $data['birthday'],
            'dui' => $data['dui'],
            'address' => $data['address'],
            'caretaker' => $data['caretaker'],
        ]);

        // Actualizar dirección en modelo relacionado Paciente (userable)
        if ($user->userable_type === Patient::class && $user->userable) {
            $user->userable->update([
                'address' => $data['address'],
            ]);

        }
        if ($user->userable_type === Patient::class && $user->userable) {
            $user->userable->update([
                'address' => $data['address'],
                'caretaker' => $data['caretaker'],
            ]);
        }
        // Refrescar el modelo para que la relación se actualice
        $user->refresh();

        return redirect('/patient/profile')->with('success', 'Profile updated successfully.');
    }
}
;

