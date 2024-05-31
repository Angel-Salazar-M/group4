<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('LoginAndRegister.sesion');
}); //->name("login");

Route::get('/register', function () {
    return view('LoginAndRegister.registrarse');
});

Route::get('/prueba', function () {
    return view('pantallasDoctores.prueba');
});

Route::get('/register', function () {
    return view('LoginAndRegister.registrarse');
});

Route::get('/homep', function () {
    return view('Homepages.homep');
});
Route::get('/homedoctores', function () {
    return view('Homepages.homedoctores');
});

Route::get('/vistaexp', function () {
    return view('PantallaDoctoresyPacientes.vista-expediente');
});

Route::get('/list', function () {
    return view('pantallasDoctores.patients-list');
});
