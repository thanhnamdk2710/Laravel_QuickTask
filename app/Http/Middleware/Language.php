<?php

namespace App\Http\Middleware;

use Closure;
use Lang;
use Session;

class Language
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
        if (!Session::has('lang')){
            Session::put('lang', config(app.locale));
        }
        Lang::setLocale(Session::get('lang'));

        return $next($request);
    }
}
