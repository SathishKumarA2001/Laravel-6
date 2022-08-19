<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyEnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if($request->url() == 'http://www.laravel-6.com/news') {
            if($role == 'dev'){
                return redirect('/company');
            }else {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
