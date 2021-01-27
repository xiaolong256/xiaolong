<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        if(session()->get('admin')){
        return $next($request);
        }else{
          return redirect()->route('admin.login')->with('status','请先登录'); 
        }
        //return $next($request);
    }
}
