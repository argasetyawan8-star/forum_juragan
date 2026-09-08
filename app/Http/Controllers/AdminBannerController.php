<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminBannerController extends Controller
{
    /**
     * Menampilkan semua banner.
     */
    public function index()
    {
        $banners = Banner::orderBy('urutan')
            ->latest()
            ->paginate(10);

        return view(
            'admin.banners.index',
            compact('banners')
        );
    }

    /**
     * Form tambah banner.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Menyimpan banner baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'subjudul' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'teks_tombol' => [
                'nullable',
                'string',
                'max:100',
            ],

            'link' => [
                'nullable',
                'string',
                'max:500',
            ],

            'urutan' => [
                'required',
                'integer',
                'min:0',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ], [
            'judul.required' => 'Judul banner wajib diisi.',

            'gambar.image' => 'File yang dipilih harus berupa gambar.',

            'gambar.mimes' => 'Format gambar harus JPG, JPEG, PNG, atau WEBP.',

            'gambar.max' => 'Ukuran gambar maksimal 2 MB.',

            'urutan.required' => 'Urutan banner wajib diisi.',

            'urutan.integer' => 'Urutan harus berupa angka.',

            'urutan.min' => 'Urutan tidak boleh kurang dari 0.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload gambar
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('banners', 'public');
        } else {
            $validated['gambar'] = null;
        }

        /*
        |--------------------------------------------------------------------------
        | Status
        |--------------------------------------------------------------------------
        */

        $validated['status'] = $request->boolean('status');

       Banner::create($validated);

        return redirect()
            ->route('admin.banners.index')
            ->with(
                'success',
                'Banner berhasil ditambahkan.'
            );
    }

    /**
     * Form edit banner.
     */
    public function edit(Banner $banner)
    {
        return view(
            'admin.banners.edit',
            compact('banner')
        );
    }

    /**
     * Memperbarui banner.
     */
    public function update(
        Request $request,
        Banner $banner
    ) {
        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255',
            ],

            'subjudul' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'teks_tombol' => [
                'nullable',
                'string',
                'max:100',
            ],

            'link' => [
                'nullable',
                'string',
                'max:500',
            ],

            'urutan' => [
                'required',
                'integer',
                'min:0',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ], [
            'judul.required' => 'Judul banner wajib diisi.',

            'gambar.image' => 'File yang dipilih harus berupa gambar.',

            'gambar.mimes' => 'Format gambar harus JPG, JPEG, PNG, atau WEBP.',

            'gambar.max' => 'Ukuran gambar maksimal 2 MB.',

            'urutan.required' => 'Urutan banner wajib diisi.',

            'urutan.integer' => 'Urutan harus berupa angka.',

            'urutan.min' => 'Urutan tidak boleh kurang dari 0.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload gambar baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {

            // Hapus gambar lama jika ada.
            if ($banner->gambar) {
                Storage::disk('public')->delete(
                    $banner->gambar
                );
            }

            $validated['gambar'] = $request
                ->file('gambar')
                ->store('banners', 'public');
        } else {
            // Pertahankan gambar lama.
            $validated['gambar'] = $banner->gambar;
        }

        /*
        |--------------------------------------------------------------------------
        | Status
        |--------------------------------------------------------------------------
        */

        $validated['status'] = $request->boolean('status');

        $banner->update($validated);

        return redirect()
            ->route('admin.banners.index')
            ->with(
                'success',
                'Banner berhasil diperbarui.'
            );
    }

    /**
     * Menghapus banner.
     */
    public function destroy(Banner $banner)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus file gambar
        |--------------------------------------------------------------------------
        */

        if ($banner->gambar) {
            Storage::disk('public')->delete(
                $banner->gambar
            );
        }

        $banner->delete();

        return redirect()
            ->route('admin.banners.index')
            ->with(
                'success',
                'Banner berhasil dihapus.'
            );
    }

    /**
     * Mengaktifkan / menonaktifkan banner.
     */
    public function toggleStatus(Banner $banner)
    {
        $banner->update([
            'status' => !$banner->status,
        ]);

        return back()->with(
            'success',
            $banner->status
                ? 'Banner berhasil diaktifkan.'
                : 'Banner berhasil dinonaktifkan.'
        );
    }
}