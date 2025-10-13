<?php

namespace App\Providers;

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
         $this->routes(function () {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    });
    }
}
