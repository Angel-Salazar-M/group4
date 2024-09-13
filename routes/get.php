<?php
use App\Models\MedicalAppointment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Doctor;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('LoginRegister.sesion');
})->name("login");

Route::get('/register', function () {
    return view('LoginRegister.registrarse');
});

Route::get('profile/edit', function () {
    return view('pantallastodos.perfileditar');
});

Route::get('/prueba', function (Patient $patient) {
    return view('prueba', [
    'patient' => $patient->with('user')->first()
    ]);
});





/**
 * P A T I E N T  R O U T E S
*/

Route::get('/patient/home', function () {
    return view('Homepages.homep', [
        'patient' => Auth::user()->load('userable', 'userable.prescriptions'),
    ]);
});

Route::get('/patient/record', function (Patient $patient) {
    return view('pantallasPacientes.vista-expedientepac', [
        'patient' => $patient->with('user')->first()
    ]);
});

Route::get('/patient/prescriptions', function ( Patient $patient ) {
    return view('pantallasPacientes.Citasmedicaslistapac', [
        'patients' => $patient->with('user')->first(),
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
// pendiente
Route::get('/doctor/info', function () {
    return view('Homepages.homedoctores', [
        'user' => MedicalAppointment::all()
        ]
    );
});

Route::get('/doctor/record/{patient}', function (Patient $patient) {
    return view('pantallasDoctores.vista-expedientedoc', [
        'patient' => $patient
    ]);
}); //hechooooo

Route::get('/doctor/records', function () {
    return view('pantallasDoctores.patients-list', [
        'patients' => Patient::all()->load('user')
    ]);
}); //pendiente modal

Route::get('/doctor/history', function () {
    return view('pantallasDoctores.Datosdehistorialdoc');
});//pendiente tal vez borrar

Route::get('/doctor/profile', function () {
    return view('pantallasDoctores.perfilvistadoc');
});

Route::get('/doctor/history/new', function () {
    return view('pantallasDoctores.nuevoHistorial');
});

Route::get('/doctor/prescriptions', function () {
    return view('pantallasDoctores.Citasmedicaslistadoc');
});

Route::get('/doctor/appointment/new', function () {
    return view('pantallasDoctores.Nuevacitamedicadoc');
});

Route::get('/doctor/prescription/new', function () {
    return view('pantallasDoctores.nueva-prescripcion');
});
