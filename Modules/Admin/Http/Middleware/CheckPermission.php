<?php

namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
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
        $user = auth()->user();
        if ($user && $user->hasRole(['super-admin', 'editor'])) {
            // User belongs to one of the specified roles, continue with the request
            return $next($request);
        } else {
            // User does not have the required roles, handle the unauthorized scenario
            abort(403, 'Unauthorized.');
        }
    }
}
