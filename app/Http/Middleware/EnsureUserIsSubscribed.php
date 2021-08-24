<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsSubscribed
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
        if (Auth::user() && ! Auth::user()->subscribed('default') && Auth::user()->utype === config('usertypes.admin')) {
            // This user is not a paying customer...
            return redirect('billing');
        }

        return $next($request);
    }
}
