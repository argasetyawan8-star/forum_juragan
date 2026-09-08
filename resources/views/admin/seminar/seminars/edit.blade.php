@extends('admin.layouts.app')

@section('content')
<div class="max-w-5xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <div class="flex items-center gap-3 mb-3">
            <a
                href="{{ route('admin.seminar.seminars') }}"
                class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 transition"
            >
                ←
            </a>

            <div>
                <h1 class="text-2xl font-bold text-slate-900">
                    Edit Seminar
                </h1>

                <p class="text-sm text-slate-500 mt-1">
                    Perbarui informasi seminar yang sudah tersimpan.
                </p>
            </div>
        </div>
    </div>

    {{-- Error --}}
    @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-4">
            <div class="font-semibold text-red-700 mb-2">
                Ada data yang perlu diperbaiki:
            </div>

            <ul class="list-disc list-inside text-sm text-red-600 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('admin.seminar.seminars.update', $seminar) }}"
        method="POST"
        class="space-y-6"
    >
        @csrf
        @method('PUT')

        {{-- Informasi Seminar --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Informasi Seminar
            </h2>

            <p class="text-sm text-slate-500 mt-1 mb-6">
                Informasi utama mengenai seminar.
            </p>

            <div class="space-y-5">

                {{-- Judul --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Judul Seminar
                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul', $seminar->judul) }}"
                        required
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                        placeholder="Contoh: Leadership untuk Pemilik Bisnis"
                    >
                </div>

                {{-- Deskripsi --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        rows="5"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none resize-none"
                        placeholder="Deskripsikan seminar..."
                    >{{ old('deskripsi', $seminar->deskripsi) }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    {{-- Pembicara --}}
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Nama Pembicara
                        </label>

                        <input
                            type="text"
                            name="pembicara"
                            value="{{ old('pembicara', $seminar->pembicara) }}"
                            required
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                        >
                    </div>

                    {{-- Jabatan --}}
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Jabatan Pembicara
                        </label>

                        <input
                            type="text"
                            name="jabatan_pembicara"
                            value="{{ old('jabatan_pembicara', $seminar->jabatan_pembicara) }}"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                        >
                    </div>

                </div>
            </div>
        </div>

        {{-- Jadwal --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Jadwal
            </h2>

            <p class="text-sm text-slate-500 mt-1 mb-6">
                Atur tanggal dan waktu pelaksanaan seminar.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                {{-- Tanggal --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        value="{{ old('tanggal', $seminar->tanggal?->format('Y-m-d')) }}"
                        required
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                    >
                </div>

                {{-- Jam Mulai --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Jam Mulai
                    </label>

                    <input
                        type="time"
                        name="jam_mulai"
                        value="{{ old('jam_mulai', \Carbon\Carbon::parse($seminar->jam_mulai)->format('H:i')) }}"
                        required
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                    >
                </div>

                {{-- Jam Selesai --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Jam Selesai
                    </label>

                    <input
                        type="time"
                        name="jam_selesai"
                        value="{{ old('jam_selesai', \Carbon\Carbon::parse($seminar->jam_selesai)->format('H:i')) }}"
                        required
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                    >
                </div>

            </div>
        </div>

        {{-- Format & Lokasi --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Format & Lokasi
            </h2>

            <p class="text-sm text-slate-500 mt-1 mb-6">
                Tentukan bagaimana seminar dilaksanakan.
            </p>

            <div class="space-y-5">

                {{-- Format --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Format
                    </label>

                    <select
                        name="format"
                        required
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none bg-white"
                    >
                        <option value="online" @selected(old('format', $seminar->format) === 'online')>
                            Online
                        </option>

                        <option value="offline" @selected(old('format', $seminar->format) === 'offline')>
                            Offline
                        </option>

                        <option value="hybrid" @selected(old('format', $seminar->format) === 'hybrid')>
                            Hybrid
                        </option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    {{-- Lokasi --}}
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Lokasi
                        </label>

                        <input
                            type="text"
                            name="lokasi"
                            value="{{ old('lokasi', $seminar->lokasi) }}"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                            placeholder="Contoh: Hotel Grand Mercure"
                        >
                    </div>

                    {{-- Link Meeting --}}
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Link Meeting
                        </label>

                        <input
                            type="url"
                            name="link_meeting"
                            value="{{ old('link_meeting', $seminar->link_meeting) }}"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                            placeholder="https://zoom.us/..."
                        >
                    </div>

                </div>
            </div>
        </div>

        {{-- Pendaftaran --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Pendaftaran
            </h2>

            <p class="text-sm text-slate-500 mt-1 mb-6">
                Atur harga dan fasilitas peserta.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                {{-- Harga --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Harga
                    </label>

                    <input
                        type="number"
                        name="harga"
                        value="{{ old('harga', $seminar->harga) }}"
                        min="0"
                        required
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                    >
                </div>

                {{-- Kapasitas --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Kapasitas
                    </label>

                    <input
                        type="number"
                        name="kapasitas"
                        value="{{ old('kapasitas', $seminar->kapasitas) }}"
                        min="1"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                    >
                </div>

            </div>

            {{-- Checkbox --}}
            <div class="flex flex-wrap gap-6 mt-6">

                <label class="flex items-center gap-3 cursor-pointer">
                    <input
                        type="checkbox"
                        name="sertifikat"
                        value="1"
                        @checked(old('sertifikat', $seminar->sertifikat))
                        class="w-4 h-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                    >

                    <span class="text-sm text-slate-700">
                        Menyediakan Sertifikat
                    </span>
                </label>

                <label class="flex items-center gap-3 cursor-pointer">
                    <input
                        type="checkbox"
                        name="materi"
                        value="1"
                        @checked(old('materi', $seminar->materi))
                        class="w-4 h-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                    >

                    <span class="text-sm text-slate-700">
                        Menyediakan Materi
                    </span>
                </label>

            </div>
        </div>

        {{-- Publikasi --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Publikasi
            </h2>

            <p class="text-sm text-slate-500 mt-1 mb-6">
                Atur status dan tampilan seminar.
            </p>

            <div class="space-y-5">

                {{-- Gambar --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Path Gambar
                    </label>

                    <input
                        type="text"
                        name="gambar"
                        value="{{ old('gambar', $seminar->gambar) }}"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none"
                        placeholder="Contoh: seminars/leadership.jpg"
                    >
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    {{-- Status --}}
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Status
                        </label>

                        <select
                            name="status"
                            required
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none bg-white"
                        >
                            <option value="draft" @selected(old('status', $seminar->status) === 'draft')>
                                Draft
                            </option>

                            <option value="published" @selected(old('status', $seminar->status) === 'published')>
                                Published
                            </option>

                            <option value="completed" @selected(old('status', $seminar->status) === 'completed')>
                                Completed
                            </option>

                            <option value="cancelled" @selected(old('status', $seminar->status) === 'cancelled')>
                                Cancelled
                            </option>
                        </select>
                    </div>

                    {{-- Featured --}}
                    <div class="flex items-end pb-3">
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input
                                type="checkbox"
                                name="is_featured"
                                value="1"
                                @checked(old('is_featured', $seminar->is_featured))
                                class="w-4 h-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                            >

                            <span class="text-sm text-slate-700">
                                Tampilkan sebagai seminar unggulan
                            </span>
                        </label>
                    </div>

                </div>
            </div>
        </div>

        {{-- Action --}}
        <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-3">

            <a
                href="{{ route('admin.seminar.seminars') }}"
                class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-slate-300 bg-white text-sm font-semibold text-slate-700 hover:bg-slate-50 transition"
            >
                Batal
            </a>

            <button
                type="submit"
                class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition"
            >
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>
@endsection