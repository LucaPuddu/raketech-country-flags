<?php

namespace App\Console;

use App\Jobs\PrefetchCountries;
use App\Services\Country\CountryProvider;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        if (app(CountryProvider::class)::PREFETCH) {
            // TODO: validate env value
            $fetchCountriesCron = config('countries.prefetch_cron');

            $schedule
                ->job(PrefetchCountries::class)
                ->cron($fetchCountriesCron);
        }
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
