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

Route::get('/patient/home', function () {
    return view('Homepages.homep');
});
Route::get('/doctor/home', function () {
    return view('Homepages.homedoctores', [
        'user' => MedicalAppointment::all()
    ]
);
});

Route::get('/doctor/record', function () {
    return view('pantallasDoctores.vista-expedientedoc');
});

Route::get('/patient/record', function () {
    return view('pantallasPacientes.vista-expedientepac');
});


Route::get('/doctor/list', function () {
    return view('pantallasDoctores.patients-list');

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
