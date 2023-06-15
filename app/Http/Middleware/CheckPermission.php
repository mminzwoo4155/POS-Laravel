<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route;

class CheckPermission
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
        $roleId = Auth::user()->role_id;
        $routeName = $request->route()->getName();
        $route = DB::table('routes')->where('route_name', $routeName)->get();

        if ($route != null && count($route) > 0) {
			$route_id = $route[0]->id;
			echo $route_id;

			$permission = DB::table('permissions')
				->where('route_id', $route_id)
				->where('role_id', $roleId)
				->get();
			// echo $route_id.'-'.$role_id;
			// var_dump($permission);
			if ($permission != null && count($permission) > 0) {
				if ($permission[0]->status == 0) {
					return redirect()->route('home');
				}
			} else {
				return redirect()->route('home');
			}
		}
        return $next($request);
    }
}
