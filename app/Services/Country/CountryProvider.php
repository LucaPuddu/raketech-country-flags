<?php

namespace App\Services\Country;

use Illuminate\Support\Collection;

interface CountryProvider
{
    public function fetch(): Collection;

    public function toCountryAttributes(array $country): array;
}
