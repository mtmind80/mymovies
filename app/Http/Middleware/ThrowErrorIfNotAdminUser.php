<?php

namespace App\Http\Middleware;

use Closure;

class ThrowErrorIfNotAdminUser
{
    public function handle($request, Closure $next)
    {
        if (!$request->user() || !$request->user()->isAdmin()) {
            return response([
                'status'  => 'error',
                'message' => 'Access forbidden.',
            ]);
        }

        return $next($request);
    }
}
