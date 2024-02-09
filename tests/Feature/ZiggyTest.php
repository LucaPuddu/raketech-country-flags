<?php

use Tests\TestCase;

class ZiggyTest extends TestCase
{
    public function test_is_available_to_guests()
    {
        // Prepare
        $this->assertGuest();
        $ziggy = new Tightenco\Ziggy\Ziggy();

        // Act
        $response = $this->get(route('api.routes'));

        // Assert
        $response->assertJson($ziggy->toArray());
    }
}
