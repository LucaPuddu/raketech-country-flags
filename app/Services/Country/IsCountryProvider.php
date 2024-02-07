<?php

namespace App\Services\Country;

use Illuminate\Support\Collection;

interface IsCountryProvider
{
    public function fetch(): Collection;
}
