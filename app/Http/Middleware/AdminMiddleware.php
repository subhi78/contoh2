<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedEmail = 'dua@gmail.com'; // Ganti dengan email yang diizinkan

        if ($request->user() && $request->user()->email !== $allowedEmail) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
