<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::withCount([
            'threads',
            'replies',
        ]);

        // Search nama / email
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter verifikasi email
        if ($request->filled('verification')) {
            if ($request->verification === 'verified') {
                $query->whereNotNull('email_verified_at');
            }

            if ($request->verification === 'unverified') {
                $query->whereNull('email_verified_at');
            }
        }

        $users = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view(
            'admin.users.index',
            compact('users')
        );
    }

    public function show(User $user)
    {
        $user->loadCount([
            'threads',
            'replies',
        ]);

        $threads = $user->threads()
            ->with('category')
            ->latest()
            ->take(5)
            ->get();

        $replies = $user->replies()
            ->with('thread')
            ->latest()
            ->take(5)
            ->get();

        return view(
            'admin.users.show',
            compact(
                'user',
                'threads',
                'replies'
            )
        );
    }

    public function destroy(User $user)
    {
        // Jangan izinkan admin menghapus akun yang sedang digunakan
        if (auth()->id() === $user->id) {
            return back()->with(
                'error',
                'Akun yang sedang digunakan tidak dapat dihapus.'
            );
        }

        $user->delete();

        return redirect()
            ->route('admin.users')
            ->with(
                'success',
                'Pengguna berhasil dihapus.'
            );
    }
}