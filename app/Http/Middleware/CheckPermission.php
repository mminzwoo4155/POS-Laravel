<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $route = DB::table('routes')->where('route_name', $routeName)->first();
        if ($route) {
            $permission = DB::table('permissions')
                ->where('route_id', $route->id)
                ->where('role_id', $roleId)
                ->first();

            if (!$permission || !$permission->status) {
                return redirect()->route('home');
            }
        }

        return $next($request);
    }
}
