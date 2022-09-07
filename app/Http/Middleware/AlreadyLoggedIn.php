<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class AlreadyLoggedIn
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
        if (Session()->has('loginid') && (url('/login')==$request->url() ||url('/registration')==$request->url() || url('Client-Dashboard')==$request->url())) {
            return back();
        }
        return $next($request);
    }
}
