<?php

namespace Tests\Feature;
use Tests\TestCase;
use App\Models\SavageGenerator;
use function PHPUnit\Framework\assertTrue;

class SavageGeneratorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSavageNameGeneration()
    {
        $generator = new SavageGenerator();
        $names = $generator->generate();
        assertTrue(is_array($names));
        assertTrue(key_exists("firstName", $names));
        assertTrue(key_exists("lastName", $names));
        assertTrue(key_exists("fullName", $names));
    }
}
