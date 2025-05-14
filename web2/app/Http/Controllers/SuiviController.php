<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuiviNutritionnel;
use App\Models\Utilisateur;

class SuiviController extends Controller
{
    public function index()
    {
        $pseudo = session('pseudo');
        $utilisateur = Utilisateur::where('pseudo', $pseudo)->first();

        if (!$utilisateur) return redirect()->route('utilisateur');

        $suivis = SuiviNutritionnel::where('id_utilisateur', $utilisateur->id_utilisateur)->get();

        return view('suivi_nutritionnel', compact('suivis'));
    }
}
