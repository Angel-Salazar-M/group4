<?php
use App\Http\Controllers\UserController;
include "get.php";
include "post.php";
Route::put('/profile/update', [UserController::class, 'updateDoctor'])->name('doctor.profile.update')->middleware('auth');

Route::put('/patient/update', [UserController::class, 'updatePatient'])->name('patient.profile.update')->middleware('auth');

