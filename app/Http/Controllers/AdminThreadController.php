<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminThreadController extends Controller
{
    /**
     * Menampilkan semua thread.
     */
    public function index(Request $request)
    {
        $query = Thread::with(['user', 'category'])
            ->withCount('replies');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('isi', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                    });
            });
        }

        // Filter kategori
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Filter status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter pinned
        if ($request->filled('pinned')) {
            $query->where(
                'is_pinned',
                $request->pinned === '1'
            );
        }

        $threads = $query
            ->orderByDesc('is_pinned')
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $categories = Category::orderBy('nama_kategori')->get();

        return view(
            'admin.forum.threads.index',
            compact('threads', 'categories')
        );
    }


    /**
     * Menampilkan detail thread.
     */
    public function show(Thread $thread)
    {
        $thread->load([
            'user',
            'category',
            'replies.user',
        ]);

        return view(
            'admin.forum.threads.show',
            compact('thread')
        );
    }


    /**
     * Menampilkan form edit thread.
     */
    public function edit(Thread $thread)
    {
        $categories = Category::orderBy('nama_kategori')->get();

        return view(
            'admin.forum.threads.edit',
            compact('thread', 'categories')
        );
    }


    /**
     * Memperbarui thread.
     */
    public function update(Request $request, Thread $thread)
    {
        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'category_id' => [
                'required',
                'exists:categories,id',
            ],

            'isi' => [
                'required',
                'string',
            ],

            'status' => [
                'required',
                'in:draft,published,closed',
            ],
        ], [
            'judul.required' => 'Judul thread wajib diisi.',
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori tidak ditemukan.',
            'isi.required' => 'Isi thread wajib diisi.',
            'status.required' => 'Status thread wajib dipilih.',
        ]);

        $slug = Str::slug($validated['judul']);

        $baseSlug = $slug;
        $counter = 1;

        while (
            Thread::where('slug', $slug)
                ->where('id', '!=', $thread->id)
                ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $thread->update([
            'judul' => $validated['judul'],
            'slug' => $slug,
            'category_id' => $validated['category_id'],
            'isi' => $validated['isi'],
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.forum.threads.show', $thread)
            ->with(
                'success',
                'Thread berhasil diperbarui.'
            );
    }


    /**
     * Pin / Unpin thread.
     */
    public function togglePin(Thread $thread)
    {
        $thread->update([
            'is_pinned' => !$thread->is_pinned,
        ]);

        return back()->with(
            'success',
            $thread->is_pinned
                ? 'Thread berhasil dipasang sebagai pinned.'
                : 'Thread berhasil dilepas dari pinned.'
        );
    }


    /**
     * Hapus thread.
     */
    public function destroy(Thread $thread)
    {
        $thread->delete();

        return redirect()
            ->route('admin.forum.threads')
            ->with(
                'success',
                'Thread berhasil dihapus.'
            );
    }
}