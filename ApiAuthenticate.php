<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuthenticate
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
        if(\Auth::guard('api')->check()){
            return $next($request);
        }else{
            return response()->json([
                'message' => 'Invalid credentials',
            ]);
        }
    }
}
