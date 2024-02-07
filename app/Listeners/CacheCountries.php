<?php

namespace App\Listeners;

use App\Jobs\PrefetchCountries;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class CacheCountries implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(): void
    {
        PrefetchCountries::dispatchSync();
    }
}
