<?php

use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('index');
})->name('home');

// Page Sign Up
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// Page Sign In
Route::get('/signin', function () {
    return view('signin');
})->name('signin');

// Page Admin
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

// route mta3 formulaire 
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.loginForm');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');