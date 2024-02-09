<?php

namespace Tests\Unit\Services;

use App\Events\CountriesCacheMiss;
use App\Models\Country;
use App\Services\CountryService;
use Event;
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

    protected function setUp(): void
    {
        parent::setUp();

        Country::query()->forceDelete();
        Cache::delete(CountryService::CACHE_KEY_LIST);
    }

    public function test_replace_all_saves_countries_in_db_and_cache(): void
    {
        // Prepare
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

    public function test_list_returns_countries_from_cache_first()
    {
        // Prepare
        $db = Country::factory(5)->create();
        $cache = Country::factory(5)->create();
        Cache::forever(CountryService::CACHE_KEY_LIST, $cache);

        // Act
        $countries = $this->service->list();

        // Assert
        $this->assertNotEquals($db, $countries);
        $this->assertEquals($cache, $countries);
    }

    public function test_list_returns_countries_from_db_if_cache_is_not_a_collection()
    {
        // Prepare
        $db = Country::factory(5)->create()->map->toResponsable();
        $cache = Country::factory(5)->make()->toArray(); //Not a Collection
        Cache::forever(CountryService::CACHE_KEY_LIST, $cache);
        Event::fake();

        // Act
        $countries = $this->service->list();

        // Assert
        $this->assertEquals($db, $countries);
        $this->assertNotEquals($cache, $countries);
    }

    public function test_list_returns_countries_from_db_if_cache_is_empty()
    {
        // Prepare
        $db = Country::factory(5)->create()->map->toResponsable();
        $cache = collect();
        Cache::forever(CountryService::CACHE_KEY_LIST, $cache);
        Event::fake();

        // Act
        $countries = $this->service->list();

        // Assert
        $this->assertEquals($db, $countries);
        $this->assertNotEquals($cache, $countries);
    }

    public function test_list_signals_cache_miss_if_cache_is_not_a_collection()
    {
        // Prepare
        Cache::forever(CountryService::CACHE_KEY_LIST, Country::factory(5)->make()->toArray());
        Event::fake();

        Event::assertNotDispatched(CountriesCacheMiss::class);

        // Act
        $this->service->list();

        // Assert
        Event::assertDispatched(CountriesCacheMiss::class);

    }

    public function test_list_signals_cache_miss_if_cache_is_empty()
    {
        // Prepare
        Cache::forever(CountryService::CACHE_KEY_LIST, collect());
        Event::fake();

        Event::assertNotDispatched(CountriesCacheMiss::class);

        // Act
        $this->service->list();

        // Assert
        Event::assertDispatched(CountriesCacheMiss::class);

    }

    public function test_to_responsable_returns_correct_array_format()
    {
        // Prepare
        $country = Country::factory()->make();

        // Act
        $responsable = $this->service->toResponsable($country);

        // Assert
        $this->assertEquals(
            [
                "name" => $country->name,
                "code" => $country->code,
                "flag" => [
                    "url" => $country->flag_url,
                    "alt" => $country->flag_alt
                ]
            ],
            $responsable
        );
    }

    public function test_to_responsable_does_not_fail_if_flag_data_is_missing()
    {
        // Prepare
        $country = Country::factory()->make([
            'flag_url' => null,
            'flag_alt' => null,
        ]);

        // Act
        $responsable = $this->service->toResponsable($country);

        // Assert
        $this->assertEquals(
            [
                "name" => $country->name,
                "code" => $country->code,
                "flag" => [
                    "url" => null,
                    "alt" => null
                ]
            ],
            $responsable
        );
    }
}
