<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateClient extends Middleware
{
   /**
     * Determine if the user is authenticated using the "Client" guard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function authenticate($request, array $guards)
    {
        if ($this->auth->check() && $this->auth->user()->client()) {
            // return $this->auth->shouldUse('client');
            return true;
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
        // $this->authenticate($request, $guards);
        if ($this->auth->check() && !$this->auth->user()->client()->first()) {
            toast('frontend.unauthorized','error');
            return redirect()->route('home');
        }
        return $next($request);
    }
}
