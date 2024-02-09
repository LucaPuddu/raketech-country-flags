<?php

namespace App\Services\Country;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

abstract class AbstractCountryProvider
{
    public const bool PREFETCH = false;

    abstract public function fetch(): Collection;

    public function toCountryAttributes(array $country): array
    {
        return [
            'name' => $country['name'],
            'code' => $country['code'],
            'flag_url' => Arr::get($country, 'flag.url'),
            'flag_alt' => Arr::get($country, 'flag.alt'),
        ];
    }
}
