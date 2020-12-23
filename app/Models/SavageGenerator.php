<?php

namespace App\Models;

class SavageGenerator
{
    const TEAM_SIZE = 5;
    protected $firstNames = ['Христофор', 'Илья', 'Сеня', 'Жека', 'Тоха',
                             'Олег', 'Константин', 'Андрей', 'Артём', 'Никита',
                             'Игорь', 'Витёк', 'Гога', 'Савелий', 'Вова', 'Ярик',
                             'Всеволод', 'Митяй', 'Вениамин', 'Алексей', 'Яша',
                             'Данила', 'Лёва', 'Саша', 'Саня', 'Женя',
                             'Костян', 'Аристарх', 'Альвиан', 'Артур',
                             'Спиридон', 'Пахомий'];

    protected $lastNames = ['Работник', 'Программист', 'Тридемакс', 'Дотер',
                            'Тиктокер', 'Ястреб', 'Ненаркоторговец', 'Очко',
                            'Петух', 'Шиза', 'Пошлый', 'Заднеприводной', 'Заводской',
                            'Вертухай', 'Анимешник', 'Кабанчик', 'Вист', 'Охрана',
                            'Кальяньщик', 'Хирург', 'Дюбель', 'Всемогущий',
                            'Аристократ', 'Дихлофос', 'Коптёр', 'Чужой', 'Мальчик',
                            'Хук', 'Секретарь', 'Шницель', 'Овощебаза',
                            'Монгол', 'Иуда', 'Ипотека', 'Бугор'];

    protected function generateFirstName()
    {
        $length = count($this->firstNames);
        $number = random_int(0, $length - 1);
        $preparedFirstName = ucfirst(strtolower($this->firstNames[$number]));
        return $preparedFirstName;
    }

    protected function generateLastName()
    {
        $length = count($this->lastNames);
        $number = random_int(0, $length - 1);
        $preparedLastName = ucfirst(strtolower($this->lastNames[$number]));
        return $preparedLastName;
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

    public function listFirstNames()
    {
        return $this->firstNames;
    }

    public function listLastNames()
    {
        return $this->lastNames;
    }

    public function generateTeam()
    {
        $alreadyGenerated = [];
        $namesList = [];
        while (count($namesList) != 5) {
            $names = $this->generate();
            $fullName = $names['fullName'];
            if (!in_array($fullName, $alreadyGenerated)) {
                $namesList[] = $names;
                $alreadyGenerated[] = $fullName;
            }
        }
        return $namesList;
    }
}
