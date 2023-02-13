<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class routemiddldeware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $req, Closure $next)
    {
        if ($req -> country && $req-> country == "pakistan" || $req-> country == "india" ) {
            return redirect("noaccess");
        } else {

        }
        return $next($req);
    }
}
