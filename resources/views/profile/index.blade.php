@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="mb-8">

            <div class="flex items-center gap-2 text-sm text-slate-500 mb-6">

                <a href="/" class="hover:text-blue-600 transition">
                    Home
                </a>

                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m9 5 7 7-7 7" />
                </svg>

                <span class="text-slate-900 font-medium">
                    Profil Saya
                </span>

            </div>


            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                Profil Saya
            </h1>

            <p class="mt-2 text-slate-600">
                Kelola informasi profil dan lihat aktivitas kamu di Forum Juragan.
            </p>

        </div>


        {{-- PROFILE CARD --}}
        <div class="bg-white rounded-3xl border border-slate-200
                    shadow-sm overflow-hidden mb-8">

            {{-- COVER --}}
            <div class="relative h-40 sm:h-52 bg-gradient-to-br
                        from-blue-600 via-blue-700 to-indigo-800">

                <div class="absolute inset-0 overflow-hidden">

                    <div class="absolute -top-24 -right-10 w-72 h-72
                                rounded-full border-[50px] border-white/5"></div>

                    <div class="absolute -bottom-32 left-20 w-80 h-80
                                rounded-full border-[60px] border-emerald-400/10"></div>

                </div>

            </div>


            {{-- PROFILE INFO --}}
            <div class="relative px-6 sm:px-8 pb-7">

                <div class="flex flex-col sm:flex-row sm:items-end
                            sm:justify-between gap-5">

                    {{-- AVATAR --}}
                    <div class="-mt-14 sm:-mt-16">

                        <div class="w-28 h-28 sm:w-32 sm:h-32
                                    rounded-3xl bg-white p-1.5 shadow-lg">

                            <div class="w-full h-full rounded-[1.3rem]
                                        bg-blue-100 text-blue-700
                                        flex items-center justify-center
                                        text-4xl sm:text-5xl font-bold">

                                AS

                            </div>

                        </div>

                    </div>


                    {{-- BUTTON --}}
                    <a href="#"
                       class="inline-flex items-center justify-center gap-2
                              px-5 py-3 rounded-xl
                              border border-slate-200
                              bg-white text-slate-700
                              font-semibold text-sm
                              hover:border-blue-300
                              hover:text-blue-600
                              transition">

                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15.232 5.232 18.768 8.768M4 20l4.5-1 9.768-9.768a2.5 2.5 0 0 0-3.536-3.536L4.964 15.464 4 20Z" />
                        </svg>

                        Edit Profil

                    </a>

                </div>


                <div class="mt-5">

                    <div class="flex flex-wrap items-center gap-2">

                        <h2 class="text-2xl font-bold text-slate-900">
                            Arga Setyawan
                        </h2>

                        <span class="px-2.5 py-1 rounded-full
                                     bg-blue-50 text-blue-700
                                     text-xs font-semibold">

                            Member

                        </span>

                    </div>

                    <p class="mt-1 text-slate-500">
                        Pemilik Bisnis
                    </p>

                    <div class="mt-4 flex flex-wrap gap-x-6 gap-y-2
                                text-sm text-slate-500">

                        <div class="flex items-center gap-2">

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8.5 12 3l9 5.5M5 9v10h14V9M9 19v-6h6v6" />
                            </svg>

                            Maju Jaya Group

                        </div>


                        <div class="flex items-center gap-2">

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0Z" />
                            </svg>

                            Indonesia

                        </div>


                        <div class="flex items-center gap-2">

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM4 21a8 8 0 0 1 16 0" />
                            </svg>

                            Bergabung September 2026

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- MAIN GRID --}}
        <div class="grid lg:grid-cols-3 gap-8">


            {{-- LEFT --}}
            <div class="lg:col-span-2 space-y-8">


                {{-- ABOUT --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6 sm:p-8">

                    <div class="flex items-center justify-between gap-4">

                        <div>

                            <h2 class="text-xl font-bold text-slate-900">
                                Tentang Saya
                            </h2>

                            <p class="mt-1 text-sm text-slate-500">
                                Informasi singkat mengenai profil kamu.
                            </p>

                        </div>

                        <a href="#"
                           class="text-sm font-semibold text-blue-600
                                  hover:text-blue-700 transition">

                            Edit

                        </a>

                    </div>


                    <p class="mt-6 text-slate-600 leading-relaxed">
                        Saya adalah pemilik bisnis yang tertarik dengan
                        pengembangan tim, sistem operasional, dan strategi
                        untuk membantu bisnis berkembang secara berkelanjutan.
                    </p>

                </div>


                {{-- ACTIVITY --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm overflow-hidden">

                    <div class="p-6 sm:p-8 border-b border-slate-100">

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <h2 class="text-xl font-bold text-slate-900">
                                    Aktivitas Terbaru
                                </h2>

                                <p class="mt-1 text-sm text-slate-500">
                                    Aktivitas kamu di Forum Juragan.
                                </p>

                            </div>

                            <a href="#"
                               class="hidden sm:block text-sm font-semibold
                                      text-blue-600 hover:text-blue-700 transition">

                                Lihat Semua

                            </a>

                        </div>

                    </div>


                    <div class="divide-y divide-slate-100">


                        {{-- ACTIVITY 1 --}}
                        <div class="p-6 sm:p-8 flex gap-4">

                            <div class="w-10 h-10 shrink-0 rounded-xl
                                        bg-blue-50 text-blue-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                </svg>

                            </div>

                            <div class="min-w-0">

                                <p class="text-sm text-slate-500">
                                    Kamu membuat diskusi baru
                                </p>

                                <h3 class="mt-1 font-semibold text-slate-900">
                                    Bagaimana cara meningkatkan produktivitas tim?
                                </h3>

                                <p class="mt-1 text-xs text-slate-400">
                                    2 jam yang lalu
                                </p>

                            </div>

                        </div>


                        {{-- ACTIVITY 2 --}}
                        <div class="p-6 sm:p-8 flex gap-4">

                            <div class="w-10 h-10 shrink-0 rounded-xl
                                        bg-emerald-50 text-emerald-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                                </svg>

                            </div>

                            <div class="min-w-0">

                                <p class="text-sm text-slate-500">
                                    Kamu mendaftar seminar
                                </p>

                                <h3 class="mt-1 font-semibold text-slate-900">
                                    Leadership untuk Pemilik Bisnis
                                </h3>

                                <p class="mt-1 text-xs text-slate-400">
                                    Kemarin
                                </p>

                            </div>

                        </div>


                        {{-- ACTIVITY 3 --}}
                        <div class="p-6 sm:p-8 flex gap-4">

                            <div class="w-10 h-10 shrink-0 rounded-xl
                                        bg-indigo-50 text-indigo-600
                                        flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                </svg>

                            </div>

                            <div class="min-w-0">

                                <p class="text-sm text-slate-500">
                                    Kamu membalas diskusi
                                </p>

                                <h3 class="mt-1 font-semibold text-slate-900">
                                    Tips mengelola karyawan baru
                                </h3>

                                <p class="mt-1 text-xs text-slate-400">
                                    3 hari yang lalu
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="p-6 sm:hidden border-t border-slate-100">

                        <a href="#"
                           class="text-sm font-semibold text-blue-600">
                            Lihat Semua Aktivitas →
                        </a>

                    </div>

                </div>


                {{-- MY DISCUSSIONS --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6 sm:p-8">

                    <div class="flex items-center justify-between gap-4">

                        <div>

                            <h2 class="text-xl font-bold text-slate-900">
                                Diskusi Saya
                            </h2>

                            <p class="mt-1 text-sm text-slate-500">
                                Beberapa diskusi yang pernah kamu buat.
                            </p>

                        </div>

                        <a href="#"
                           class="text-sm font-semibold text-blue-600
                                  hover:text-blue-700 transition">

                            Lihat Semua

                        </a>

                    </div>


                    <div class="mt-6 space-y-4">


                        <a href="#"
                           class="block p-5 rounded-2xl border border-slate-200
                                  hover:border-blue-200 hover:bg-blue-50/30
                                  transition">

                            <div class="flex items-center gap-2">

                                <span class="px-2.5 py-1 rounded-full
                                             bg-blue-50 text-blue-700
                                             text-xs font-semibold">

                                    Produktivitas

                                </span>

                                <span class="text-xs text-slate-400">
                                    • 8 balasan
                                </span>

                            </div>

                            <h3 class="mt-3 font-bold text-slate-900">
                                Bagaimana cara meningkatkan produktivitas tim?
                            </h3>

                            <p class="mt-2 text-sm text-slate-500 line-clamp-2">
                                Saya sedang mencari cara yang efektif untuk
                                meningkatkan produktivitas tanpa membuat
                                tim merasa terlalu terbebani.
                            </p>

                        </a>


                        <a href="#"
                           class="block p-5 rounded-2xl border border-slate-200
                                  hover:border-blue-200 hover:bg-blue-50/30
                                  transition">

                            <div class="flex items-center gap-2">

                                <span class="px-2.5 py-1 rounded-full
                                             bg-emerald-50 text-emerald-700
                                             text-xs font-semibold">

                                    Karyawan

                                </span>

                                <span class="text-xs text-slate-400">
                                    • 5 balasan
                                </span>

                            </div>

                            <h3 class="mt-3 font-bold text-slate-900">
                                Tips menghadapi karyawan yang kurang disiplin
                            </h3>

                            <p class="mt-2 text-sm text-slate-500 line-clamp-2">
                                Apa langkah yang sebaiknya dilakukan ketika
                                ada anggota tim yang sering datang terlambat?
                            </p>

                        </a>

                    </div>

                </div>

            </div>


            {{-- RIGHT SIDEBAR --}}
            <div class="space-y-6">


                {{-- STATS --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6">

                    <h2 class="font-bold text-slate-900">
                        Statistik Aktivitas
                    </h2>

                    <div class="mt-5 grid grid-cols-2 gap-3">


                        <div class="p-4 rounded-2xl bg-blue-50">

                            <p class="text-2xl font-bold text-blue-600">
                                12
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Diskusi
                            </p>

                        </div>


                        <div class="p-4 rounded-2xl bg-emerald-50">

                            <p class="text-2xl font-bold text-emerald-600">
                                48
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Balasan
                            </p>

                        </div>


                        <div class="p-4 rounded-2xl bg-indigo-50">

                            <p class="text-2xl font-bold text-indigo-600">
                                3
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Seminar
                            </p>

                        </div>


                        <div class="p-4 rounded-2xl bg-slate-100">

                            <p class="text-2xl font-bold text-slate-900">
                                2
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Konsultasi
                            </p>

                        </div>

                    </div>

                </div>


                {{-- QUICK MENU --}}
                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm overflow-hidden">

                    <div class="p-6 border-b border-slate-100">

                        <h2 class="font-bold text-slate-900">
                            Menu Profil
                        </h2>

                    </div>


                    <div class="p-3">


                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl text-slate-600
                                  hover:bg-blue-50 hover:text-blue-600
                                  transition">

                            <div class="w-9 h-9 rounded-lg bg-blue-50
                                        text-blue-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM4 21a8 8 0 0 1 16 0" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Informasi Profil
                            </span>

                        </a>


                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl text-slate-600
                                  hover:bg-blue-50 hover:text-blue-600
                                  transition">

                            <div class="w-9 h-9 rounded-lg bg-emerald-50
                                        text-emerald-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                                  hover:bg-blue-50 hover:text-blue-600
                                  transition">

                            <div class="w-9 h-9 rounded-lg bg-indigo-50
                                        text-indigo-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 1-2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Seminar Saya
                            </span>

                        </a>


                        <a href="#"
                           class="flex items-center gap-3 px-4 py-3
                                  rounded-xl text-slate-600
                                  hover:bg-blue-50 hover:text-blue-600
                                  transition">

                            <div class="w-9 h-9 rounded-lg bg-amber-50
                                        text-amber-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                                  hover:bg-blue-50 hover:text-blue-600
                                  transition">

                            <div class="w-9 h-9 rounded-lg bg-slate-100
                                        text-slate-600 flex items-center justify-center">

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10.5 6h3M12 3v3m6.364 1.636-2.121 2.121M21 12h-3M18.364 18.364l-2.121-2.121M12 21v-3M5.636 18.364l2.121-2.121M3 12h3M5.636 5.636l2.121 2.121" />
                                </svg>

                            </div>

                            <span class="text-sm font-semibold">
                                Pengaturan
                            </span>

                        </a>

                    </div>

                </div>


                {{-- COMMUNITY CTA --}}
                <div class="relative overflow-hidden rounded-3xl
                            bg-gradient-to-br from-blue-600 to-indigo-700
                            p-6 text-white">

                    <div class="absolute -right-10 -top-10 w-32 h-32
                                rounded-full border-[20px] border-white/10"></div>

                    <div class="relative">

                        <div class="w-11 h-11 rounded-xl bg-white/10
                                    flex items-center justify-center">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 20h5V4H2v16h5m10 0v-5H7v5m10 0H7" />
                            </svg>

                        </div>

                        <h3 class="mt-5 text-lg font-bold">
                            Aktif di Komunitas
                        </h3>

                        <p class="mt-2 text-sm text-blue-100 leading-relaxed">
                            Bagikan pengalaman dan bantu juragan lain
                            menemukan solusi untuk bisnis mereka.
                        </p>

                        <a href="/forum"
                           class="mt-5 inline-flex items-center gap-2
                                  text-sm font-bold text-white
                                  hover:text-emerald-300 transition">

                            Jelajahi Forum

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="m9 5 7 7-7 7" />
                            </svg>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection