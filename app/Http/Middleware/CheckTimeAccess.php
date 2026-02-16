<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class CheckTimeAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $now = now();
        $start = Carbon::parse('08:00:00');
        $end = Carbon::parse('17:00:00');
        if ($now->between($start, $end)) {
            // return $next($request);
            return response()->json([
                'time' => $now,
            ], 200);
        }
        return response()->json([
            'time' => $now,
        ], 403);
    }
}
