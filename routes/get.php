<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return "Hi";
})->name("login");

Route::get('/home', function () {
    return view('home');
});
