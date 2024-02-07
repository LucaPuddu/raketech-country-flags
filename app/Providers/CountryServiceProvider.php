<?php

namespace App\Providers;

use App\Enums\CountryProvider;
use App\Services\Country\AbstractCountryProvider;
use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $provider = CountryProvider::fromName(config('countries.provider'));

        app()->singleton(
            AbstractCountryProvider::class,
            $provider->implementation()
        );
    }
}
