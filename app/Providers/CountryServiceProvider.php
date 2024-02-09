<?php

namespace App\Providers;

use App\Enums\CountryProvider;
use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $provider = CountryProvider::fromName(config('countries.provider'));

        app()->singleton(
            \App\Services\Country\CountryProvider::class,
            $provider->implementation()
        );
    }
}
