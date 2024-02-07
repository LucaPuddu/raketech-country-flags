<?php

namespace App\Http\Controllers;

use App\Services\Country\IsCountryProvider;
use Illuminate\Http\JsonResponse;

class CountryController
{
    public function list(IsCountryProvider $provider): JsonResponse
    {
        return response()->json($provider->fetch());
    }
}
