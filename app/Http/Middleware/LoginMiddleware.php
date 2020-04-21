<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
       if($request->input('token')){
           $check = User::where('token', $request->input('token'))->first();

           if(!$check){
               return response('Token invalid',401);
           }else{
               return $next($request);
           }
       }else{
           return response('Insert Token',401)
       }
    }
}
