<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'id_utilisateur';

    protected $fillable = [
        'pseudo',
        'email',
        'mot_de_passe',
    ];

    // ynajem ye5ou barcha men suivi 
    public function suivis()
    {
        return $this->hasMany(SuiviNutritionnel::class, 'id_utilisateur');
    }
}
