<?php

namespace App\Http\Middleware;

use Closure;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\View;

class SecretArea
{
    private $user;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (empty(Sentinel::getUser())) {
            return redirect()->route('auth.login.form');
        } else {
            $this->user = Sentinel::getUser();
        }

        View::share('user', $this->user);

        return $next($request);
    }
}
