<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\HandleCors as Middleware;

class HandleCors extends Middleware
{
    public function handle($request, \Closure $next)
    {
        // Thêm header CORS tùy chỉnh (nếu cần)
        if ($request->is('api/*')) {
            header('Access-Control-Allow-Origin: *');
        }

        return parent::
        handle($request, $next);
    }
}
