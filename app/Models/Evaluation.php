<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'valeur',
        'matiere_id',
    ];

    // Relation avec le modèle Matiere
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
