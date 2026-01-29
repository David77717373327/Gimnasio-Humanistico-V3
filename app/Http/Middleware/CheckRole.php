<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $roles)
    {
        if (! Auth::check()) {
            return redirect()->route('login'); 
        }

        // Convertimos la cadena en un array (ej: "admin,student")
        $roles = explode(',', $roles);

        // Verificamos si el usuario tiene uno de esos roles
        if (! in_array(Auth::user()->role, $roles)) {
            abort(403, 'No autorizado');
        }

        return $next($request);
    }
}
