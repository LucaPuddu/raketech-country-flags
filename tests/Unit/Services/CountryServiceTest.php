<?php

namespace Tests\Unit\Services;

use App\Models\Country;
use App\Services\CountryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class CountryServiceTest extends TestCase
{
    use RefreshDatabase;

    protected CountryService $service;

    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->service = app(CountryService::class);
    }

    public function test_replace_all_saves_countries_in_db_and_cache(): void
    {
        // Prepare
        Country::query()->forceDelete();
        Cache::delete(CountryService::CACHE_KEY_LIST);

        $countries = Country::factory(5)->make()->map->toResponsable();

        // Sanity checks
        $this->assertNull(Cache::get(CountryService::CACHE_KEY_LIST));
        $this->assertDatabaseCount(Country::class, 0);
        $this->assertNotEquals($countries, Cache::get(CountryService::CACHE_KEY_LIST));
        $this->assertNotEquals($countries, Country::all()->map->toResponsable());

        // Act
        $this->service->replaceAll($countries);

        // Assert
        $this->assertEquals($countries, Cache::get(CountryService::CACHE_KEY_LIST));
        $this->assertEquals($countries, Country::all()->map->toResponsable());
    }

    public function test_replace_all_overwrites_existing_countries(): void
    {
        // Prepare
        Country::query()->forceDelete();
        Cache::delete(CountryService::CACHE_KEY_LIST);

        $countries = Country::factory(5)->create()->map->toResponsable();
        Cache::forever(CountryService::CACHE_KEY_LIST, $countries);

        $differentCountries = Country::factory(5)->make()->map->toResponsable();

        // Sanity checks
        $preExistingDb = Country::all()->map->toResponsable();
        $preExistingCache = Cache::get(CountryService::CACHE_KEY_LIST);
        $this->assertEquals($countries, $preExistingCache);
        $this->assertEquals($countries, $preExistingDb);
        $this->assertNotEquals($differentCountries, $preExistingCache);
        $this->assertNotEquals($differentCountries, $preExistingDb);

        // Act
        $this->service->replaceAll($differentCountries);

        // Assert
        $newDb = Country::all()->map->toResponsable();
        $newCache = Cache::get(CountryService::CACHE_KEY_LIST);
        $this->assertNotEquals($countries, $newCache);
        $this->assertNotEquals($countries, $newDb);
        $this->assertEquals($differentCountries, $newCache);
        $this->assertEquals($differentCountries, $newDb);
    }
}
