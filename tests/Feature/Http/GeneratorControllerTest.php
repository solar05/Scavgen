<?php

namespace Tests\Feature\Http;

use Tests\TestCase;

class GeneratorControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get(route('single'));

        $response->assertStatus(200);
    }

    public function testTeamTest()
    {
        $response = $this->get(route('team'));

        $response->assertStatus(200);
    }

    public function testStatsTest()
    {
        $response = $this->get(route('stats'));

        $response->assertStatus(200);
    }
}
