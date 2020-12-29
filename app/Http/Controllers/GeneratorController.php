<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\SavageGenerator;

class GeneratorController extends BaseController
{

    public function generate()
    {
        $generator = new SavageGenerator();
        $names = $generator->generate();
        $isLegendary = $generator->isLegendary($names);
        return view('single', ['names' => $names, 'isLegendary' => $isLegendary]);
    }

    public function generateTeam()
    {
        $generator = new SavageGenerator();
        $names = $generator->generateTeam();
        return view('teams', ['namesList' => $names]);
    }
}
