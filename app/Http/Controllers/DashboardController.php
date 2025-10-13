<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya admin yang bisa mengakses dashboard
        $this->middleware(function ($request, $next) {
            if (!auth()->check() || auth()->user()->role !== 'admin') {
                return redirect('/')->with('error', 'Akses ditolak, hanya admin yang dapat membuka dashboard.');
            }
            return $next($request);
        });
    }

    public function index()
    {
        $user = auth()->user();

        return view('dashboard', [
            'user' => $user,
        ]);
    }
}
