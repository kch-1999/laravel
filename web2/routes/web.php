<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;

Route::get('/', function () {
    return view('index'); 
})->name('index');
        


Route::get('/signin', function () {
    return view('signin');
});


Route::get('/signup', function () {
    return view('signup');
});


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
