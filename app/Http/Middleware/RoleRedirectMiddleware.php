<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Fetch authenticated user
       /* $user = Auth::user();

        if ($user) {
            switch ($user->role) {
                case 'admin':
                    return redirect('/home'); // Redirect to admin dashboard
                case 'labassistant':
                    return redirect('/chemical'); // Redirect to chemical page
                case 'lecturer':
                    return redirect('/register'); // Redirect to lab page
            }
        }
*/
        // User not authenticated or role not recognized, continue with the request
        return $next($request);
    }
}
