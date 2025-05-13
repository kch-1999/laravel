<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuiviNutritionnel extends Model
{
    protected $table = 'suivi_nutritionnel';
    protected $primaryKey = 'id_suivi';

    protected $fillable = [
        'id_utilisateur',
        'date',
        'calories',
        'lipides',
        'glucides',
    ];

    // kima clé secondaire 
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }
}
