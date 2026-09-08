@extends('admin.layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

    {{-- =========================================================
         HEADER
    ========================================================== --}}
    <div class="mb-8">

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

            <div class="flex items-center gap-3">

                <a
                    href="{{ route('admin.seminar.seminars') }}"
                    class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 transition"
                >
                    ←
                </a>

                <div>
                    <h1 class="text-2xl font-bold text-slate-900">
                        Detail Seminar
                    </h1>

                    <p class="text-sm text-slate-500 mt-1">
                        Informasi lengkap seminar.
                    </p>
                </div>

            </div>

            <div class="flex gap-2">

                <a
                    href="{{ route('admin.seminar.seminars.edit', $seminar) }}"
                    class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition"
                >
                    Edit Seminar
                </a>

            </div>

        </div>

    </div>


    {{-- =========================================================
         FLASH MESSAGE
    ========================================================== --}}

    @if (session('success'))

        <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm text-emerald-700">
            {{ session('success') }}
        </div>

    @endif


    @if (session('error'))

        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
            {{ session('error') }}
        </div>

    @endif


    @if ($errors->any())

        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4">

            <p class="text-sm font-semibold text-red-700">
                Terjadi kesalahan:
            </p>

            <ul class="mt-2 list-disc list-inside text-sm text-red-600 space-y-1">

                @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- =========================================================
         MAIN INFORMATION
    ========================================================== --}}

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">


        {{-- =====================================================
             LEFT CONTENT
        ====================================================== --}}

        <div class="lg:col-span-2 space-y-6">


            {{-- =================================================
                 JUDUL & DESKRIPSI
            ================================================== --}}

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

                {{-- Status --}}
                <div class="flex flex-wrap items-center gap-2 mb-4">

                    @if ($seminar->status === 'published')

                        <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold">
                            Published
                        </span>

                    @elseif ($seminar->status === 'draft')

                        <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-semibold">
                            Draft
                        </span>

                    @elseif ($seminar->status === 'completed')

                        <span class="px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold">
                            Completed
                        </span>

                    @else

                        <span class="px-3 py-1 rounded-full bg-red-50 text-red-700 text-xs font-semibold">
                            Cancelled
                        </span>

                    @endif


                    @if ($seminar->is_featured)

                        <span class="px-3 py-1 rounded-full bg-purple-50 text-purple-700 text-xs font-semibold">
                            ⭐ Featured
                        </span>

                    @endif

                </div>


                {{-- Judul --}}
                <h2 class="text-2xl font-bold text-slate-900">
                    {{ $seminar->judul }}
                </h2>


                {{-- Slug --}}
                <p class="text-sm text-slate-500 mt-2">
                    {{ $seminar->slug }}
                </p>


                {{-- Deskripsi --}}
                <div class="mt-6 pt-6 border-t border-slate-100">

                    <h3 class="text-sm font-semibold text-slate-900 mb-2">
                        Deskripsi
                    </h3>

                    <p class="text-sm leading-7 text-slate-600 whitespace-pre-line">
                        {{ $seminar->deskripsi ?: 'Belum ada deskripsi.' }}
                    </p>

                </div>

            </div>


            {{-- =================================================
                 PEMBICARA
            ================================================== --}}

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

                <h2 class="text-lg font-semibold text-slate-900 mb-5">
                    Pembicara
                </h2>

                <div class="flex items-center gap-4">

                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl font-bold">
                        {{ strtoupper(substr($seminar->pembicara, 0, 1)) }}
                    </div>

                    <div>

                        <h3 class="font-semibold text-slate-900">
                            {{ $seminar->pembicara }}
                        </h3>

                        <p class="text-sm text-slate-500 mt-1">
                            {{ $seminar->jabatan_pembicara ?: 'Pembicara Seminar' }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 JADWAL & LOKASI
            ================================================== --}}

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

                <h2 class="text-lg font-semibold text-slate-900 mb-5">
                    Jadwal & Lokasi
                </h2>


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">


                    {{-- Tanggal --}}
                    <div class="rounded-xl bg-slate-50 p-4">

                        <p class="text-xs font-medium text-slate-500">
                            Tanggal
                        </p>

                        <p class="text-sm font-semibold text-slate-900 mt-1">

                            {{ $seminar->tanggal?->locale('id')->translatedFormat('l, d F Y') }}

                        </p>

                    </div>


                    {{-- Waktu --}}
                    <div class="rounded-xl bg-slate-50 p-4">

                        <p class="text-xs font-medium text-slate-500">
                            Waktu
                        </p>

                        <p class="text-sm font-semibold text-slate-900 mt-1">

                            {{ \Carbon\Carbon::parse($seminar->jam_mulai)->format('H:i') }}

                            -

                            {{ \Carbon\Carbon::parse($seminar->jam_selesai)->format('H:i') }}

                        </p>

                    </div>


                    {{-- Format --}}
                    <div class="rounded-xl bg-slate-50 p-4">

                        <p class="text-xs font-medium text-slate-500">
                            Format
                        </p>

                        <p class="text-sm font-semibold text-slate-900 mt-1">

                            {{ ucfirst($seminar->format) }}

                        </p>

                    </div>


                    {{-- Lokasi --}}
                    <div class="rounded-xl bg-slate-50 p-4">

                        <p class="text-xs font-medium text-slate-500">
                            Lokasi
                        </p>

                        <p class="text-sm font-semibold text-slate-900 mt-1">

                            {{ $seminar->lokasi ?: '-' }}

                        </p>

                    </div>

                </div>


                {{-- Link Meeting --}}
                @if ($seminar->link_meeting)

                    <div class="mt-5 rounded-xl border border-blue-100 bg-blue-50 p-4">

                        <p class="text-xs font-medium text-blue-600">
                            Link Meeting
                        </p>

                        <a
                            href="{{ $seminar->link_meeting }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-sm font-semibold text-blue-700 hover:underline break-all"
                        >
                            {{ $seminar->link_meeting }}
                        </a>

                    </div>

                @endif

            </div>

        </div>


        {{-- =====================================================
             RIGHT SIDEBAR
        ====================================================== --}}

        <div class="space-y-6">


            {{-- =================================================
                 STATISTIK
            ================================================== --}}

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

                <h2 class="text-lg font-semibold text-slate-900 mb-5">
                    Statistik
                </h2>


                <div class="space-y-4">


                    {{-- Peserta --}}
                    <div class="flex items-center justify-between">

                        <span class="text-sm text-slate-500">
                            Peserta Terdaftar
                        </span>

                        <span class="text-lg font-bold text-slate-900">
                            {{ $seminar->registrations()->count() }}
                        </span>

                    </div>


                    {{-- Kapasitas --}}
                    <div class="flex items-center justify-between">

                        <span class="text-sm text-slate-500">
                            Kapasitas
                        </span>

                        <span class="text-lg font-bold text-slate-900">
                            {{ $seminar->kapasitas ?: '∞' }}
                        </span>

                    </div>


                    {{-- Harga --}}
                    <div class="flex items-center justify-between">

                        <span class="text-sm text-slate-500">
                            Harga
                        </span>

                        <span class="text-lg font-bold text-blue-600">

                            {{ $seminar->harga > 0
                                ? 'Rp ' . number_format($seminar->harga, 0, ',', '.')
                                : 'Gratis'
                            }}

                        </span>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 FASILITAS
            ================================================== --}}

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

                <h2 class="text-lg font-semibold text-slate-900 mb-5">
                    Fasilitas
                </h2>


                <div class="space-y-3">


                    {{-- Sertifikat --}}
                    <div class="flex items-center gap-3">

                        <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-sm text-slate-700">
                            Sertifikat
                        </span>

                        <span class="ml-auto text-xs font-semibold
                            {{ $seminar->sertifikat ? 'text-emerald-600' : 'text-slate-400' }}
                        ">
                            {{ $seminar->sertifikat ? 'Ya' : 'Tidak' }}
                        </span>

                    </div>


                    {{-- Materi --}}
                    <div class="flex items-center gap-3">

                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-sm text-slate-700">
                            Materi
                        </span>

                        <span class="ml-auto text-xs font-semibold
                            {{ $seminar->materi ? 'text-blue-600' : 'text-slate-400' }}
                        ">
                            {{ $seminar->materi ? 'Ya' : 'Tidak' }}
                        </span>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 INFORMASI SISTEM
            ================================================== --}}

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

                <h2 class="text-lg font-semibold text-slate-900 mb-5">
                    Informasi Sistem
                </h2>


                <div class="space-y-4 text-sm">


                    {{-- ID --}}
                    <div>

                        <p class="text-xs text-slate-400">
                            ID Seminar
                        </p>

                        <p class="font-medium text-slate-700 mt-1">
                            #{{ $seminar->id }}
                        </p>

                    </div>


                    {{-- Created --}}
                    <div>

                        <p class="text-xs text-slate-400">
                            Dibuat
                        </p>

                        <p class="font-medium text-slate-700 mt-1">
                            {{ $seminar->created_at?->format('d M Y, H:i') }}
                        </p>

                    </div>


                    {{-- Updated --}}
                    <div>

                        <p class="text-xs text-slate-400">
                            Terakhir diperbarui
                        </p>

                        <p class="font-medium text-slate-700 mt-1">
                            {{ $seminar->updated_at?->format('d M Y, H:i') }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         PESERTA TERDAFTAR
    ========================================================== --}}

    <div class="mt-6 bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">


        {{-- =====================================================
             HEADER PESERTA
        ====================================================== --}}

        <div class="p-6 border-b border-slate-100">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                <div>

                    <h2 class="text-lg font-semibold text-slate-900">
                        Peserta Terdaftar
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Daftar peserta yang telah mendaftar pada seminar ini.
                    </p>

                </div>


                <div class="inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-blue-50 text-blue-700">

                    <span class="text-sm font-semibold">
                        {{ $registrations->total() }} peserta
                    </span>

                </div>

            </div>

        </div>


        {{-- =====================================================
             PESERTA ADA
        ====================================================== --}}

        @if ($registrations->count())


            {{-- =================================================
                 DESKTOP TABLE
            ================================================== --}}

            <div class="hidden md:block overflow-x-auto">

                <table class="w-full min-w-[900px] text-sm">


                    {{-- Header Table --}}
                    <thead class="bg-slate-50 border-b border-slate-100">

                        <tr>

                            <th class="px-6 py-4 text-left font-semibold text-slate-600">
                                Peserta
                            </th>

                            <th class="px-6 py-4 text-left font-semibold text-slate-600">
                                WhatsApp
                            </th>

                            <th class="px-6 py-4 text-left font-semibold text-slate-600">
                                Usaha
                            </th>

                            <th class="px-6 py-4 text-left font-semibold text-slate-600">
                                Status
                            </th>

                            <th class="px-6 py-4 text-left font-semibold text-slate-600">
                                Terdaftar
                            </th>

                        </tr>

                    </thead>


                    {{-- Body --}}
                    <tbody class="divide-y divide-slate-100">


                        @foreach ($registrations as $registration)

                            <tr class="hover:bg-slate-50 transition">


                                {{-- Peserta --}}
                                <td class="px-6 py-4">

                                    <div>

                                        <p class="font-semibold text-slate-900">
                                            {{ $registration->nama }}
                                        </p>

                                        <p class="text-xs text-slate-500 mt-1">
                                            {{ $registration->email }}
                                        </p>

                                    </div>

                                </td>


                                {{-- WhatsApp --}}
                                <td class="px-6 py-4">

                                    <span class="text-slate-700">
                                        {{ $registration->whatsapp }}
                                    </span>

                                </td>


                                {{-- Usaha --}}
                                <td class="px-6 py-4">

                                    <div>

                                        <p class="font-medium text-slate-700">
                                            {{ $registration->nama_usaha ?: '-' }}
                                        </p>

                                        @if ($registration->jenis_usaha)

                                            <p class="text-xs text-slate-500 mt-1">
                                                {{ $registration->jenis_usaha }}
                                            </p>

                                        @endif

                                    </div>

                                </td>


                                {{-- Status --}}
                                <td class="px-6 py-4">

                                    <form
                                        action="{{ route('admin.seminar.registrations.status', $registration) }}"
                                        method="POST"
                                        class="inline-block"
                                    >

                                        @csrf

                                        @method('PATCH')


                                        <select
                                            name="status"
                                            onchange="this.form.submit()"
                                            class="min-w-[145px] cursor-pointer rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700 shadow-sm outline-none transition hover:border-blue-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                        >

                                            <option
                                                value="registered"
                                                @selected($registration->status === 'registered')
                                            >
                                                Terdaftar
                                            </option>

                                            <option
                                                value="confirmed"
                                                @selected($registration->status === 'confirmed')
                                            >
                                                Dikonfirmasi
                                            </option>

                                            <option
                                                value="attended"
                                                @selected($registration->status === 'attended')
                                            >
                                                Hadir
                                            </option>

                                            <option
                                                value="cancelled"
                                                @selected($registration->status === 'cancelled')
                                            >
                                                Dibatalkan
                                            </option>

                                        </select>

                                    </form>

                                </td>


                                {{-- Tanggal --}}
                                <td class="px-6 py-4 text-slate-500">

                                    {{ $registration->created_at?->format('d M Y, H:i') }}

                                </td>

                            </tr>

                        @endforeach


                    </tbody>

                </table>

            </div>


            {{-- =================================================
                 MOBILE CARDS
            ================================================== --}}

            <div class="md:hidden divide-y divide-slate-100">


                @foreach ($registrations as $registration)

                    <div class="p-5">


                        {{-- Nama --}}
                        <div class="flex items-start justify-between gap-3">

                            <div class="min-w-0">

                                <p class="font-semibold text-slate-900">
                                    {{ $registration->nama }}
                                </p>

                                <p class="text-xs text-slate-500 mt-1 break-all">
                                    {{ $registration->email }}
                                </p>

                            </div>

                        </div>


                        <div class="mt-4 grid grid-cols-1 gap-4">


                            {{-- WhatsApp --}}
                            <div>

                                <p class="text-xs text-slate-400">
                                    WhatsApp
                                </p>

                                <p class="font-medium text-slate-700 mt-1">
                                    {{ $registration->whatsapp }}
                                </p>

                            </div>


                            {{-- Usaha --}}
                            <div>

                                <p class="text-xs text-slate-400">
                                    Usaha
                                </p>

                                <p class="font-medium text-slate-700 mt-1">
                                    {{ $registration->nama_usaha ?: '-' }}
                                </p>

                                @if ($registration->jenis_usaha)

                                    <p class="text-xs text-slate-500 mt-1">
                                        {{ $registration->jenis_usaha }}
                                    </p>

                                @endif

                            </div>


                            {{-- Status --}}
                            <div>

                                <p class="text-xs text-slate-400 mb-2">
                                    Status
                                </p>


                                <form
                                    action="{{ route('admin.seminar.registrations.status', $registration) }}"
                                    method="POST"
                                >

                                    @csrf

                                    @method('PATCH')


                                    <select
                                        name="status"
                                        onchange="this.form.submit()"
                                        class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm font-semibold text-slate-700 shadow-sm outline-none transition hover:border-blue-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                    >

                                        <option
                                            value="registered"
                                            @selected($registration->status === 'registered')
                                        >
                                            Terdaftar
                                        </option>

                                        <option
                                            value="confirmed"
                                            @selected($registration->status === 'confirmed')
                                        >
                                            Dikonfirmasi
                                        </option>

                                        <option
                                            value="attended"
                                            @selected($registration->status === 'attended')
                                        >
                                            Hadir
                                        </option>

                                        <option
                                            value="cancelled"
                                            @selected($registration->status === 'cancelled')
                                        >
                                            Dibatalkan
                                        </option>

                                    </select>

                                </form>

                            </div>


                            {{-- Tanggal --}}
                            <div>

                                <p class="text-xs text-slate-400">
                                    Terdaftar
                                </p>

                                <p class="font-medium text-slate-700 mt-1">
                                    {{ $registration->created_at?->format('d M Y, H:i') }}
                                </p>

                            </div>


                            {{-- Harapan --}}
                            @if ($registration->harapan)

                                <div>

                                    <p class="text-xs text-slate-400">
                                        Harapan Peserta
                                    </p>

                                    <p class="text-sm text-slate-600 mt-1 leading-6">
                                        {{ $registration->harapan }}
                                    </p>

                                </div>

                            @endif


                        </div>

                    </div>

                @endforeach


            </div>


            {{-- =================================================
                 PAGINATION
            ================================================== --}}

            @if ($registrations->hasPages())

                <div class="px-6 py-4 border-t border-slate-100">

                    {{ $registrations->links() }}

                </div>

            @endif


        @else


            {{-- =================================================
                 EMPTY STATE
            ================================================== --}}

            <div class="p-10 text-center">

                <div class="w-14 h-14 mx-auto rounded-2xl bg-slate-100 flex items-center justify-center text-2xl">
                    👥
                </div>


                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                    Belum ada peserta
                </h3>


                <p class="mt-1 text-sm text-slate-500">
                    Belum ada peserta yang mendaftar pada seminar ini.
                </p>

            </div>


        @endif


    </div>


</div>

@endsection