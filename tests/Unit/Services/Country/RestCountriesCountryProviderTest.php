<?php

namespace Tests\Unit\Services\Country;

use App\Exceptions\UnexpectedCountriesFormatException;
use App\Services\Country\RestCountriesCountryProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use stdClass;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tests\TestCase;
use Tests\WithFaker;
use Throwable;

class RestCountriesCountryProviderTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    protected RestCountriesCountryProvider $provider;

    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->provider = app(RestCountriesCountryProvider::class);
    }

    public static function getInvalidValidateResponseValues(): array
    {
        $withoutName = [
            [
                'cca2' => 'Lorem ipsum',
                'flags' => [
                    'svg' => 'http://dfsdf.com/sdfsdf.svg',
                    'alt' => 'Dolor sit amet',
                ],
            ],
        ];

        $withoutName2 = [
            [
                'cca2' => 'Lorem ipsum',
                'name' => [
                    'a random key' => 'Lorem ipsum',
                ],
                'flags' => [
                    'svg' => 'http://dfsdf.com/sdfsdf.svg',
                    'alt' => 'Dolor sit amet',
                ],
            ],
        ];

        $withoutCode = [
            [
                'name' => [
                    'common' => 'Lorem ipsum',
                ],
                'flags' => [
                    'svg' => 'http://dfsdf.com/sdfsdf.svg',
                    'alt' => 'Dolor sit amet',
                ],
            ],
        ];

        return [
            'non array (object)' => [new stdClass(), [false, null]],
            'non array (scalar number)' => [123, [false, null]],
            'non array (scalar string)' => ['Hello', [false, null]],
            'without name' => [$withoutName, [false, null]],
            'without name.common' => [$withoutName2, [false, null]],
            'without cca2' => [$withoutCode, [false, null]],
        ];
    }

    public static function getValidValidateResponseValues(): array
    {
        $completeExample = [
            [
                'name' => [
                    'common' => 'Lorem ipsum',
                ],
                'cca2' => 'Dolor sit',
                'flags' => [
                    'svg' => 'http://dfsdf.com/sdfsdf.svg',
                    'alt' => 'Dolor sit amet',
                ],
            ],
        ];

        $withoutFlags = $completeExample;
        unset($withoutFlags[0]['flags']);

        $withoutSvg = $completeExample;
        unset($withoutSvg[0]['flags']['svg']);

        $withoutAlt = $completeExample;
        unset($withoutAlt[0]['flags']['alt']);

        return [
            'complete example' => [$completeExample, [true, $completeExample]],
            'without flags' => [$withoutFlags, [true, $withoutFlags]],
            'without flag image' => [$withoutSvg, [true, $withoutSvg]],
            'without flag alt' => [$withoutAlt, [true, $withoutAlt]],
        ];
    }

    /**
     * @dataProvider getInvalidValidateResponseValues
     */
    public function test_validate_response_fails(mixed $input, array $output)
    {
        $this->assertEquals($output, $this->invokeMethod($this->provider, 'validateResponse', [$input]));
    }

    /**
     * @dataProvider getValidValidateResponseValues
     */
    public function test_validate_response_passes(mixed $input, array $output)
    {
        $this->assertEquals($output, $this->invokeMethod($this->provider, 'validateResponse', [$input]));
    }

    public function test_transform_received_data_returns_a_collection_of_responsable_countries()
    {
        // Prepare
        $input = [
            $this->fakeCountry(),
            $this->fakeCountry(),
        ];

        // Act
        $output = $this->invokeMethod($this->provider, 'transformReceivedData', [$input]);

        // Assert
        $this->assertEquals(
            collect([
                [
                    'name' => $input[0]['name']['common'],
                    'code' => $input[0]['cca2'],
                    'flag' => [
                        'url' => Arr::get($input[0], 'flags.svg'),
                        'alt' => Arr::get($input[0], 'flags.alt'),
                    ],
                ],
                [
                    'name' => $input[1]['name']['common'],
                    'code' => $input[1]['cca2'],
                    'flag' => [
                        'url' => Arr::get($input[1], 'flags.svg'),
                        'alt' => Arr::get($input[1], 'flags.alt'),
                    ],
                ],

            ]),
            $output
        );
    }

    public function test_fetch_returns_correct_data()
    {
        // Prepare
        Http::fake([
            '*' => Http::response([
                $country1 = $this->fakeCountry(),
                $country2 = $this->fakeCountry(),
            ]),
        ]);

        // Act
        $response = $this->provider->fetch();

        // Assert
        $this->assertEquals(
            collect([
                [
                    'name' => $country1['name']['common'],
                    'code' => $country1['cca2'],
                    'flag' => [
                        'url' => Arr::get($country1, 'flags.svg'),
                        'alt' => Arr::get($country1, 'flags.alt'),
                    ],
                ],
                [
                    'name' => $country2['name']['common'],
                    'code' => $country2['cca2'],
                    'flag' => [
                        'url' => Arr::get($country2, 'flags.svg'),
                        'alt' => Arr::get($country2, 'flags.alt'),
                    ],
                ],
            ]),
            $response
        );
    }

    public function test_fetch_throws_exception_if_the_received_format_is_incorrect()
    {
        // Prepare
        Http::fake([
            '*' => Http::response([
                ['lorem' => 'ipsum'],
            ]),
        ]);

        // Assert
        $this->expectException(UnexpectedCountriesFormatException::class);

        // Act
        $this->provider->fetch();
    }

    public function test_fetch_aborts_if_api_fails()
    {
        // Prepare
        Http::fake([
            '*' => Http::response([], Response::HTTP_INTERNAL_SERVER_ERROR),
        ]);
        $e = null;

        // Act
        try {
            $this->provider->fetch();
        } catch (Throwable $e) {
        }

        // To test the exception status code (http code), we need to catch it here instead of expecting it before the Act
        $this->assertEquals(
            new HttpException(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                'There was a problem contacting the RestCountries API.'
            ),
            $e
        );
    }

    private function fakeCountry(): array
    {
        $faker = $this->faker();

        return [
            'name' => [
                'common' => $faker->country,
            ],
            'cca2' => $faker->countryCode,
            'flags' => [
                'svg' => $faker->url,
                'alt' => $faker->realText(50),
            ],
        ];
    }
}
