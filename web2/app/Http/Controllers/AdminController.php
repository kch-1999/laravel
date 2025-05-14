<?php

use App\Models\Recette;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function formAjouterRecette() {
        return view('ajouterrecette');
    }

    public function ajouterRecette(Request $request) {
        Recette::create($request->validate([
            'nom' => 'required|string|max:100',
            'ingredients' => 'required|string',
            'calories' => 'nullable|integer',
            'lipides' => 'nullable|numeric',
            'glucides' => 'nullable|numeric',
        ]));

        return redirect()->route('formAjouterRecette')->with('success', 'Recette ajoutée !');
    }

    public function formSupprimerRecette() {
        $recettes = Recette::all();
        return view('supprimerrecette', compact('recettes'));
    }

    public function supprimerRecette(Request $request) {
        Recette::destroy($request->input('id_recette'));
        return redirect()->route('formSupprimerRecette')->with('success', 'Recette supprimée !');
    }

    public function formSupprimerCompte() {
        $utilisateurs = Utilisateur::all();
        return view('supprimercompte', compact('utilisateurs'));
    }

    public function supprimerCompte(Request $request) {
        Utilisateur::destroy($request->input('id_utilisateur'));
        return redirect()->route('formSupprimerCompte')->with('success', 'Compte supprimé !');
    }
}
