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
    public function testBasic()
    {
        $response = $this->get(route('scav.single'));

        $response->assertStatus(200);
    }

    public function testTeam()
    {
        $response = $this->get(route('scav.team'));

        $response->assertStatus(200);
    }

    public function testStats()
    {
        $response = $this->get(route('scav.stats'));

        $response->assertStatus(200);
    }
}
