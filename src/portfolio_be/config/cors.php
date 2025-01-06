<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Định nghĩa các đường dẫn cần xử lý CORS

    'allowed_methods' => ['*'], // Cho phép tất cả các phương thức HTTP (GET, POST, PUT, DELETE, ...)

    // 'allowed_origins' => ['http://localhost:3000','http://192.168.0.108:3000','https://63ac-27-3-193-44.ngrok-free.app/'], // Địa chỉ frontend React
    'allowed_origins' => ['*'], // Địa chỉ frontend React

    'allowed_origins_patterns' => [], // Các mẫu địa chỉ (nếu cần thiết)

    'allowed_headers' => ['*'], // Cho phép tất cả các header

    'exposed_headers' => [], // Các header có thể xuất hiện trong response

    'max_age' => 0, // Thời gian tồn tại của CORS

    'supports_credentials' => false, // Không cần cookie hay token

];
