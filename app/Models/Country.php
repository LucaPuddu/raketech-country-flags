<?php

namespace App\Models;

use App\Services\CountryService;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function toResponsable(): array
    {
        return app(CountryService::class)->toResponsable($this);
    }
}
