<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HealthTip;
use Illuminate\Http\JsonResponse;

class HealthTipController extends Controller
{
    public function getRandomTip(): JsonResponse
    {
        $tip = HealthTip::inRandomOrder()->first();

        if (!$tip) {
            return response()->json([
                'success' => false,
                'message' => 'No health tips available'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'data' => [
                'tip' => $tip->tip
            ]
        ]);
    }
}

