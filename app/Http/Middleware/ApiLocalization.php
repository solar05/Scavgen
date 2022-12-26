<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApiLocalization
{
    protected $languages = ['en', 'ru'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $currentQueries = $request->query();

        if (array_key_exists('lang', $currentQueries) && in_array($currentQueries['lang'], $this->languages)) {
            $lang = $currentQueries['lang'];
            App::setLocale($lang);
            return $next($request);
        }

        return $next($request);
    }
}
