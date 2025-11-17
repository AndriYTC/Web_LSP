<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Jika belum login atau bukan admin
            if (!auth()->check() || !in_array(auth()->user()->role, ['admin', 'developers'])) {
                return redirect()
                    ->route('dashboard')
                    ->with('error', 'Anda tidak memiliki akses ke halaman ini.');
            }


            return $next($request);
        });
    }

    /**
     * Tampilkan semua user
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Edit user
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update user
     */
    public function update(Request $request, User $user)
    {
        if ($user->role === 'developer') {
            return back()->with('error', 'User dengan role developer tidak dapat diubah.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required|in:admin,user',
        ]);

        $user->update($request->only('name', 'email', 'role'));

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Hapus user
     */
    public function destroy(User $user)
    {
        if ($user->role === 'developers') {
            return back()->with('error', 'User dengan role developer tidak dapat dihapus.');
        }

        if ($user->id === auth()->id()) {
            return back()->with('error', 'Tidak dapat menghapus diri sendiri.');
        }

        $user->delete();
        return back()->with('success', 'User berhasil dihapus.');
    }
}
