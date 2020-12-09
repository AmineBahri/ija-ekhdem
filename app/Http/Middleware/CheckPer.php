<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class CheckPer
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
        if (($path=="login") && (Session::get('personne')))
        {
            return redirect('/dashboard');
        }
        else if ($path!="login" && ($path!="register") && ($path!="/") && ($path!="search") && !Session::get('personne')) 
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
