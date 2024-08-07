<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class Controller
{
    /**
     * Génère une réponse JSON personnalisée.
     *
     * @param string $message
     * @param mixed $data
     * @param int $status
     * @return JsonResponse
     */
    protected function customJsonResponse(string $message, $data = null, int $status = 200): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $status);
    }
}
