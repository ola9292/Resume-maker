<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllowPrint
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( $request->encrypt && app('hash')->check(config('app.key'), $request->encrypt) || Auth::check()) {
            return $next($request);
        }

    return redirect(RouteServiceProvider::HOME);
        // return $next($request);
    }
}
