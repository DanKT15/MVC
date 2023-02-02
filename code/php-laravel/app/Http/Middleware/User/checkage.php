<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;

class checkage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->tuoi < 18) {
            return response('Bạn chưa đủ 18 tuổi');
        }
        
        return $next($request);
    }
}
