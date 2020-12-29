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
        $isBingo = $generator->isBingoName($names);
        return view('single', ['names' => $names, 'isBingo' => $isBingo]);
    }

    public function generateTeam()
    {
        $generator = new SavageGenerator();
        $names = $generator->generateTeam();
        return view('teams', ['namesList' => $names]);
    }
}
