<?php

namespace App\Jobs;

use App\Services\Country\AbstractCountryProvider;
use App\Services\Country\StaticCountryProvider;
use App\Services\CountryService;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class PrefetchCountries implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(AbstractCountryProvider $provider, CountryService $countryService): void
    {
        $countries = collect();

        try {
            $countries = $provider->fetch();
        } catch (Exception $exception) {
            // Don't stop here
        }

        // Fallback to static values
        if (!($countries instanceof Collection) || $countries->isEmpty()) {
            $countries = app(StaticCountryProvider::class)->fetch();
        }

        $countryService->replaceAll($countries);
    }
}
