<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
        'ue_id',
    ];

    // Relation avec le modèle UE
    public function ue()
    {
        return $this->belongsTo(UE::class);
    }

    // Relation avec le modèle Evaluation
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
