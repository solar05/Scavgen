<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;

class GeneratorController extends BaseController
{
    public function health()
    {
        return response()->json("Проект переехал на scavgen.su", 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function generate()
    {
        return response()->json("Проект переехал на scavgen.su", 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function generateTeam()
    {
        return response()->json("Проект переехал на scavgen.su", 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function statistics()
    {
        return response()->json("Проект переехал на scavgen.su", 200, [], JSON_UNESCAPED_UNICODE);
    }
}
