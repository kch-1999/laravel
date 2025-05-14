<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateur,email',
            'password' => 'required|string|min:6',
        ]);

        Utilisateur::create([
            'pseudo' => $request->pseudo,
            'email' => $request->email,
            'mot_de_passe' => $request->password, // pas de hash ici pour garder ton code simple
        ]);

        session(['pseudo' => $request->pseudo]);

        return redirect()->route('utilisateur');
    }

    public function espaceUtilisateur()
    {
        return view('utilisateur');
    }


    public function signup(Request $request)
{
    $pseudo = $request->input('pseudo');
    $email = $request->input('email');
    $mot_de_passe = $request->input('mot_de_passe');

    
    $existe = DB::table('utilisateur')->where('email', $email)->first();

    if ($existe) {
        return back()->with('error', 'Email déjà utilisé.');
    }

   
    DB::table('utilisateur')->insert([
        'pseudo' => $pseudo,
        'email' => $email,
        'mot_de_passe' => $mot_de_passe,
    ]);

    
    session(['pseudo' => $pseudo]);

    return view('utilisateur', ['pseudo' => $pseudo]);
}
public function supprimerCompteForm()
{
    return view('supprimercompte');
}

public function supprimerCompte(Request $request)
{
    $pseudo = session('pseudo');
    $utilisateur = Utilisateur::where('pseudo', $pseudo)->first();

    if ($utilisateur) {
        $utilisateur->delete();
        session()->forget('pseudo');
        return redirect('/')->with('success', 'Compte supprimé avec succès.');
    }

    return back()->with('error', 'Utilisateur introuvable.');
}
}
