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
        $response = $this->get('/api/single');

        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "application/json");
    }

    public function testTeamApiTest()
    {
        $response = $this->get('/api/team');

        $response->assertStatus(200);
        $response->assertHeader("Content-Type", "application/json");
    }
}
