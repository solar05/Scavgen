<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\SavageGenerator;

class GeneratorController extends BaseController
{
 
    public function generate()
    {
        $generator = new SavageGenerator();
        $names = $generator->generate();
        return view('welcome', ['names' => $names]);
    }
}
