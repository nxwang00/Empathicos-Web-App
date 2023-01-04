<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class EnsurePromoCodeIsValid
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
        if (!Cookie::has('code')) {
            return redirect()->route('promo');
        }
        return $next($request);
    }
}
