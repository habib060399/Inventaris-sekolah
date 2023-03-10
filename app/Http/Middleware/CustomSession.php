<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $session = $request->session()->get('level');
        if($session){
            return $next($request);
            if(!$session){
                return redirect('user.login');
            }
        }else{
                abort(403, 'Unauthorized action.');                
        }        
    }
}
