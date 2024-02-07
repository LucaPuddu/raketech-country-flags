<?php

return [
    'provider' => env('COUNTRY_PROVIDER', \App\Enums\CountryProvider::REST_COUNTRIES->name),
    'prefetch_cron' => env('PREFETCH_CRON', '*/5 * * * *')
];
