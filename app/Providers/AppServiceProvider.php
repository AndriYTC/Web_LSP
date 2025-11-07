<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard'; // default, tapi bisa diabaikan

    public static function redirectToHome()
    {
        $user = auth()->user();
        return $user && $user->role === 'admin' ? '/dashboard' : '/';
    }

    public function boot(): void
    {
        if (env('APP_ENV') === 'production') {
            // Ini akan memastikan semua URL aset yang dihasilkan oleh Laravel
            // dan @vite() menggunakan 'https'
            URL::forceScheme('https');
        }

        $this->routes(function () {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    });
    }
}
