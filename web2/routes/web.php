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
