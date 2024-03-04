<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , string $role): Response
    {
        // dd($role,auth()->guard('admin')->user()->role->name , );
       if(auth()->guard('admin')->check() && $role == auth()->guard('admin')->user()->role->name){
        return $next($request);
       }else{
        abort(401);
       }
    }
}
