<?php

namespace App\Http\Middleware\Jobs;

use Closure;
use Illuminate\Http\Request;

class IsApplicant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->user()->isApplicant()) {

            return to_route('home');
        }
        return $next($request);
    }
}
