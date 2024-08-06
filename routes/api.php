<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\UEController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('etudiants', EtudiantController::class);
Route::apiResource('evaluations', EvaluationController::class);
Route::apiResource('matieres', MatiereController::class);
Route::apiResource('ues', UEController::class);
