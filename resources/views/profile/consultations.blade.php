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
                Konsultasi Saya
            </span>

        </div>


        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-8">

            <div>

                <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full
                             bg-emerald-50 text-emerald-700 text-sm font-semibold mb-3">

                    <svg class="w-4 h-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M8 12h8m-8 4h5m3-12H8a3 3 0 00-3 3v14l4-3h7a3 3 0 003-3V7a3 3 0 00-3-3z"/>

                    </svg>

                    Layanan Konsultasi
                </span>

                <h1 class="text-3xl sm:text-4xl font-bold text-slate-900">
                    Konsultasi Saya
                </h1>

                <p class="mt-2 text-slate-500 max-w-2xl">
                    Pantau pengajuan konsultasi, jadwal sesi, dan riwayat
                    konsultasi bisnis yang pernah kamu lakukan.
                </p>

            </div>


            <a href="/konsultasi"
               class="inline-flex items-center justify-center gap-2 px-5 py-3
                      rounded-xl bg-blue-600 hover:bg-blue-700 text-white
                      font-semibold shadow-sm hover:shadow-md transition">

                <svg class="w-5 h-5"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 6v12m6-6H6"/>

                </svg>

                Ajukan Konsultasi

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
                                  d="M8 12h8m-8 4h5m3-12H8a3 3 0 00-3 3v14l4-3h7a3 3 0 003-3V7a3 3 0 00-3-3z"/>

                        </svg>

                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        TOTAL
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    4
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Konsultasi
                </p>

            </div>


            {{-- Process --}}
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
                                  d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                        </svg>

                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        PROSES
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    1
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Sedang diproses
                </p>

            </div>


            {{-- Scheduled --}}
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
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>

                        </svg>

                    </div>

                    <span class="text-xs font-semibold text-slate-400">
                        TERJADWAL
                    </span>

                </div>

                <p class="text-3xl font-bold text-slate-900">
                    1
                </p>

                <p class="text-sm text-slate-500 mt-1">
                    Sesi mendatang
                </p>

            </div>


            {{-- Completed --}}
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
                    Konsultasi selesai
                </p>

            </div>

        </div>


        {{-- Filter --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4 mb-6">

            <div class="flex flex-col lg:flex-row gap-4 lg:items-center lg:justify-between">

                {{-- Tabs --}}
                <div class="flex items-center gap-2 overflow-x-auto">

                    <button class="shrink-0 px-4 py-2.5 rounded-xl
                                   bg-blue-600 text-white text-sm font-semibold">
                        Semua
                    </button>

                    <button class="shrink-0 px-4 py-2.5 rounded-xl
                                   text-slate-600 hover:bg-slate-100
                                   text-sm font-medium transition">
                        Menunggu
                    </button>

                    <button class="shrink-0 px-4 py-2.5 rounded-xl
                                   text-slate-600 hover:bg-slate-100
                                   text-sm font-medium transition">
                        Terjadwal
                    </button>

                    <button class="shrink-0 px-4 py-2.5 rounded-xl
                                   text-slate-600 hover:bg-slate-100
                                   text-sm font-medium transition">
                        Selesai
                    </button>

                </div>


                {{-- Search --}}
                <div class="relative w-full lg:w-72">

                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2
                                w-5 h-5 text-slate-400"
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
                        placeholder="Cari konsultasi..."
                        class="w-full pl-11 pr-4 py-2.5 rounded-xl
                               border border-slate-200 bg-slate-50
                               text-sm outline-none
                               focus:ring-2 focus:ring-blue-500/20
                               focus:border-blue-500 transition"
                    >

                </div>

            </div>

        </div>


        {{-- Consultation List --}}
        <div class="space-y-5">


            {{-- Consultation 1 --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm hover:shadow-md transition overflow-hidden">

                <div class="p-5 sm:p-6">

                    <div class="flex flex-col lg:flex-row gap-6">

                        {{-- Icon --}}
                        <div class="shrink-0">

                            <div class="w-16 h-16 rounded-2xl bg-blue-50
                                        flex items-center justify-center">

                                <svg class="w-8 h-8 text-blue-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M8 10h8m-8 4h5m7-2a8 8 0 11-16 0c0 1.61.47 3.11 1.28 4.37L5 21l4.12-1.37A8 8 0 0020 12z"/>

                                </svg>

                            </div>

                        </div>


                        {{-- Content --}}
                        <div class="flex-1">

                            <div class="flex flex-wrap items-center gap-2 mb-3">

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-amber-50 text-amber-700
                                             text-xs font-semibold">
                                    Sedang Diproses
                                </span>

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-blue-50 text-blue-700
                                             text-xs font-semibold">
                                    Professional
                                </span>

                            </div>

                            <h2 class="text-xl font-bold text-slate-900 mb-2">
                                Konsultasi Pengelolaan Tim & Karyawan
                            </h2>

                            <p class="text-sm text-slate-500 leading-relaxed max-w-3xl">
                                Diskusi mengenai strategi pengelolaan tim,
                                pembagian tugas, komunikasi internal,
                                dan peningkatan produktivitas karyawan.
                            </p>


                            <div class="grid sm:grid-cols-2 xl:grid-cols-3
                                        gap-3 mt-5">

                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Pengajuan
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            4 Sep 2026
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Durasi
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            120 Menit
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Metode
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            Zoom Meeting
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Action --}}
                        <div class="lg:w-40 flex lg:flex-col
                                    justify-end gap-3">

                            <a href="#"
                               class="flex-1 lg:flex-none inline-flex
                                      items-center justify-center gap-2
                                      px-4 py-2.5 rounded-xl
                                      bg-blue-600 hover:bg-blue-700
                                      text-white text-sm font-semibold
                                      transition">

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


            {{-- Consultation 2 --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm hover:shadow-md transition overflow-hidden">

                <div class="p-5 sm:p-6">

                    <div class="flex flex-col lg:flex-row gap-6">

                        <div class="shrink-0">

                            <div class="w-16 h-16 rounded-2xl bg-emerald-50
                                        flex items-center justify-center">

                                <svg class="w-8 h-8 text-emerald-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M9 12l2 2 4-4m5.6-3.4a9 9 0 11-13.2 0"/>

                                </svg>

                            </div>

                        </div>


                        <div class="flex-1">

                            <div class="flex flex-wrap items-center gap-2 mb-3">

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-blue-50 text-blue-700
                                             text-xs font-semibold">
                                    Terjadwal
                                </span>

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-emerald-50 text-emerald-700
                                             text-xs font-semibold">
                                    Basic
                                </span>

                            </div>

                            <h2 class="text-xl font-bold text-slate-900 mb-2">
                                Konsultasi Strategi Bisnis
                            </h2>

                            <p class="text-sm text-slate-500 leading-relaxed max-w-3xl">
                                Sesi konsultasi untuk membahas strategi
                                pengembangan bisnis dan menentukan langkah
                                yang dapat dilakukan dalam jangka pendek.
                            </p>


                            <div class="grid sm:grid-cols-2 xl:grid-cols-3
                                        gap-3 mt-5">

                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Jadwal
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            10 Sep 2026
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Waktu
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            10.00 WIB
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Metode
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            Zoom Meeting
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="lg:w-40 flex lg:flex-col
                                    justify-end gap-3">

                            <a href="#"
                               class="flex-1 lg:flex-none inline-flex
                                      items-center justify-center gap-2
                                      px-4 py-2.5 rounded-xl
                                      bg-blue-600 hover:bg-blue-700
                                      text-white text-sm font-semibold
                                      transition">

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
                                class="flex-1 lg:flex-none inline-flex
                                       items-center justify-center gap-2
                                       px-4 py-2.5 rounded-xl
                                       bg-emerald-50 text-emerald-700
                                       text-sm font-semibold
                                       hover:bg-emerald-100 transition">

                                Gabung Sesi

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Consultation 3 --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm hover:shadow-md transition overflow-hidden">

                <div class="p-5 sm:p-6">

                    <div class="flex flex-col lg:flex-row gap-6">

                        <div class="shrink-0">

                            <div class="w-16 h-16 rounded-2xl bg-slate-100
                                        flex items-center justify-center">

                                <svg class="w-8 h-8 text-slate-500"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M9 12l2 2 4-4m5.6-3.4a9 9 0 11-13.2 0"/>

                                </svg>

                            </div>

                        </div>


                        <div class="flex-1">

                            <div class="flex flex-wrap items-center gap-2 mb-3">

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-slate-100 text-slate-600
                                             text-xs font-semibold">
                                    Selesai
                                </span>

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-purple-50 text-purple-700
                                             text-xs font-semibold">
                                    Professional
                                </span>

                            </div>

                            <h2 class="text-xl font-bold text-slate-900 mb-2">
                                Konsultasi SOP & Operasional
                            </h2>

                            <p class="text-sm text-slate-500 leading-relaxed max-w-3xl">
                                Konsultasi mengenai penyusunan SOP,
                                alur kerja, pembagian tanggung jawab,
                                dan perbaikan proses operasional bisnis.
                            </p>


                            <div class="grid sm:grid-cols-2 xl:grid-cols-3
                                        gap-3 mt-5">

                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002-2z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Selesai
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            22 Agu 2026
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Durasi
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            120 Menit
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 15l-2 5 2-1 2 1-2-5zm0 0a7 7 0 100-14 7 7 0 000 14z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Hasil
                                        </p>

                                        <p class="text-sm font-semibold text-emerald-600">
                                            Tersedia
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="lg:w-40 flex lg:flex-col
                                    justify-end gap-3">

                            <a href="#"
                               class="flex-1 lg:flex-none inline-flex
                                      items-center justify-center gap-2
                                      px-4 py-2.5 rounded-xl
                                      border border-slate-200
                                      text-slate-700 text-sm font-semibold
                                      hover:bg-slate-50 transition">

                                Detail

                            </a>

                            <button
                                class="flex-1 lg:flex-none inline-flex
                                       items-center justify-center gap-2
                                       px-4 py-2.5 rounded-xl
                                       bg-emerald-50 text-emerald-700
                                       text-sm font-semibold
                                       hover:bg-emerald-100 transition">

                                Lihat Hasil

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Consultation 4 --}}
            <div class="bg-white rounded-2xl border border-slate-200
                        shadow-sm hover:shadow-md transition overflow-hidden">

                <div class="p-5 sm:p-6">

                    <div class="flex flex-col lg:flex-row gap-6">

                        <div class="shrink-0">

                            <div class="w-16 h-16 rounded-2xl bg-slate-100
                                        flex items-center justify-center">

                                <svg class="w-8 h-8 text-slate-500"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M9 12l2 2 4-4m5.6-3.4a9 9 0 11-13.2 0"/>

                                </svg>

                            </div>

                        </div>


                        <div class="flex-1">

                            <div class="flex flex-wrap items-center gap-2 mb-3">

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-slate-100 text-slate-600
                                             text-xs font-semibold">
                                    Selesai
                                </span>

                                <span class="px-2.5 py-1 rounded-lg
                                             bg-blue-50 text-blue-700
                                             text-xs font-semibold">
                                    Basic
                                </span>

                            </div>

                            <h2 class="text-xl font-bold text-slate-900 mb-2">
                                Konsultasi Pengembangan Bisnis
                            </h2>

                            <p class="text-sm text-slate-500 leading-relaxed max-w-3xl">
                                Sesi diskusi untuk mengevaluasi kondisi bisnis
                                dan menentukan peluang pengembangan yang
                                dapat dilakukan secara bertahap.
                            </p>


                            <div class="grid sm:grid-cols-2 xl:grid-cols-3
                                        gap-3 mt-5">

                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Selesai
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            05 Agu 2026
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Durasi
                                        </p>

                                        <p class="text-sm font-semibold text-slate-700">
                                            60 Menit
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-lg bg-slate-50
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4 text-slate-500"
                                             fill="none"
                                             stroke="currentColor"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 15l-2 5 2-1 2 1-2-5zm0 0a7 7 0 100-14 7 7 0 000 14z"/>

                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-400">
                                            Hasil
                                        </p>

                                        <p class="text-sm font-semibold text-emerald-600">
                                            Tersedia
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="lg:w-40 flex lg:flex-col
                                    justify-end gap-3">

                            <a href="#"
                               class="flex-1 lg:flex-none inline-flex
                                      items-center justify-center gap-2
                                      px-4 py-2.5 rounded-xl
                                      border border-slate-200
                                      text-slate-700 text-sm font-semibold
                                      hover:bg-slate-50 transition">

                                Detail

                            </a>

                            <button
                                class="flex-1 lg:flex-none inline-flex
                                       items-center justify-center gap-2
                                       px-4 py-2.5 rounded-xl
                                       bg-emerald-50 text-emerald-700
                                       text-sm font-semibold
                                       hover:bg-emerald-100 transition">

                                Lihat Hasil

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- Empty / More --}}
        <div class="text-center pt-8">

            <p class="text-sm text-slate-500 mb-3">
                Ingin mendapatkan bantuan untuk masalah bisnis lainnya?
            </p>

            <a href="/konsultasi"
               class="inline-flex items-center gap-2
                      text-sm font-semibold text-blue-600
                      hover:text-blue-700 transition">

                Lihat layanan konsultasi

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


        {{-- Bottom CTA --}}
        <div class="mt-10 relative overflow-hidden rounded-3xl
                    bg-gradient-to-r from-blue-600 to-indigo-600
                    p-7 sm:p-9">

            <div class="absolute -right-16 -top-16
                        w-48 h-48 rounded-full bg-white/10">
            </div>

            <div class="absolute -left-10 -bottom-20
                        w-48 h-48 rounded-full bg-white/5">
            </div>


            <div class="relative flex flex-col md:flex-row
                        md:items-center md:justify-between gap-6">

                <div>

                    <div class="flex items-center gap-2 mb-3">

                        <div class="w-9 h-9 rounded-xl bg-white/15
                                    flex items-center justify-center">

                            <svg class="w-5 h-5 text-white"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M8 12h8m-8 4h5m3-12H8a3 3 0 00-3 3v14l4-3h7a3 3 0 003-3V7a3 3 0 00-3-3z"/>

                            </svg>

                        </div>

                        <span class="text-sm font-semibold text-blue-100">
                            Butuh arahan untuk bisnis?
                        </span>

                    </div>

                    <h2 class="text-2xl sm:text-3xl font-bold text-white">
                        Jangan hadapi masalah bisnis sendirian.
                    </h2>

                    <p class="mt-2 text-blue-100 max-w-xl">
                        Ceritakan tantangan bisnis kamu dan dapatkan
                        insight serta rekomendasi dari praktisi.
                    </p>

                </div>


                <a href="/konsultasi"
                   class="shrink-0 inline-flex items-center justify-center
                          gap-2 px-5 py-3 rounded-xl bg-white
                          text-blue-700 font-semibold
                          hover:bg-blue-50 transition shadow-sm">

                    Mulai Konsultasi

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