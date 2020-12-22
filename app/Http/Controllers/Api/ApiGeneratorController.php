<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\SavageGenerator;

class ApiGeneratorController extends BaseController
{
    public function generate()
    {
        $generator = new SavageGenerator();
        $names = $generator->generate();
        return json_encode($names, JSON_UNESCAPED_UNICODE);
    }
}
