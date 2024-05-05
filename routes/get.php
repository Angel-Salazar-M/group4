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

Route::get('/home', function () {
    return view('home');
});

Route::get('/prueba', function () {
    return view('prueba');
});
