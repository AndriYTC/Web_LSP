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

    // Path mana yang akan terkena CORS
    'paths' => ['api/*','api/api/*', 'sanctum/csrf-cookie'],

    // Methods yang diizinkan
    'allowed_methods' => ['*'],

    // Origin frontend yang diizinkan
    'allowed_origins' => ['https://andriytc.github.io','http://localhost:5173','https://backend-lsp.vercel.app'],

    // Pattern origin (opsional)
    'allowed_origins_patterns' => [],

    // Headers yang diizinkan
    'allowed_headers' => ['*'],

    // Headers yang diekspos ke frontend
    'exposed_headers' => [],

    // Cache preflight
    'max_age' => 0,

    // HARUS true kalau pakai withCredentials
    'supports_credentials' => true,
];
