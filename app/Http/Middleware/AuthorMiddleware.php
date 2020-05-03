<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth; //never forgot to add this

class AuthorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->usertype == 'author')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','You are not Login to AdminPanel');
        }

    }
}
