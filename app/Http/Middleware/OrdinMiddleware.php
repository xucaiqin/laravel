<?php

namespace App\Http\Middleware;

use Closure;

class OrdinMiddleware
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
        if(!Auth::guard('ordin')->check())
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
