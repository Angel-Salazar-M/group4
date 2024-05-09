<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('');
}); //->name("login");

Route::get('/register', function () {
    return view('');
});

Route::get('/sesión', function () {
    return view('sesión');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/registrarse', function () {
    return view('registrarse');
});

Route::get('/homep', function () {
    return view('homep');
});
