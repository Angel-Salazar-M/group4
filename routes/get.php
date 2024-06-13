<?php
use App\Models\MedicalAppointment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/homep', function () {
    return view('Homepages.homep');
});
Route::get('/home/doctores', function () {
    return view('Homepages.homedoctores', [
        'user' => MedicalAppointment::all()
    ]
);
});

Route::get('/vistaexp', function () {
    return view('pantallasDoctores.vista-expedientedoc');
});

Route::get('/vistaexpac', function () {
    return view('pantallasPacientes.vista-expedientepac');
});


Route::get('/list', function () {
    return view('pantallasDoctores.patients-list');
});

Route::get('/prescriptionspac', function () {
    return view('pantallasPacientes.recetaspac');
});

Route::get('/records', function () {
    return view('pantallasDoctores.Datosdehistorialdoc');
});

Route::get('/prescription/user', function () {
    return view('pantallasPacientes.recetapac');
});
