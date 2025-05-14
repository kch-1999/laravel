<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recette;

class RecetteController extends Controller
{
    public function index()
    {
        $recettes = Recette::all();
        return view('choisir_recette', compact('recettes'));
    }

    public function choisir(Request $request)
    {
        $id = $request->input('id_recette');
        $recette = Recette::find($id);

        return view('recette_choisie', compact('recette'));
    }
}
