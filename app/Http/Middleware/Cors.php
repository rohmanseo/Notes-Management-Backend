<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    public function handle($request, Closure $next)
    {
        return $next($request)
        ->header('Access-Control-Allow-Origin', 'https://notesmanagement-77145.web.app')
        ->header('Access-Control-Allow-Methods', '*');
    }
}
