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
    }
    public function testSavageNameGeneration()
    {
        $names = SavageGenerator::generate();
        assertTrue(is_array($names));
        assertTrue(key_exists("firstName", $names));
        assertTrue(key_exists("lastName", $names));
        assertTrue(key_exists("fullName", $names));
        assertTrue(key_exists("rarity", $names));
    }

    public function testSavageTeamGeneration()
    {
        $names = SavageGenerator::generateTeam();
        $teamSize = SavageGenerator::TEAM_SIZE;
        assertTrue(is_array($names));
        $this->assertEquals(count($names), $teamSize, "Incorrect team generation size!");
    }

    public function testUniqNames()
    {
        $firstNames = SavageGenerator::RU_FIRST_NAMES;
        $lastNames = SavageGenerator::RU_LAST_NAMES;
        $uniqFirstNames = array_unique($firstNames);
        $uniqLastNames = array_unique($lastNames);
        $this->assertEquals($firstNames, $uniqFirstNames, "First names have duplicates! Remove names with `-` sign!");
        $this->assertEquals($lastNames, $uniqLastNames, "Last names have duplicates! Remove names with `-` sign!");
    }

    public function testNamesNaming()
    {
        $firstNames = SavageGenerator::RU_FIRST_NAMES;
        $lastNames = SavageGenerator::RU_LAST_NAMES;
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
        $this->assertEquals(SavageGenerator::checkRarity($name), "epic");
    }

    public function testLegendaryRarity()
    {
        $name = "Гит Пуш";
        $this->assertEquals(SavageGenerator::checkRarity($name), "legendary");
    }

    public function testRareRarity()
    {
        $name = "Гагик Глазастый";
        $this->assertEquals(SavageGenerator::checkRarity($name), "rare");
    }

    public function testUncommonRarity()
    {
        $name = "Назар Бобик";
        $this->assertEquals(SavageGenerator::checkRarity($name), "uncommon");
    }
}
