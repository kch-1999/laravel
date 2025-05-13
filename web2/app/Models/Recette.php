<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $table = 'recettes';
    protected $primaryKey = 'id_recette';

    protected $fillable = [
        'nom',
        'ingredients',
        'calories',
        'lipides',
        'glucides',
    ];
}
