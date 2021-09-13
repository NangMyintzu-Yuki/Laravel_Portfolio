<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('utype') === 'Admin')
        {
            return $next($request);
        }
        else if(session('utype') === 'User')
        {
            session()->flash();
            return redirect()->route('login');
        }
        return $next($request);
    }
}
