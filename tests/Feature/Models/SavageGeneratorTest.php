<?php

namespace Tests\Feature\Models;

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
        assertTrue(key_exists("rarity", $names));
    }

    public function testSavageTeamGeneration()
    {
        $names = $this->generator->generateTeam();
        $teamSize = SavageGenerator::TEAM_SIZE;
        assertTrue(is_array($names));
        $this->assertEquals(count($names), $teamSize, "Incorrect team generation size!");
    }

    public function testUniqNames()
    {
        $firstNames = $this->generator->listFirstNames();
        $lastNames = $this->generator->listLastNames();
        $uniqFirstNames = array_unique($firstNames);
        $uniqLastNames = array_unique($lastNames);
        $this->assertEquals($firstNames, $uniqFirstNames, "First names have duplicates! Remove names with `-` sign!");
        $this->assertEquals($lastNames, $uniqLastNames, "Last names have duplicates! Remove names with `-` sign!");
    }

    public function testNamesNaming()
    {
        $firstNames = $this->generator->listFirstNames();
        $lastNames = $this->generator->listLastNames();
        $pregRegular = function ($name) {
            return boolval(preg_match('/^[a-z-а-яё]+$/iu', $name));
        };
        $filteredFirstNames = array_filter($firstNames, $pregRegular);
        $filteredLastNames = array_filter($lastNames, $pregRegular);
        $this->assertEquals($firstNames, $filteredFirstNames, "There are some incorrect first names!");
        $this->assertEquals($lastNames, $filteredLastNames, "There are some incorrect last names!");
    }

    public function testEpicRarity()
    {
        $name = "Яшка Полторашка";
        $this->assertEquals($this->generator->checkRarity($name), "epic");
    }

    public function testLegendaryRarity()
    {
        $name = "Гит Пуш";
        $this->assertEquals($this->generator->checkRarity($name), "legendary");
    }

    public function testRareRarity()
    {
        $name = "Гагик Глазастый";
        $this->assertEquals($this->generator->checkRarity($name), "rare");
    }

    public function testUncommonRarity()
    {
        $name = "Назар Бобик";
        $this->assertEquals($this->generator->checkRarity($name), "uncommon");
    }
}
