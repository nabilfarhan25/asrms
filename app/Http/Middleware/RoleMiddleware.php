<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle($request, Closure $next,...$roles)
    {
        // Allow super_admin access to everything
        if ($request->user()->role === 'manager') {
            return $next($request);
        }

        // Check if the user's role is in the specified roles
        if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // Redirect or handle unauthorized access
        return redirect('/')->with('error', 'Unauthorized access');
    }

}