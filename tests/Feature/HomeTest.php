<?php

namespace Tests\Feature;

use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_redirects_to_auth0_login_if_guest(): void
    {
        $response = $this->get(route('home'));
        $this->assertGuest();
        $response->assertRedirectToRoute('login');
    }

    public function test_return_home_view_if_authenticated(): void
    {
        /*
         * Not straightforward to authenticate an Auth0 user.
         * It's not the same thing, but we can assume that the Authenticate middleware will just return $next($request)
         * if the user is authenticated.
         */
        $this->withoutMiddleware(Authenticate::class);

        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertViewIs('home');
    }
}
