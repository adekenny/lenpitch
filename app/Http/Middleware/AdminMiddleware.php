<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Auth;

class AdminMiddleware
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
        if(!Auth::user())
        {
            return redirect('/login');
        }
        
        if(Auth::user()->user_type === 'administrator'){
            return $next($request);
        }
        else{
            return redirect('/login');
        }
       
    }
}
