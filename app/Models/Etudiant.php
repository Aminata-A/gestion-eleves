<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'date_de_naissance',
        'adresse',
        'telephone',
        'matricule',
        'email',
        'photo',
    ];

    // Relation avec le modèle Evaluation
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
