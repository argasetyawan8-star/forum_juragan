@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- =========================================================
             HEADER
        ========================================================== --}}

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mb-8">

            <div>

                <div class="flex items-center gap-2 mb-3">

                    <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full
                                 bg-blue-50 text-blue-700 text-sm font-semibold">

                        <svg class="w-4 h-4"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M5 13l4 4L19 7"/>

                        </svg>

                        Member Area

                    </span>

                </div>

                <h1 class="text-3xl sm:text-4xl font-bold text-slate-900">
                    Selamat datang kembali, Arga 👋
                </h1>

                <p class="mt-2 text-slate-500 max-w-2xl">
                    Pantau aktivitas kamu di Forum Juragan dan terus
                    kembangkan bisnis bersama komunitas.
                </p>

            </div>


            <div class="flex flex-col sm:flex-row gap-3">

                <a href="/forum"
                   class="inline-flex items-center justify-center gap-2
                          px-5 py-3 rounded-xl border border-slate-200
                          bg-white text-slate-700 font-semibold
                          hover:bg-slate-50 transition shadow-sm">

                    <svg class="w-5 h-5"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M8 10h8m-8 4h5m7-2a8 8 0 11-16 0c0 1.61.47 3.11 1.28 4.37L5 21l4.12-1.37A8 8 0 0020 12z"/>

                    </svg>

                    Jelajahi Forum

                </a>


                <a href="/konsultasi"
                   class="inline-flex items-center justify-center gap-2
                          px-5 py-3 rounded-xl bg-blue-600
                          hover:bg-blue-700 text-white font-semibold
                          transition shadow-sm">

                    Konsultasi Bisnis

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



        {{-- =========================================================
             QUICK STATS
        ========================================================== --}}

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

            {{-- Threads --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        p-5 shadow-sm hover:shadow-md transition">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-blue-50
                                flex items-center justify-center">

                        <svg class="w-5 h-5 text-blue-600"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M8 10h8m-8 4h5m7-2a8 8 0 11-16 0c0 1.61.47 3.11 1.28 4.37L5 21l4.12-1.37A8 8 0 0020 12z"/>

                        </svg>

                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        FORUM
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    12
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Diskusi dibuat
                </p>

            </div>


            {{-- Replies --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        p-5 shadow-sm hover:shadow-md transition">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-emerald-50
                                flex items-center justify-center">

                        <svg class="w-5 h-5 text-emerald-600"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>

                        </svg>

                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        BALASAN
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    48
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Balasan diberikan
                </p>

            </div>


            {{-- Seminars --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        p-5 shadow-sm hover:shadow-md transition">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-purple-50
                                flex items-center justify-center">

                        <svg class="w-5 h-5 text-purple-600"
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
                        SEMINAR
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    5
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Seminar diikuti
                </p>

            </div>


            {{-- Consultation --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        p-5 shadow-sm hover:shadow-md transition">

                <div class="flex items-center justify-between mb-4">

                    <div class="w-11 h-11 rounded-xl bg-amber-50
                                flex items-center justify-center">

                        <svg class="w-5 h-5 text-amber-500"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M8 12h8m-8 4h5m3-12H8a3 3 0 00-3 3v14l4-3h7a3 3 0 003-3V7a3 3 0 00-3-3z"/>

                        </svg>

                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        KONSULTASI
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    4
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Konsultasi bisnis
                </p>

            </div>

        </div>



        {{-- =========================================================
             MAIN GRID
        ========================================================== --}}

        <div class="grid lg:grid-cols-3 gap-6">


            {{-- =====================================================
                 LEFT / MAIN CONTENT
            ====================================================== --}}

            <div class="lg:col-span-2 space-y-6">


                {{-- Upcoming Seminar --}}
                <div class="bg-white rounded-2xl border border-slate-200
                            shadow-sm overflow-hidden">

                    <div class="p-5 sm:p-6 border-b border-slate-100">

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <h2 class="text-lg font-bold text-slate-900">
                                    Seminar Berikutnya
                                </h2>

                                <p class="text-sm text-slate-500 mt-1">
                                    Jangan lewatkan agenda belajar kamu.
                                </p>

                            </div>

                            <a href="/profil/seminar"
                               class="text-sm font-semibold text-blue-600
                                      hover:text-blue-700 transition whitespace-nowrap">

                                Lihat semua

                            </a>

                        </div>

                    </div>


                    <div class="p-5 sm:p-6">

                        <div class="rounded-2xl bg-gradient-to-r
                                    from-blue-600 to-indigo-600
                                    p-5 sm:p-6 text-white">

                            <div class="flex flex-col md:flex-row gap-5
                                        md:items-center md:justify-between">

                                <div class="flex gap-4">

                                    {{-- Date --}}
                                    <div class="w-16 h-16 shrink-0 rounded-xl
                                                bg-white/15 flex flex-col
                                                items-center justify-center">

                                        <span class="text-xs font-semibold
                                                     text-blue-100">
                                            SEP
                                        </span>

                                        <span class="text-2xl font-bold">
                                            20
                                        </span>

                                    </div>


                                    <div>

                                        <div class="flex flex-wrap gap-2 mb-2">

                                            <span class="px-2.5 py-1 rounded-lg
                                                         bg-white/15 text-xs
                                                         font-semibold">

                                                Terdaftar

                                            </span>

                                            <span class="px-2.5 py-1 rounded-lg
                                                         bg-emerald-400/20
                                                         text-emerald-100
                                                         text-xs font-semibold">

                                                Online

                                            </span>

                                        </div>

                                        <h3 class="text-lg font-bold">
                                            Leadership untuk Pemilik Bisnis
                                        </h3>

                                        <p class="text-sm text-blue-100 mt-1">
                                            09.00 - 12.00 WIB · Zoom Meeting
                                        </p>

                                    </div>

                                </div>


                                <a href="#"
                                   class="inline-flex items-center justify-center
                                          gap-2 px-4 py-2.5 rounded-xl
                                          bg-white text-blue-700
                                          text-sm font-semibold
                                          hover:bg-blue-50 transition">

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

                            </div>

                        </div>

                    </div>

                </div>



                {{-- My Discussions --}}
                <div class="bg-white rounded-2xl border border-slate-200
                            shadow-sm overflow-hidden">

                    <div class="p-5 sm:p-6 border-b border-slate-100">

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <h2 class="text-lg font-bold text-slate-900">
                                    Diskusi Terbaru Saya
                                </h2>

                                <p class="text-sm text-slate-500 mt-1">
                                    Aktivitas diskusi terbaru kamu di forum.
                                </p>

                            </div>

                            <a href="/profil/diskusi"
                               class="text-sm font-semibold text-blue-600
                                      hover:text-blue-700 transition whitespace-nowrap">

                                Lihat semua

                            </a>

                        </div>

                    </div>


                    <div class="divide-y divide-slate-100">


                        {{-- Thread 1 --}}
                        <div class="p-5 sm:p-6 hover:bg-slate-50/70 transition">

                            <div class="flex gap-4">

                                <div class="w-11 h-11 shrink-0 rounded-xl
                                            bg-blue-50 flex items-center
                                            justify-center">

                                    <svg class="w-5 h-5 text-blue-600"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M8 10h8m-8 4h5m7-2a8 8 0 11-16 0c0 1.61.47 3.11 1.28 4.37L5 21l4.12-1.37A8 8 0 0020 12z"/>

                                    </svg>

                                </div>


                                <div class="flex-1 min-w-0">

                                    <div class="flex flex-wrap items-center gap-2 mb-2">

                                        <span class="px-2.5 py-1 rounded-lg
                                                     bg-blue-50 text-blue-700
                                                     text-xs font-semibold">

                                            Produktivitas Bisnis

                                        </span>

                                        <span class="text-xs text-slate-400">
                                            2 jam lalu
                                        </span>

                                    </div>

                                    <h3 class="font-semibold text-slate-900">
                                        Bagaimana cara meningkatkan produktivitas tim?
                                    </h3>

                                    <div class="flex items-center gap-4 mt-2
                                                text-xs text-slate-500">

                                        <span class="flex items-center gap-1.5">

                                            <svg class="w-4 h-4"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24">

                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>

                                            </svg>

                                            8 balasan

                                        </span>

                                        <span>
                                            124 views
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Thread 2 --}}
                        <div class="p-5 sm:p-6 hover:bg-slate-50/70 transition">

                            <div class="flex gap-4">

                                <div class="w-11 h-11 shrink-0 rounded-xl
                                            bg-purple-50 flex items-center
                                            justify-center">

                                    <svg class="w-5 h-5 text-purple-600"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 6v12m6-6H6"/>

                                    </svg>

                                </div>


                                <div class="flex-1 min-w-0">

                                    <div class="flex flex-wrap items-center gap-2 mb-2">

                                        <span class="px-2.5 py-1 rounded-lg
                                                     bg-purple-50 text-purple-700
                                                     text-xs font-semibold">

                                            Kepemimpinan

                                        </span>

                                        <span class="text-xs text-slate-400">
                                            Kemarin
                                        </span>

                                    </div>

                                    <h3 class="font-semibold text-slate-900">
                                        Bagaimana menjadi pemimpin yang tegas?
                                    </h3>

                                    <div class="flex items-center gap-4 mt-2
                                                text-xs text-slate-500">

                                        <span class="flex items-center gap-1.5">

                                            <svg class="w-4 h-4"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24">

                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>

                                            </svg>

                                            5 balasan

                                        </span>

                                        <span>
                                            87 views
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- Quick Access --}}
                <div>

                    <div class="mb-4">

                        <h2 class="text-lg font-bold text-slate-900">
                            Akses Cepat
                        </h2>

                        <p class="text-sm text-slate-500 mt-1">
                            Fitur yang sering kamu gunakan.
                        </p>

                    </div>


                    <div class="grid sm:grid-cols-3 gap-4">


                        <a href="/forum/create"
                           class="group bg-white rounded-2xl border border-slate-200
                                  p-5 shadow-sm hover:shadow-md
                                  hover:border-blue-200 transition">

                            <div class="w-11 h-11 rounded-xl bg-blue-50
                                        flex items-center justify-center
                                        mb-4 group-hover:scale-105 transition">

                                <svg class="w-5 h-5 text-blue-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 6v12m6-6H6"/>

                                </svg>

                            </div>

                            <h3 class="font-semibold text-slate-900">
                                Buat Diskusi
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Bagikan pengalaman dan pertanyaan.
                            </p>

                        </a>


                        <a href="/seminar"
                           class="group bg-white rounded-2xl border border-slate-200
                                  p-5 shadow-sm hover:shadow-md
                                  hover:border-purple-200 transition">

                            <div class="w-11 h-11 rounded-xl bg-purple-50
                                        flex items-center justify-center
                                        mb-4 group-hover:scale-105 transition">

                                <svg class="w-5 h-5 text-purple-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>

                                </svg>

                            </div>

                            <h3 class="font-semibold text-slate-900">
                                Cari Seminar
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Temukan event bisnis terbaru.
                            </p>

                        </a>


                        <a href="/konsultasi"
                           class="group bg-white rounded-2xl border border-slate-200
                                  p-5 shadow-sm hover:shadow-md
                                  hover:border-emerald-200 transition">

                            <div class="w-11 h-11 rounded-xl bg-emerald-50
                                        flex items-center justify-center
                                        mb-4 group-hover:scale-105 transition">

                                <svg class="w-5 h-5 text-emerald-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 12h8m-8 4h5m3-12H8a3 3 0 00-3 3v14l4-3h7a3 3 0 003-3V7a3 3 0 00-3-3z"/>

                                </svg>

                            </div>

                            <h3 class="font-semibold text-slate-900">
                                Konsultasi
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Dapatkan arahan untuk bisnis.
                            </p>

                        </a>

                    </div>

                </div>

            </div>



            {{-- =====================================================
                 RIGHT SIDEBAR
            ====================================================== --}}

            <div class="space-y-6">


                {{-- Profile Card --}}
                <div class="bg-white rounded-2xl border border-slate-200
                            shadow-sm overflow-hidden">

                    <div class="h-24 bg-gradient-to-r from-blue-600 to-indigo-600">
                    </div>


                    <div class="px-5 pb-5">

                        <div class="-mt-10 mb-4">

                            <div class="w-20 h-20 rounded-2xl bg-white
                                        border-4 border-white shadow-md
                                        flex items-center justify-center">

                                <div class="w-full h-full rounded-xl
                                            bg-slate-100 flex items-center
                                            justify-center">

                                    <span class="text-2xl font-bold text-blue-600">
                                        AS
                                    </span>

                                </div>

                            </div>

                        </div>


                        <h2 class="text-lg font-bold text-slate-900">
                            Arga Setyawan
                        </h2>

                        <p class="text-sm text-slate-500 mt-1">
                            Pemilik Bisnis
                        </p>


                        <div class="flex items-center gap-2 mt-4
                                    text-sm text-slate-500">

                            <svg class="w-4 h-4 text-slate-400"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M3 21h18M5 21V7l7-4 7 4v14"/>

                            </svg>

                            Maju Jaya Group

                        </div>


                        <a href="/profil"
                           class="mt-5 w-full inline-flex
                                  items-center justify-center gap-2
                                  px-4 py-2.5 rounded-xl
                                  border border-slate-200
                                  text-slate-700 text-sm font-semibold
                                  hover:bg-slate-50 transition">

                            Lihat Profil

                        </a>

                    </div>

                </div>



                {{-- Upcoming Consultation --}}
                <div class="bg-white rounded-2xl border border-slate-200
                            shadow-sm p-5">

                    <div class="flex items-center justify-between mb-5">

                        <div>

                            <h2 class="font-bold text-slate-900">
                                Konsultasi Berikutnya
                            </h2>

                            <p class="text-xs text-slate-500 mt-1">
                                Jadwal sesi kamu
                            </p>

                        </div>

                        <span class="w-9 h-9 rounded-xl bg-emerald-50
                                     flex items-center justify-center">

                            <svg class="w-5 h-5 text-emerald-600"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M8 12h8m-8 4h5m3-12H8a3 3 0 00-3 3v14l4-3h7a3 3 0 003-3V7a3 3 0 00-3-3z"/>

                            </svg>

                        </span>

                    </div>


                    <div class="rounded-xl bg-slate-50 p-4">

                        <span class="inline-flex px-2.5 py-1 rounded-lg
                                     bg-emerald-50 text-emerald-700
                                     text-xs font-semibold">

                            Terjadwal

                        </span>

                        <h3 class="font-semibold text-slate-900 mt-3">
                            Konsultasi Strategi Bisnis
                        </h3>

                        <div class="space-y-2 mt-4 text-sm text-slate-500">

                            <div class="flex items-center gap-2">

                                <svg class="w-4 h-4 text-slate-400"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>

                                </svg>

                                10 September 2026

                            </div>


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

                                10.00 WIB

                            </div>

                        </div>


                        <a href="#"
                           class="mt-4 w-full inline-flex
                                  items-center justify-center gap-2
                                  px-4 py-2.5 rounded-xl
                                  bg-blue-600 hover:bg-blue-700
                                  text-white text-sm font-semibold
                                  transition">

                            Lihat Detail

                        </a>

                    </div>

                </div>



                {{-- Community Card --}}
                <div class="relative overflow-hidden rounded-2xl
                            bg-gradient-to-br from-blue-600 to-indigo-600
                            p-6 text-white">

                    <div class="absolute -right-10 -top-10
                                w-28 h-28 rounded-full bg-white/10">
                    </div>

                    <div class="absolute -left-8 -bottom-12
                                w-32 h-32 rounded-full bg-white/5">
                    </div>


                    <div class="relative">

                        <div class="w-11 h-11 rounded-xl bg-white/15
                                    flex items-center justify-center mb-4">

                            <svg class="w-5 h-5 text-white"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>

                            </svg>

                        </div>


                        <h3 class="text-lg font-bold">
                            Jadi bagian dari komunitas
                        </h3>

                        <p class="text-sm text-blue-100 leading-relaxed mt-2">
                            Bagikan pengalaman, bertanya, dan belajar
                            bersama para pemilik bisnis lainnya.
                        </p>


                        <a href="/forum"
                           class="mt-5 inline-flex items-center gap-2
                                  px-4 py-2.5 rounded-xl
                                  bg-white text-blue-700
                                  text-sm font-semibold
                                  hover:bg-blue-50 transition">

                            Masuk Forum

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

            </div>

        </div>



        {{-- =========================================================
             BOTTOM CTA
        ========================================================== --}}

        <div class="mt-8 relative overflow-hidden rounded-3xl
                    bg-white border border-slate-200 shadow-sm p-7 sm:p-9">

            <div class="absolute right-0 top-0 w-64 h-64
                        bg-blue-50 rounded-full blur-3xl opacity-70">
            </div>


            <div class="relative flex flex-col md:flex-row
                        md:items-center md:justify-between gap-6">

                <div>

                    <span class="inline-flex items-center gap-2
                                 text-sm font-semibold text-blue-600 mb-3">

                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>

                        Forum Juragan

                    </span>

                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        Bisnis tumbuh lebih cepat bersama komunitas.
                    </h2>

                    <p class="text-slate-500 mt-2 max-w-2xl">
                        Terus berdiskusi, belajar melalui seminar,
                        dan dapatkan bantuan ketika bisnis membutuhkan
                        solusi yang lebih spesifik.
                    </p>

                </div>


                <a href="/forum"
                   class="shrink-0 inline-flex items-center justify-center
                          gap-2 px-5 py-3 rounded-xl
                          bg-blue-600 hover:bg-blue-700
                          text-white font-semibold transition shadow-sm">

                    Jelajahi Forum

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