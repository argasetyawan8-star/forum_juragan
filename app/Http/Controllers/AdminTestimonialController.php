<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('urutan')
            ->latest()
            ->paginate(10);

        return view(
            'admin.testimonials.index',
            compact('testimonials')
        );
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => [
                'required',
                'string',
                'max:255',
            ],
            'jabatan' => [
                'nullable',
                'string',
                'max:255',
            ],
            'perusahaan' => [
                'nullable',
                'string',
                'max:255',
            ],
            'isi' => [
                'required',
                'string',
            ],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
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
            'nama.required' => 'Nama wajib diisi.',
            'isi.required' => 'Isi testimonial wajib diisi.',
            'foto.image' => 'File yang dipilih harus berupa gambar.',
            'foto.mimes' => 'Format foto harus JPG, JPEG, PNG, atau WEBP.',
            'foto.max' => 'Ukuran foto maksimal 2 MB.',
            'urutan.required' => 'Urutan testimonial wajib diisi.',
            'urutan.integer' => 'Urutan harus berupa angka.',
            'urutan.min' => 'Urutan tidak boleh kurang dari 0.',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request
                ->file('foto')
                ->store('testimonials', 'public');
        } else {
            $validated['foto'] = null;
        }

        $validated['status'] = $request->boolean('status');

        Testimonial::create($validated);

        return redirect()
            ->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view(
            'admin.testimonials.edit',
            compact('testimonial')
        );
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'nama' => [
                'required',
                'string',
                'max:255',
            ],
            'jabatan' => [
                'nullable',
                'string',
                'max:255',
            ],
            'perusahaan' => [
                'nullable',
                'string',
                'max:255',
            ],
            'isi' => [
                'required',
                'string',
            ],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
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
            'nama.required' => 'Nama wajib diisi.',
            'isi.required' => 'Isi testimonial wajib diisi.',
            'foto.image' => 'File yang dipilih harus berupa gambar.',
            'foto.mimes' => 'Format foto harus JPG, JPEG, PNG, atau WEBP.',
            'foto.max' => 'Ukuran foto maksimal 2 MB.',
            'urutan.required' => 'Urutan testimonial wajib diisi.',
            'urutan.integer' => 'Urutan harus berupa angka.',
            'urutan.min' => 'Urutan tidak boleh kurang dari 0.',
        ]);

        if ($request->hasFile('foto')) {
            if ($testimonial->foto) {
                Storage::disk('public')->delete(
                    $testimonial->foto
                );
            }

            $validated['foto'] = $request
                ->file('foto')
                ->store('testimonials', 'public');
        } else {
            $validated['foto'] = $testimonial->foto;
        }

        $validated['status'] = $request->boolean('status');

        $testimonial->update($validated);

        return redirect()
            ->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->foto) {
            Storage::disk('public')->delete(
                $testimonial->foto
            );
        }

        $testimonial->delete();

        return redirect()
            ->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil dihapus.');
    }

    public function toggleStatus(Testimonial $testimonial)
    {
        $testimonial->update([
            'status' => !$testimonial->status,
        ]);

        return back()->with(
            'success',
            $testimonial->status
                ? 'Testimonial berhasil diaktifkan.'
                : 'Testimonial berhasil dinonaktifkan.'
        );
    }
}