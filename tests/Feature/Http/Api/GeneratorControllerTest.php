<?php

namespace Tests\Feature\Http\Api;

use Tests\TestCase;

class GeneratorControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicApiTest()
    {
        $response = $this->get(route('api.single'));
        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "application/json");
    }

    public function testApiHealthTest()
    {
        $response = $this->get(route('api.health'));
        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "application/json");
    }

    public function testTeamApiTest()
    {
        $response = $this->get(route('api.team'));
        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "application/json");
    }

    public function testStatsApiTest()
    {
        $response = $this->get(route('api.stats'));
        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "application/json");
    }
}
