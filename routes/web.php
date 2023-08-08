<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/',  [CarsController::class, 'home'])->name('home');
Route::get('/home', [CarsController::class, 'home'])->name('home');
Route::get('/about', [CarsController::class, 'about']);
Route::get('/cars', [CarsController::class, 'cars'])->name('cars');
Route::get('/info/{id}', [CarsController::class, 'show'])->name('info');
Route::get('/profil/{id}', [CarsController::class, 'profil'])->name('profil');
Route::get('/tags/{id}', [CarsController::class, 'tags'])->name('tags');
Route::get('/category/{id}', [CarsController::class, 'category'])->name('category');

Route::get('/rent/{id}', [UserController::class, 'rent'])->name('rent');
Route::get('/save/{id}', [UserController::class, 'save'])->name('save');
Route::get('/saved/{id}', [UserController::class, 'saved'])->name('saved');
Route::get('/saved/delete/{id}', [UserController::class, 'deleteSaved']);
Route::post('/review/{id}', [UserController::class, 'shareReview']);
Route::put('/editReview/{id}', [UserController::class, 'editReview']);
Route::get('/review/delete/{id}', [UserController::class, 'deleteReview']);





