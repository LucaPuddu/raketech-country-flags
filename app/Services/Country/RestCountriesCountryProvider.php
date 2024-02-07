<?php

namespace App\Services\Country;

use Illuminate\Support\Collection;

class RestCountriesCountryProvider implements IsCountryProvider
{
    public function fetch(): Collection
    {
        // TODO
        return collect();
    }
}
