<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->cookie('language') ?? config('app.locale', 'en');

        App::setLocale($locale);

        return $next($request);
    }
}