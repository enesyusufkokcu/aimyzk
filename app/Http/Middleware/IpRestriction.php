<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IpRestriction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedIps = [
            '192.168.1.193',
        ];

        if (!in_array($request->ip(), $allowedIps)) {
            abort(403, 'Bu sayfaya erişim izniniz yok.');
        }

        return $next($request);
    }
}
// update