<?php

namespace App\Http\Middleware;

use Closure;

class sesLogin
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
        if(empty(session('log'))){
            return redirect('/login.html');
        }
        return $next($request);
        // dd(!empty(session('log')));
    }
}
