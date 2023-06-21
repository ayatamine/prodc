<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateProfessional extends Middleware
{
   /**
     * Determine if the user is authenticated using the "professional" guard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function authenticate($request, array $guards)
    {
        if ($this->auth->guard('professional')->check()) {
            return $this->auth->shouldUse('professional');
        }
    }

    /**
     * Handle an unauthenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        return $next($request);
    }
}
