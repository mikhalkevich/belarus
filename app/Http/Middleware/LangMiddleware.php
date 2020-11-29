<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use App;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (isset($_GET['lang'])) {

            $lang = $_GET['lang'];

        } else {

            if (isset($_COOKIE['lang'])) {

                $lang = $_COOKIE['lang'];

            } else {

                $lang = 'by';

            }

        }
        App::setLocale($lang);
        setcookie('lang', $lang, time() + 3600, '/');
        if(isset($_GET['lang'])){
            return redirect('/');
        }else{
            $request->merge(compact('lang'));
            return $next($request);
        }

    }
}
