<?php

namespace App\Http\Middleware;

use Closure;

class EnsureUtf8Response
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->header('Content-Type', 'application/json; charset=utf-8');
        return $response;
    }
}
