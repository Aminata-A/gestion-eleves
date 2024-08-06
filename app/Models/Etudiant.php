<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'date_de_naissance',
        'adresse',
        'telephone',
        'matricule',
        'email',
        'mot_de_passe',
        'photo',
    ];

    // Relation avec le modèle Evaluation
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
