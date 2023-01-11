<?php

namespace Alsay\LaravelH5P\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class H5PLangMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $lang = Config::get('hh5p.language');

        Config::set('hh5p.language', $lang);
        App::setLocale($lang);

        return $next($request);
    }
}
