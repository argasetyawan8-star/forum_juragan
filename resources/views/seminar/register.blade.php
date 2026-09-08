@extends('layouts.landing')

@section('content')

@php
    $tanggal = $seminar->tanggal
        ->locale('id')
        ->translatedFormat('l, d F Y');

    $jamMulai = \Carbon\Carbon::parse($seminar->jam_mulai)->format('H.i');
    $jamSelesai = \Carbon\Carbon::parse($seminar->jam_selesai)->format('H.i');

    $harga = $seminar->harga > 0
        ? 'Rp ' . number_format($seminar->harga, 0, ',', '.')
        : 'Gratis';

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

{{-- =========================================================
     HEADER / BREADCRUMB
========================================================= --}}
<section class="relative overflow-hidden bg-slate-950 pt-28 pb-12 sm:pt-32 sm:pb-16">

    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -right-32 -top-32 h-80 w-80 rounded-full bg-blue-600/20 blur-3xl"></div>
        <div class="absolute -bottom-40 -left-20 h-96 w-96 rounded-full bg-indigo-600/20 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <div class="mb-7 flex flex-wrap items-center gap-2 text-sm text-slate-400">

            <a
                href="{{ route('home') }}"
                class="transition hover:text-white"
            >
                Home
            </a>

            <i class="bi bi-chevron-right text-xs text-slate-600"></i>

            <a
                href="{{ route('seminar.index') }}"
                class="transition hover:text-white"
            >
                Seminar
            </a>

            <i class="bi bi-chevron-right text-xs text-slate-600"></i>

            <span class="text-slate-200">
                Pendaftaran
            </span>

        </div>

        <div class="max-w-3xl">

            <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-500/10 px-4 py-2 text-xs font-bold text-blue-300">
                <span class="h-2 w-2 rounded-full bg-blue-400"></span>
                PENDAFTARAN SEMINAR
            </div>

            <h1 class="text-3xl font-bold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl">
                Daftar dan Amankan Tempatmu
            </h1>

            <p class="mt-4 max-w-2xl text-base leading-7 text-slate-300 sm:text-lg">
                Lengkapi data berikut untuk mengikuti seminar
                <span class="font-semibold text-white">
                    {{ $seminar->judul }}
                </span>.
            </p>

        </div>

    </div>

</section>

{{-- =========================================================
     MAIN CONTENT
========================================================= --}}
<section class="bg-slate-50 py-10 sm:py-14 lg:py-16">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid gap-8 lg:grid-cols-3">

            {{-- =================================================
                 FORM
            ================================================= --}}
            <div class="lg:col-span-2">

                <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                    {{-- Form Header --}}
                    <div class="border-b border-slate-100 px-6 py-6 sm:px-8">

                        <div class="flex items-start gap-4">

                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                                <i class="bi bi-pencil-square text-xl"></i>
                            </div>

                            <div>
                                <h2 class="text-xl font-bold text-slate-900 sm:text-2xl">
                                    Form Pendaftaran
                                </h2>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Isi data dengan benar agar kami dapat menghubungi kamu
                                    terkait seminar.
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="p-6 sm:p-8">

                        {{-- =================================================
                             ERROR MESSAGE
                        ================================================= --}}
                        @if ($errors->any())

                            <div class="mb-7 rounded-2xl border border-red-200 bg-red-50 p-5">

                                <div class="flex items-start gap-3">

                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                        <i class="bi bi-exclamation-triangle-fill"></i>
                                    </div>

                                    <div>

                                        <p class="font-bold text-red-800">
                                            Ada data yang perlu diperbaiki
                                        </p>

                                        <ul class="mt-2 space-y-1 text-sm leading-6 text-red-700">

                                            @foreach ($errors->all() as $error)
                                                <li class="flex items-start gap-2">
                                                    <i class="bi bi-dot mt-1 shrink-0"></i>
                                                    <span>{{ $error }}</span>
                                                </li>
                                            @endforeach

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        @endif

                        {{-- =================================================
                             SESSION ERROR
                        ================================================= --}}
                        @if (session('error'))

                            <div class="mb-7 rounded-2xl border border-red-200 bg-red-50 p-5">

                                <div class="flex items-start gap-3">

                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                        <i class="bi bi-exclamation-circle-fill"></i>
                                    </div>

                                    <div>

                                        <p class="font-semibold text-red-800">
                                            Pendaftaran belum dapat diproses
                                        </p>

                                        <p class="mt-1 text-sm leading-6 text-red-700">
                                            {{ session('error') }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        @endif

                        {{-- =================================================
                             SESSION SUCCESS
                        ================================================= --}}
                        @if (session('success'))

                            <div class="mb-7 rounded-2xl border border-emerald-200 bg-emerald-50 p-5">

                                <div class="flex items-start gap-3">

                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>

                                    <div>

                                        <p class="font-semibold text-emerald-800">
                                            Pendaftaran berhasil
                                        </p>

                                        <p class="mt-1 text-sm leading-6 text-emerald-700">
                                            {{ session('success') }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        @endif

                        <form
                            action="{{ route('seminar.register.store', $seminar->slug) }}"
                            method="POST"
                            class="space-y-8"
                        >

                            @csrf

                            {{-- =================================================
                                 SECTION 1 : DATA PESERTA
                            ================================================= --}}
                            <div>

                                <div class="mb-5 flex items-center gap-3">

                                    <div class="flex h-8 w-8 items-center justify-center rounded-xl bg-blue-600 text-sm font-bold text-white">
                                        1
                                    </div>

                                    <div>
                                        <h3 class="font-bold text-slate-900">
                                            Data Peserta
                                        </h3>

                                        <p class="text-xs text-slate-500">
                                            Informasi dasar peserta seminar
                                        </p>
                                    </div>

                                </div>

                                {{-- Nama --}}
                                <div>

                                    <label
                                        for="nama"
                                        class="mb-2 block text-sm font-semibold text-slate-700"
                                    >
                                        Nama Lengkap
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <div class="relative">

                                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                            <i class="bi bi-person"></i>
                                        </div>

                                        <input
                                            type="text"
                                            id="nama"
                                            name="nama"
                                            value="{{ old('nama') }}"
                                            required
                                            autocomplete="name"
                                            placeholder="Contoh: Arga Setyawan"
                                            class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                        >

                                    </div>

                                    <p class="mt-2 text-xs text-slate-400">
                                        Gunakan nama sesuai identitas yang ingin digunakan saat mengikuti seminar.
                                    </p>

                                </div>

                                {{-- Email + WhatsApp --}}
                                <div class="mt-5 grid gap-5 sm:grid-cols-2">

                                    {{-- Email --}}
                                    <div>

                                        <label
                                            for="email"
                                            class="mb-2 block text-sm font-semibold text-slate-700"
                                        >
                                            Email
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <div class="relative">

                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                                <i class="bi bi-envelope"></i>
                                            </div>

                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                value="{{ old('email') }}"
                                                required
                                                autocomplete="email"
                                                placeholder="nama@email.com"
                                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                            >

                                        </div>

                                    </div>

                                    {{-- WhatsApp --}}
                                    <div>

                                        <label
                                            for="whatsapp"
                                            class="mb-2 block text-sm font-semibold text-slate-700"
                                        >
                                            Nomor WhatsApp
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <div class="relative">

                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                                <i class="bi bi-whatsapp"></i>
                                            </div>

                                            <input
                                                type="tel"
                                                id="whatsapp"
                                                name="whatsapp"
                                                value="{{ old('whatsapp') }}"
                                                required
                                                autocomplete="tel"
                                                placeholder="08xxxxxxxxxx"
                                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                            >

                                        </div>

                                        <p class="mt-2 text-xs text-slate-400">
                                            Pastikan nomor WhatsApp aktif.
                                        </p>

                                    </div>

                                </div>

                            </div>

                            {{-- Divider --}}
                            <div class="border-t border-slate-100"></div>

                            {{-- =================================================
                                 SECTION 2 : DATA BISNIS
                            ================================================= --}}
                            <div>

                                <div class="mb-5 flex items-center gap-3">

                                    <div class="flex h-8 w-8 items-center justify-center rounded-xl bg-blue-600 text-sm font-bold text-white">
                                        2
                                    </div>

                                    <div>
                                        <h3 class="font-bold text-slate-900">
                                            Data Bisnis
                                        </h3>

                                        <p class="text-xs text-slate-500">
                                            Ceritakan sedikit tentang bisnis kamu
                                        </p>
                                    </div>

                                </div>

                                <div class="grid gap-5 sm:grid-cols-2">

                                    {{-- Nama Usaha --}}
                                    <div>

                                        <label
                                            for="nama_usaha"
                                            class="mb-2 block text-sm font-semibold text-slate-700"
                                        >
                                            Nama Usaha
                                            <span class="font-normal text-slate-400">
                                                (Opsional)
                                            </span>
                                        </label>

                                        <div class="relative">

                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                                <i class="bi bi-building"></i>
                                            </div>

                                            <input
                                                type="text"
                                                id="nama_usaha"
                                                name="nama_usaha"
                                                value="{{ old('nama_usaha') }}"
                                                placeholder="Contoh: Maju Jaya"
                                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                            >

                                        </div>

                                    </div>

                                    {{-- Jenis Usaha --}}
                                    <div>

                                        <label
                                            for="jenis_usaha"
                                            class="mb-2 block text-sm font-semibold text-slate-700"
                                        >
                                            Jenis Usaha
                                            <span class="font-normal text-slate-400">
                                                (Opsional)
                                            </span>
                                        </label>

                                        <div class="relative">

                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                                <i class="bi bi-briefcase"></i>
                                            </div>

                                            <input
                                                type="text"
                                                id="jenis_usaha"
                                                name="jenis_usaha"
                                                value="{{ old('jenis_usaha') }}"
                                                placeholder="Contoh: Kuliner"
                                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                            >

                                        </div>

                                    </div>

                                </div>

                            </div>

                            {{-- =================================================
                                 EXPECTATION
                            ================================================= --}}
                            <div>

                                <label
                                    for="harapan"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Apa yang Kamu Harapkan dari Seminar Ini?

                                    <span class="font-normal text-slate-400">
                                        (Opsional)
                                    </span>
                                </label>

                                <textarea
                                    id="harapan"
                                    name="harapan"
                                    rows="5"
                                    maxlength="2000"
                                    placeholder="Contoh: Saya ingin mendapatkan insight tentang cara membangun tim yang lebih produktif..."
                                    class="w-full resize-none rounded-2xl border border-slate-200 bg-white px-4 py-3.5 text-slate-900 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                >{{ old('harapan') }}</textarea>

                                <div class="mt-2 flex items-center justify-between">

                                    <p class="text-xs text-slate-400">
                                        Ceritakan secara singkat agar kami lebih memahami kebutuhanmu.
                                    </p>

                                    <span class="hidden text-xs text-slate-400 sm:block">
                                        Maks. 2000 karakter
                                    </span>

                                </div>

                            </div>

                            {{-- =================================================
                                 AGREEMENT
                            ================================================= --}}
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">

                                <label class="flex cursor-pointer items-start gap-3">

                                    <input
                                        type="checkbox"
                                        name="agreement"
                                        value="1"
                                        required
                                        class="mt-1 h-5 w-5 shrink-0 rounded border-slate-300 text-blue-600 focus:ring-2 focus:ring-blue-500/30"
                                    >

                                    <span class="text-sm leading-6 text-slate-600">
                                        Saya menyatakan bahwa data yang saya masukkan sudah benar
                                        dan bersedia mengikuti ketentuan pendaftaran seminar.
                                        <span class="text-red-500">*</span>
                                    </span>

                                </label>

                            </div>

                            {{-- =================================================
                                 ACTION BUTTON
                            ================================================= --}}
                            <div class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-7 sm:flex-row sm:justify-between">

                                <a
                                    href="{{ route('seminar.show', $seminar->slug) }}"
                                    class="inline-flex items-center justify-center gap-2 rounded-2xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 transition hover:border-slate-300 hover:bg-slate-50"
                                >
                                    <i class="bi bi-arrow-left"></i>
                                    Kembali
                                </a>

                                <button
                                    type="submit"
                                    class="group inline-flex items-center justify-center gap-2 rounded-2xl bg-blue-600 px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-blue-500/20"
                                >
                                    Daftar Seminar

                                    <i class="bi bi-arrow-right text-base transition-transform duration-300 group-hover:translate-x-1"></i>
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            {{-- =================================================
                 SIDEBAR
            ================================================= --}}
            <div>

                <div class="space-y-5 lg:sticky lg:top-24">

                    {{-- Seminar Summary --}}
                    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                        {{-- Header --}}
                        <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-indigo-700 p-6 text-white">

                            <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-white/10 blur-2xl"></div>

                            <div class="relative">

                                <div class="mb-3 inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-xs font-bold backdrop-blur-sm">
                                    <i class="bi {{ $formatIcon }}"></i>
                                    {{ $formatLabel }}
                                </div>

                                <p class="text-sm text-blue-100">
                                    Kamu mendaftar untuk
                                </p>

                                <h2 class="mt-2 text-xl font-bold leading-7">
                                    {{ $seminar->judul }}
                                </h2>

                            </div>

                        </div>

                        <div class="p-6">

                            {{-- Date --}}
                            <div class="flex items-start gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                    <i class="bi bi-calendar3"></i>
                                </div>

                                <div>
                                    <p class="text-xs font-medium text-slate-400">
                                        Tanggal
                                    </p>

                                    <p class="mt-1 text-sm font-semibold leading-5 text-slate-900">
                                        {{ $tanggal }}
                                    </p>
                                </div>

                            </div>

                            {{-- Time --}}
                            <div class="mt-5 flex items-start gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                    <i class="bi bi-clock"></i>
                                </div>

                                <div>
                                    <p class="text-xs font-medium text-slate-400">
                                        Waktu
                                    </p>

                                    <p class="mt-1 text-sm font-semibold text-slate-900">
                                        {{ $jamMulai }} - {{ $jamSelesai }} WIB
                                    </p>
                                </div>

                            </div>

                            {{-- Format --}}
                            <div class="mt-5 flex items-start gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                    <i class="bi {{ $formatIcon }}"></i>
                                </div>

                                <div>
                                    <p class="text-xs font-medium text-slate-400">
                                        Format
                                    </p>

                                    <p class="mt-1 text-sm font-semibold text-slate-900">
                                        {{ $formatLabel }}
                                    </p>
                                </div>

                            </div>

                            {{-- Location --}}
                            <div class="mt-5 flex items-start gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>

                                <div>
                                    <p class="text-xs font-medium text-slate-400">
                                        Lokasi
                                    </p>

                                    <p class="mt-1 text-sm font-semibold text-slate-900">
                                        {{ $seminar->lokasi ?: 'Online' }}
                                    </p>
                                </div>

                            </div>

                            {{-- Price --}}
                            <div class="mt-6 border-t border-slate-100 pt-6">

                                <p class="text-xs font-medium text-slate-400">
                                    Biaya Pendaftaran
                                </p>

                                <p class="mt-1 text-2xl font-bold text-blue-600">
                                    {{ $harga }}
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- Benefits --}}
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                <i class="bi bi-gift-fill"></i>
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Yang Kamu Dapatkan
                                </h3>

                                <p class="text-xs text-slate-400">
                                    Fasilitas seminar
                                </p>
                            </div>

                        </div>

                        <div class="mt-5 space-y-4">

                            @if ($seminar->sertifikat)

                                <div class="flex items-start gap-3">

                                    <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                                        <i class="bi bi-check text-xs"></i>
                                    </span>

                                    <span class="text-sm leading-5 text-slate-600">
                                        Sertifikat seminar
                                    </span>

                                </div>

                            @endif

                            @if ($seminar->materi)

                                <div class="flex items-start gap-3">

                                    <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                                        <i class="bi bi-check text-xs"></i>
                                    </span>

                                    <span class="text-sm leading-5 text-slate-600">
                                        Materi seminar
                                    </span>

                                </div>

                            @endif

                            <div class="flex items-start gap-3">

                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                                    <i class="bi bi-check text-xs"></i>
                                </span>

                                <span class="text-sm leading-5 text-slate-600">
                                    Akses mengikuti seminar
                                </span>

                            </div>

                            <div class="flex items-start gap-3">

                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                                    <i class="bi bi-check text-xs"></i>
                                </span>

                                <span class="text-sm leading-5 text-slate-600">
                                    Informasi seminar melalui WhatsApp/email
                                </span>

                            </div>

                        </div>

                    </div>

                    {{-- Privacy / Trust --}}
                    <div class="rounded-3xl border border-blue-100 bg-blue-50 p-5">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>

                            <div>

                                <p class="font-bold text-slate-900">
                                    Data Kamu Aman
                                </p>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Data yang kamu berikan digunakan untuk kebutuhan
                                    administrasi dan komunikasi terkait seminar.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     BOTTOM TRUST SECTION
========================================================= --}}
<section class="border-t border-slate-100 bg-white py-12">

    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

        <div class="grid gap-6 sm:grid-cols-3">

            {{-- Aman --}}
            <div class="flex items-start gap-3">

                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <i class="bi bi-shield-check text-lg"></i>
                </div>

                <div>

                    <p class="text-sm font-bold text-slate-900">
                        Pendaftaran Aman
                    </p>

                    <p class="mt-1 text-xs leading-5 text-slate-500">
                        Data pendaftaran dikelola dengan aman.
                    </p>

                </div>

            </div>

            {{-- Mudah --}}
            <div class="flex items-start gap-3">

                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="bi bi-check2-circle text-lg"></i>
                </div>

                <div>

                    <p class="text-sm font-bold text-slate-900">
                        Proses Mudah
                    </p>

                    <p class="mt-1 text-xs leading-5 text-slate-500">
                        Isi data dan selesaikan pendaftaran dalam beberapa langkah.
                    </p>

                </div>

            </div>

            {{-- Kontak --}}
            <div class="flex items-start gap-3">

                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    <i class="bi bi-chat-dots text-lg"></i>
                </div>

                <div>

                    <p class="text-sm font-bold text-slate-900">
                        Info melalui Kontak
                    </p>

                    <p class="mt-1 text-xs leading-5 text-slate-500">
                        Informasi seminar dapat dikirim melalui email atau WhatsApp.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection