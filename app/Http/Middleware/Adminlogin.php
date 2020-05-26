<?php

namespace App\Http\Middleware;

use Closure;

class Adminlogin
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
        if($request->session()->has('mail') && $request->session()->has('password')){
            return $next($request);
        }else{
            $request->session()->flush();
            return redirect('/admin/login');
        }
    }
}
