<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CountryController
{
    public function list(): JsonResponse
    {
        return response()->json([]);
    }
}
