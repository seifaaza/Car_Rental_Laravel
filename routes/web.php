<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/',  [App\Http\Controllers\CarsController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\CarsController::class, 'home'])->name('home');

Route::get('/about', [App\Http\Controllers\CarsController::class, 'about'])->name('about');
Route::get('/cars', [App\Http\Controllers\CarsController::class, 'cars'])->name('cars');
Route::get('/info/{id}', [App\Http\Controllers\CarsController::class, 'show']);
Route::get('/profil/{id}', [App\Http\Controllers\CarsController::class, 'profil']);

Route::get('/rent/{id}', [App\Http\Controllers\UserController::class, 'rent']);
Route::post('/save/{id}', [App\Http\Controllers\UserController::class, 'save'])->name('save');
Route::get('/bag', [App\Http\Controllers\UserController::class, 'bag']);
Route::get('/bag/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy']);



