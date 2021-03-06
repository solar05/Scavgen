<?php

namespace App\Models;

class SavageGenerator
{
    public const TEAM_SIZE = 5;
    protected $firstNames = [
        'Христофор', 'Илья', 'Сеня', 'Жека', 'Тоха',
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
        'Дима', 'Гена', 'Жак', 'Прокопий', 'Серега', 'Илюша',
        'Сергей', 'Женька', 'Анатолий', 'Олежа', 'Олежка',
        'Костик', 'Костечка', 'Андрюша', 'Андрейка',
        'Артёмка', 'Никитос', 'Владислав', 'Михаил', 'Митюша', 'Веник',
        'Сашка', 'Яшка', 'Артурка', 'Пахомка', 'Павлуша',
        'Петруша', 'Юрка', 'Гера', 'Кеша', 'Димон', 'Ростик',
        'Ростислав', 'Паисий', 'Шурик', 'Руся', 'Моня', 'Боба',
        'Гит', 'Кирилл', 'Микола', 'Джек', 'Педро', 'Эдуардо',
        'Майк', 'Абрахам', 'Яромир', 'Святогор', 'Арсен', 'Филипп',
        'Радмир', 'Ринат', 'Рамиль', 'Тихон', 'Самир', 'Ильдар',
        'Марсель', 'Роберт', 'Айдар', 'Тамерлан', 'Альберт',
        'Влад', 'Игнат', 'Рустам', 'Ян', 'Назар', 'Эмиль',
        'Артемий', 'Гордей', 'Мирослав', 'Даниэль', 'Герман', 'Марат',
        'Фёдор', 'Демид', 'Мирон', 'Елисей', 'Лев', 'Макар', 'Марк',
        'Тимофей', 'Егор', 'Миха', 'Русик', 'Руслан', 'Пётр',
        'Жося', 'Жостик', 'Валёк', 'Гоги', 'Кэл', 'Афанасий',
        'Вадик', 'Вадим', 'Павел', 'Эдик', 'Эдя', 'Эдуард',
        'Феоктист', 'Киса', 'Иржан', 'Генка', 'Святополк', 'Дамир',
        'Дамирка', 'Яков', 'Рома', 'Роман', 'Ромка',
        'Витян', 'Кирюха', 'Кирюша', 'Изя', 'Изечка', 'Родион',
        'Родечка', 'Дроп', 'Дед', 'Дрон', 'Юрец', 'Илюха'];

    protected $lastNames = [
        'Работник', 'Программист', 'Тридемакс', 'Дотер',
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
        'Умный', 'Красивый', 'Урод', 'Мужчина', 'Газобетон',
        'Сова', 'Касперидзе', 'Жмых', 'Жислый', 'Кислый',
        'Конченный', 'Свинец', 'Секач', 'Хипстер', 'Небоскрёб',
        'Мякиш', 'Тыкволобик', 'Дебилоид', 'Ландер',
        'Косипоша', 'Александровский', 'Пахан', 'Маргинал',
        'Унтерменш', 'Злой', 'Чифир', 'Фуфел', 'Барбарис',
        'Чирик', 'Воробей', 'Настоечка', 'Батя', 'Парамедик',
        'Змей', 'Спецназ', 'Добрый', 'Бомж', 'Нищета',
        'Знаменосец', 'Керосинка', 'Вымпел', 'Межрайгаз',
        'Газонокосилка', 'ДВС', 'Полкан', 'Хороший', 'Нищуган',
        'Выходной', 'Зуко', 'Дирол', 'Сыч', 'Терминатор',
        'Пуш', 'Люканг', 'Шамбамбулиш', 'Демидрол', 'Навтизин',
        'Метан', 'Пиджак', 'Кукиш', 'Биб', 'Цыкса', 'Элипод',
        'Тварь', 'Падла', 'Гироскоп', 'Инфаркт', 'Дефибриллятор', 'Инсульт',
        'Кудрявый', 'Бибурат', 'Раб', 'Жирогон', 'Прораб', 'Фострал',
        'Мехос', 'Пупок', 'Могикан', 'Коновал', 'Монк', 'Ветролёт',
        'Штиль', 'Липкий', 'Палец', 'Стручок', 'Гиря', 'Обурец', 'Пипетка',
        'Токсик', 'Фитиль', 'Инфернал', 'Кладмэн', 'Глоркс', 'Некросс',
        'Икспло', 'Табутаск', 'Монолит', 'Комиссар', 'Махотин', 'Софти',
        'Криспо', 'Бздиловатый', 'Кирпич', 'Люся', 'Махно', 'Сизый',
        'Лютый', 'Майор', 'Сырок', 'Пикантный', 'Воркута', 'Гастролёр',
        'Дядя', 'Трудовик', 'Тренер', 'Пентиум', 'Флюс', 'Всола',
        'Жирный', 'Сметана', 'Братан', 'Глыба', 'Пупсень', 'Вупсень',
        'Алюминий', 'Везунчик', 'Снайлер', 'Потный', 'Таксист', 'Косой',
        'Деревня', 'Госдеп', 'Панк', 'Капелька', 'Отбитый', 'Грузин',
        'Пикатиний', 'Пукич', 'Электрод', 'Горчишник', 'Синтол',
        'Джентельмен', 'Сырный', 'Припой', 'Понч', 'Косяк',
        'Копирайтер', 'Прыщь', 'Харон', 'Жиган', 'Меченый', 'Глазастый',
        'Слякоть', 'Беленький', 'Слоупок', 'Лапа', 'Правильный', 'Жиробас',
        'Опасный', 'Лещ', 'Рыло', 'Шниппель', 'Мятый', 'Туловище',
        'Генотип', 'Насвай', 'Инстаграмщик', 'Сишарп', 'Плюха',
        'Лялечка', 'Директор', 'Копченый', 'Бобик', 'Особенный',
        'Ограниченный', 'Мероприятие', 'Полторашка', 'Спартак', 'Верстак',
        'Кот', 'Трансформатор', 'Пичот', 'Саратовский', 'Контрольный', 'Зеон'];
    protected $specialNames = ['РХБЗ', 'РЖД', 'ДВС'];
    protected $legendaryNames = [
        'Олег Пошлый', 'Вова Вист', 'Илья Торч',
        'Илья Кальяньщик', 'Илья Заводской', 'Андрей Выходной', 'Илья Косипоша',
        'Артёмка Жмых', 'Костян Тыкволобик', 'Гит Пуш', 'Кабан Кабанчик',
        'Никита Инфаркт', 'Илюша Инфаркт', 'Олежа Кудрявый', 'Олег Барбарис',
        'Артёмка Всола', 'Илюха Плюха', 'Гит Монолит', 'Илья Зеон'
    ];

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
        $rarity = $this->checkRarity($fullName);
        return ['firstName' => $firstName,
                'lastName' => $lastName,
                'fullName' => $fullName,
                'rarity' => $rarity];
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

    protected function isLegendary($fullName)
    {
        return in_array($fullName, $this->legendaryNames);
    }

    protected function isEpic($fullName)
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

    protected function isRare($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);
        $firstTerm = mb_strtolower(mb_substr($firstName, 0, 1));
        $secondTerm = mb_strtolower(mb_substr($secondName, 0, 1));
        return $firstTerm == $secondTerm;
    }

    protected function isUncommon($fullName)
    {
        [$firstName, $secondName] = explode(' ', $fullName);
        return strlen($firstName) == strlen($secondName);
    }

    protected function checkRarity($fullName)
    {
        if ($this->isLegendary($fullName)) {
            return "legendary";
        } elseif ($this->isEpic($fullName)) {
            return "epic";
        } elseif ($this->isRare($fullName)) {
            return "rare";
        } elseif ($this->isUncommon($fullName)) {
            return "uncommon";
        } else {
            return "common";
        }
    }
}
