<?php

namespace App\Http\Middleware;

use Closure;

class TestAnio
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
        // Evaluar que la variable URL anio no sea nula
        $anio = $request->route('anio');
        if (is_null($anio) || $anio != 2019) {
            return redirect('/movies')
        }
        return $next($request);
    }
}
