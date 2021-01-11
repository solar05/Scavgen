<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $table = 'statistics';
    protected $attributes = [
        'legendary' => 0,
        'epic' => 0,
        'rare' => 0,
        'uncommon' => 0,
        'common' => 0
    ];

    public static function updateRarity($rarity)
    {
        $stats = Statistic::all()->first();
        $stats->$rarity += 1;
        $stats->save();
    }

    public static function updateMultipleRarity($rarityCounts)
    {
        $stats = Statistic::all()->first();
        foreach ($rarityCounts as $rarity => $count) {
            $stats->$rarity += $count;
        }
        $stats->save();
    }

    public static function collectScavRarity($scavengers)
    {
        $result = [];
        foreach ($scavengers as $scavenger) {
            $rarity = $scavenger['rarity'];
            if (array_key_exists($rarity, $result)) {
                $result[$rarity] += 1;
            } else {
                $result[$rarity] = 1;
            }
        }
        return $result;
    }
}
