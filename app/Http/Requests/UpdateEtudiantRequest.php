<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ensure authorization logic is correct
    }

    public function rules()
    {
        // Ensure 'etudiant' is the correct parameter name
        $etudiantId = $this->route('etudiant');
        
        // Verify that $etudiantId is valid and numeric
        if (!is_numeric($etudiantId)) {
            // Handle the case where the ID is not valid (e.g., throw a validation exception)
            return [];
        }

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
