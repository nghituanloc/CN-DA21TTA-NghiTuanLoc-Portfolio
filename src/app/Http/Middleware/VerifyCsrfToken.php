<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/nguoidung',
        '/nguoidung/create',
        '/nguoidung/*',

        

        '/baiviet',
        '/baiviet/*',
        '/baiviet/create',

        '/chungchi',
        '/chungchi/create',
        '/chungchi/{id}',
        '/chungchi/*',
        

        '/duan',
        '/duan/create',
        '/duan/{id}',
        '/duan/*',

        '/kynang',
        '/kynang/create',
        '/kynang/{id}',
        '/kynang/*',

        '/thamgia',
        '/thamgia/create',
        '/thamgia/{id}',
        '/thamgia/*',

        '/tochuc',
        '/tochuc/create',
        '/tochuc/{id}',
        '/tochuc/*',

        '/vaitro',
        '/vaitro/create',
        '/vaitro/{id}',
        '/vaitro/*',

        '/dadat',
        '/dadat/create',
        '/dadat/{id}',
        '/dadat/*',
        
    ];
}
