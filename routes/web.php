<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\CarsController::class, 'home'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


Route::get('/about', [App\Http\Controllers\CarsController::class, 'about'])->name('about');
Route::get('/cars', [App\Http\Controllers\CarsController::class, 'cars'])->name('cars');
Route::get('/view/{id}', [App\Http\Controllers\CarsController::class, 'show']);


Route::get('/rent/{id}', [App\Http\Controllers\UserController::class, 'rent']);
Route::get('/view/rent/{id}', [App\Http\Controllers\UserController::class, 'rent']);
Route::get('/bag', [App\Http\Controllers\UserController::class, 'bag'])->name('bag');
