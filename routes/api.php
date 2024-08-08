<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\UEController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    // Routes pour les étudiants
    Route::apiResource('etudiants', EtudiantController::class);
    Route::apiResource('evaluations', EvaluationController::class);
    Route::apiResource('matieres', MatiereController::class);
    Route::apiResource('ues', UEController::class);
    
    // Routes pour les étudiants supprimés
    Route::post('/etudiants/restore/{id}', [EtudiantController::class, 'restore']);
    Route::delete('/etudiants/force-delete', [EtudiantController::class, 'forceDelete']);

    // Routes pour l'authentification
    Route::get('user', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::get('/etudiants/trashed', [EtudiantController::class, 'trashed'])->middleware(['auth']);

