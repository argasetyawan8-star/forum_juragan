@extends('admin.layouts.app')

@section('content')

<div class="mx-auto max-w-5xl">

    {{-- Header --}}
    <div class="mb-8">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <a
                    href="{{ route('admin.seminar.seminars') }}"
                    class="mb-3 inline-flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-blue-600"
                >
                    ← Kembali ke Seminar
                </a>

                <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                    Tambah Seminar
                </h1>

                <p class="mt-1 text-sm text-slate-500">
                    Buat seminar baru untuk komunitas Forum Juragan.
                </p>
            </div>
        </div>
    </div>

    {{-- Error --}}
    @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5">
            <div class="flex gap-3">
                <div class="text-red-500">⚠️</div>

                <div>
                    <h3 class="font-semibold text-red-800">
                        Ada data yang perlu diperbaiki
                    </h3>

                    <ul class="mt-2 list-inside list-disc space-y-1 text-sm text-red-700">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <form
        action="{{ route('admin.seminar.seminars.store') }}"
        method="POST"
        class="space-y-6"
    >
        @csrf

        {{-- INFORMASI DASAR --}}
        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">

            <div class="border-b border-slate-100 px-6 py-5">
                <h2 class="font-semibold text-slate-900">
                    Informasi Seminar
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Informasi utama mengenai seminar.
                </p>
            </div>

            <div class="space-y-6 p-6">

                {{-- Judul --}}
                <div>
                    <label
                        for="judul"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Judul Seminar
                    </label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        value="{{ old('judul') }}"
                        placeholder="Contoh: Leadership untuk Pemilik Bisnis"
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        required
                    >
                </div>

                {{-- Deskripsi --}}
                <div>
                    <label
                        for="deskripsi"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Deskripsi
                    </label>

                    <textarea
                        id="deskripsi"
                        name="deskripsi"
                        rows="5"
                        placeholder="Jelaskan mengenai seminar ini..."
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >{{ old('deskripsi') }}</textarea>
                </div>

                {{-- Pembicara --}}
                <div class="grid gap-6 md:grid-cols-2">

                    <div>
                        <label
                            for="pembicara"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Nama Pembicara
                        </label>

                        <input
                            type="text"
                            id="pembicara"
                            name="pembicara"
                            value="{{ old('pembicara') }}"
                            placeholder="Contoh: Budi Santoso"
                            class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required
                        >
                    </div>

                    <div>
                        <label
                            for="jabatan_pembicara"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Jabatan Pembicara
                        </label>

                        <input
                            type="text"
                            id="jabatan_pembicara"
                            name="jabatan_pembicara"
                            value="{{ old('jabatan_pembicara') }}"
                            placeholder="Contoh: Business Coach"
                            class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        >
                    </div>

                </div>

            </div>
        </div>


        {{-- JADWAL --}}
        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">

            <div class="border-b border-slate-100 px-6 py-5">
                <h2 class="font-semibold text-slate-900">
                    Jadwal Seminar
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Atur tanggal dan waktu pelaksanaan.
                </p>
            </div>

            <div class="grid gap-6 p-6 md:grid-cols-3">

                <div>
                    <label
                        for="tanggal"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Tanggal
                    </label>

                    <input
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        value="{{ old('tanggal') }}"
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        required
                    >
                </div>

                <div>
                    <label
                        for="jam_mulai"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Jam Mulai
                    </label>

                    <input
                        type="time"
                        id="jam_mulai"
                        name="jam_mulai"
                        value="{{ old('jam_mulai') }}"
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        required
                    >
                </div>

                <div>
                    <label
                        for="jam_selesai"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Jam Selesai
                    </label>

                    <input
                        type="time"
                        id="jam_selesai"
                        name="jam_selesai"
                        value="{{ old('jam_selesai') }}"
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        required
                    >
                </div>

            </div>
        </div>


        {{-- FORMAT & LOKASI --}}
        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">

            <div class="border-b border-slate-100 px-6 py-5">
                <h2 class="font-semibold text-slate-900">
                    Format & Lokasi
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Tentukan bagaimana seminar akan dilaksanakan.
                </p>
            </div>

            <div class="space-y-6 p-6">

                <div>
                    <label
                        for="format"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Format
                    </label>

                    <select
                        id="format"
                        name="format"
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        required
                    >
                        <option value="">Pilih format</option>
                        <option value="online" @selected(old('format') === 'online')>
                            Online
                        </option>
                        <option value="offline" @selected(old('format') === 'offline')>
                            Offline
                        </option>
                        <option value="hybrid" @selected(old('format') === 'hybrid')>
                            Hybrid
                        </option>
                    </select>
                </div>

                <div>
                    <label
                        for="lokasi"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Lokasi
                    </label>

                    <input
                        type="text"
                        id="lokasi"
                        name="lokasi"
                        value="{{ old('lokasi') }}"
                        placeholder="Contoh: Hotel Santika Yogyakarta"
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label
                        for="link_meeting"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Link Meeting
                    </label>

                    <input
                        type="url"
                        id="link_meeting"
                        name="link_meeting"
                        value="{{ old('link_meeting') }}"
                        placeholder="https://zoom.us/..."
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >

                    <p class="mt-2 text-xs text-slate-400">
                        Isi jika seminar menggunakan format online atau hybrid.
                    </p>
                </div>

            </div>
        </div>


        {{-- PENDAFTARAN --}}
        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">

            <div class="border-b border-slate-100 px-6 py-5">
                <h2 class="font-semibold text-slate-900">
                    Pendaftaran
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Atur harga dan kapasitas peserta.
                </p>
            </div>

            <div class="space-y-6 p-6">

                <div class="grid gap-6 md:grid-cols-2">

                    <div>
                        <label
                            for="harga"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Harga
                        </label>

                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-400">
                                Rp
                            </span>

                            <input
                                type="number"
                                id="harga"
                                name="harga"
                                value="{{ old('harga', 0) }}"
                                min="0"
                                class="w-full rounded-xl border-slate-200 py-3 pl-11 pr-4 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required
                            >
                        </div>

                        <p class="mt-2 text-xs text-slate-400">
                            Isi 0 jika seminar gratis.
                        </p>
                    </div>

                    <div>
                        <label
                            for="kapasitas"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Kapasitas Peserta
                        </label>

                        <input
                            type="number"
                            id="kapasitas"
                            name="kapasitas"
                            value="{{ old('kapasitas') }}"
                            min="1"
                            placeholder="Contoh: 100"
                            class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        >
                    </div>

                </div>

                <div class="grid gap-4 md:grid-cols-2">

                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-4 transition hover:bg-slate-50">
                        <input
                            type="checkbox"
                            name="sertifikat"
                            value="1"
                            @checked(old('sertifikat'))
                            class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                        >

                        <div>
                            <p class="text-sm font-semibold text-slate-700">
                                Sertifikat
                            </p>

                            <p class="text-xs text-slate-400">
                                Peserta mendapatkan sertifikat.
                            </p>
                        </div>
                    </label>

                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-4 transition hover:bg-slate-50">
                        <input
                            type="checkbox"
                            name="materi"
                            value="1"
                            @checked(old('materi'))
                            class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                        >

                        <div>
                            <p class="text-sm font-semibold text-slate-700">
                                Materi
                            </p>

                            <p class="text-xs text-slate-400">
                                Peserta mendapatkan materi seminar.
                            </p>
                        </div>
                    </label>

                </div>

            </div>
        </div>


        {{-- PUBLIKASI --}}
        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">

            <div class="border-b border-slate-100 px-6 py-5">
                <h2 class="font-semibold text-slate-900">
                    Publikasi
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Atur status dan tampilan seminar.
                </p>
            </div>

            <div class="space-y-6 p-6">

                <div>
                    <label
                        for="gambar"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Path Gambar
                    </label>

                    <input
                        type="text"
                        id="gambar"
                        name="gambar"
                        value="{{ old('gambar') }}"
                        placeholder="Contoh: seminars/leadership.jpg"
                        class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >

                    <p class="mt-2 text-xs text-slate-400">
                        Upload gambar akan kita sambungkan setelah CRUD dasar selesai.
                    </p>
                </div>

                <div class="grid gap-6 md:grid-cols-2">

                    <div>
                        <label
                            for="status"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Status
                        </label>

                        <select
                            id="status"
                            name="status"
                            class="w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required
                        >
                            <option value="draft" @selected(old('status', 'draft') === 'draft')}>
                                Draft
                            </option>

                            <option value="published" @selected(old('status') === 'published')}>
                                Published
                            </option>

                            <option value="completed" @selected(old('status') === 'completed')}>
                                Selesai
                            </option>

                            <option value="cancelled" @selected(old('status') === 'cancelled')}>
                                Dibatalkan
                            </option>
                        </select>
                    </div>

                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-4">
                        <input
                            type="checkbox"
                            name="is_featured"
                            value="1"
                            @checked(old('is_featured'))
                            class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                        >

                        <div>
                            <p class="text-sm font-semibold text-slate-700">
                                Seminar Unggulan
                            </p>

                            <p class="text-xs text-slate-400">
                                Tampilkan sebagai seminar unggulan.
                            </p>
                        </div>
                    </label>

                </div>

            </div>
        </div>


        {{-- ACTION --}}
        <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">

            <a
                href="{{ route('admin.seminar.seminars') }}"
                class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
            >
                Batal
            </a>

            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
            >
                Simpan Seminar
            </button>

        </div>

    </form>

</div>

@endsection