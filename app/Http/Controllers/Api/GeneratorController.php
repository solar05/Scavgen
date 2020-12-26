<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
use App\Models\SavageGenerator;

class GeneratorController extends BaseController
{
    public function generate()
    {
        $generator = new SavageGenerator();
        $names = $generator->generate();
        return response()->json($names, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function generateTeam()
    {
        $generator = new SavageGenerator();
        $names = $generator->generateTeam();
        return response()->json($names, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
