<?php
use App\Http\Controllers\UserController;
include "get.php";
include "post.php";
Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update')->middleware('auth');

