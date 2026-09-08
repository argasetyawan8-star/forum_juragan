<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ThreadController extends Controller
{
    /**
     * Form membuat thread baru.
     */
    public function create()
    {
        $categories = Category::orderBy('nama_kategori')->get();

        return view('forum.create', compact('categories'));
    }

    /**
     * Menyimpan thread baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'judul' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string'],
        ], [
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',
            'judul.required' => 'Judul diskusi wajib diisi.',
            'judul.max' => 'Judul maksimal 255 karakter.',
            'isi.required' => 'Isi diskusi wajib diisi.',
        ]);

        $slug = Str::slug($validated['judul']);

        // Pastikan slug unik.
        $originalSlug = $slug;
        $counter = 1;

        while (Thread::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $thread = Thread::create([
            'user_id' => Auth::id(),
            'category_id' => $validated['category_id'],
            'judul' => $validated['judul'],
            'slug' => $slug,
            'isi' => $validated['isi'],
            'views' => 0,
            'status' => 'published',
            'is_pinned' => false,
        ]);

        return redirect()
            ->route('forum.show', $thread->slug)
            ->with('success', 'Diskusi berhasil dibuat.');
    }

    /**
     * Form edit thread.
     */
    public function edit(Thread $thread)
    {
        // Hanya pemilik thread yang boleh mengedit.
        abort_unless($thread->user_id === Auth::id(), 403);

        $categories = Category::orderBy('nama_kategori')->get();

        return view('forum.edit', compact(
            'thread',
            'categories'
        ));
    }

    /**
     * Update thread.
     */
    public function update(Request $request, Thread $thread)
    {
        // Hanya pemilik thread yang boleh mengedit.
        abort_unless($thread->user_id === Auth::id(), 403);

        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'judul' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string'],
        ], [
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',
            'judul.required' => 'Judul diskusi wajib diisi.',
            'judul.max' => 'Judul maksimal 255 karakter.',
            'isi.required' => 'Isi diskusi wajib diisi.',
        ]);

        // Slug diperbarui berdasarkan judul.
        $slug = Str::slug($validated['judul']);

        $originalSlug = $slug;
        $counter = 1;

        while (
            Thread::where('slug', $slug)
                ->where('id', '!=', $thread->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $thread->update([
            'category_id' => $validated['category_id'],
            'judul' => $validated['judul'],
            'slug' => $slug,
            'isi' => $validated['isi'],
        ]);

        return redirect()
            ->route('forum.show', $thread->slug)
            ->with('success', 'Diskusi berhasil diperbarui.');
    }

    /**
     * Hapus thread.
     */
    public function destroy(Thread $thread)
    {
        // Hanya pemilik thread yang boleh menghapus.
        abort_unless($thread->user_id === Auth::id(), 403);

        $thread->delete();

        return redirect()
            ->route('forum.index')
            ->with('success', 'Diskusi berhasil dihapus.');
    }

   public function show(string $slug)
{
    $thread = Thread::with([
        'user',
        'category',
        'replies' => function ($query) {
            $query
                ->whereNull('parent_id')
                ->with([
                    'user',
                    'children.user',
                    'children.children.user',
                    'children.children.children.user',
                ])
                ->latest();
        },
    ])
    ->where('slug', $slug)
    ->where('status', 'published')
    ->firstOrFail();

    $thread->increment('views');

    $popularThreads = Thread::withCount('replies')
        ->where('status', 'published')
        ->where('id', '!=', $thread->id)
        ->orderByDesc('views')
        ->take(3)
        ->get();

    return view('forum.show', compact(
        'thread',
        'popularThreads'
    ));
}
}