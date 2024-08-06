<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        $etudiantId = $this->route('etudiant');

        return [
            'prenom' => 'sometimes|required|string|max:255',
            'nom' => 'sometimes|required|string|max:255',
            'date_de_naissance' => 'sometimes|required|date',
            'adresse' => 'sometimes|required|string|max:255',
            'telephone' => 'sometimes|required|string|max:15',
            'matricule' => 'sometimes|required|string|unique:etudiants,matricule,' . $etudiantId,
            'email' => 'sometimes|required|string|email|unique:etudiants,email,' . $etudiantId,
            'mot_de_passe' => 'sometimes|required|string|min:6',
            'photo' => 'sometimes|nullable|string|max:255',
        ];
    }
}
