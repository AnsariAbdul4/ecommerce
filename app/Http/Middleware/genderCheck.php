<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class genderCheck
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
        if($request->gender && ($request->gender == 'female' || $request->gender == 'f') ){
            return redirect('error');
        }
        return $next($request);
    }
}
