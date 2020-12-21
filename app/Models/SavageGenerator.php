<?php

namespace App\Models;

class SavageGenerator
{

    protected $firstNames = ['Христофор', 'Илья'];
    protected $lastNames = ['Работник', 'Программист'];

    protected function generateFirstName()
    {
        $length = count($this->firstNames);
        $number = random_int(0, $length - 1);
        return $this->firstNames[$number];
    }

    protected function generateLastName()
    {
        $length = count($this->lastNames);
        $number = random_int(0, $length - 1);
        return $this->lastNames[$number];
    }

    public function generate()
    {
        $firstName = $this->generateFirstName();
        $lastName = $this->generateLastName();
        $fullName = "{$firstName} {$lastName}";
        return ['firstName' => $firstName,
                'lastName' => $lastName,
                'fullName' => $fullName];
    }
}
