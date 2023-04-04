<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CoachLogin
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
        if ($request->SESSION()->HAS("COACH_LOGIN")) {

        } else {
            SESSION()->FORGET("COACH_LOGIN");
            SESSION()->FORGET("USER_ID");
            SESSION()->FORGET("USER_EMAIL");
            SESSION()->FORGET("USER_PLAN");
            SESSION()->FORGET("USER_POSITION");
            return REDIRECT("/login");
        }

        return $next($request);
    }
}
