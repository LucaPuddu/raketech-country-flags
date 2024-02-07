<?php

namespace App\Services\Country;

use App\Exceptions\UnexpectedCountriesFormatException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RestCountriesCountryProvider extends AbstractCountryProvider
{
    public const bool PREFETCH = true;
    protected const string URL = 'https://restcountries.com/v3.1/all?fields=name,flags,code,cca2';

    /**
     * @throws UnexpectedCountriesFormatException
     */
    public function fetch(): Collection
    {
        // Nothing found. Go on querying the API
        $response = Http::get(self::URL);

        if ($response->failed()) {
            Log::error($response->body());

            abort($response->status(), 'There was a problem contacting the RestCountries API.');
        }

        [$isValid, $validatedData] = $this->validateResponse($response);

        if (!$isValid) {
            throw new UnexpectedCountriesFormatException("Unexpected format received from RestCountries API");
        }

        return $this->transformReceivedData($validatedData);
    }

    public function validateResponse(Response $response): array
    {
        $data = $response->json();

        if (!is_array($data)) {
            return [false, null];
        }

        $validator = Validator::make(
            // We need to wrap it as Laravel doesn't support top-level array in validation rules
            ['data' => $data],
            [
                'data.*.name.common' => ['required', 'string'],
                'data.*.cca2' => ['required', 'string'],
                'data.*.flags.svg' => ['string'],
                'data.*.flags.alt' => ['string'],
            ]
        );

        return [
            $validator->valid(),
            $validator->valid() ? $response->json() : null
        ];
    }

    private function transformReceivedData(array $data): Collection
    {
        return collect($data)
            ->map(fn (array $country) => [
                "name" => $country['name']['common'],
                "code" => $country['cca2'],
                "flag" => [
                    "url" => Arr::get($country, 'flags.svg'),
                    "alt" => Arr::get($country, 'flags.alt')
                ]
            ])
            ->values();
    }
}
