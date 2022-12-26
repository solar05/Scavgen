<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\SavageGenerator;
use App\Models\Statistic;

class GeneratorController extends BaseController
{
    public function generate()
    {
        $names = SavageGenerator::generate(app()->getLocale());
        Statistic::updateRarity($names['rarity']);
        return view('single', ['names' => $names]);
    }

    public function generateTeam()
    {
        $names = SavageGenerator::generateTeam(app()->getLocale());
        $rarityCount = Statistic::collectScavRarity($names);
        Statistic::updateMultipleRarity($rarityCount);
        return view('teams', ['namesList' => $names]);
    }

    public function statistics()
    {
        $stats = Statistic::all()->first();
        return view('stats', ['stats' => $stats]);
    }
}
