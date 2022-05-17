<?php

namespace App\Http\Middleware;

use Closure;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth = auth('sanctum')->user();
        if (!$auth) {
            return response()->json('Not Auth', 401);
        }
        return response()->json($auth);
    }
}
