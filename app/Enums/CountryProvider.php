<?php

namespace App\Enums;

use App\Services\Country\RestCountriesCountryProvider;
use App\Services\Country\StaticCountryProvider;
use ValueError;

enum CountryProvider: int
{
    case STATIC = 0;
    case REST_COUNTRIES = 1;

    public static function fromName(string $name): self
    {
        foreach (self::cases() as $status) {
            if( $name === $status->name ){
                return $status;
            }
        }

        throw new ValueError("$name is not a valid backing value for enum " . self::class );
    }

    public function implementation(): string
    {
        return match ($this) {
            self::STATIC => StaticCountryProvider::class,
            self::REST_COUNTRIES => RestCountriesCountryProvider::class,
        };
    }
}
