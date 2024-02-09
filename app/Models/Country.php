<?php

namespace App\Models;

use App\Services\CountryService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function toResponsable(): array
    {
        return app(CountryService::class)->toResponsable($this);
    }
}
