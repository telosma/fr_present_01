<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;

class Locale
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('locale')) {
            Session::put('locale', config('app.locale'));
        }

        App::setLocale(Session::get('locale'));

        return $next($request);
    }
}
