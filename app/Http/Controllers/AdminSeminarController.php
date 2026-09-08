<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::withCount('registrations')
            ->latest('tanggal')
            ->paginate(10);

        return view(
            'admin.seminar.seminars.index',
            compact('seminars')
        );
    }

    public function create()
    {
        return view('admin.seminar.seminars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'pembicara' => ['required', 'string', 'max:255'],
            'jabatan_pembicara' => ['nullable', 'string', 'max:255'],

            'tanggal' => ['required', 'date'],
            'jam_mulai' => ['required', 'date_format:H:i'],
            'jam_selesai' => ['required', 'date_format:H:i', 'after:jam_mulai'],

            'format' => ['required', 'in:online,offline,hybrid'],
            'lokasi' => ['nullable', 'string', 'max:255'],
            'link_meeting' => ['nullable', 'url', 'max:255'],

            'harga' => ['required', 'integer', 'min:0'],
            'kapasitas' => ['nullable', 'integer', 'min:1'],

            'sertifikat' => ['nullable', 'boolean'],
            'materi' => ['nullable', 'boolean'],

            'gambar' => ['nullable', 'string', 'max:255'],

            'status' => ['required', 'in:draft,published,completed,cancelled'],
            'is_featured' => ['nullable', 'boolean'],
        ]);

        $validated['slug'] = Str::slug($validated['judul']);

        // Pastikan slug tidak bentrok
        $baseSlug = $validated['slug'];
        $counter = 1;

        while (Seminar::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $baseSlug . '-' . $counter;
            $counter++;
        }

        $validated['sertifikat'] = $request->boolean('sertifikat');
        $validated['materi'] = $request->boolean('materi');
        $validated['is_featured'] = $request->boolean('is_featured');

        Seminar::create($validated);

        return redirect()
            ->route('admin.seminar.seminars')
            ->with('success', 'Seminar berhasil ditambahkan.');
    }

    public function show(Seminar $seminar)
{
    $registrations = $seminar->registrations()
        ->latest()
        ->paginate(10);

    return view(
        'admin.seminar.seminars.show',
        compact('seminar', 'registrations')
    );
}

    public function edit(Seminar $seminar)
    {
        return view(
            'admin.seminar.seminars.edit',
            compact('seminar')
        );
    }

    public function update(Request $request, Seminar $seminar)
{
    $validated = $request->validate([
        'judul' => ['required', 'string', 'max:255'],
        'deskripsi' => ['nullable', 'string'],
        'pembicara' => ['required', 'string', 'max:255'],
        'jabatan_pembicara' => ['nullable', 'string', 'max:255'],

        'tanggal' => ['required', 'date'],
        'jam_mulai' => ['required', 'date_format:H:i'],
        'jam_selesai' => ['required', 'date_format:H:i', 'after:jam_mulai'],

        'format' => ['required', 'in:online,offline,hybrid'],
        'lokasi' => ['nullable', 'string', 'max:255'],
        'link_meeting' => ['nullable', 'url', 'max:255'],

        'harga' => ['required', 'integer', 'min:0'],
        'kapasitas' => ['nullable', 'integer', 'min:1'],

        'sertifikat' => ['nullable', 'boolean'],
        'materi' => ['nullable', 'boolean'],

        'gambar' => ['nullable', 'string', 'max:255'],

        'status' => ['required', 'in:draft,published,completed,cancelled'],
        'is_featured' => ['nullable', 'boolean'],
    ]);

    $slug = Str::slug($validated['judul']);

    // Jangan sampai slug bentrok dengan seminar lain
    $baseSlug = $slug;
    $counter = 1;

    while (
        Seminar::where('slug', $slug)
            ->where('id', '!=', $seminar->id)
            ->exists()
    ) {
        $slug = $baseSlug . '-' . $counter;
        $counter++;
    }

    $validated['slug'] = $slug;

    $validated['sertifikat'] = $request->boolean('sertifikat');
    $validated['materi'] = $request->boolean('materi');
    $validated['is_featured'] = $request->boolean('is_featured');

    $seminar->update($validated);

    return redirect()
        ->route('admin.seminar.seminars')
        ->with('success', 'Seminar berhasil diperbarui.');
}

    public function destroy(Seminar $seminar)
    {
        $seminar->delete();

        return redirect()
            ->route('admin.seminar.seminars')
            ->with('success', 'Seminar berhasil dihapus.');
    }
}