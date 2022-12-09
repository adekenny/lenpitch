<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Auth;

class CategoryMiddleware
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
        if(Auth::user()->category === 'Entrepreneur')
        {
            return redirect('/enterpreneur_dashboard');
        }

        if(Auth::user()->category === 'Employer')
        {
            return redirect('/employer_dashboard');
        }


        if(Auth::user()->category === 'Investor')
        {
            return redirect('/investor_dashboard');
        }
        
        
        if(Auth::user()->category === 'admin')
        {
            return redirect('/admin_dashboard');
        }
    
            return $next($request);
        
    }
}
