<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    // Afficher tous les étudiants
    public function index()
    {
        $etudiants = Etudiant::all();
        return $this->customJsonResponse('Liste des étudiants', $etudiants);
    }

    // Afficher un étudiant spécifique
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return $this->customJsonResponse('Détails de l\'étudiant', $etudiant);
    }

    // Ajouter un nouvel étudiant
    public function store(StoreEtudiantRequest $request)
    {
        $etudiant = Etudiant::create($request->validated());
        return $this->customJsonResponse('Étudiant ajouté avec succès', $etudiant, 201);
    }

    // Mettre à jour un étudiant spécifique
    public function update(UpdateEtudiantRequest $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($request->validated());
        return $this->customJsonResponse('Étudiant mis à jour avec succès', $etudiant);
    }

    // Supprimer un étudiant spécifique (soft delete)
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return $this->customJsonResponse('Étudiant supprimé avec succès', null, 200);
    }

    // Restaurer un étudiant supprimé
    public function restore($id)
    {
        $etudiant = Etudiant::onlyTrashed()->where('id', $id)->first();
        $etudiant->restore();
        return $this->customJsonResponse('Étudiant restauré avec succès', $etudiant);
    }

    // Supprimer définitivement un étudiant
    public function forceDelete($id)
    {
        $etudiant = Etudiant::onlyTrashed()->where('id', $id)->first();
        $etudiant->forceDelete();
        return $this->customJsonResponse('Étudiant supprimé définitivement', $etudiant);
    }

    // Afficher les étudiants supprimés
    public function trashed()
    {
        $etudiants = Etudiant::onlyTrashed()->get();
        return $this->customJsonResponse('Liste des étudiants supprimés', $etudiants);
    }
    

}
