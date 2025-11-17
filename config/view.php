<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Di sini Laravel akan mencari file view (blade template).
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | Di sini Laravel menyimpan hasil compile blade template.
    |
    */

    'compiled' => env('VIEW_COMPILED_PATH', '/tmp/framework/views'),


];
