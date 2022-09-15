<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Role
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
        if(auth()->user()->isDeveloper() ) {

            return redirect()->route('admin.dashboard');

        }

        if (auth()->user()->isEmployer()) {

            return redirect()->route('employer.dashboard');
        }

        if (auth()->user()->isApplicant()) {

            return redirect()->route('applicant.dashboard');
        }





        return $next($request);
    }
}
