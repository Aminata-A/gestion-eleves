<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    // Afficher toutes les évaluations
    public function index()
    {
        $evaluations = Evaluation::with(['etudiant', 'matiere'])->get();
        return response()->json(['message' => 'Liste des évaluations', 'data' => $evaluations], 200);
    }

    // Afficher une évaluation spécifique
    public function show($id)
    {
        $evaluation = Evaluation::with(['etudiant', 'matiere'])->findOrFail($id);
        return response()->json(['message' => 'Détails de l\'évaluation', 'data' => $evaluation], 200);
    }

    // Ajouter une nouvelle évaluation
    public function store(StoreEvaluationRequest $request)
    {
        $evaluation = Evaluation::create($request->validated());
        return response()->json(['message' => 'Évaluation ajoutée avec succès', 'data' => $evaluation], 201);
    }

    // Mettre à jour une évaluation spécifique
    public function update(UpdateEvaluationRequest $request, $id)
    {
        $evaluation = Evaluation::findOrFail($id);
        $evaluation->update($request->validated());
        return response()->json(['message' => 'Évaluation mise à jour avec succès', 'data' => $evaluation], 200);
    }

    // Supprimer une évaluation spécifique (soft delete)
    public function destroy($id)
    {
        $evaluation = Evaluation::findOrFail($id);
        $evaluation->delete();
        return response()->json(['message' => 'Évaluation supprimée avec succès'], 200);
    }

    
}
