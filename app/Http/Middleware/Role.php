<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (Auth::user()->hak_akses == $role) {
                return $next($request);
            }
        }

        return redirect('/admin');
    }
}
