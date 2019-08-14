<?php

namespace App\Http\Middleware;

use Closure;

class ThrowErrorIfNotApiRequest
{
    public function handle($request, Closure $next)
    {
        if ($_SERVER['HTTP_ACCEPT'] != 'application/json') {
            return response([
                'status'  => 'error',
                'message' => 'Forbidden request.',
            ]);
        }

        return $next($request);
    }
}
