@extends('layouts.app')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}
<section class="relative overflow-hidden bg-white pt-32 pb-20">
    <div class="absolute inset-0 -z-0">
        <div class="absolute left-0 top-20 h-72 w-72 rounded-full bg-blue-100/60 blur-3xl"></div>
        <div class="absolute right-0 top-10 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-14 lg:grid-cols-2">

            <div>
                <span class="inline-flex items-center rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700">
                    Tentang Forum Juragan
                </span>

                <h1 class="mt-6 text-4xl font-bold leading-tight tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                    Tempat Juragan
                    <span class="text-blue-600"> Belajar, Berbagi,</span>
                    dan Bertumbuh.
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-8 text-slate-600">
                    Forum Juragan adalah platform komunitas bisnis yang membantu
                    pemilik usaha mendapatkan insight, membangun relasi, dan
                    menemukan solusi untuk mengembangkan bisnis.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="/forum"
                       class="rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700 hover:-translate-y-0.5">
                        Jelajahi Forum
                    </a>

                    <a href="/konsultasi"
                       class="rounded-xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-700">
                        Lihat Layanan Konsultasi
                    </a>
                </div>
            </div>

            {{-- Visual --}}
            <div class="relative">
                <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-indigo-700 p-8 shadow-2xl shadow-blue-900/20">

                    <div class="rounded-2xl bg-white/10 p-6 backdrop-blur">
                        <div class="flex items-center gap-4">
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-blue-600">
                                <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2h-6l-4 3v-5H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7 4a2 2 0 012-2h8a2 2 0 012 2v8a2 2 0 01-2 2h-4l-4 3v-5H9a2 2 0 01-2-2V4z"/>
                                </svg>
                            </div>

                            <div>
                                <p class="font-semibold text-white">
                                    Komunitas Juragan
                                </p>
                                <p class="text-sm text-blue-100">
                                    Belajar bersama, tumbuh bersama.
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 grid grid-cols-2 gap-4">
                            <div class="rounded-2xl bg-white/10 p-5">
                                <p class="text-3xl font-bold text-white">500+</p>
                                <p class="mt-1 text-sm text-blue-100">
                                    Anggota komunitas
                                </p>
                            </div>

                            <div class="rounded-2xl bg-white/10 p-5">
                                <p class="text-3xl font-bold text-white">100+</p>
                                <p class="mt-1 text-sm text-blue-100">
                                    Diskusi bisnis
                                </p>
                            </div>

                            <div class="rounded-2xl bg-white/10 p-5">
                                <p class="text-3xl font-bold text-white">50+</p>
                                <p class="mt-1 text-sm text-blue-100">
                                    Seminar
                                </p>
                            </div>

                            <div class="rounded-2xl bg-white/10 p-5">
                                <p class="text-3xl font-bold text-white">4.9/5</p>
                                <p class="mt-1 text-sm text-blue-100">
                                    Rating komunitas
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
     ABOUT PLATFORM
========================================================= --}}
<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                Siapa Kami
            </span>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                Dibangun untuk para pemilik bisnis
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-600">
                Menjalankan bisnis tidak selalu mudah. Ada banyak keputusan,
                masalah, dan tantangan yang harus dihadapi setiap hari.
            </p>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-2">

            <div class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-200/70">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 20h9"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Belajar dari pengalaman
                </h3>

                <p class="mt-3 leading-7 text-slate-600">
                    Forum Juragan mempertemukan pemilik bisnis dengan
                    berbagai pengalaman nyata di dunia usaha. Kamu bisa
                    bertanya, berdiskusi, dan mendapatkan perspektif baru.
                </p>
            </div>

            <div class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-200/70">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 20H4v-2a3 3 0 015.356-1.857"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Tumbuh bersama komunitas
                </h3>

                <p class="mt-3 leading-7 text-slate-600">
                    Kami percaya bahwa bisnis berkembang lebih cepat ketika
                    pemiliknya tidak berjalan sendirian. Bangun koneksi,
                    berbagi pengalaman, dan saling membantu.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- =========================================================
     3 PILAR
========================================================= --}}
<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="text-center">
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                Ekosistem Forum Juragan
            </span>

            <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">
                Tiga cara untuk mengembangkan bisnis
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-slate-600">
                Dari mendapatkan insight sampai mendapatkan bantuan langsung,
                semuanya tersedia dalam satu platform.
            </p>
        </div>

        @php
            $pillars = [
                [
                    'number' => '01',
                    'title' => 'Forum',
                    'description' => 'Tempat berdiskusi, bertanya, berbagi pengalaman, dan mendapatkan insight dari sesama pemilik bisnis.',
                    'color' => 'blue',
                    'link' => '/forum',
                ],
                [
                    'number' => '02',
                    'title' => 'Seminar',
                    'description' => 'Ikuti seminar dan event bisnis untuk meningkatkan pengetahuan, skill, serta memperluas jaringan.',
                    'color' => 'emerald',
                    'link' => '/seminar',
                ],
                [
                    'number' => '03',
                    'title' => 'Konsultasi Bisnis',
                    'description' => 'Dapatkan bantuan yang lebih personal untuk memahami masalah dan menentukan strategi bisnis.',
                    'color' => 'indigo',
                    'link' => '/konsultasi',
                ],
            ];
        @endphp

        <div class="mt-12 grid gap-6 md:grid-cols-3">

            @foreach ($pillars as $pillar)
                <a href="{{ $pillar['link'] }}"
                   class="group rounded-3xl border border-slate-200 bg-white p-7 transition duration-300 hover:-translate-y-2 hover:border-blue-200 hover:shadow-xl">

                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-slate-400">
                            {{ $pillar['number'] }}
                        </span>

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="mt-7 text-xl font-bold text-slate-900">
                        {{ $pillar['title'] }}
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        {{ $pillar['description'] }}
                    </p>

                    <div class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-blue-600">
                        Pelajari lebih lanjut
                        <span class="transition group-hover:translate-x-1">→</span>
                    </div>

                </a>
            @endforeach

        </div>
    </div>
</section>


{{-- =========================================================
     VALUES
========================================================= --}}
<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            <div>
                <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                    Nilai Kami
                </span>

                <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">
                    Komunitas yang dibangun dengan nilai yang tepat.
                </h2>

                <p class="mt-5 leading-8 text-slate-600">
                    Forum Juragan bukan sekadar tempat membaca informasi.
                    Kami ingin membangun lingkungan yang mendorong para
                    pemilik bisnis untuk saling berbagi dan berkembang.
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">

                @php
                    $values = [
                        ['title' => 'Terbuka', 'text' => 'Setiap juragan punya kesempatan untuk berbagi dan belajar.'],
                        ['title' => 'Praktis', 'text' => 'Insight yang dibagikan berorientasi pada masalah nyata.'],
                        ['title' => 'Kolaboratif', 'text' => 'Mendorong pemilik bisnis untuk saling membantu.'],
                        ['title' => 'Bertumbuh', 'text' => 'Fokus pada perkembangan bisnis secara berkelanjutan.'],
                    ];
                @endphp

                @foreach ($values as $value)
                    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200/70">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                            ✓
                        </div>

                        <h3 class="mt-4 font-bold text-slate-900">
                            {{ $value['title'] }}
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            {{ $value['text'] }}
                        </p>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</section>


{{-- =========================================================
     CTA
========================================================= --}}
<section class="bg-white py-20">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">
        <div class="overflow-hidden rounded-3xl bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-12 text-center shadow-xl shadow-blue-900/10 sm:px-12">

            <h2 class="text-3xl font-bold text-white sm:text-4xl">
                Siap bertumbuh bersama juragan lainnya?
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-blue-100">
                Bergabung dengan komunitas, ikuti diskusi, dan temukan
                insight yang bisa membantu perjalanan bisnis kamu.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="/register"
                   class="rounded-xl bg-white px-6 py-3.5 text-sm font-semibold text-blue-700 transition hover:bg-blue-50">
                    Gabung Gratis
                </a>

                <a href="/forum"
                   class="rounded-xl border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-white/20">
                    Jelajahi Forum
                </a>
            </div>

        </div>
    </div>
</section>

@endsection