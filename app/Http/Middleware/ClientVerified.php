<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->auth->guard('client')->check() && $this->auth->guard('client')->user()->is_email_verified) {
            toast(trans('frontend.not_verified'),'error');
            return back();
        }
        return $next($request);
    }
}
