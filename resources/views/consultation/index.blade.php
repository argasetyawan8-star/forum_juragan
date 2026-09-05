@extends('layouts.app')

@section('content')

<div class="bg-slate-50">

    {{-- HERO --}}
    <section class="relative overflow-hidden pt-32 pb-20 sm:pt-36 sm:pb-24">

        {{-- Background decoration --}}
        <div class="absolute -top-24 -right-24 w-72 h-72 bg-blue-200/40 rounded-full blur-3xl"></div>
        <div class="absolute top-40 -left-32 w-72 h-72 bg-emerald-200/30 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- LEFT --}}
                <div>

                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                                bg-emerald-50 border border-emerald-100
                                text-emerald-700 text-sm font-semibold mb-6">

                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>

                        Konsultasi Bisnis

                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl
                               font-bold tracking-tight text-slate-900 leading-[1.08]">

                        Jangan Hadapi
                        <span class="text-blue-600">
                            Masalah Bisnis
                        </span>
                        Sendirian.

                    </h1>

                    <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-xl">

                        Ceritakan tantangan bisnis kamu kepada konsultan
                        berpengalaman dan dapatkan solusi yang lebih terarah,
                        praktis, dan sesuai dengan kondisi bisnis kamu.

                    </p>


                    {{-- CTA --}}
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">

                        <a href="#paket"
                           class="inline-flex items-center justify-center gap-2
                                  px-6 py-3.5 rounded-xl
                                  bg-blue-600 text-white font-bold
                                  shadow-lg shadow-blue-600/20
                                  hover:bg-blue-700 hover:-translate-y-0.5
                                  transition duration-200">

                            Lihat Paket Konsultasi

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="m9 5 7 7-7 7" />
                            </svg>

                        </a>

                        <a href="#proses"
                           class="inline-flex items-center justify-center gap-2
                                  px-6 py-3.5 rounded-xl
                                  bg-white border border-slate-200
                                  text-slate-700 font-semibold
                                  hover:border-blue-200 hover:text-blue-600
                                  transition">

                            Bagaimana Caranya?

                        </a>

                    </div>


                    {{-- TRUST --}}
                    <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3
                                text-sm text-slate-500">

                        <div class="flex items-center gap-2">

                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="m5 12 5 5L20 7" />
                            </svg>

                            Konsultan berpengalaman

                        </div>

                        <div class="flex items-center gap-2">

                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="m5 12 5 5L20 7" />
                            </svg>

                            Solusi praktis

                        </div>

                    </div>

                </div>


                {{-- RIGHT VISUAL --}}
                <div class="relative">

                    <div class="relative max-w-md mx-auto">

                        {{-- Main card --}}
                        <div class="bg-white rounded-3xl border border-slate-200
                                    shadow-2xl shadow-slate-900/10 p-6 sm:p-8">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-sm text-slate-500">
                                        Konsultasi Bisnis
                                    </p>

                                    <h3 class="mt-1 text-xl font-bold text-slate-900">
                                        Apa yang sedang kamu hadapi?
                                    </h3>

                                </div>

                                <div class="w-12 h-12 rounded-2xl
                                            bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                    </svg>

                                </div>

                            </div>


                            <div class="mt-7 space-y-3">

                                <div class="p-4 rounded-2xl bg-slate-50
                                            border border-slate-100">

                                    <div class="flex items-center gap-3">

                                        <div class="w-10 h-10 rounded-xl bg-blue-100
                                                    text-blue-600 flex items-center justify-center">

                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M17 20h5V4H2v16h5m10 0v-5H7v5m10 0H7" />
                                            </svg>

                                        </div>

                                        <div>

                                            <p class="font-semibold text-slate-900 text-sm">
                                                Tim & Karyawan
                                            </p>

                                            <p class="text-xs text-slate-500 mt-0.5">
                                                Rekrutmen, konflik, produktivitas
                                            </p>

                                        </div>

                                    </div>

                                </div>


                                <div class="p-4 rounded-2xl bg-slate-50
                                            border border-slate-100">

                                    <div class="flex items-center gap-3">

                                        <div class="w-10 h-10 rounded-xl bg-emerald-100
                                                    text-emerald-600 flex items-center justify-center">

                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M3 3v18h18M7 16l4-5 3 3 5-7" />
                                            </svg>

                                        </div>

                                        <div>

                                            <p class="font-semibold text-slate-900 text-sm">
                                                Operasional Bisnis
                                            </p>

                                            <p class="text-xs text-slate-500 mt-0.5">
                                                SOP, sistem kerja, efisiensi
                                            </p>

                                        </div>

                                    </div>

                                </div>


                                <div class="p-4 rounded-2xl bg-slate-50
                                            border border-slate-100">

                                    <div class="flex items-center gap-3">

                                        <div class="w-10 h-10 rounded-xl bg-indigo-100
                                                    text-indigo-600 flex items-center justify-center">

                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M12 6v12m-6-6h12" />
                                            </svg>

                                        </div>

                                        <div>

                                            <p class="font-semibold text-slate-900 text-sm">
                                                Strategi & Pertumbuhan
                                            </p>

                                            <p class="text-xs text-slate-500 mt-0.5">
                                                Pengembangan dan arah bisnis
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="mt-6 flex items-center gap-3
                                        p-4 rounded-2xl bg-blue-50">

                                <div class="w-10 h-10 rounded-full bg-blue-600
                                            flex items-center justify-center text-white">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <div>

                                    <p class="text-sm font-bold text-slate-900">
                                        Temukan solusi bersama
                                    </p>

                                    <p class="text-xs text-slate-500 mt-0.5">
                                        Konsultasi disesuaikan dengan kebutuhanmu.
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- Floating card --}}
                        <div class="absolute -bottom-6 -left-6
                                    bg-white rounded-2xl border border-slate-200
                                    shadow-xl p-4 hidden sm:block">

                            <div class="flex items-center gap-3">

                                <div class="w-10 h-10 rounded-full bg-emerald-100
                                            text-emerald-600 flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7" />
                                    </svg>

                                </div>

                                <div>

                                    <p class="text-sm font-bold text-slate-900">
                                        500+
                                    </p>

                                    <p class="text-xs text-slate-500">
                                        Bisnis terbantu
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- SERVICES --}}
    <section id="paket" class="py-20 sm:py-24 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto">

                <span class="inline-flex px-3.5 py-2 rounded-full
                             bg-blue-50 text-blue-700 text-sm font-semibold">

                    Pilih Sesuai Kebutuhan

                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl font-bold text-slate-900">
                    Paket Konsultasi Bisnis
                </h2>

                <p class="mt-4 text-slate-600 leading-relaxed">
                    Mulai dari diskusi singkat hingga pendampingan yang lebih
                    mendalam untuk membantu bisnis kamu berkembang.
                </p>

            </div>


            <div class="mt-12 grid md:grid-cols-3 gap-6">


                {{-- BASIC --}}
                <div class="relative bg-white rounded-3xl border border-slate-200
                            p-7 shadow-sm hover:shadow-xl hover:-translate-y-1
                            transition duration-300">

                    <div class="w-12 h-12 rounded-2xl bg-blue-50
                                text-blue-600 flex items-center justify-center">

                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        Konsultasi Basic
                    </h3>

                    <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                        Cocok untuk kamu yang membutuhkan sudut pandang
                        dan solusi awal terhadap masalah bisnis.
                    </p>

                    <div class="mt-6">

                        <span class="text-3xl font-bold text-slate-900">
                            Rp150.000
                        </span>

                        <span class="text-sm text-slate-500">
                            / sesi
                        </span>

                    </div>

                    <div class="my-6 border-t border-slate-100"></div>

                    <ul class="space-y-3 text-sm text-slate-600">

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Konsultasi 60 menit
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Diskusi masalah bisnis
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Rekomendasi solusi
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Online via Zoom
                        </li>

                    </ul>

                    <a href="#"
                       class="mt-8 w-full inline-flex items-center justify-center
                              px-5 py-3 rounded-xl border border-blue-600
                              text-blue-600 font-bold
                              hover:bg-blue-600 hover:text-white
                              transition">

                        Pilih Paket

                    </a>

                </div>


                {{-- PROFESSIONAL --}}
                <div class="relative bg-slate-900 rounded-3xl
                            p-7 shadow-xl shadow-slate-900/10
                            hover:-translate-y-1 transition duration-300">

                    <div class="absolute top-5 right-5">

                        <span class="px-3 py-1.5 rounded-full
                                     bg-emerald-400 text-emerald-950
                                     text-xs font-bold">

                            POPULER

                        </span>

                    </div>


                    <div class="w-12 h-12 rounded-2xl bg-white/10
                                text-emerald-300 flex items-center justify-center">

                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7Z" />
                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-white">
                        Konsultasi Professional
                    </h3>

                    <p class="mt-2 text-sm text-slate-400 leading-relaxed">
                        Untuk pemilik bisnis yang ingin membahas masalah
                        lebih mendalam bersama konsultan.
                    </p>

                    <div class="mt-6">

                        <span class="text-3xl font-bold text-white">
                            Rp350.000
                        </span>

                        <span class="text-sm text-slate-400">
                            / sesi
                        </span>

                    </div>

                    <div class="my-6 border-t border-white/10"></div>

                    <ul class="space-y-3 text-sm text-slate-300">

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Konsultasi 120 menit
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Analisis masalah bisnis
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Rekomendasi strategi
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Action plan
                        </li>

                    </ul>

                    <a href="#"
                       class="mt-8 w-full inline-flex items-center justify-center
                              px-5 py-3 rounded-xl bg-blue-600 text-white
                              font-bold hover:bg-blue-500 transition">

                        Pilih Paket

                    </a>

                </div>


                {{-- BUSINESS --}}
                <div class="relative bg-white rounded-3xl border border-slate-200
                            p-7 shadow-sm hover:shadow-xl hover:-translate-y-1
                            transition duration-300">

                    <div class="w-12 h-12 rounded-2xl bg-emerald-50
                                text-emerald-600 flex items-center justify-center">

                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M9 9h.01M15 9h.01M9 12h.01M15 12h.01" />
                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        Business Growth
                    </h3>

                    <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                        Pendampingan yang lebih komprehensif untuk bisnis
                        yang ingin membangun sistem dan berkembang.
                    </p>

                    <div class="mt-6">

                        <span class="text-3xl font-bold text-slate-900">
                            Custom
                        </span>

                        <p class="text-sm text-slate-500 mt-1">
                            Sesuai kebutuhan bisnis
                        </p>

                    </div>

                    <div class="my-6 border-t border-slate-100"></div>

                    <ul class="space-y-3 text-sm text-slate-600">

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Analisis bisnis
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Penyusunan strategi
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Pendampingan bisnis
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-500">✓</span>
                            Evaluasi berkala
                        </li>

                    </ul>

                    <a href="#"
                       class="mt-8 w-full inline-flex items-center justify-center
                              px-5 py-3 rounded-xl border border-slate-200
                              text-slate-700 font-bold
                              hover:border-blue-600 hover:text-blue-600
                              transition">

                        Hubungi Kami

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- WHY CONSULTATION --}}
    <section class="py-20 sm:py-24 bg-slate-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div>

                    <span class="inline-flex px-3.5 py-2 rounded-full
                                 bg-emerald-50 text-emerald-700
                                 text-sm font-semibold">

                        Kenapa Konsultasi?

                    </span>

                    <h2 class="mt-4 text-3xl sm:text-4xl font-bold text-slate-900">
                        Masalah yang Sama,
                        Bisa Punya Solusi yang Berbeda.
                    </h2>

                    <p class="mt-5 text-slate-600 leading-relaxed">
                        Setiap bisnis memiliki kondisi, tim, dan tantangan
                        yang berbeda. Karena itu, solusi yang tepat perlu
                        disesuaikan dengan situasi bisnis kamu.
                    </p>


                    <div class="mt-8 space-y-5">

                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl
                                        bg-blue-100 text-blue-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12h6m-6 4h4m4-13H7a2 2 0 0 0-2 2v14l4-3h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z" />
                                </svg>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900">
                                    Berdasarkan Kondisi Nyata
                                </h3>

                                <p class="mt-1 text-sm text-slate-500 leading-relaxed">
                                    Diskusi dimulai dari masalah dan kondisi
                                    yang benar-benar sedang kamu hadapi.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl
                                        bg-emerald-100 text-emerald-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 6v12m-6-6h12" />
                                </svg>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900">
                                    Solusi yang Bisa Diterapkan
                                </h3>

                                <p class="mt-1 text-sm text-slate-500 leading-relaxed">
                                    Fokus pada langkah praktis yang bisa
                                    kamu pertimbangkan untuk bisnis.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl
                                        bg-indigo-100 text-indigo-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 20h5V4H2v16h5m10 0v-5H7v5m10 0H7" />
                                </svg>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900">
                                    Sudut Pandang Baru
                                </h3>

                                <p class="mt-1 text-sm text-slate-500 leading-relaxed">
                                    Dapatkan perspektif baru untuk melihat
                                    masalah bisnis dari sisi yang berbeda.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- STATS CARD --}}
                <div class="relative">

                    <div class="bg-white rounded-3xl border border-slate-200
                                shadow-xl p-7 sm:p-9">

                        <div class="grid grid-cols-2 gap-4">

                            <div class="p-5 rounded-2xl bg-blue-50">

                                <p class="text-3xl font-bold text-blue-600">
                                    500+
                                </p>

                                <p class="mt-1 text-sm text-slate-600">
                                    Pemilik bisnis
                                </p>

                            </div>

                            <div class="p-5 rounded-2xl bg-emerald-50">

                                <p class="text-3xl font-bold text-emerald-600">
                                    95%
                                </p>

                                <p class="mt-1 text-sm text-slate-600">
                                    Puas dengan layanan
                                </p>

                            </div>

                            <div class="p-5 rounded-2xl bg-indigo-50">

                                <p class="text-3xl font-bold text-indigo-600">
                                    4.9/5
                                </p>

                                <p class="mt-1 text-sm text-slate-600">
                                    Rating konsultasi
                                </p>

                            </div>

                            <div class="p-5 rounded-2xl bg-slate-100">

                                <p class="text-3xl font-bold text-slate-900">
                                    24/7
                                </p>

                                <p class="mt-1 text-sm text-slate-600">
                                    Akses komunitas
                                </p>

                            </div>

                        </div>


                        <div class="mt-6 p-5 rounded-2xl bg-slate-900 text-white">

                            <div class="flex items-start gap-4">

                                <div class="text-emerald-400 text-3xl leading-none">
                                    “
                                </div>

                                <div>

                                    <p class="text-sm text-slate-300 leading-relaxed">
                                        Kadang kita tidak membutuhkan lebih banyak
                                        informasi. Kita hanya membutuhkan orang
                                        yang membantu melihat masalah dari sudut
                                        pandang yang berbeda.
                                    </p>

                                    <p class="mt-4 text-sm font-semibold text-white">
                                        — Forum Juragan
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- PROCESS --}}
    <section id="proses" class="py-20 sm:py-24 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto">

                <span class="inline-flex px-3.5 py-2 rounded-full
                             bg-blue-50 text-blue-700 text-sm font-semibold">

                    Proses Konsultasi

                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl font-bold text-slate-900">
                    Semudah Ini untuk Mulai
                </h2>

                <p class="mt-4 text-slate-600">
                    Tidak perlu bingung harus mulai dari mana.
                    Ikuti beberapa langkah sederhana berikut.
                </p>

            </div>


            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach([
                    [
                        'number' => '01',
                        'title' => 'Pilih Paket',
                        'description' => 'Pilih jenis konsultasi yang paling sesuai dengan kebutuhan bisnis kamu.'
                    ],
                    [
                        'number' => '02',
                        'title' => 'Ceritakan Masalah',
                        'description' => 'Jelaskan kondisi dan tantangan bisnis yang sedang kamu hadapi.'
                    ],
                    [
                        'number' => '03',
                        'title' => 'Sesi Konsultasi',
                        'description' => 'Diskusikan masalah bersama konsultan melalui sesi online.'
                    ],
                    [
                        'number' => '04',
                        'title' => 'Dapatkan Solusi',
                        'description' => 'Tentukan langkah selanjutnya berdasarkan hasil diskusi.'
                    ],
                ] as $step)

                    <div class="relative p-6 rounded-3xl bg-slate-50
                                border border-slate-200">

                        <span class="text-4xl font-black text-blue-100">
                            {{ $step['number'] }}
                        </span>

                        <h3 class="mt-3 text-lg font-bold text-slate-900">
                            {{ $step['title'] }}
                        </h3>

                        <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                            {{ $step['description'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- TESTIMONIAL --}}
    <section class="py-20 sm:py-24 bg-slate-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto">

                <span class="inline-flex px-3.5 py-2 rounded-full
                             bg-emerald-50 text-emerald-700
                             text-sm font-semibold">

                    Cerita Mereka

                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl font-bold text-slate-900">
                    Apa Kata Pemilik Bisnis?
                </h2>

            </div>


            <div class="mt-12 grid md:grid-cols-3 gap-6">

                @foreach([
                    [
                        'name' => 'Andi Pratama',
                        'business' => 'Owner Kopi Kita',
                        'text' => 'Diskusinya sangat membantu. Saya jadi lebih jelas menentukan prioritas masalah yang harus diselesaikan terlebih dahulu.'
                    ],
                    [
                        'name' => 'Sinta Maharani',
                        'business' => 'Founder Fashion Lokal',
                        'text' => 'Yang saya suka adalah pembahasannya tidak hanya teori. Banyak hal yang bisa langsung saya coba di bisnis.'
                    ],
                    [
                        'name' => 'Rizky Ramadhan',
                        'business' => 'Owner Retail Store',
                        'text' => 'Saya mendapatkan perspektif baru tentang bagaimana mengelola tim dan membangun sistem kerja yang lebih rapi.'
                    ],
                ] as $testimonial)

                    <div class="bg-white rounded-3xl border border-slate-200
                                p-6 shadow-sm">

                        <div class="flex gap-1 text-amber-400 text-sm">
                            ★★★★★
                        </div>

                        <p class="mt-5 text-sm text-slate-600 leading-relaxed">
                            "{{ $testimonial['text'] }}"
                        </p>

                        <div class="mt-6 flex items-center gap-3">

                            <div class="w-11 h-11 rounded-full bg-blue-100
                                        text-blue-700 flex items-center justify-center
                                        font-bold">

                                {{ substr($testimonial['name'], 0, 1) }}

                            </div>

                            <div>

                                <p class="text-sm font-bold text-slate-900">
                                    {{ $testimonial['name'] }}
                                </p>

                                <p class="text-xs text-slate-500">
                                    {{ $testimonial['business'] }}
                                </p>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="py-20 sm:py-24">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-[2rem]
                        bg-gradient-to-br from-blue-600 to-indigo-700
                        px-6 py-12 sm:px-12 sm:py-16">

                <div class="absolute -right-20 -top-20 w-64 h-64
                            rounded-full border-[40px] border-white/10"></div>

                <div class="absolute -left-16 -bottom-24 w-56 h-56
                            rounded-full bg-emerald-400/10"></div>


                <div class="relative max-w-3xl">

                    <span class="inline-flex px-3.5 py-2 rounded-full
                                 bg-white/10 text-white text-sm font-semibold
                                 border border-white/10">

                        Siap Mengembangkan Bisnis?

                    </span>

                    <h2 class="mt-5 text-3xl sm:text-4xl font-bold text-white">
                        Tidak Harus Menunggu Bisnis Bermasalah untuk Mulai Berbenah.
                    </h2>

                    <p class="mt-4 text-blue-100 leading-relaxed max-w-2xl">
                        Mulai diskusi dengan konsultan dan temukan langkah
                        yang lebih jelas untuk bisnis kamu.
                    </p>

                    <a href="#"
                       class="mt-8 inline-flex items-center gap-2
                              px-6 py-3.5 rounded-xl
                              bg-white text-blue-700 font-bold
                              hover:bg-slate-100
                              hover:-translate-y-0.5
                              transition duration-200">

                        Mulai Konsultasi

                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m9 5 7 7-7 7" />
                        </svg>

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection