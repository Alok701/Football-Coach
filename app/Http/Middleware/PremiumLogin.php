<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PremiumLogin
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
        if ($request->SESSION()->HAS("USER_Premium")) {

        } else {
            SESSION()->FORGET("USER_LOGIN");
            SESSION()->FORGET("USER_ID");
            SESSION()->FORGET("USER_EMAIL");
            SESSION()->FORGET("USER_USERNAME");
            SESSION()->FORGET("USER_PLAN");
            SESSION()->FORGET("USER_POSITION");
            return REDIRECT("/");
        }

        return $next($request);
    }
}
