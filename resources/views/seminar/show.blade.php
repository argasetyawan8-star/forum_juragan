@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    {{-- HEADER / BREADCRUMB --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-2 text-sm text-slate-500 mb-8">

            <a href="/" class="hover:text-blue-600 transition">
                Home
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <a href="#" class="hover:text-blue-600 transition">
                Seminar
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <span class="text-slate-900 font-medium">
                Detail Seminar
            </span>

        </div>


        {{-- MAIN GRID --}}
        <div class="grid lg:grid-cols-3 gap-8">

            {{-- LEFT CONTENT --}}
            <div class="lg:col-span-2 space-y-8">

                {{-- EVENT HERO --}}
                <div class="relative overflow-hidden rounded-3xl
                            bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800
                            min-h-[360px] sm:min-h-[420px]">

                    {{-- Decorative circles --}}
                    <div class="absolute -right-24 -top-24 w-80 h-80
                                rounded-full border-[60px] border-white/10"></div>

                    <div class="absolute -left-20 -bottom-24 w-72 h-72
                                rounded-full border-[45px] border-emerald-300/10"></div>

                    <div class="absolute right-20 bottom-10 w-20 h-20
                                rounded-full bg-emerald-400/10 blur-xl"></div>

                    <div class="relative h-full p-7 sm:p-10 flex flex-col justify-between">

                        <div class="flex flex-wrap items-center gap-3">

                            <span class="inline-flex items-center gap-2 px-3.5 py-2
                                         rounded-xl bg-white/15 backdrop-blur-sm
                                         text-white text-sm font-semibold">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                                </svg>

                                Seminar
                            </span>

                            <span class="px-3.5 py-2 rounded-xl
                                         bg-emerald-400 text-emerald-950
                                         text-sm font-bold">

                                Pendaftaran Dibuka
                            </span>

                        </div>


                        <div class="mt-16 max-w-3xl">

                            <p class="text-blue-100 text-sm sm:text-base font-medium">
                                Sabtu, 20 September 2026
                            </p>

                            <h1 class="mt-3 text-3xl sm:text-4xl lg:text-5xl
                                       font-bold text-white leading-tight">

                                Leadership untuk
                                Pemilik Bisnis

                            </h1>

                            <p class="mt-5 text-blue-100 text-base sm:text-lg
                                      leading-relaxed max-w-2xl">

                                Bangun tim yang solid, tingkatkan kemampuan
                                leadership, dan ciptakan budaya kerja yang
                                membuat bisnis berkembang.

                            </p>

                        </div>

                    </div>

                </div>


                {{-- EVENT DESCRIPTION --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6 sm:p-8">

                    <h2 class="text-2xl font-bold text-slate-900">
                        Tentang Seminar
                    </h2>

                    <div class="mt-5 space-y-4 text-slate-600 leading-relaxed">

                        <p>
                            Menjadi pemilik bisnis bukan hanya tentang bagaimana
                            mendapatkan pelanggan dan meningkatkan omzet.
                            Kemampuan membangun dan memimpin tim juga menjadi
                            bagian penting dalam perjalanan bisnis.
                        </p>

                        <p>
                            Dalam seminar ini, kamu akan mempelajari bagaimana
                            seorang pemilik bisnis dapat membangun tim yang
                            bertanggung jawab, menciptakan komunikasi yang sehat,
                            serta memberikan arahan yang jelas kepada karyawan.
                        </p>

                        <p>
                            Materi disampaikan secara praktis dengan contoh
                            permasalahan yang sering terjadi di dunia bisnis,
                            sehingga insight yang didapat dapat langsung
                            diterapkan dalam bisnis kamu.
                        </p>

                    </div>


                    {{-- WHAT YOU WILL LEARN --}}
                    <div class="mt-8 pt-8 border-t border-slate-100">

                        <h3 class="text-lg font-bold text-slate-900">
                            Apa yang Akan Kamu Pelajari?
                        </h3>

                        <div class="mt-5 grid sm:grid-cols-2 gap-4">

                            <div class="flex gap-3">

                                <div class="w-9 h-9 shrink-0 rounded-lg
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Membangun leadership yang efektif
                                </p>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-9 h-9 shrink-0 rounded-lg
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Meningkatkan komunikasi dengan tim
                                </p>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-9 h-9 shrink-0 rounded-lg
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Membangun budaya kerja yang positif
                                </p>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-9 h-9 shrink-0 rounded-lg
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Mengatasi konflik dalam tim
                                </p>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-9 h-9 shrink-0 rounded-lg
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Meningkatkan produktivitas karyawan
                                </p>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-9 h-9 shrink-0 rounded-lg
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Memberikan feedback kepada karyawan
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- SPEAKER --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6 sm:p-8">

                    <div class="flex items-center justify-between gap-4">

                        <div>

                            <p class="text-sm font-semibold text-blue-600">
                                PEMBICARA
                            </p>

                            <h2 class="mt-1 text-2xl font-bold text-slate-900">
                                Narasumber Seminar
                            </h2>

                        </div>

                    </div>


                    <div class="mt-7 flex flex-col sm:flex-row gap-6
                                items-center sm:items-start">

                        <div class="w-24 h-24 shrink-0 rounded-2xl
                                    bg-gradient-to-br from-blue-500 to-indigo-600
                                    flex items-center justify-center text-white">

                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0" />
                            </svg>

                        </div>


                        <div class="text-center sm:text-left">

                            <h3 class="text-xl font-bold text-slate-900">
                                Budi Santoso
                            </h3>

                            <p class="mt-1 text-sm font-medium text-blue-600">
                                Business Coach & Founder
                            </p>

                            <p class="mt-4 text-sm text-slate-600 leading-relaxed max-w-xl">
                                Praktisi bisnis dengan pengalaman lebih dari
                                10 tahun dalam membangun tim, mengembangkan
                                sistem operasional, dan membantu pemilik usaha
                                meningkatkan performa bisnis.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- EVENT SCHEDULE --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6 sm:p-8">

                    <h2 class="text-2xl font-bold text-slate-900">
                        Jadwal Acara
                    </h2>

                    <div class="mt-6 space-y-5">

                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl
                                        bg-blue-50 text-blue-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                                </svg>

                            </div>

                            <div>

                                <p class="text-xs text-slate-500">
                                    Tanggal
                                </p>

                                <p class="mt-1 font-semibold text-slate-900">
                                    Sabtu, 20 September 2026
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl
                                        bg-blue-50 text-blue-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>

                            <div>

                                <p class="text-xs text-slate-500">
                                    Waktu
                                </p>

                                <p class="mt-1 font-semibold text-slate-900">
                                    09.00 - 12.00 WIB
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl
                                        bg-blue-50 text-blue-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0Z" />
                                </svg>

                            </div>

                            <div>

                                <p class="text-xs text-slate-500">
                                    Lokasi
                                </p>

                                <p class="mt-1 font-semibold text-slate-900">
                                    Zoom Meeting
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl
                                        bg-blue-50 text-blue-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 9V7a5 5 0 0 0-10 0v2m-2 0h14v10H5V9Z" />
                                </svg>

                            </div>

                            <div>

                                <p class="text-xs text-slate-500">
                                    Format
                                </p>

                                <p class="mt-1 font-semibold text-slate-900">
                                    Online Event
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- RIGHT SIDEBAR --}}
            <div class="lg:col-span-1">

                <div class="lg:sticky lg:top-28 space-y-6">

                    {{-- REGISTRATION CARD --}}
                    <div class="bg-white rounded-3xl border border-slate-200
                                shadow-sm p-6">

                        <div>

                            <p class="text-sm text-slate-500">
                                Investasi
                            </p>

                            <div class="flex items-end gap-2 mt-1">

                                <span class="text-3xl font-bold text-slate-900">
                                    Rp150.000
                                </span>

                                <span class="text-sm text-slate-400 mb-1">
                                    / peserta
                                </span>

                            </div>

                        </div>


                        <div class="mt-6 p-4 rounded-2xl bg-emerald-50
                                    border border-emerald-100">

                            <div class="flex items-center gap-3">

                                <div class="w-9 h-9 rounded-lg bg-emerald-500
                                            text-white flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <div>

                                    <p class="text-sm font-bold text-emerald-900">
                                        Pendaftaran Dibuka
                                    </p>

                                    <p class="text-xs text-emerald-700 mt-0.5">
                                        Kuota masih tersedia
                                    </p>

                                </div>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="mt-6 w-full inline-flex items-center justify-center
                                   gap-2 px-5 py-3.5 rounded-xl
                                   bg-blue-600 text-white font-bold
                                   shadow-lg shadow-blue-600/20
                                   hover:bg-blue-700 hover:-translate-y-0.5
                                   transition duration-200">

                            Daftar Seminar

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m9 5 7 7-7 7" />
                            </svg>

                        </a>


                        <div class="mt-5 flex items-center justify-center gap-2
                                    text-xs text-slate-500">

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2Zm3-8V9a3 3 0 1 1 6 0v2" />
                            </svg>

                            Data pendaftaran aman
                        </div>

                    </div>


                    {{-- EVENT INFO --}}
                    <div class="bg-white rounded-3xl border border-slate-200
                                shadow-sm p-6">

                        <h3 class="font-bold text-slate-900">
                            Informasi Event
                        </h3>

                        <div class="mt-5 space-y-4">

                            <div class="flex items-center justify-between gap-4">

                                <span class="text-sm text-slate-500">
                                    Peserta
                                </span>

                                <span class="text-sm font-semibold text-slate-900">
                                    87 / 100
                                </span>

                            </div>


                            <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">

                                <div class="h-full w-[87%] bg-blue-600 rounded-full"></div>

                            </div>


                            <div class="pt-4 border-t border-slate-100
                                        flex items-center justify-between">

                                <span class="text-sm text-slate-500">
                                    Durasi
                                </span>

                                <span class="text-sm font-semibold text-slate-900">
                                    3 Jam
                                </span>

                            </div>


                            <div class="flex items-center justify-between">

                                <span class="text-sm text-slate-500">
                                    Sertifikat
                                </span>

                                <span class="inline-flex items-center gap-1.5
                                             text-sm font-semibold text-emerald-600">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                    Ya
                                </span>

                            </div>


                            <div class="flex items-center justify-between">

                                <span class="text-sm text-slate-500">
                                    Materi
                                </span>

                                <span class="inline-flex items-center gap-1.5
                                             text-sm font-semibold text-emerald-600">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                    Termasuk
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- SHARE --}}
                    <div class="bg-white rounded-3xl border border-slate-200
                                shadow-sm p-6">

                        <h3 class="font-bold text-slate-900">
                            Bagikan Seminar
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Ajak rekan bisnis kamu untuk ikut belajar bersama.
                        </p>

                        <div class="mt-5 flex gap-3">

                            <button
                                type="button"
                                class="flex-1 h-11 rounded-xl bg-slate-50
                                       border border-slate-200 text-slate-600
                                       hover:bg-slate-100 transition">

                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.59 13.51 15.42 17.5m0-11L8.59 10.49M21 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM9 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm12 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                            </button>


                            <button
                                type="button"
                                class="flex-1 h-11 rounded-xl bg-slate-50
                                       border border-slate-200 text-slate-600
                                       hover:bg-slate-100 transition">

                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h8m-4-4 4 4-4 4M4 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4" />
                                </svg>

                            </button>


                            <button
                                type="button"
                                class="flex-1 h-11 rounded-xl bg-slate-50
                                       border border-slate-200 text-slate-600
                                       hover:bg-slate-100 transition">

                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12a8.5 8.5 0 0 1-8.5 8.5 8.4 8.4 0 0 1-4.06-1.04L3 20l1.54-4.61A8.4 8.4 0 0 1 3.5 11.5 8.5 8.5 0 1 1 21 12Z" />
                                </svg>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- RELATED EVENTS --}}
        <section class="mt-16">

            <div class="flex flex-col sm:flex-row sm:items-end
                        sm:justify-between gap-4 mb-7">

                <div>

                    <p class="text-sm font-semibold text-blue-600">
                        EVENT LAINNYA
                    </p>

                    <h2 class="mt-1 text-2xl sm:text-3xl font-bold text-slate-900">
                        Seminar yang Mungkin Kamu Suka
                    </h2>

                </div>

                <a
                    href="#"
                    class="inline-flex items-center gap-2 text-sm font-semibold
                           text-blue-600 hover:text-blue-700 transition">

                    Lihat Semua

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>

                </a>

            </div>


            <div class="grid md:grid-cols-3 gap-6">

                {{-- RELATED CARD 1 --}}
                <div class="bg-white rounded-2xl border border-slate-200
                            overflow-hidden shadow-sm hover:shadow-lg
                            transition">

                    <div class="h-36 bg-gradient-to-br from-emerald-500 to-emerald-700
                                p-5 flex flex-col justify-between">

                        <span class="self-start px-2.5 py-1 rounded-lg
                                     bg-white/15 text-white text-xs font-semibold">
                            ONLINE
                        </span>

                        <p class="text-white font-bold">
                            Strategi Bisnis di Era Digital
                        </p>

                    </div>

                    <div class="p-5">

                        <p class="text-xs text-slate-500">
                            5 Oktober 2026
                        </p>

                        <p class="mt-3 text-sm font-bold text-slate-900">
                            Rp175.000
                        </p>

                    </div>

                </div>


                {{-- RELATED CARD 2 --}}
                <div class="bg-white rounded-2xl border border-slate-200
                            overflow-hidden shadow-sm hover:shadow-lg
                            transition">

                    <div class="h-36 bg-gradient-to-br from-indigo-500 to-purple-700
                                p-5 flex flex-col justify-between">

                        <span class="self-start px-2.5 py-1 rounded-lg
                                     bg-white/15 text-white text-xs font-semibold">
                            OFFLINE
                        </span>

                        <p class="text-white font-bold">
                            Bangun SOP Bisnis yang Efektif
                        </p>

                    </div>

                    <div class="p-5">

                        <p class="text-xs text-slate-500">
                            27 September 2026
                        </p>

                        <p class="mt-3 text-sm font-bold text-slate-900">
                            Rp250.000
                        </p>

                    </div>

                </div>


                {{-- RELATED CARD 3 --}}
                <div class="bg-white rounded-2xl border border-slate-200
                            overflow-hidden shadow-sm hover:shadow-lg
                            transition">

                    <div class="h-36 bg-gradient-to-br from-blue-500 to-cyan-600
                                p-5 flex flex-col justify-between">

                        <span class="self-start px-2.5 py-1 rounded-lg
                                     bg-white/15 text-white text-xs font-semibold">
                            ONLINE
                        </span>

                        <p class="text-white font-bold">
                            Marketing untuk UMKM
                        </p>

                    </div>

                    <div class="p-5">

                        <p class="text-xs text-slate-500">
                            12 Oktober 2026
                        </p>

                        <p class="mt-3 text-sm font-bold text-slate-900">
                            Rp125.000
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </div>

</div>

@endsection