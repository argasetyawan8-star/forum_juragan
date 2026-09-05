@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- BREADCRUMB --}}
        <div class="flex items-center gap-2 text-sm text-slate-500 mb-8">

            <a href="/" class="hover:text-blue-600 transition">
                Home
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m9 5 7 7-7 7" />
            </svg>

            <a href="#" class="hover:text-blue-600 transition">
                Profil
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m9 5 7 7-7 7" />
            </svg>

            <span class="font-medium text-slate-900">
                Diskusi Saya
            </span>

        </div>


        {{-- HEADER --}}
        <div class="flex flex-col sm:flex-row sm:items-end
                    sm:justify-between gap-5 mb-8">

            <div>

                <div class="inline-flex items-center gap-2 px-3.5 py-2
                            rounded-full bg-blue-50 border border-blue-100
                            text-blue-700 text-sm font-semibold mb-4">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                    </svg>

                    Aktivitas Forum

                </div>

                <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                    Diskusi Saya
                </h1>

                <p class="mt-2 text-slate-600">
                    Kelola dan pantau semua diskusi yang pernah kamu buat.
                </p>

            </div>


            {{-- CREATE BUTTON --}}
            <a href="#"
               class="inline-flex items-center justify-center gap-2
                      px-5 py-3 rounded-xl bg-blue-600 text-white
                      font-bold shadow-lg shadow-blue-600/20
                      hover:bg-blue-700 hover:-translate-y-0.5
                      transition duration-200">

                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 5v14M5 12h14" />
                </svg>

                Buat Diskusi

            </a>

        </div>


        {{-- STATISTICS --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">


            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm p-5">

                <div class="flex items-center justify-between">

                    <div class="w-10 h-10 rounded-xl bg-blue-50
                                text-blue-600 flex items-center justify-center">

                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                        </svg>

                    </div>

                    <span class="text-xs font-semibold text-emerald-600">
                        Total
                    </span>

                </div>

                <p class="mt-4 text-2xl font-bold text-slate-900">
                    12
                </p>

                <p class="mt-1 text-sm text-slate-500">
                    Total diskusi
                </p>

            </div>


            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm p-5">

                <div class="w-10 h-10 rounded-xl bg-emerald-50
                            text-emerald-600 flex items-center justify-center">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m5 12 5 5L20 7" />
                    </svg>

                </div>

                <p class="mt-4 text-2xl font-bold text-slate-900">
                    10
                </p>

                <p class="mt-1 text-sm text-slate-500">
                    Dipublikasikan
                </p>

            </div>


            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm p-5">

                <div class="w-10 h-10 rounded-xl bg-amber-50
                            text-amber-600 flex items-center justify-center">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                </div>

                <p class="mt-4 text-2xl font-bold text-slate-900">
                    2
                </p>

                <p class="mt-1 text-sm text-slate-500">
                    Menunggu moderasi
                </p>

            </div>


            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm p-5">

                <div class="w-10 h-10 rounded-xl bg-indigo-50
                            text-indigo-600 flex items-center justify-center">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                    </svg>

                </div>

                <p class="mt-4 text-2xl font-bold text-slate-900">
                    86
                </p>

                <p class="mt-1 text-sm text-slate-500">
                    Total balasan
                </p>

            </div>

        </div>


        {{-- CONTENT --}}
        <div class="grid lg:grid-cols-3 gap-8">


            {{-- THREAD LIST --}}
            <div class="lg:col-span-2">

                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm overflow-hidden">

                    {{-- TOOLBAR --}}
                    <div class="p-5 sm:p-6 border-b border-slate-100">

                        <div class="flex flex-col sm:flex-row
                                    sm:items-center gap-4">

                            {{-- SEARCH --}}
                            <div class="relative flex-1">

                                <svg class="absolute left-4 top-1/2
                                            -translate-y-1/2 w-5 h-5
                                            text-slate-400"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />

                                </svg>

                                <input
                                    type="text"
                                    placeholder="Cari diskusi..."
                                    class="w-full rounded-xl border border-slate-200
                                           bg-slate-50 pl-11 pr-4 py-3
                                           text-sm text-slate-900
                                           placeholder:text-slate-400
                                           outline-none transition
                                           focus:bg-white
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10">

                            </div>


                            {{-- FILTER --}}
                            <select
                                class="rounded-xl border border-slate-200
                                       bg-white px-4 py-3
                                       text-sm text-slate-600
                                       outline-none
                                       focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-500/10">

                                <option>
                                    Semua Status
                                </option>

                                <option>
                                    Dipublikasikan
                                </option>

                                <option>
                                    Menunggu Moderasi
                                </option>

                                <option>
                                    Draft
                                </option>

                            </select>

                        </div>

                    </div>


                    {{-- THREADS --}}
                    <div class="divide-y divide-slate-100">


                        {{-- THREAD 1 --}}
                        <a href="#"
                           class="block p-5 sm:p-6
                                  hover:bg-slate-50 transition">

                            <div class="flex items-start gap-4">

                                <div class="w-11 h-11 shrink-0 rounded-xl
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                    </svg>

                                </div>


                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-blue-50 text-blue-700
                                                     text-xs font-semibold">

                                            Produktivitas Bisnis

                                        </span>

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-emerald-50 text-emerald-700
                                                     text-xs font-semibold">

                                            Published

                                        </span>

                                    </div>

                                    <h3 class="mt-3 text-base sm:text-lg
                                               font-bold text-slate-900">

                                        Bagaimana cara meningkatkan
                                        produktivitas tim?

                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500
                                              leading-relaxed line-clamp-2">

                                        Saya sedang mencari cara yang efektif
                                        untuk meningkatkan produktivitas tim
                                        tanpa membuat anggota tim merasa
                                        terlalu terbebani.

                                    </p>


                                    <div class="mt-4 flex flex-wrap items-center
                                                gap-x-5 gap-y-2 text-xs
                                                text-slate-400">

                                        <span>
                                            2 jam yang lalu
                                        </span>

                                        <span class="flex items-center gap-1">

                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                            </svg>

                                            8 balasan

                                        </span>

                                        <span class="flex items-center gap-1">

                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M3 12h4l2-7 4 14 2-7h4" />
                                            </svg>

                                            124 views

                                        </span>

                                    </div>

                                </div>


                                <svg class="hidden sm:block w-5 h-5
                                            text-slate-300 shrink-0"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="m9 5 7 7-7 7" />

                                </svg>

                            </div>

                        </a>


                        {{-- THREAD 2 --}}
                        <a href="#"
                           class="block p-5 sm:p-6
                                  hover:bg-slate-50 transition">

                            <div class="flex items-start gap-4">

                                <div class="w-11 h-11 shrink-0 rounded-xl
                                            bg-emerald-50 text-emerald-600
                                            flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 20h5V4H2v16h5m10 0v-5H7v5m10 0H7" />
                                    </svg>

                                </div>


                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-emerald-50 text-emerald-700
                                                     text-xs font-semibold">

                                            Manajemen Karyawan

                                        </span>

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-emerald-50 text-emerald-700
                                                     text-xs font-semibold">

                                            Published

                                        </span>

                                    </div>

                                    <h3 class="mt-3 text-base sm:text-lg
                                               font-bold text-slate-900">

                                        Tips menghadapi karyawan
                                        yang kurang disiplin

                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500
                                              leading-relaxed line-clamp-2">

                                        Apa langkah yang sebaiknya dilakukan
                                        ketika ada anggota tim yang sering
                                        datang terlambat dan sulit mengikuti
                                        aturan kerja?

                                    </p>


                                    <div class="mt-4 flex flex-wrap items-center
                                                gap-x-5 gap-y-2 text-xs
                                                text-slate-400">

                                        <span>
                                            Kemarin
                                        </span>

                                        <span class="flex items-center gap-1">

                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                            </svg>

                                            5 balasan

                                        </span>

                                        <span class="flex items-center gap-1">

                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M3 12h4l2-7 4 14 2-7h4" />
                                            </svg>

                                            87 views

                                        </span>

                                    </div>

                                </div>


                                <svg class="hidden sm:block w-5 h-5
                                            text-slate-300 shrink-0"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="m9 5 7 7-7 7" />

                                </svg>

                            </div>

                        </a>


                        {{-- THREAD 3 --}}
                        <a href="#"
                           class="block p-5 sm:p-6
                                  hover:bg-slate-50 transition">

                            <div class="flex items-start gap-4">

                                <div class="w-11 h-11 shrink-0 rounded-xl
                                            bg-indigo-50 text-indigo-600
                                            flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 12h6m-6 4h4m4-13H7a2 2 0 0 0-2 2v14l4-3h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z" />
                                    </svg>

                                </div>


                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-indigo-50 text-indigo-700
                                                     text-xs font-semibold">

                                            SOP & Operasional

                                        </span>

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-emerald-50 text-emerald-700
                                                     text-xs font-semibold">

                                            Published

                                        </span>

                                    </div>

                                    <h3 class="mt-3 text-base sm:text-lg
                                               font-bold text-slate-900">

                                        Apakah bisnis kecil perlu
                                        memiliki SOP tertulis?

                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500
                                              leading-relaxed line-clamp-2">

                                        Saya baru menjalankan bisnis selama
                                        dua tahun. Apakah sudah saatnya
                                        membuat SOP untuk semua proses kerja?

                                    </p>


                                    <div class="mt-4 flex flex-wrap items-center
                                                gap-x-5 gap-y-2 text-xs
                                                text-slate-400">

                                        <span>
                                            3 hari yang lalu
                                        </span>

                                        <span class="flex items-center gap-1">

                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                            </svg>

                                            11 balasan

                                        </span>

                                        <span class="flex items-center gap-1">

                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M3 12h4l2-7 4 14 2-7h4" />
                                            </svg>

                                            201 views

                                        </span>

                                    </div>

                                </div>


                                <svg class="hidden sm:block w-5 h-5
                                            text-slate-300 shrink-0"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="m9 5 7 7-7 7" />

                                </svg>

                            </div>

                        </a>


                        {{-- THREAD 4 --}}
                        <a href="#"
                           class="block p-5 sm:p-6
                                  hover:bg-slate-50 transition">

                            <div class="flex items-start gap-4">

                                <div class="w-11 h-11 shrink-0 rounded-xl
                                            bg-amber-50 text-amber-600
                                            flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 6v12m-6-6h12" />
                                    </svg>

                                </div>


                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-amber-50 text-amber-700
                                                     text-xs font-semibold">

                                            Kepemimpinan

                                        </span>

                                        <span class="px-2.5 py-1 rounded-full
                                                     bg-amber-50 text-amber-700
                                                     text-xs font-semibold">

                                            Moderasi

                                        </span>

                                    </div>

                                    <h3 class="mt-3 text-base sm:text-lg
                                               font-bold text-slate-900">

                                        Bagaimana menjadi pemimpin
                                        yang disukai sekaligus tegas?

                                    </h3>

                                    <p class="mt-2 text-sm text-slate-500
                                              leading-relaxed line-clamp-2">

                                        Diskusi ini masih menunggu proses
                                        moderasi sebelum dapat ditampilkan
                                        kepada anggota komunitas.

                                    </p>


                                    <div class="mt-4 flex flex-wrap items-center
                                                gap-x-5 gap-y-2 text-xs
                                                text-slate-400">

                                        <span>
                                            5 hari yang lalu
                                        </span>

                                        <span>
                                            Menunggu moderasi
                                        </span>

                                    </div>

                                </div>


                                <svg class="hidden sm:block w-5 h-5
                                            text-slate-300 shrink-0"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="m9 5 7 7-7 7" />

                                </svg>

                            </div>

                        </a>

                    </div>


                    {{-- PAGINATION --}}
                    <div class="p-5 sm:p-6 border-t border-slate-100">

                        <div class="flex items-center justify-between gap-4">

                            <p class="text-sm text-slate-500">
                                Menampilkan
                                <span class="font-semibold text-slate-700">
                                    1–4
                                </span>
                                dari
                                <span class="font-semibold text-slate-700">
                                    12
                                </span>
                                diskusi
                            </p>


                            <div class="flex items-center gap-2">

                                <button
                                    type="button"
                                    class="w-9 h-9 rounded-lg border
                                           border-slate-200 text-slate-400
                                           flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="m15 18-6-6 6-6" />
                                    </svg>

                                </button>

                                <button
                                    type="button"
                                    class="w-9 h-9 rounded-lg bg-blue-600
                                           text-white text-sm font-semibold
                                           flex items-center justify-center">

                                    1

                                </button>

                                <button
                                    type="button"
                                    class="w-9 h-9 rounded-lg border
                                           border-slate-200 text-slate-600
                                           text-sm font-semibold
                                           flex items-center justify-center
                                           hover:bg-slate-50">

                                    2

                                </button>

                                <button
                                    type="button"
                                    class="w-9 h-9 rounded-lg border
                                           border-slate-200 text-slate-600
                                           text-sm font-semibold
                                           flex items-center justify-center
                                           hover:bg-slate-50">

                                    3

                                </button>

                                <button
                                    type="button"
                                    class="w-9 h-9 rounded-lg border
                                           border-slate-200 text-slate-600
                                           flex items-center justify-center
                                           hover:bg-slate-50">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="m9 18 6-6-6-6" />
                                    </svg>

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- SIDEBAR --}}
            <div class="space-y-6">


                {{-- PROFILE MINI --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl bg-blue-100
                                    text-blue-700 flex items-center
                                    justify-center text-lg font-bold">

                            AS

                        </div>

                        <div class="min-w-0">

                            <h3 class="font-bold text-slate-900 truncate">
                                Arga Setyawan
                            </h3>

                            <p class="text-sm text-slate-500">
                                Member Forum Juragan
                            </p>

                        </div>

                    </div>


                    <div class="mt-5 pt-5 border-t border-slate-100
                                grid grid-cols-3 text-center">

                        <div>

                            <p class="font-bold text-slate-900">
                                12
                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Diskusi
                            </p>

                        </div>

                        <div class="border-x border-slate-100">

                            <p class="font-bold text-slate-900">
                                48
                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Balasan
                            </p>

                        </div>

                        <div>

                            <p class="font-bold text-slate-900">
                                86
                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                Aktivitas
                            </p>

                        </div>

                    </div>

                </div>


                {{-- QUICK NAV --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm overflow-hidden">

                    <div class="p-6 border-b border-slate-100">

                        <h3 class="font-bold text-slate-900">
                            Menu Profil
                        </h3>

                    </div>


                    <div class="p-3">

                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl text-slate-600
                                  hover:bg-slate-50 transition">

                            <div class="w-9 h-9 rounded-lg bg-slate-100
                                        flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM4 21a8 8 0 0 1 16 0" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Profil Saya
                            </span>

                        </a>


                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl bg-blue-50 text-blue-700">

                            <div class="w-9 h-9 rounded-lg bg-blue-100
                                        text-blue-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Diskusi Saya
                            </span>

                        </a>


                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl text-slate-600
                                  hover:bg-slate-50 transition">

                            <div class="w-9 h-9 rounded-lg bg-emerald-50
                                        text-emerald-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 1-2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2v-2a2 2 0 0 0-2-2V7a2 2 0 0 0-2-2H5" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Seminar Saya
                            </span>

                        </a>


                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl text-slate-600
                                  hover:bg-slate-50 transition">

                            <div class="w-9 h-9 rounded-lg bg-amber-50
                                        text-amber-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Konsultasi Saya
                            </span>

                        </a>


                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl text-slate-600
                                  hover:bg-slate-50 transition">

                            <div class="w-9 h-9 rounded-lg bg-slate-100
                                        text-slate-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M10.5 6h3M12 3v3m6.364 1.636-2.121 2.121M21 12h-3M18.364 18.364l-2.121-2.121M12 21v-3M5.636 18.364l2.121-2.121M3 12h3M5.636 5.636l2.121 2.121" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Pengaturan
                            </span>

                        </a>

                    </div>

                </div>


                {{-- CTA --}}
                <div class="relative overflow-hidden rounded-3xl
                            bg-gradient-to-br from-blue-600 to-indigo-700
                            p-6 text-white">

                    <div class="absolute -right-10 -top-10 w-32 h-32
                                rounded-full border-[20px] border-white/10"></div>

                    <div class="relative">

                        <div class="w-11 h-11 rounded-xl bg-white/10
                                    flex items-center justify-center">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M17 20h5V4H2v16h5m10 0v-5H7v5m10 0H7" />
                            </svg>

                        </div>

                        <h3 class="mt-5 text-lg font-bold">
                            Punya Masalah Bisnis?
                        </h3>

                        <p class="mt-2 text-sm text-blue-100 leading-relaxed">
                            Jangan hanya mencari jawaban sendiri.
                            Diskusikan dengan komunitas atau konsultasikan
                            langsung dengan ahlinya.
                        </p>

                        <div class="mt-5 flex flex-col gap-2">

                            <a href="/forum"
                               class="inline-flex items-center justify-center
                                      gap-2 px-4 py-2.5 rounded-xl
                                      bg-white text-blue-700
                                      text-sm font-bold
                                      hover:bg-slate-100 transition">

                                Jelajahi Forum

                            </a>

                            <a href="#"
                               class="inline-flex items-center justify-center
                                      gap-2 px-4 py-2.5 rounded-xl
                                      bg-white/10 text-white
                                      text-sm font-semibold
                                      hover:bg-white/20 transition">

                                Konsultasi Bisnis

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection