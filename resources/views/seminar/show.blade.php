@extends('layouts.landing')

@section('content')

@php
    $formatLabel = match ($seminar->format) {
        'online' => 'Online',
        'offline' => 'Offline',
        'hybrid' => 'Hybrid',
        default => ucfirst($seminar->format),
    };

    $formatIcon = match ($seminar->format) {
        'online' => 'bi-globe2',
        'offline' => 'bi-geo-alt',
        'hybrid' => 'bi-shuffle',
        default => 'bi-calendar-event',
    };

    $tanggal = $seminar->tanggal
        ->locale('id')
        ->translatedFormat('l, d F Y');

    $tanggalSingkat = $seminar->tanggal
        ->locale('id')
        ->translatedFormat('d M Y');

    $jamMulai = \Carbon\Carbon::parse($seminar->jam_mulai)->format('H.i');
    $jamSelesai = \Carbon\Carbon::parse($seminar->jam_selesai)->format('H.i');

    $harga = $seminar->harga > 0
        ? 'Rp ' . number_format($seminar->harga, 0, ',', '.')
        : 'Gratis';

    $jumlahPeserta = $seminar->registrations()->count();

    $sisaKapasitas = $seminar->kapasitas
        ? max($seminar->kapasitas - $jumlahPeserta, 0)
        : null;

    $seminarSelesai = $seminar->tanggal->lt(today());

    $kapasitasPenuh =
        $seminar->kapasitas !== null &&
        $sisaKapasitas <= 0;
@endphp

{{-- =========================================================
     HERO
========================================================= --}}
<section class="relative overflow-hidden bg-slate-950">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-950 via-slate-950 to-slate-900"></div>

    <div class="absolute -left-20 top-10 h-72 w-72 rounded-full bg-blue-600/20 blur-3xl"></div>
    <div class="absolute -right-20 bottom-0 h-80 w-80 rounded-full bg-emerald-400/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">

        {{-- Breadcrumb --}}
        <div class="mb-8 flex flex-wrap items-center gap-2 text-sm text-slate-300">
            <a
                href="{{ route('home') }}"
                class="transition hover:text-white"
            >
                Beranda
            </a>

            <i class="bi bi-chevron-right text-xs text-slate-500"></i>

            <a
                href="{{ route('seminar.index') }}"
                class="transition hover:text-white"
            >
                Seminar
            </a>

            <i class="bi bi-chevron-right text-xs text-slate-500"></i>

            <span class="text-slate-400">
                Detail
            </span>
        </div>

        <div class="grid gap-12 lg:grid-cols-[1fr_360px] lg:items-center">

            {{-- Left --}}
            <div>

                {{-- Status --}}
                <div class="mb-6 flex flex-wrap items-center gap-3">

                    <span class="inline-flex items-center gap-2 rounded-full bg-blue-500/15 px-4 py-2 text-sm font-semibold text-blue-300 ring-1 ring-inset ring-blue-400/20">
                        <i class="bi {{ $formatIcon }}"></i>
                        {{ $formatLabel }}
                    </span>

                    @if ($seminar->is_featured)
                        <span class="inline-flex items-center gap-2 rounded-full bg-emerald-400/10 px-4 py-2 text-sm font-semibold text-emerald-300 ring-1 ring-inset ring-emerald-400/20">
                            <i class="bi bi-star-fill"></i>
                            Featured
                        </span>
                    @endif

                    @if ($seminarSelesai)
                        <span class="inline-flex items-center gap-2 rounded-full bg-slate-700 px-4 py-2 text-sm font-semibold text-slate-300">
                            <i class="bi bi-calendar-x"></i>
                            Selesai
                        </span>
                    @endif

                </div>

                {{-- Title --}}
                <h1 class="max-w-4xl text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                    {{ $seminar->judul }}
                </h1>

                {{-- Description --}}
                @if ($seminar->deskripsi)
                    <p class="mt-6 max-w-3xl text-base leading-8 text-slate-300 sm:text-lg">
                        {{ $seminar->deskripsi }}
                    </p>
                @endif

                {{-- Speaker --}}
                <div class="mt-8 flex items-center gap-4">

                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white/10 text-blue-300 ring-1 ring-white/10">
                        <i class="bi bi-person-fill text-xl"></i>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Pembicara
                        </p>

                        <p class="mt-1 font-bold text-white">
                            {{ $seminar->pembicara }}
                        </p>

                        @if ($seminar->jabatan_pembicara)
                            <p class="text-sm text-slate-400">
                                {{ $seminar->jabatan_pembicara }}
                            </p>
                        @endif
                    </div>

                </div>

            </div>

            {{-- Hero visual --}}
            <div class="relative">

                <div class="absolute -inset-4 rounded-[2rem] bg-blue-500/10 blur-2xl"></div>

                <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 p-3 shadow-2xl backdrop-blur">

                    @if ($seminar->gambar && $seminar->gambar !== '-')
                        <img
                            src="{{ asset('storage/' . $seminar->gambar) }}"
                            alt="{{ $seminar->judul }}"
                            class="h-80 w-full rounded-[1.5rem] object-cover sm:h-[380px]"
                        >
                    @else
                        <div class="flex h-80 items-center justify-center rounded-[1.5rem] bg-gradient-to-br from-blue-600 to-indigo-700 sm:h-[380px]">
                            <div class="text-center text-white">
                                <i class="bi bi-easel2-fill text-7xl opacity-80"></i>

                                <p class="mt-5 text-lg font-bold">
                                    Forum Juragan
                                </p>

                                <p class="mt-1 text-sm text-blue-100">
                                    Business Seminar
                                </p>
                            </div>
                        </div>
                    @endif

                </div>

            </div>

        </div>

    </div>
</section>

{{-- =========================================================
     QUICK INFO
========================================================= --}}
<section class="relative -mt-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl shadow-slate-900/5 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Date --}}
            <div class="border-b border-slate-200 p-6 sm:border-r lg:border-b-0">
                <div class="flex items-start gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                        <i class="bi bi-calendar3 text-xl"></i>
                    </div>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Tanggal
                        </p>

                        <p class="mt-1 font-bold text-slate-900">
                            {{ $tanggalSingkat }}
                        </p>
                    </div>

                </div>
            </div>

            {{-- Time --}}
            <div class="border-b border-slate-200 p-6 lg:border-r lg:border-b-0">
                <div class="flex items-start gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                        <i class="bi bi-clock text-xl"></i>
                    </div>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Waktu
                        </p>

                        <p class="mt-1 font-bold text-slate-900">
                            {{ $jamMulai }} - {{ $jamSelesai }}
                        </p>
                    </div>

                </div>
            </div>

            {{-- Format --}}
            <div class="border-b border-slate-200 p-6 sm:border-r lg:border-b-0">
                <div class="flex items-start gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-violet-50 text-violet-600">
                        <i class="bi {{ $formatIcon }} text-xl"></i>
                    </div>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Format
                        </p>

                        <p class="mt-1 font-bold text-slate-900">
                            {{ $formatLabel }}
                        </p>
                    </div>

                </div>
            </div>

            {{-- Price --}}
            <div class="p-6">
                <div class="flex items-start gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-amber-50 text-amber-600">
                        <i class="bi bi-tag-fill text-xl"></i>
                    </div>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Investasi
                        </p>

                        <p class="mt-1 font-bold text-slate-900">
                            {{ $harga }}
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

{{-- =========================================================
     MAIN CONTENT
========================================================= --}}
<section class="bg-slate-50 py-16 sm:py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid gap-10 lg:grid-cols-[1fr_360px] lg:items-start">

            {{-- MAIN --}}
            <div class="space-y-8">

                {{-- About --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                    <div class="mb-6 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-info-circle-fill text-xl"></i>
                        </div>

                        <div>
                            <h2 class="text-xl font-black text-slate-900">
                                Tentang Seminar
                            </h2>

                            <p class="text-sm text-slate-500">
                                Informasi lengkap mengenai seminar
                            </p>
                        </div>
                    </div>

                    @if ($seminar->deskripsi)
                        <div class="prose prose-slate max-w-none text-sm leading-8 sm:text-base">
                            {!! nl2br(e($seminar->deskripsi)) !!}
                        </div>
                    @else
                        <p class="text-slate-500">
                            Informasi seminar akan segera diperbarui.
                        </p>
                    @endif

                </div>

                {{-- Schedule --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                    <div class="mb-7 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                            <i class="bi bi-calendar-week-fill text-xl"></i>
                        </div>

                        <div>
                            <h2 class="text-xl font-black text-slate-900">
                                Jadwal Seminar
                            </h2>

                            <p class="text-sm text-slate-500">
                                Waktu pelaksanaan seminar
                            </p>
                        </div>
                    </div>

                    <div class="space-y-5">

                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-600">
                                <i class="bi bi-calendar-date"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                    Hari & Tanggal
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    {{ $tanggal }}
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-600">
                                <i class="bi bi-clock-history"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                    Waktu
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    {{ $jamMulai }} - {{ $jamSelesai }} WIB
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- Location --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                    <div class="mb-7 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                            <i class="bi bi-geo-alt-fill text-xl"></i>
                        </div>

                        <div>
                            <h2 class="text-xl font-black text-slate-900">
                                Lokasi & Pelaksanaan
                            </h2>

                            <p class="text-sm text-slate-500">
                                Detail lokasi seminar
                            </p>
                        </div>
                    </div>

                    <div class="space-y-5">

                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-600">
                                <i class="bi {{ $formatIcon }}"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                    Format
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    {{ $formatLabel }}
                                </p>
                            </div>
                        </div>

                        @if ($seminar->lokasi)
                            <div class="flex gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-600">
                                    <i class="bi bi-pin-map-fill"></i>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                        Lokasi
                                    </p>

                                    <p class="mt-1 font-bold text-slate-900">
                                        {{ $seminar->lokasi }}
                                    </p>
                                </div>
                            </div>
                        @endif

                        @if ($seminar->link_meeting)
                            <div class="rounded-2xl bg-blue-50 p-5">

                                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">
                                            <i class="bi bi-camera-video-fill"></i>
                                        </div>

                                        <div>
                                            <p class="font-bold text-slate-900">
                                                Link Meeting
                                            </p>

                                            <p class="text-sm text-slate-500">
                                                Link akan digunakan saat seminar berlangsung
                                            </p>
                                        </div>
                                    </div>

                                    <a
                                        href="{{ $seminar->link_meeting }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3 text-sm font-bold text-white transition hover:bg-blue-700"
                                    >
                                        Buka Link
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>

                                </div>

                            </div>
                        @endif

                    </div>

                </div>

                {{-- Facilities --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                    <div class="mb-7 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                            <i class="bi bi-gift-fill text-xl"></i>
                        </div>

                        <div>
                            <h2 class="text-xl font-black text-slate-900">
                                Fasilitas Peserta
                            </h2>

                            <p class="text-sm text-slate-500">
                                Yang akan didapatkan peserta
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">

                        {{-- Sertifikat --}}
                        <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                <i class="bi bi-patch-check-fill text-xl"></i>
                            </div>

                            <div>
                                <p class="font-bold text-slate-900">
                                    Sertifikat
                                </p>

                                <p class="text-sm text-slate-500">
                                    {{ $seminar->sertifikat ? 'Tersedia' : 'Tidak tersedia' }}
                                </p>
                            </div>

                        </div>

                        {{-- Materi --}}
                        <div class="flex items-center gap-4 rounded-2xl border border-slate-200 p-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                <i class="bi bi-file-earmark-text-fill text-xl"></i>
                            </div>

                            <div>
                                <p class="font-bold text-slate-900">
                                    Materi Seminar
                                </p>

                                <p class="text-sm text-slate-500">
                                    {{ $seminar->materi ? 'Tersedia' : 'Tidak tersedia' }}
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- Speaker --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                    <div class="mb-7 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-mic-fill text-xl"></i>
                        </div>

                        <div>
                            <h2 class="text-xl font-black text-slate-900">
                                Pembicara
                            </h2>

                            <p class="text-sm text-slate-500">
                                Narasumber seminar
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 rounded-2xl border border-slate-200 p-5 sm:flex-row sm:items-center">

                        <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-600/20">
                            <i class="bi bi-person-fill text-3xl"></i>
                        </div>

                        <div>
                            <h3 class="text-xl font-black text-slate-900">
                                {{ $seminar->pembicara }}
                            </h3>

                            @if ($seminar->jabatan_pembicara)
                                <p class="mt-1 font-medium text-blue-600">
                                    {{ $seminar->jabatan_pembicara }}
                                </p>
                            @endif

                            <p class="mt-3 text-sm leading-7 text-slate-500">
                                Pembicara yang akan membagikan insight dan pengalaman praktis untuk membantu perkembangan bisnis Anda.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            {{-- SIDEBAR --}}
            <aside class="space-y-6 lg:sticky lg:top-24">

                {{-- Registration Card --}}
                <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl shadow-slate-900/5">

                    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 p-6 text-white">

                        <p class="text-sm font-medium text-blue-100">
                            Investasi Seminar
                        </p>

                        <p class="mt-2 text-3xl font-black sm:text-4xl">
                            {{ $harga }}
                        </p>

                        @if ($seminar->harga > 0)
                            <p class="mt-1 text-sm text-blue-100">
                                Biaya pendaftaran per peserta
                            </p>
                        @endif

                    </div>

                    <div class="p-6">

                        {{-- Capacity --}}
                        @if ($seminar->kapasitas !== null)

                            <div class="mb-6 rounded-2xl bg-slate-50 p-4">

                                <div class="mb-2 flex items-center justify-between">
                                    <span class="text-sm font-medium text-slate-500">
                                        Kuota peserta
                                    </span>

                                    <span class="text-sm font-bold text-slate-900">
                                        {{ $jumlahPeserta }}/{{ $seminar->kapasitas }}
                                    </span>
                                </div>

                                @php
                                    $persentase = $seminar->kapasitas > 0
                                        ? min(100, ($jumlahPeserta / $seminar->kapasitas) * 100)
                                        : 0;
                                @endphp

                                <div class="h-2 overflow-hidden rounded-full bg-slate-200">
                                    <div
                                        class="h-full rounded-full bg-blue-600 transition-all"
                                        style="width: {{ $persentase }}%"
                                    ></div>
                                </div>

                                <p class="mt-2 text-xs text-slate-500">
                                    @if ($sisaKapasitas > 0)
                                        {{ $sisaKapasitas }} kursi masih tersedia
                                    @elseif ($sisaKapasitas === 0)
                                        Kuota sudah penuh
                                    @endif
                                </p>

                            </div>

                        @endif

                        {{-- CTA --}}
                        @if ($seminarSelesai)

                            <button
                                type="button"
                                disabled
                                class="flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-2xl bg-slate-200 px-5 py-4 text-sm font-bold text-slate-500"
                            >
                                <i class="bi bi-calendar-x"></i>
                                Seminar Telah Selesai
                            </button>

                        @elseif ($kapasitasPenuh)

                            <button
                                type="button"
                                disabled
                                class="flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-2xl bg-slate-200 px-5 py-4 text-sm font-bold text-slate-500"
                            >
                                <i class="bi bi-people-fill"></i>
                                Kuota Penuh
                            </button>

                        @else

                            <a
                                href="{{ route('seminar.register', $seminar->slug) }}"
                                class="flex w-full items-center justify-center gap-2 rounded-2xl bg-blue-600 px-5 py-4 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
                            >
                                <i class="bi bi-pencil-square"></i>
                                Daftar Sekarang
                            </a>

                        @endif

                        <a
                            href="{{ route('seminar.index') }}"
                            class="mt-3 flex w-full items-center justify-center gap-2 rounded-2xl border border-slate-200 px-5 py-4 text-sm font-bold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                        >
                            <i class="bi bi-arrow-left"></i>
                            Kembali ke Seminar
                        </a>

                    </div>

                </div>

                {{-- Summary --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                    <h3 class="font-black text-slate-900">
                        Ringkasan Seminar
                    </h3>

                    <div class="mt-5 divide-y divide-slate-100">

                        <div class="flex items-center justify-between py-3">
                            <span class="text-sm text-slate-500">
                                Tanggal
                            </span>

                            <span class="text-sm font-semibold text-slate-900">
                                {{ $tanggalSingkat }}
                            </span>
                        </div>

                        <div class="flex items-center justify-between py-3">
                            <span class="text-sm text-slate-500">
                                Waktu
                            </span>

                            <span class="text-sm font-semibold text-slate-900">
                                {{ $jamMulai }} WIB
                            </span>
                        </div>

                        <div class="flex items-center justify-between py-3">
                            <span class="text-sm text-slate-500">
                                Format
                            </span>

                            <span class="text-sm font-semibold text-slate-900">
                                {{ $formatLabel }}
                            </span>
                        </div>

                        @if ($seminar->kapasitas !== null)
                            <div class="flex items-center justify-between py-3">
                                <span class="text-sm text-slate-500">
                                    Kapasitas
                                </span>

                                <span class="text-sm font-semibold text-slate-900">
                                    {{ $seminar->kapasitas }} peserta
                                </span>
                            </div>
                        @endif

                    </div>

                </div>

                {{-- Trust CTA --}}
                <div class="rounded-3xl bg-emerald-50 p-6">

                    <div class="flex items-start gap-4">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                            <i class="bi bi-shield-check text-xl"></i>
                        </div>

                        <div>
                            <h3 class="font-bold text-slate-900">
                                Belajar dari praktisi
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-600">
                                Dapatkan insight praktis yang bisa langsung diterapkan dalam bisnis Anda.
                            </p>
                        </div>

                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>

{{-- =========================================================
     BOTTOM CTA
========================================================= --}}
<section class="relative overflow-hidden bg-white py-16 sm:py-20">

    <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-blue-100 blur-3xl"></div>
    <div class="absolute -right-24 bottom-0 h-72 w-72 rounded-full bg-emerald-100 blur-3xl"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">

        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
            <i class="bi bi-people-fill text-3xl"></i>
        </div>

        <h2 class="mt-6 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
            Siap upgrade bisnis Anda?
        </h2>

        <p class="mx-auto mt-4 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
            Jangan lewatkan kesempatan untuk belajar langsung dari praktisi dan bertemu dengan para pemilik bisnis lainnya.
        </p>

        @unless ($seminarSelesai || $kapasitasPenuh)
            <a
                href="{{ route('seminar.register', $seminar->slug) }}"
                class="mt-8 inline-flex items-center justify-center gap-2 rounded-2xl bg-blue-600 px-7 py-4 text-sm font-bold text-white shadow-xl shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
            >
                Daftar Seminar
                <i class="bi bi-arrow-right"></i>
            </a>
        @endunless

    </div>

</section>

@endsection