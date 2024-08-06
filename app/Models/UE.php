<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
        'coef',
    ];

    // Relation avec le modèle Matiere
    public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }
}
