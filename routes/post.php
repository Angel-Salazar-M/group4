<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('login', [UserController::class, "login"]);

Route::post('register', [UserController::class, "register"]);

Route::post('doctor/records', [UserController::class, "doctor/records"]);

Route::post('/profile/photo', [UserController::class, 'uploadPhoto'])->name('profile.photo.upload');
