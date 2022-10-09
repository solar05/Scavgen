<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class GeneratorController extends BaseController
{
    public function generate()
    {
        return view('stub');
    }

    public function generateTeam()
    {
        return view('stub');
    }

    public function statistics()
    {
        return view('stub');
    }
}
