<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index'); 
})->name('index');

Route::get('/signin', function () {
    return view('signin');
})->name('signin.form');

Route::get('/signup', function () {
    return view('signup');
})->name('signup.form');

Route::post('/signin', [UtilisateurController::class, 'signin'])->name('signin');
Route::post('/signup', [UtilisateurController::class, 'signup'])->name('signup');

Route::get('/utilisateur', [UtilisateurController::class, 'espaceUtilisateur'])->name('utilisateur');

Route::get('/choisir-recette', [RecetteController::class, 'index'])->name('recettes.index');
Route::post('/choisir-recette', [RecetteController::class, 'choisir'])->name('recettes.choisir');

Route::get('/suivi-nutritionnel', [SuiviController::class, 'index'])->name('suivi.index');

Route::get('/supprimer-compte', [UtilisateurController::class, 'supprimerCompteForm'])->name('utilisateur.supprimer.form');
Route::post('/supprimer-compte', [UtilisateurController::class, 'supprimerCompte'])->name('utilisateur.supprimer');

Route::get('/connexion', [AuthController::class, 'showLoginForm'])->name('connexion');
Route::post('/connexion', [AuthController::class, 'login'])->name('admin.connexion');



Route::get('/ajouterrecette', [AdminController::class, 'formAjouterRecette'])->name('formAjouterRecette');
Route::post('/ajouterrecette', [AdminController::class, 'ajouterRecette'])->name('ajouterRecette');

Route::get('/supprimerrecette', [AdminController::class, 'formSupprimerRecette'])->name('formSupprimerRecette');
Route::post('/supprimerrecette', [AdminController::class, 'supprimerRecette'])->name('supprimerRecette');

Route::get('/supprimercompte', [AdminController::class, 'formSupprimerCompte'])->name('formSupprimerCompte');
Route::post('/supprimercompte', [AdminController::class, 'supprimerCompte'])->name('supprimerCompte');
