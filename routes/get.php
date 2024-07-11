<?php
use App\Models\MedicalAppointment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Doctor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('LoginRegister.sesion');
})->name("login");

Route::get('/register', function () {
    return view('LoginRegister.registrarse');
});

Route::get('/register', function () {
    return view('LoginRegister.registrarse');
});

Route::get('profile/edit', function () {
    return view('pantallastodos.perfileditar');
});

Route::get('/prueba', function () {
    return view('prueba');
});





/**
 * P A T I E N T  R O U T E S
*/

Route::get('/patient/home', function () {
    return view('Homepages.homep');
});

Route::get('/patient/record', function (Patient $patient) {
    return view('pantallasPacientes.vista-expedientepac', [
        'patient' => $patient->with('user')->first()
    ]);
});

Route::get('/patient/prescriptions', function (Doctor $doctor) {
    return view('pantallasPacientes.recetaspac', [
        'doctor' => $doctor->with('user')->first(),
    ]);
});

Route::get('/patient/prescription', function () {
    return view('pantallasPacientes.recetapac');
});

Route::get('/patient/profile/user', function () {
    return view('pantallasPacientes.perfilvistapac');
});





/**
 *  D O C T O R  R O U T E S
*/

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

Route::get('/doctor/list', function () {
    return view('pantallasDoctores.patients-list');

});

Route::get('/doctor/history', function () {
    return view('pantallasDoctores.Datosdehistorialdoc');
});

Route::get('/doctor/profile/user', function () {
    return view('pantallasDoctores.perfilvistadoc');
});

Route::get('/doctor/history/new', function () {
    return view('pantallasDoctores.nuevoHistorial');
});
