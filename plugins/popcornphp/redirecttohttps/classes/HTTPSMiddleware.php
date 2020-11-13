<?php namespace PopcornPHP\RedirectToHTTPS\Classes;

use Closure;
use PopcornPHP\RedirectToHTTPS\Models\Settings as HTTPSSetting;

class HTTPSMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!$request->secure() && HTTPSSetting::get('enableHttpsRedirect', false)) {
            return redirect()->secure($request->getRequestUri(), HTTPSSetting::get('statusCode'));
        }

        return $next($request);
    }
}
