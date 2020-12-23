<?php

namespace Tests\Feature;
use Tests\TestCase;
use App\Models\SavageGenerator;
use function PHPUnit\Framework\assertTrue;

class SavageGeneratorTest extends TestCase
{
    protected $generator;

    public function setUp(): void
    {
        parent::setUp();
        $this->generator = new SavageGenerator();
    }
    public function testSavageNameGeneration()
    {
        $names = $this->generator->generate();
        assertTrue(is_array($names));
        assertTrue(key_exists("firstName", $names));
        assertTrue(key_exists("lastName", $names));
        assertTrue(key_exists("fullName", $names));
    }

    public function testSavageTeamGeneration()
    {
        $names = $this->generator->generateTeam();
        $teamSize = SavageGenerator::TEAM_SIZE;
        assertTrue(is_array($names));
        $this->assertEquals(count($names), $teamSize, "Incorrect team generation!");
    }

    public function testUniqNames()
    {
        $firstNames = $this->generator->listFirstNames();
        $lastNames = $this->generator->listLastNames();
        $uniqFirstNames = array_unique($firstNames);
        $uniqLastNames = array_unique($lastNames);
        $this->assertEquals(count($firstNames), count($uniqFirstNames), "First names have dublicates!");
        $this->assertEquals(count($lastNames), count($uniqLastNames), "Last names have dublicates!");
    }

    public function testNamesNaming()
    {
        $firstNames = $this->generator->listFirstNames();
        $lastNames = $this->generator->listLastNames();
        $pregRegular = function ($name) {
            return boolval(preg_match('/^[a-zа-яё]+$/iu', $name));
        };
        $filteredFirstNames = array_filter($firstNames, $pregRegular);
        $filteredLastNames = array_filter($lastNames, $pregRegular);
        $this->assertEquals(count($firstNames), count($filteredFirstNames), "There are some incorrect first names!");
        $this->assertEquals(count($lastNames), count($filteredLastNames), "There are some incorrect last names!");
    }
}
