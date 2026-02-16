<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = session('age');
        
        // Kiểm tra nếu tuổi không tồn tại hoặc không phải số
        if ($age === null || !is_numeric($age)) {
            return response('không được phép truy cập', 403);
        }
        
        // Chuyển đổi sang số nguyên
        $age = (int)$age;
        
        // Kiểm tra nếu tuổi < 18
        if ($age < 18) {
            return response('không được phép truy cập', 403);
        }
        
        // Nếu >= 18, cho phép truy cập và thông báo đủ tuổi
        session()->flash('age_check', 'đủ tuổi');
        return $next($request);
    }
}

