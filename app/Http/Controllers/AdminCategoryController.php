<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('threads')
            ->latest()
            ->paginate(10);

        return view('admin.forum.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.forum.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string', 'max:1000'],
        ], [
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
        ]);

        $slug = Str::slug($validated['nama_kategori']);

        $baseSlug = $slug;
        $counter = 1;

        while (Category::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        Category::create([
            'nama_kategori' => $validated['nama_kategori'],
            'slug' => $slug,
            'deskripsi' => $validated['deskripsi'] ?? null,
        ]);

        return redirect()
            ->route('admin.forum.categories')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(Category $category)
    {
        return view('admin.forum.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'nama_kategori' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string', 'max:1000'],
        ], [
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
        ]);

        $slug = Str::slug($validated['nama_kategori']);

        $baseSlug = $slug;
        $counter = 1;

        while (
            Category::where('slug', $slug)
                ->where('id', '!=', $category->id)
                ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $category->update([
            'nama_kategori' => $validated['nama_kategori'],
            'slug' => $slug,
            'deskripsi' => $validated['deskripsi'] ?? null,
        ]);

        return redirect()
            ->route('admin.forum.categories')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Category $category)
    {
        if ($category->threads()->exists()) {
            return back()->with(
                'error',
                'Kategori tidak dapat dihapus karena masih memiliki thread.'
            );
        }

        $category->delete();

        return back()->with(
            'success',
            'Kategori berhasil dihapus.'
        );
    }
}