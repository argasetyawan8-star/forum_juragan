<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('threads')
            ->orderBy('nama_kategori')
            ->get();

        $threadsQuery = Thread::with([
            'user',
            'category',
        ])
            ->withCount('replies')
            ->where('status', 'published');

        // Filter kategori
        if ($request->filled('category')) {
            $threadsQuery->whereHas('category', function ($query) use ($request) {
                $query->where('slug', $request->category);
            });
        }

        // Pencarian
        if ($request->filled('search')) {
            $search = trim($request->search);

            $threadsQuery->where(function ($query) use ($search) {
                $query->where('judul', 'like', "%{$search}%")
                    ->orWhere('isi', 'like', "%{$search}%");
            });
        }

        $threads = $threadsQuery
            ->orderByDesc('is_pinned')
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('forum.index', compact(
            'categories',
            'threads'
        ));
    }
}