<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Hanya pastikan sudah login
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        return view('dashboard', compact('user'));
    }
}
