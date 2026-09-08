@extends('layouts.landing')

@section('content')

@php
    $tanggal = $seminar->tanggal
        ->locale('id')
        ->translatedFormat('l, d F Y');

    $jamMulai = \Carbon\Carbon::parse($seminar->jam_mulai)->format('H.i');
    $jamSelesai = \Carbon\Carbon::parse($seminar->jam_selesai)->format('H.i');

    $formatLabel = match ($seminar->format) {
        'online' => 'Online',
        'offline' => 'Offline',
        'hybrid' => 'Hybrid',
        default => ucfirst($seminar->format),
    };

    $formatIcon = match ($seminar->format) {
        'online' => 'bi-globe2',
        'offline' => 'bi-geo-alt-fill',
        'hybrid' => 'bi-shuffle',
        default => 'bi-calendar-event',
    };
@endphp

<section class="relative min-h-[calc(100vh-80px)] overflow-hidden bg-slate-50">

    {{-- Background --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -left-32 -top-32 h-80 w-80 rounded-full bg-blue-500/10 blur-3xl"></div>
        <div class="absolute -bottom-40 -right-20 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-4xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">

        {{-- Success Icon --}}
        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 shadow-lg shadow-emerald-500/10">
            <i class="bi bi-check-circle-fill text-5xl"></i>
        </div>

        {{-- Heading --}}
        <div class="mt-7 text-center">

            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-xs font-bold text-emerald-700">
                <i class="bi bi-check2-circle"></i>
                PENDAFTARAN BERHASIL
            </div>

            <h1 class="mt-5 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                Terima Kasih, Pendaftaran Berhasil!
            </h1>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg">
                Data pendaftaran kamu sudah berhasil kami terima.
                Simpan informasi seminar berikut untuk referensi.
            </p>

        </div>

        {{-- Seminar Card --}}
        <div class="mt-10 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl shadow-slate-900/5">

            {{-- Header --}}
            <div class="bg-gradient-to-br from-blue-600 to-indigo-700 p-6 text-white sm:p-8">

                <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">

                    <div>
                        <p class="text-sm font-medium text-blue-100">
                            Seminar yang kamu ikuti
                        </p>

                        <h2 class="mt-2 text-2xl font-black leading-tight sm:text-3xl">
                            {{ $seminar->judul }}
                        </h2>
                    </div>

                    <div class="inline-flex w-fit shrink-0 items-center gap-2 rounded-full bg-white/15 px-4 py-2 text-sm font-bold backdrop-blur-sm">
                        <i class="bi {{ $formatIcon }}"></i>
                        {{ $formatLabel }}
                    </div>

                </div>

            </div>

            {{-- Information --}}
            <div class="p-6 sm:p-8">

                <div class="grid gap-5 sm:grid-cols-2">

                    {{-- Date --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-slate-200 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-calendar3 text-xl"></i>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                Tanggal
                            </p>

                            <p class="mt-1 font-bold text-slate-900">
                                {{ $tanggal }}
                            </p>
                        </div>

                    </div>

                    {{-- Time --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-slate-200 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                            <i class="bi bi-clock text-xl"></i>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                Waktu
                            </p>

                            <p class="mt-1 font-bold text-slate-900">
                                {{ $jamMulai }} - {{ $jamSelesai }} WIB
                            </p>
                        </div>

                    </div>

                    {{-- Format --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-slate-200 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
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

                    {{-- Location --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-slate-200 p-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                            <i class="bi bi-geo-alt-fill text-xl"></i>
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                Lokasi
                            </p>

                            <p class="mt-1 font-bold text-slate-900">
                                {{ $seminar->lokasi ?: 'Online' }}
                            </p>
                        </div>

                    </div>

                </div>

                {{-- Notice --}}
                <div class="mt-7 rounded-2xl border border-blue-100 bg-blue-50 p-5">

                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">
                            <i class="bi bi-info-circle-fill"></i>
                        </div>

                        <div>
                            <p class="font-bold text-slate-900">
                                Apa selanjutnya?
                            </p>

                            <p class="mt-1 text-sm leading-6 text-slate-600">
                                Informasi lanjutan mengenai seminar akan disampaikan
                                melalui email atau WhatsApp yang kamu daftarkan.
                            </p>
                        </div>

                    </div>

                </div>

                {{-- Actions --}}
                <div class="mt-7 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="{{ route('seminar.index') }}"
                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-2xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-bold text-slate-700 transition hover:border-slate-300 hover:bg-slate-50"
                    >
                        <i class="bi bi-arrow-left"></i>
                        Kembali ke Seminar
                    </a>

                    <a
                        href="{{ route('home') }}"
                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-2xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700"
                    >
                        <i class="bi bi-house-fill"></i>
                        Kembali ke Beranda
                    </a>

                </div>

            </div>

        </div>

        {{-- Bottom Trust --}}
        <div class="mt-8 grid gap-4 sm:grid-cols-3">

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                        <i class="bi bi-shield-check text-lg"></i>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-slate-900">
                            Data Aman
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Data pendaftaran dikelola secara aman.
                        </p>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <i class="bi bi-envelope-check text-lg"></i>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-slate-900">
                            Konfirmasi
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Informasi akan dikirim melalui kontak kamu.
                        </p>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                        <i class="bi bi-calendar-check text-lg"></i>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-slate-900">
                            Siap Mengikuti
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Jangan lupa mencatat jadwal seminar.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection