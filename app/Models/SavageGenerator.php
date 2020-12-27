<?php

namespace App\Models;

class SavageGenerator
{
    public const TEAM_SIZE = 5;
    protected $firstNames = ['Христофор', 'Илья', 'Сеня', 'Жека', 'Тоха',
                             'Олег', 'Константин', 'Андрей', 'Артём', 'Никита',
                             'Игорь', 'Витёк', 'Гога', 'Савелий', 'Вова', 'Ярик',
                             'Всеволод', 'Митяй', 'Вениамин', 'Алексей', 'Яша',
                             'Данила', 'Лёва', 'Саша', 'Саня', 'Женя',
                             'Костян', 'Аристарх', 'Альвиан', 'Артур',
                             'Спиридон', 'Пахомий', 'Мэн', 'Жора',
                             'Павлик', 'Захар', 'Самуил', 'Армен', 'Петя',
                             'Миша', 'Владик', 'Денчик', 'Юра', 'Жан', 'Сэм',
                             'Клим', 'Серый', 'Радик', 'Трофим',
                             'Таир', 'Кабан', 'Тимурка', 'Юрик', 'Даня',
                             'Панфутий', 'Арчи', 'Герчик', 'Сава', 'Багратион',
                             'Гагик', 'Виктор', 'Иммануил', 'Попка', 'Иннокентий',
                             'Дима', 'Гена', 'Жак', 'Прокопий'];

    protected $lastNames = ['Работник', 'Программист', 'Тридемакс', 'Дотер',
                            'Тиктокер', 'Ястреб', 'Ненаркоторговец', 'Очко',
                            'Петух', 'Шиза', 'Пошлый', 'Заднеприводной', 'Заводской',
                            'Вертухай', 'Анимешник', 'Кабанчик', 'Вист', 'Охрана',
                            'Кальяньщик', 'Хирург', 'Дюбель', 'Всемогущий',
                            'Аристократ', 'Дихлофос', 'Коптёр', 'Чужой', 'Мальчик',
                            'Хук', 'Секретарь', 'Шницель', 'Овощебаза',
                            'Монгол', 'Иуда', 'Ипотека', 'Бугор',
                            'Тамада', 'Пекуш', 'Робин', 'Торч', 'РХБЗ',
                            'Робокоп', 'Репа', 'Тесак', 'Плесень', 'РЖД', 'Слесарь',
                            'Верховный', 'Ноль', 'Грибник', 'Бородач', 'Барыга',
                            'Шприц', 'Арбидол', 'Суходрищев', 'Сиплый', 'Гаджет',
                            'Шульц', 'Кацман', 'Япончик', 'Сотона', 'Корч', 'Примус',
                            'Кардан', 'Приличный', 'Сбалансированный', 'Приемлемый',
                            'Умный', 'Красивый', 'Урод', 'Мужчина'];

    protected $specialNames = ['РХБЗ', 'РЖД'];

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
        $lastName = $this->lastNames[$number];
        if (in_array($lastName, $this->specialNames)) {
            $preparedLastName = $lastName;
        }
        $preparedLastName = ucfirst(strtolower($lastName));
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
