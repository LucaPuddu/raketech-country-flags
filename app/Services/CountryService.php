<?php

namespace App\Services;

use App\Events\CountriesCacheMiss;
use App\Models\Country;
use App\Services\Country\CountryProvider;
use App\Services\Country\StaticCountryProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CountryService
{
    public const string CACHE_KEY_LIST = 'countries.list';

    public function list(): Collection
    {
        /*
         * We do NOT want to fetch from any remote API here,
         * as this method can be invoked by many users at the same time.
         * Thus, it could happen that the app tries to query the remote API many times in rapid succession.
         *
         * Instead, let's rely on the static fallback
         */
        $countries = Cache::get(self::CACHE_KEY_LIST);

        // We transform each model to a different format
        if (! ($countries instanceof Collection) || $countries->isEmpty()) {
            $countries = Country::all()->map->toResponsable();

            // Take countermeasures, asynchronously
            CountriesCacheMiss::dispatch();
        }

        if ($countries->isEmpty()) {
            // Fallback to static provider
            $countries = app(StaticCountryProvider::class)->fetch();
        }

        return $countries;
    }

    public function replaceAll(Collection $countries): void
    {
        $provider = app(CountryProvider::class);

        Country::query()->forceDelete();
        Country::query()->insert(
            $countries
                ->map(fn (array $country) => $provider->toCountryAttributes($country))
                ->values()
                ->toArray()
        );

        Cache::forever(self::CACHE_KEY_LIST, $countries->values());
    }

    public function toResponsable(Country $country): array
    {
        return [
            'name' => $country->name,
            'code' => $country->code,
            'flag' => [
                'url' => $country->flag_url,
                'alt' => $country->flag_alt,
            ],
        ];
    }
}
