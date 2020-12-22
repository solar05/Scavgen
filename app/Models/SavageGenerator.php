<?php

namespace App\Models;

class SavageGenerator
{

    protected $firstNames = ['Христофор', 'Илья', 'Сеня', 'Жека', 'Тоха',
                             'Олег', 'Константин', 'Андрей', 'Артём', 'Никита'];
    protected $lastNames = ['Работник', 'Программист', 'Тридемакс', 'Дотер',
                            'Тиктокер', 'Ястреб', 'Ненаркоторговец', 'Очко', 'Петух', 'Шиза'];

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
