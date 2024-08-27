<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;





Route::get('/',[AuthController::class,'login'])->name('login');

Route::get('/users',[UsersController::class,'index'])->name('users.index');
Route::get('/create',[UsersController::class,'create'])->name('users.create');
Route::get('/dashboard',[UsersController::class,'dashboard'])->name('dashboard');
//logout

Route::post('/logout',[UsersController::class,'logout'])->name('logout');
//settings.profile

Route::get('/settings/profile',[UsersController::class,'settings'])->name('settings.profile');
