<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('sesion');
}); //->name("login");

Route::get('/register', function () {
    return view('registrarse');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/register', function () {
    return view('registrarse');
});

Route::get('/homep', function () {
    return view('homep');
});
Route::get('/homedoctores', function () {
    return view('homedoctores');
});
