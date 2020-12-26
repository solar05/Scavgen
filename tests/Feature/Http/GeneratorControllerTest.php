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
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testTeamTest()
    {
        $response = $this->get('/team');

        $response->assertStatus(200);
    }
}
