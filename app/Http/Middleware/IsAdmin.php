<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    private $guide_admin_routes = [
        'pass-admin/dashboard',
        'pass-admin/logout'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $url = $request->url();
        $user = Auth::user();

        /*if(@$user->userType === 'GuideAdmin'){
            foreach($this->guide_admin_routes as $route){
                if(strpos($url, $route) !== false){
                    return $next($request);
                }
            }
            return redirect()->route('adminLoginPage');
        }*/
        if(!Auth::user()){
            return redirect()->route('adminLoginPage');
        }
        return $next($request);
    }
}
