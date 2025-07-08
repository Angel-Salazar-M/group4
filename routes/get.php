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

//De momento reemplazada por "patient/welcome"
// Route::get('/patient/home', function () {
//     return view('Homepages.homep', [
//         'patient' => Auth::user()->load('userable', 'userable.prescriptions'),
//     ]);
// });

Route::get('/patient/record', function (Patient $patient) {
    return view('pantallasPacientes.vista-expedientepac', [
        'patient' => Auth::user()->load('userable', 'userable.prescriptions'),
    ]);
});

Route::get('/patient/prescriptions', function (Patient $patient) {
    return view('pantallasPacientes.prescripcioneslistapac', [
        'patient' => Auth::user()->load('userable', 'userable.prescriptions'),
    ]);
});

Route::get('/patient/prescription', function () {
    return view('pantallasPacientes.recetapac');
});

Route::get('/patient/profile', function (Patient $patient) {
    return view('pantallasPacientes.perfilvistapac', [
        'patient' => Auth::user()->load('userable', 'userable.prescriptions'),
    ]);
});

Route::get('/patient/welcome', function () {
    return view('pantallasPacientes.welcomepac');
});

Route::get('/patient/profile/edit', function () {
    return view('pantallasPacientes.perfileditarpac');
});

Route::get('/patient/appointments', function () {
    return view('pantallasPacientes.appointments', [
        'patient' => Auth::user()->load('userable', 'userable.prescriptions'),
    ]);
});

/**
 *  D O C T O R  R O U T E S
 */
// De momento reemplazada por "doctor/welcome"
// Route::get('/doctor/info', function (Patient $patient) {
//     return view('Homepages.homedoctores', [
//             'user' => MedicalAppointment::all(),
//             'doctor' => Auth::user(),
//             'patient' => $patient->load('user')

//         ]);
// });

Route::get('/doctor/record/{patient}', function (Patient $patient) {
    return view('pantallasDoctores.vista-expedientedoc', [
        'patient' => $patient->load('user')
    ]);
}); //hechooooo

Route::get('/doctor/records', function () {
    return view('pantallasDoctores.patients-list', [
        'patients' => Patient::all()->load('user')
    ]);
}); //pendiente modal


Route::get('/doctor/profile', function () {
    return view('pantallasDoctores.perfilvistadoc');
});

Route::get('/doctor/history/new', function () {
    return view('pantallasDoctores.nuevaprescripcion');
});

Route::get('/doctor/prescriptions', function (Patient $patient) {
    return view('pantallasDoctores.Citasmedicaslistadoc', [
        'patient' => $patient->with('user')->first()
    ]);
});
// En proceso

Route::get('/doctor/appointment/new', function () {
    return view('pantallasDoctores.Nuevacitamedicadoc');
});

Route::get('/doctor/prescription/new', function () {
    return view('pantallasDoctores.nueva-prescripcion');
});

Route::get('/doctor/welcome', function () {
    return view('pantallasDoctores.welcomedoc');
});

Route::get('/doctor/profile/edit', function () {
    return view('pantallasDoctores.perfileditardoc');
});


