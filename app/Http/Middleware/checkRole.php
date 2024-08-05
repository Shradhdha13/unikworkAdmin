<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class checkRole
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
        if(Auth::user()->role == 2 && in_array($request->route()->getName(), ['blog'])) {
            return redirect('/admin/dashboard');
        }
        if(Auth::user()->role == 3 && in_array($request->route()->getName(), ['users','add-user','edit-user','delete-user','contact-view','contact-delete','update-status'])) {
            return redirect('/admin/dashboard');
        }
        return $next($request);
    }
}
