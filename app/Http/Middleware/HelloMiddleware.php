<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     // Request = representation of the incoming HTTP request.
     // Next = callback function to call the next Middleware. (Middleware = security guards. If we don't call the next one, it means it has failed.)
    public function handle(Request $request, Closure $next)
    {
        // dump("hello!");
        return $next($request);
    }

    public function terminate($request, $response)
    {
        // dump("Bye");
    }
}
