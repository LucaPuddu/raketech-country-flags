<?php

namespace App\Http\Controllers;

use App\Services\CountryService;
use Illuminate\Http\JsonResponse;

class CountryController
{
    public function list(CountryService $service): JsonResponse
    {
        return response()->json($service->list());
    }
}
