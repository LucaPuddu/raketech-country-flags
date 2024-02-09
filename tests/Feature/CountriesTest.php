<?php

use App\Http\Middleware\Authenticate;
use App\Services\CountryService;
use Tests\TestCase;

class CountriesTest extends TestCase
{
    public function test_redirects_to_auth0_login_if_guest(): void
    {
        $response = $this->get(route('api.countries'));
        $this->assertGuest();
        $response->assertRedirectToRoute('login');
    }

    public function test_return_list_if_authenticated(): void
    {
        // Prepare
        /*
         * Not straightforward to authenticate an Auth0 user.
         * It's not the same thing, but we can assume that the Authenticate middleware will just return $next($request)
         * if the user is authenticated.
         */
        $this->withoutMiddleware(Authenticate::class);

        $service = $this->mock(CountryService::class);
        $service->shouldReceive('list')->andReturn(collect(['abc']));

        // Act
        $response = $this->get(route('api.countries'));

        // Test
        $response->assertOk();
        $response->assertExactJson(collect(['abc'])->toArray());
    }
}
