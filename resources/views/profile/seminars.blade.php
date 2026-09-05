@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm text-slate-500 mb-8">
            <a href="/" class="hover:text-blue-600 transition">
                Home
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"/>
            </svg>

            <a href="/profil" class="hover:text-blue-600 transition">
                Profil
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"/>
            </svg>

            <span class="text-slate-900 font-medium">
                Seminar Saya
            </span>
        </div>


        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-8">

            <div>
                <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 text-blue-700 text-sm font-semibold mb-3">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>

                    Aktivitas Saya
                </span>

                <h1 class="text-3xl sm:text-4xl font-bold text-slate-900">
                    Seminar Saya
                </h1>

                <p class="mt-2 text-slate-500 max-w-2xl">
                    Lihat seminar yang sudah kamu daftarkan, jadwal yang akan datang,
                    dan riwayat seminar yang pernah kamu ikuti.
                </p>
            </div>

            <a href="/seminar"
               class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl
                      bg-blue-600 hover:bg-blue-700 text-white font-semibold
                      shadow-sm hover:shadow-md transition">

                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 6v12m6-6H6"/>
                </svg>

                Cari Seminar
            </a>

        </div>


        {{-- Statistics --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

            {{-- Total --}}
            <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-sm">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        TOTAL
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    5
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Seminar terdaftar
                </p>

            </div>


            {{-- Upcoming --}}
            <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-sm">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-emerald-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-emerald-600"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        AKAN DATANG
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    2
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Seminar aktif
                </p>

            </div>


            {{-- Completed --}}
            <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-sm">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-purple-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-purple-600"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12l2 2 4-4m5.618-4.016A9 9 0 1112 3a9 9 0 017.618 4.984z"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        SELESAI
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    3
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Seminar selesai
                </p>

            </div>


            {{-- Certificate --}}
            <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-sm">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-amber-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-amber-500"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 15l-2 5 2-1 2 1-2-5zm0 0a7 7 0 100-14 7 7 0 000 14z"/>
                        </svg>
                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        SERTIFIKAT
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    3
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Sertifikat tersedia
                </p>

            </div>

        </div>


        {{-- Filter --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 mb-6">

            <div class="flex flex-col lg:flex-row gap-4 lg:items-center lg:justify-between">

                {{-- Tabs --}}
                <div class="flex items-center gap-2 overflow-x-auto">

                    <button class="shrink-0 px-4 py-2.5 rounded-xl bg-blue-600 text-white text-sm font-semibold">
                        Semua
                    </button>

                    <button class="shrink-0 px-4 py-2.5 rounded-xl text-slate-600 hover:bg-slate-100 text-sm font-medium transition">
                        Akan Datang
                    </button>

                    <button class="shrink-0 px-4 py-2.5 rounded-xl text-slate-600 hover:bg-slate-100 text-sm font-medium transition">
                        Selesai
                    </button>

                </div>


                {{-- Search --}}
                <div class="relative w-full lg:w-72">

                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M21 21l-4.35-4.35m1.35-5.15a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z"/>
                    </svg>

                    <input
                        type="text"
                        placeholder="Cari seminar..."
                        class="w-full pl-11 pr-4 py-2.5 rounded-xl border border-slate-200
                               bg-slate-50 text-sm outline-none
                               focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500
                               transition"
                    >

                </div>

            </div>

        </div>


        {{-- Seminar List --}}
        <div class="space-y-5">


            {{-- Seminar 1 --}}
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:shadow-md transition">

                <div class="p-5 sm:p-6">

                    <div class="flex flex-col lg:flex-row gap-6">

                        {{-- Date --}}
                        <div class="shrink-0">

                            <div class="w-full lg:w-24 rounded-2xl bg-blue-50 border border-blue-100 p-4 text-center">

                                <p class="text-xs font-bold uppercase tracking-wide text-blue-600">
                                    Sep
                                </p>

                                <p class="text-3xl font-bold text-blue-700 leading-tight">
                                    20
                                </p>

                                <p class="text-xs text-slate-500">
                                    2026
                                </p>

                            </div>

                        </div>


                        {{-- Content --}}
                        <div class="flex-1">

                            <div class="flex flex-wrap items-center gap-2 mb-3">

                                <span class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    Terdaftar
                                </span>

                                <span class="px-2.5 py-1 rounded-lg bg-blue-50 text-blue-700 text-xs font-semibold">
                                    Online
                                </span>

                            </div>

                            <h2 class="text-xl font-bold text-slate-900 mb-2">
                                Leadership untuk Pemilik Bisnis
                            </h2>

                            <p class="text-sm text-slate-500 leading-relaxed max-w-3xl">
                                Belajar membangun kepemimpinan yang kuat,
                                mengelola tim dengan efektif, dan menciptakan
                                budaya kerja yang positif.
                            </p>


                            <div class="flex flex-wrap gap-x-5 gap-y-2 mt-4 text-sm text-slate-500">

                                <div class="flex items-center gap-2">

                                    <svg class="w-4 h-4 text-slate-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>

                                    09.00 - 12.00 WIB

                                </div>

                                <div class="flex items-center gap-2">

                                    <svg class="w-4 h-4 text-slate-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>
                                    </svg>

                                    Zoom Meeting

                                </div>

                                <div class="flex items-center gap-2">

                                    <svg class="w-4 h-4 text-slate-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 8c-1.657 0-3 1.567-3 3.5S10.343 15 12 15s3-1.567 3-3.5S13.657 8 12 8z"/>
                                    </svg>

                                    Budi Santoso

                                </div>

                            </div>

                        </div>


                        {{-- Action --}}
                        <div class="lg:w-40 flex lg:flex-col justify-end gap-3">

                            <a href="#"
                               class="flex-1 lg:flex-none inline-flex items-center justify-center gap-2
                                      px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700
                                      text-white text-sm font-semibold transition">

                                Detail

                                <svg class="w-4 h-4"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M9 5l7 7-7 7"/>
                                </svg>

                            </a>

                            <button
                                class="flex-1 lg:flex-none inline-flex items-center justify-center gap-2
                                       px-4 py-2.5 rounded-xl border border-slate-200
                                       text-slate-600 text-sm font-semibold hover:bg-slate-50 transition">

                                <svg class="w-4 h-4"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 15v-3m0 0V9m0 3h3m-3 0H9m11 0a8 8 0 11-16 0 8 8 0 0116 0z"/>
                                </svg>

                                Sertifikat

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Seminar 2 --}}
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:shadow-md transition">

                <div class="p-5 sm:p-6">

                    <div class="flex flex-col lg:flex-row gap-6">

                        <div class="shrink-0">

                            <div class="w-full lg:w-24 rounded-2xl bg-blue-50 border border-blue-100 p-4 text-center">

                                <p class="text-xs font-bold uppercase tracking-wide text-blue-600">
                                    Okt
                                </p>

                                <p class="text-3xl font-bold text-blue-700 leading-tight">
                                    04
                                </p>

                                <p class="text-xs text-slate-500">
                                    2026
                                </p>

                            </div>

                        </div>


                        <div class="flex-1">

                            <div class="flex flex-wrap items-center gap-2 mb-3">

                                <span class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    Terdaftar
                                </span>

                                <span class="px-2.5 py-1 rounded-lg bg-purple-50 text-purple-700 text-xs font-semibold">
                                    Workshop
                                </span>

                            </div>

                            <h2 class="text-xl font-bold text-slate-900 mb-2">
                                Strategi Mengelola Karyawan Secara Efektif
                            </h2>

                            <p class="text-sm text-slate-500 leading-relaxed max-w-3xl">
                                Pelajari strategi praktis dalam mengelola karyawan,
                                meningkatkan komunikasi tim, dan membangun lingkungan
                                kerja yang produktif.
                            </p>

                            <div class="flex flex-wrap gap-x-5 gap-y-2 mt-4 text-sm text-slate-500">

                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-slate-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    13.00 - 16.00 WIB
                                </div>

                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-slate-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>
                                    </svg>
                                    Zoom Meeting
                                </div>

                            </div>

                        </div>


                        <div class="lg:w-40 flex lg:flex-col justify-end gap-3">

                            <a href="#"
                               class="flex-1 lg:flex-none inline-flex items-center justify-center gap-2
                                      px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700
                                      text-white text-sm font-semibold transition">

                                Detail

                                <svg class="w-4 h-4"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M9 5l7 7-7 7"/>
                                </svg>

                            </a>

                            <button
                                class="flex-1 lg:flex-none inline-flex items-center justify-center gap-2
                                       px-4 py-2.5 rounded-xl border border-slate-200
                                       text-slate-600 text-sm font-semibold hover:bg-slate-50 transition">

                                Lihat Tiket

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Seminar 3 --}}
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:shadow-md transition">

                <div class="p-5 sm:p-6">

                    <div class="flex flex-col lg:flex-row gap-6">

                        <div class="shrink-0">

                            <div class="w-full lg:w-24 rounded-2xl bg-slate-100 border border-slate-200 p-4 text-center">

                                <p class="text-xs font-bold uppercase tracking-wide text-slate-500">
                                    Agu
                                </p>

                                <p class="text-3xl font-bold text-slate-700 leading-tight">
                                    15
                                </p>

                                <p class="text-xs text-slate-500">
                                    2026
                                </p>

                            </div>

                        </div>


                        <div class="flex-1">

                            <div class="flex flex-wrap items-center gap-2 mb-3">

                                <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 text-xs font-semibold">
                                    Selesai
                                </span>

                                <span class="px-2.5 py-1 rounded-lg bg-purple-50 text-purple-700 text-xs font-semibold">
                                    Workshop
                                </span>

                            </div>

                            <h2 class="text-xl font-bold text-slate-900 mb-2">
                                Membangun SOP Bisnis yang Efektif
                            </h2>

                            <p class="text-sm text-slate-500 leading-relaxed max-w-3xl">
                                Workshop praktis untuk membantu pemilik bisnis
                                membuat SOP yang mudah diterapkan dan dipahami
                                oleh seluruh anggota tim.
                            </p>

                            <div class="flex flex-wrap gap-x-5 gap-y-2 mt-4 text-sm text-slate-500">

                                <div class="flex items-center gap-2">

                                    <svg class="w-4 h-4 text-slate-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>

                                    09.00 - 12.00 WIB

                                </div>

                                <div class="flex items-center gap-2">

                                    <svg class="w-4 h-4 text-slate-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>

                                    </svg>

                                    Zoom Meeting

                                </div>

                            </div>

                        </div>


                        <div class="lg:w-40 flex lg:flex-col justify-end gap-3">

                            <a href="#"
                               class="flex-1 lg:flex-none inline-flex items-center justify-center gap-2
                                      px-4 py-2.5 rounded-xl border border-slate-200
                                      text-slate-700 text-sm font-semibold
                                      hover:bg-slate-50 transition">

                                Lihat Detail

                            </a>

                            <button
                                class="flex-1 lg:flex-none inline-flex items-center justify-center gap-2
                                       px-4 py-2.5 rounded-xl bg-emerald-50
                                       text-emerald-700 text-sm font-semibold
                                       hover:bg-emerald-100 transition">

                                Sertifikat

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Empty / More --}}
            <div class="text-center pt-4">

                <a href="/seminar"
                   class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 hover:text-blue-700 transition">

                    Lihat semua seminar

                    <svg class="w-4 h-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7"/>

                    </svg>

                </a>

            </div>

        </div>


        {{-- Bottom CTA --}}
        <div class="mt-10 relative overflow-hidden rounded-3xl bg-gradient-to-r from-blue-600 to-indigo-600 p-7 sm:p-9">

            <div class="absolute -right-16 -top-16 w-48 h-48 rounded-full bg-white/10"></div>
            <div class="absolute -left-10 -bottom-20 w-48 h-48 rounded-full bg-white/5"></div>

            <div class="relative flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                <div>

                    <div class="flex items-center gap-2 mb-3">

                        <div class="w-9 h-9 rounded-xl bg-white/15 flex items-center justify-center">

                            <svg class="w-5 h-5 text-white"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 6v6l4 2m6-2a10 10 0 11-20 0 10 10 0 0120 0z"/>

                            </svg>

                        </div>

                        <span class="text-sm font-semibold text-blue-100">
                            Terus berkembang bersama komunitas
                        </span>

                    </div>

                    <h2 class="text-2xl sm:text-3xl font-bold text-white">
                        Siap upgrade skill bisnis kamu?
                    </h2>

                    <p class="mt-2 text-blue-100 max-w-xl">
                        Temukan seminar berikutnya dan belajar langsung
                        dari praktisi bisnis berpengalaman.
                    </p>

                </div>


                <a href="/seminar"
                   class="shrink-0 inline-flex items-center justify-center gap-2
                          px-5 py-3 rounded-xl bg-white text-blue-700
                          font-semibold hover:bg-blue-50 transition shadow-sm">

                    Jelajahi Seminar

                    <svg class="w-5 h-5"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7"/>

                    </svg>

                </a>

            </div>

        </div>

    </div>

</div>

@endsection