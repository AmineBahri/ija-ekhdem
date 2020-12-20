<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class Admin
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
        $path = $request->path();
        if (($path=="login-admin") && (Session::get('admin')))
        {
            return redirect('/dashboard-admin');
        }
        else if ($path!="login-admin" && ($path!="register-admin") && !Session::get('admin')) 
        {
            return redirect('/login-admin');
        }
        return $next($request);
    }
}
