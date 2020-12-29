<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{

    public function robots()
    {
        $robots = file_get_contents('/public/robots.txt');
        return response($robots, 200, ['Content-Type' => 'text/plain']);
    }
}
