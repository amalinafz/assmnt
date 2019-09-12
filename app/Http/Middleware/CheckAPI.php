<?php

namespace App\Http\Middleware;

use Closure;

class CheckAPI
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
        $acceptHeader = $request->header('Accept');
        if ('application/vnd.BNM.API.v1+json' != $acceptHeader) {
            return response()->json(['message' => 'Nope! Denied'], 400);
        }
        return $next($request);
    }
}
