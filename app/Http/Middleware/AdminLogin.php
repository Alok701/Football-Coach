<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminLogin
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
        if ($request->SESSION()->HAS("ADMIN_LOGIN")) {

        } else {
            SESSION()->FORGET("ADMIN_LOGIN");
            SESSION()->FORGET("ADMIN_ID");
            SESSION()->FORGET("ADMIN_EMAIL");
            return REDIRECT("/admin-login");
        }

        return $next($request);
    }
}
