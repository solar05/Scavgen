<?php

namespace App\Models;

class SavageGenerator
{
    public const TEAM_SIZE = 5;

    public static function generateFirstName($locale = 'RU')
    {
        $names = constant("App\Models\SavageNames::{$locale}_FIRST_NAMES");
        $length = count($names);
        $number = random_int(0, $length - 1);
        $preparedFirstName = ucfirst(strtolower($names[$number]));
        return $preparedFirstName;
    }

    public static function generateLastName($firstName, $locale = 'RU')
    {
        $names = constant("App\Models\SavageNames::{$locale}_LAST_NAMES");
        $duplicateIndex = array_search($firstName, $names);
        $length = count($names);
        $index = $duplicateIndex == false ?
            random_int(0, $length - 1) : random_int(0, $duplicateIndex - 1);

        return $names[$index];
    }

    private static function prepareLocale($locale = 'ru')
    {
        return strtoupper($locale);
    }

    public static function generate($locale = 'ru')
    {
        $preparedLocale = self::prepareLocale($locale);
        $firstName = self::generateFirstName($preparedLocale);
        $lastName = self::generateLastName($firstName, $preparedLocale);

        $fullName = "{$firstName} {$lastName}";
        $rarity = self::checkRarity($fullName);

        return ['firstName' => $firstName,
                'lastName' => $lastName,
                'fullName' => $fullName,
                'rarity' => $rarity];
    }

    public static function generateTeam($locale = 'ru', $teamSize = self::TEAM_SIZE)
    {
        $preparedLocale = self::prepareLocale($locale);
        $alreadyGenerated = [];
        $namesList = [];

        while (count($namesList) != $teamSize) {
            $names = self::generate($preparedLocale);
            $fullName = $names['fullName'];
            if (!in_array($fullName, $alreadyGenerated)) {
                $namesList[] = $names;
                $alreadyGenerated[] = $fullName;
            }
        }
        return $namesList;
    }

    private static function isLegendary($fullName, $locale = 'RU')
    {
        $preparedLocale = self::prepareLocale($locale);
        return in_array($fullName, constant("App\Models\SavageNames::{$preparedLocale}_LEGENDARY_NAMES"));
    }

    private static function isEpic($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);

        $firstLength = strlen($firstName);
        $secondLength = strlen($secondName);

        $firstSub = mb_substr($firstName, -(intval(intval($firstLength / 2) / 2) + 1));
        $secondSub = mb_substr($secondName, -(intval(intval($secondLength / 2) / 2) + 1));

        $firstSubLength = intval(strlen($firstSub) / 2);
        $secondSubLength = intval(strlen($secondSub) / 2);

        $firstTerm = mb_strtolower(mb_substr($firstName, -3));
        $secondTerm = mb_strtolower(mb_substr($secondName, -3));
        if ($firstSubLength < 3 || $secondSubLength < 3 || abs($firstSubLength - $secondSubLength) > 3) {
            return false;
        } elseif ($firstTerm == $secondTerm) {
            return true;
        }

        $firstTerm = $firstSub;
        $secondTerm = $secondSub;
        $entry = strstr($secondTerm, $firstTerm);
        return boolval($entry);
    }

    private static function isRare($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);
        $firstTerm = mb_strtolower(mb_substr($firstName, 0, 1));
        $secondTerm = mb_strtolower(mb_substr($secondName, 0, 1));
        return $firstTerm == $secondTerm;
    }

    private static function isUncommon($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);
        return strlen($firstName) == strlen($secondName);
    }

    public static function checkRarity($fullName)
    {
        $rarity = "common";
        if (self::isLegendary($fullName)) {
             $rarity = "legendary";
        } elseif (self::isEpic($fullName)) {
            $rarity = "epic";
        } elseif (self::isRare($fullName)) {
            $rarity = "rare";
        } elseif (self::isUncommon($fullName)) {
            $rarity = "uncommon";
        }
        return $rarity;
    }
}
