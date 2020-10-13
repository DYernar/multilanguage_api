<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class localization
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

        $local = ($request->local);

        if(!in_array($local, ['en', 'ru', 'kz'])) {
            $local = 'en';
        }

        app()->getLocale();


        app()->setLocale($local);

        return $next($request);
    }
}
