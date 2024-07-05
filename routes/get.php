<?php
use App\Models\MedicalAppointment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('LoginRegister.sesion');
}); //->name("login");

Route::get('/register', function () {
    return view('LoginRegister.registrarse');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/register', function () {
    return view('LoginRegister.registrarse');
});

Route::get('/patient/home', function () {
    return view('Homepages.homep');
});
Route::get('/doctor/home', function () {
    return view('Homepages.homedoctores', [
        'user' => MedicalAppointment::all()
    ]
);
});

Route::get('/doctor/record/{patient}', function (Patient $patient) {
    return view('pantallasDoctores.vista-expedientedoc', [
        'patient' => $patient
    ]);
});

Route::get('/patient/record', function () {
    return view('pantallasPacientes.vista-expedientepac');
});


Route::get('/doctor/list', function () {
    return view('pantallasDoctores.patients-list', [
        'patients' => Patient::with('user')->get(),
    ]);
});

Route::get('/patient/prescription', function () {
    return view('pantallasPacientes.recetaspac');
});

Route::get('/doctor/history', function () {
    return view('pantallasDoctores.Datosdehistorialdoc');
});

Route::get('/patient/prescription', function () {
    return view('pantallasPacientes.recetapac');
});

Route::get('/patient/profile/user', function () {
    return view('pantallasPacientes.perfilvistapac');
});

Route::get('/doctor/profile/user', function () {
    return view('pantallasDoctores.perfilvistadoc');
});

Route::get('profile/edit', function () {
    return view('pantallastodos.perfileditar');
});
