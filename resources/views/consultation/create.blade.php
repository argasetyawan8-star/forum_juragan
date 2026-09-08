@extends('layouts.landing')

@section('content')

@php
    $layanan = [
        [
            'value' => 'Konsultasi Manajemen Karyawan',
            'title' => 'Manajemen Karyawan',
            'description' => 'Membantu mengelola tim, pembagian tugas, kedisiplinan, dan permasalahan karyawan.',
            'icon' => 'bi-people-fill',
        ],
        [
            'value' => 'Konsultasi Rekrutmen',
            'title' => 'Rekrutmen',
            'description' => 'Membantu menyusun strategi dan proses mendapatkan kandidat yang tepat.',
            'icon' => 'bi-person-plus-fill',
        ],
        [
            'value' => 'Konsultasi Payroll & Gaji',
            'title' => 'Payroll & Gaji',
            'description' => 'Membantu memahami pengelolaan payroll, struktur gaji, dan administrasi karyawan.',
            'icon' => 'bi-wallet2',
        ],
        [
            'value' => 'Konsultasi SOP & Operasional',
            'title' => 'SOP & Operasional',
            'description' => 'Membantu membangun SOP dan sistem operasional bisnis yang lebih terstruktur.',
            'icon' => 'bi-diagram-3-fill',
        ],
        [
            'value' => 'Konsultasi Kepemimpinan',
            'title' => 'Kepemimpinan',
            'description' => 'Membantu pemilik bisnis membangun gaya kepemimpinan dan budaya kerja yang lebih baik.',
            'icon' => 'bi-person-badge-fill',
        ],
        [
            'value' => 'Konsultasi Pengembangan Bisnis',
            'title' => 'Pengembangan Bisnis',
            'description' => 'Diskusikan tantangan dan strategi untuk membantu bisnis berkembang lebih terarah.',
            'icon' => 'bi-graph-up-arrow',
        ],
    ];
@endphp


{{-- =========================================================
     HERO
========================================================== --}}
<section
    id="top"
    class="relative overflow-hidden bg-slate-950"
>

    {{-- Background decoration --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -left-32 -top-32 h-80 w-80 rounded-full bg-blue-600/20 blur-3xl"></div>
        <div class="absolute -right-32 top-10 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>
        <div class="absolute bottom-0 left-1/2 h-40 w-96 -translate-x-1/2 rounded-full bg-blue-500/10 blur-3xl"></div>
    </div>


    <div class="relative mx-auto max-w-7xl px-4 pb-16 pt-28 sm:px-6 sm:pb-20 sm:pt-32 lg:px-8">

        {{-- Breadcrumb --}}
        <div class="mb-8 flex flex-wrap items-center gap-2 text-sm text-slate-400">

            <a
                href="{{ route('home') }}"
                class="inline-flex items-center gap-1.5 transition hover:text-white"
            >
                <i class="bi bi-house-door"></i>
                Beranda
            </a>

            <i class="bi bi-chevron-right text-xs"></i>

            <span class="font-medium text-white">
                Konsultasi Bisnis
            </span>

        </div>


        <div class="max-w-3xl">

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-500/10 px-4 py-2 text-sm font-semibold text-blue-300 backdrop-blur-sm">

                <i class="bi bi-chat-square-text-fill"></i>

                Konsultasi Bisnis

            </div>


            {{-- Heading --}}
            <h1 class="mt-6 text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">

                Jangan Hadapi Masalah Bisnis

                <span class="text-blue-400">
                    Sendirian.
                </span>

            </h1>


            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-300 sm:text-lg">
                Ceritakan tantangan bisnis yang sedang kamu hadapi.
                Tim kami akan membantu memberikan perspektif dan solusi
                yang lebih terarah untuk bisnis kamu.
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     MAIN CONTENT
========================================================== --}}
<section class="bg-slate-50 py-10 sm:py-14 lg:py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_360px] lg:items-start">


            {{-- =================================================
                 FORM
            ================================================== --}}
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                {{-- Form Header --}}
                <div class="border-b border-slate-100 px-5 py-6 sm:px-8 sm:py-7">

                    <div class="flex items-start gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-xl text-blue-600">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>

                        <div>

                            <p class="text-xs font-bold uppercase tracking-wider text-blue-600">
                                Ajukan Konsultasi
                            </p>

                            <h2 class="mt-1 text-xl font-black text-slate-900">
                                Ceritakan Kebutuhan Bisnis Kamu
                            </h2>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Isi form berikut agar kami dapat memahami
                                kebutuhan konsultasi kamu.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Validation Error --}}
                @if ($errors->any())

                    <div class="mx-5 mt-6 rounded-2xl border border-red-200 bg-red-50 p-4 sm:mx-8">

                        <div class="flex items-start gap-3">

                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">
                                <i class="bi bi-exclamation-circle-fill"></i>
                            </div>

                            <div class="min-w-0">

                                <p class="font-bold text-red-800">
                                    Ada beberapa data yang perlu diperbaiki.
                                </p>

                                <ul class="mt-2 space-y-1 text-sm leading-6 text-red-700">

                                    @foreach ($errors->all() as $error)

                                        <li class="flex items-start gap-2">
                                            <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-red-500"></span>
                                            <span>{{ $error }}</span>
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>

                    </div>

                @endif


                {{-- FORM --}}
                <form
                    action="{{ route('consultation.store') }}"
                    method="POST"
                    class="px-5 py-7 sm:px-8 sm:py-8"
                >

                    @csrf


                    {{-- =================================================
                         SECTION 01 - DATA DIRI
                    ================================================== --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-black text-white">
                                01
                            </span>

                            <div>

                                <h3 class="font-black text-slate-900">
                                    Data Diri
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Informasi untuk menghubungi kamu.
                                </p>

                            </div>

                        </div>


                        <div class="grid gap-5 sm:grid-cols-2">


                            {{-- Nama --}}
                            <div class="sm:col-span-2">

                                <label
                                    for="nama"
                                    class="mb-2.5 block text-sm font-bold text-slate-700"
                                >
                                    Nama Lengkap
                                    <span class="text-red-500">*</span>
                                </label>

                                <div class="relative">

                                    <i class="bi bi-person-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        type="text"
                                        id="nama"
                                        name="nama"
                                        value="{{ old('nama') }}"
                                        required
                                        autocomplete="name"
                                        placeholder="Masukkan nama lengkap"
                                        class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                    >

                                </div>

                                @error('nama')

                                    <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">
                                        <i class="bi bi-exclamation-circle"></i>
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- Email --}}
                            <div>

                                <label
                                    for="email"
                                    class="mb-2.5 block text-sm font-bold text-slate-700"
                                >
                                    Email
                                    <span class="text-red-500">*</span>
                                </label>

                                <div class="relative">

                                    <i class="bi bi-envelope-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        placeholder="nama@email.com"
                                        class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                    >

                                </div>

                                @error('email')

                                    <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">
                                        <i class="bi bi-exclamation-circle"></i>
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- WhatsApp --}}
                            <div>

                                <label
                                    for="whatsapp"
                                    class="mb-2.5 block text-sm font-bold text-slate-700"
                                >
                                    WhatsApp
                                    <span class="text-red-500">*</span>
                                </label>

                                <div class="relative">

                                    <i class="bi bi-whatsapp pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        type="text"
                                        id="whatsapp"
                                        name="whatsapp"
                                        value="{{ old('whatsapp') }}"
                                        required
                                        autocomplete="tel"
                                        placeholder="08xxxxxxxxxx"
                                        class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                    >

                                </div>

                                <p class="mt-2 text-xs leading-5 text-slate-400">
                                    Gunakan nomor yang aktif dan mudah dihubungi.
                                </p>

                                @error('whatsapp')

                                    <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">
                                        <i class="bi bi-exclamation-circle"></i>
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>

                        </div>

                    </div>


                    <div class="my-9 border-t border-slate-100"></div>


                    {{-- =================================================
                         SECTION 02 - BISNIS
                    ================================================== --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-black text-white">
                                02
                            </span>

                            <div>

                                <h3 class="font-black text-slate-900">
                                    Tentang Bisnis
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Bantu kami memahami bisnis kamu.
                                </p>

                            </div>

                        </div>


                        <div class="grid gap-5 sm:grid-cols-2">

                            {{-- Nama Usaha --}}
                            <div>

                                <label
                                    for="nama_usaha"
                                    class="mb-2.5 block text-sm font-bold text-slate-700"
                                >
                                    Nama Usaha
                                </label>

                                <div class="relative">

                                    <i class="bi bi-building-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        type="text"
                                        id="nama_usaha"
                                        name="nama_usaha"
                                        value="{{ old('nama_usaha') }}"
                                        placeholder="Contoh: Toko Makmur"
                                        class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                    >

                                </div>

                            </div>


                            {{-- Jenis Usaha --}}
                            <div>

                                <label
                                    for="jenis_usaha"
                                    class="mb-2.5 block text-sm font-bold text-slate-700"
                                >
                                    Jenis Usaha
                                </label>

                                <div class="relative">

                                    <i class="bi bi-shop-window pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        type="text"
                                        id="jenis_usaha"
                                        name="jenis_usaha"
                                        value="{{ old('jenis_usaha') }}"
                                        placeholder="Contoh: Kuliner"
                                        class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                    >

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="my-9 border-t border-slate-100"></div>


                    {{-- =================================================
                         SECTION 03 - LAYANAN
                    ================================================== --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-black text-white">
                                03
                            </span>

                            <div>

                                <h3 class="font-black text-slate-900">
                                    Pilih Layanan
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Pilih topik yang paling sesuai dengan kebutuhan kamu.
                                </p>

                            </div>

                        </div>


                        <div class="grid gap-3 sm:grid-cols-2">

                            @foreach ($layanan as $item)

                                <label class="group relative cursor-pointer">

                                    <input
                                        type="radio"
                                        name="layanan"
                                        value="{{ $item['value'] }}"
                                        class="peer sr-only"
                                        {{ old('layanan') === $item['value'] ? 'checked' : '' }}
                                        required
                                    >


                                    <div class="h-full rounded-2xl border border-slate-200 bg-white p-4 transition duration-200 hover:border-blue-300 hover:bg-blue-50/20 peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:ring-2 peer-checked:ring-blue-500/10">

                                        <div class="flex items-start gap-3">

                                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-lg text-slate-600 transition duration-200 group-hover:bg-blue-100 group-hover:text-blue-600 peer-checked:bg-blue-600 peer-checked:text-white">

                                                <i class="bi {{ $item['icon'] }}"></i>

                                            </div>


                                            <div class="min-w-0 flex-1">

                                                <p class="text-sm font-bold text-slate-900">
                                                    {{ $item['title'] }}
                                                </p>

                                                <p class="mt-1 text-xs leading-5 text-slate-500">
                                                    {{ $item['description'] }}
                                                </p>

                                            </div>


                                            <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-200 text-xs text-transparent peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white">
                                                <i class="bi bi-check-lg"></i>
                                            </div>

                                        </div>

                                    </div>

                                </label>

                            @endforeach

                        </div>


                        @error('layanan')

                            <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">

                                <i class="bi bi-exclamation-circle"></i>

                                {{ $message }}

                            </p>

                        @enderror

                    </div>


                    <div class="my-9 border-t border-slate-100"></div>


                    {{-- =================================================
                         SECTION 04 - MASALAH
                    ================================================== --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-black text-white">
                                04
                            </span>

                            <div>

                                <h3 class="font-black text-slate-900">
                                    Ceritakan Masalah Bisnis
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Semakin detail informasinya, semakin mudah kami memahaminya.
                                </p>

                            </div>

                        </div>


                        {{-- Masalah --}}
                        <div>

                            <label
                                for="masalah"
                                class="mb-2.5 block text-sm font-bold text-slate-700"
                            >
                                Masalah yang Sedang Dihadapi
                                <span class="text-red-500">*</span>
                            </label>


                            <textarea
                                id="masalah"
                                name="masalah"
                                rows="6"
                                maxlength="5000"
                                required
                                placeholder="Contoh: Saya kesulitan mengatur karyawan karena sering terjadi keterlambatan dan belum memiliki SOP yang jelas..."
                                class="w-full resize-y rounded-2xl border border-slate-200 bg-white px-4 py-4 text-sm leading-7 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >{{ old('masalah') }}</textarea>


                            <div class="mt-2 flex items-center justify-between gap-3">

                                <p class="text-xs leading-5 text-slate-400">
                                    Jelaskan situasinya secara jelas agar konsultasi lebih terarah.
                                </p>

                                <span class="shrink-0 text-xs text-slate-400">
                                    Maks. 5000 karakter
                                </span>

                            </div>


                            @error('masalah')

                                <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">

                                    <i class="bi bi-exclamation-circle"></i>

                                    {{ $message }}

                                </p>

                            @enderror

                        </div>


                        {{-- Tujuan --}}
                        <div class="mt-6">

                            <label
                                for="tujuan"
                                class="mb-2.5 block text-sm font-bold text-slate-700"
                            >
                                Tujuan yang Ingin Dicapai
                            </label>


                            <textarea
                                id="tujuan"
                                name="tujuan"
                                rows="4"
                                placeholder="Apa hasil yang ingin kamu capai setelah mendapatkan konsultasi?"
                                class="w-full resize-y rounded-2xl border border-slate-200 bg-white px-4 py-4 text-sm leading-7 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >{{ old('tujuan') }}</textarea>

                        </div>

                    </div>


                    <div class="my-9 border-t border-slate-100"></div>


                    {{-- =================================================
                         SECTION 05 - PREFERENSI
                    ================================================== --}}
                    <div>

                        <div class="mb-6 flex items-center gap-3">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs font-black text-white">
                                05
                            </span>

                            <div>

                                <h3 class="font-black text-slate-900">
                                    Preferensi Konsultasi
                                </h3>

                                <p class="text-xs text-slate-500">
                                    Informasi tambahan untuk membantu proses berikutnya.
                                </p>

                            </div>

                        </div>


                        <div class="grid gap-5 sm:grid-cols-2">


                            {{-- Waktu --}}
                            <div>

                                <label
                                    for="preferensi_waktu"
                                    class="mb-2.5 block text-sm font-bold text-slate-700"
                                >
                                    Preferensi Waktu
                                </label>


                                <div class="relative">

                                    <i class="bi bi-calendar-event-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        type="text"
                                        id="preferensi_waktu"
                                        name="preferensi_waktu"
                                        value="{{ old('preferensi_waktu') }}"
                                        placeholder="Contoh: Senin sore"
                                        class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                    >

                                </div>

                            </div>


                            {{-- Budget --}}
                            <div>

                                <label
                                    for="budget"
                                    class="mb-2.5 block text-sm font-bold text-slate-700"
                                >
                                    Perkiraan Budget
                                </label>


                                <div class="relative">

                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm font-bold text-slate-400">
                                        Rp
                                    </span>

                                    <input
                                        type="number"
                                        id="budget"
                                        name="budget"
                                        value="{{ old('budget') }}"
                                        min="0"
                                        placeholder="500000"
                                        class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                    >

                                </div>


                                <p class="mt-2 text-xs leading-5 text-slate-400">
                                    Opsional. Masukkan angka tanpa titik atau koma.
                                </p>


                                @error('budget')

                                    <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">

                                        <i class="bi bi-exclamation-circle"></i>

                                        {{ $message }}

                                    </p>

                                @enderror

                            </div>

                        </div>

                    </div>


                    <div class="my-9 border-t border-slate-100"></div>


                    {{-- =================================================
                         AGREEMENT
                    ================================================== --}}
                    <label class="flex cursor-pointer items-start gap-3 rounded-2xl border border-slate-200 bg-slate-50 p-4 transition hover:border-blue-200 hover:bg-blue-50/30">

                        <input
                            type="checkbox"
                            name="agreement"
                            value="1"
                            required
                            class="mt-1 h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                            {{ old('agreement') ? 'checked' : '' }}
                        >

                        <span class="text-sm leading-6 text-slate-600">

                            Saya menyetujui bahwa informasi yang saya berikan
                            dapat digunakan untuk keperluan proses konsultasi
                            dan komunikasi terkait layanan Forum Juragan.

                        </span>

                    </label>


                    @error('agreement')

                        <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">

                            <i class="bi bi-exclamation-circle"></i>

                            {{ $message }}

                        </p>

                    @enderror


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="mt-6 flex w-full items-center justify-center gap-2 rounded-2xl bg-blue-600 px-6 py-4 text-sm font-black text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl hover:shadow-blue-600/25 focus:outline-none focus:ring-4 focus:ring-blue-500/20 active:scale-[0.99]"
                    >

                        <i class="bi bi-send-fill"></i>

                        Ajukan Konsultasi

                    </button>


                    <p class="mt-4 flex items-center justify-center gap-1.5 text-center text-xs leading-5 text-slate-400">

                        <i class="bi bi-info-circle"></i>

                        Setelah pengajuan dikirim, tim kami akan menghubungi
                        kamu untuk membahas langkah berikutnya.

                    </p>

                </form>

            </div>


            {{-- =================================================
                 SIDEBAR
            ================================================== --}}
            <aside class="space-y-5 lg:sticky lg:top-24">


                {{-- Why Consultation --}}
                <div class="overflow-hidden rounded-3xl bg-slate-950 p-6 text-white shadow-sm">

                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-500/15 text-xl text-blue-400">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>


                    <h2 class="mt-5 text-xl font-black">
                        Kenapa Konsultasi?
                    </h2>


                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        Dapatkan sudut pandang baru untuk membantu
                        mengambil keputusan bisnis dengan lebih percaya diri.
                    </p>


                    <div class="mt-6 space-y-5">

                        <div class="flex gap-3">

                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-emerald-400/10 text-emerald-400">
                                <i class="bi bi-check2"></i>
                            </div>

                            <div>

                                <p class="text-sm font-bold">
                                    Diskusi Terarah
                                </p>

                                <p class="mt-1 text-xs leading-5 text-slate-400">
                                    Fokus pada masalah yang sedang kamu hadapi.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-3">

                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-emerald-400/10 text-emerald-400">
                                <i class="bi bi-check2"></i>
                            </div>

                            <div>

                                <p class="text-sm font-bold">
                                    Perspektif Bisnis
                                </p>

                                <p class="mt-1 text-xs leading-5 text-slate-400">
                                    Dapatkan insight dari pengalaman dan sudut pandang yang berbeda.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-3">

                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-emerald-400/10 text-emerald-400">
                                <i class="bi bi-check2"></i>
                            </div>

                            <div>

                                <p class="text-sm font-bold">
                                    Solusi Lebih Terarah
                                </p>

                                <p class="mt-1 text-xs leading-5 text-slate-400">
                                    Membantu menentukan langkah yang lebih jelas.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Process --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                    <div class="mb-6 flex items-center gap-3">

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-signpost-2-fill"></i>
                        </div>

                        <div>

                            <h3 class="font-black text-slate-900">
                                Proses Konsultasi
                            </h3>

                            <p class="text-xs text-slate-500">
                                Sederhana dan transparan.
                            </p>

                        </div>

                    </div>


                    <div class="space-y-5">

                        @foreach ([
                            ['1', 'Kirim Pengajuan', 'Ceritakan kebutuhan dan masalah bisnis kamu.'],
                            ['2', 'Tim Menghubungi', 'Kami akan menghubungi kamu melalui kontak yang diberikan.'],
                            ['3', 'Jadwalkan Konsultasi', 'Tentukan waktu yang sesuai untuk konsultasi.'],
                            ['4', 'Mulai Konsultasi', 'Bahas masalah dan susun langkah selanjutnya.'],
                        ] as $step)

                            <div class="flex gap-3">

                                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-blue-600 text-xs font-black text-white">
                                    {{ $step[0] }}
                                </span>

                                <div>

                                    <p class="text-sm font-bold text-slate-800">
                                        {{ $step[1] }}
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-slate-500">
                                        {{ $step[2] }}
                                    </p>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- Data Privacy --}}
                <div class="rounded-3xl border border-emerald-100 bg-emerald-50 p-5">

                    <div class="flex gap-3">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>

                            <p class="text-sm font-black text-emerald-900">
                                Data Kamu Aman
                            </p>

                            <p class="mt-1 text-xs leading-5 text-emerald-700">
                                Informasi yang kamu berikan digunakan
                                untuk keperluan konsultasi dan komunikasi layanan.
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
========================================================== --}}
<section class="border-t border-slate-100 bg-white py-14 sm:py-16">

    <div class="mx-auto max-w-4xl px-4 text-center sm:px-6">

        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-xl text-blue-600">
            <i class="bi bi-rocket-takeoff-fill"></i>
        </div>


        <h2 class="mt-5 text-2xl font-black tracking-tight text-slate-900 sm:text-3xl">
            Siap Membawa Bisnis ke Level Berikutnya?
        </h2>


        <p class="mx-auto mt-3 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
            Tidak semua masalah bisnis harus diselesaikan sendirian.
            Mulai dengan menceritakan tantangan yang sedang kamu hadapi.
        </p>


        <a
            href="#top"
            class="mt-7 inline-flex items-center justify-center gap-2 rounded-xl bg-slate-900 px-6 py-3.5 text-sm font-bold text-white transition hover:bg-slate-800"
        >

            <i class="bi bi-arrow-up"></i>

            Kembali ke Form

        </a>

    </div>

</section>

@endsection