<?php

namespace estoque\Http\Middleware;

use Closure;
use Auth;
class AutorizacaoMiddleware
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
        if(!$request->is('login.login') && \Auth::guest()) {
            return redirect()->action('LoginController@login');
        }
        return $next($request);
    }
}
