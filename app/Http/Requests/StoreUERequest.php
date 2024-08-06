<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUERequest extends FormRequest
{
    public function authorize()
    {
        return true; // Changez cela en fonction de votre logique d'autorisation
    }

    public function rules()
    {
        return [
            'libelle' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'coef' => 'required|numeric',
        ];
    }
}
