<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
use App\Models\SavageGenerator;
use App\Models\Statistic;

class GeneratorController extends BaseController
{
    public function health()
    {
        Statistic::all()->first();
        return response()->json("App alive! DB also!", 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function generate()
    {
        $names = SavageGenerator::generate();
        Statistic::updateRarity($names['rarity']);
        return response()->json(["scavenger" => $names], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function generateTeam()
    {
        $names = SavageGenerator::generateTeam();
        $rarityCount = Statistic::collectScavRarity($names);
        Statistic::updateMultipleRarity($rarityCount);
        return response()->json(["scavengers" => $names], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function statistics()
    {
        $stat = Statistic::all()->first();
        return response()->json([
            "statistics" => [
            'legendary' => $stat->legendary,
            'epic' => $stat->epic,
            'rare' => $stat->rare,
            'uncommon' => $stat->uncommon,
            'common' => $stat->common,
            ]], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
