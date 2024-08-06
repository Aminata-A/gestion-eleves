<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEtudiantRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Changez cela en fonction de votre logique d'autorisation
    }

    public function rules()
    {
        return [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'date_de_naissance' => 'required|date',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'matricule' => 'required|string|unique:etudiants,matricule',
            'email' => 'required|string|email|unique:etudiants,email',
            'mot_de_passe' => 'required|string|min:6',
            'photo' => 'nullable|string|max:255',
        ];
    }
}
