@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    {{-- HERO --}}
    <section class="relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-80 h-80 bg-blue-200/30 rounded-full blur-3xl"></div>
        <div class="absolute top-32 -left-24 w-72 h-72 bg-emerald-200/30 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-2 px-3.5 py-2 rounded-full
                            bg-blue-50 border border-blue-100 text-blue-700
                            text-sm font-semibold mb-5">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                    </svg>

                    Seminar & Event
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold
                           tracking-tight text-slate-900 leading-tight">

                    Upgrade Skill,
                    <span class="text-blue-600">
                        Upgrade Bisnis.
                    </span>

                </h1>

                <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-2xl">
                    Ikuti seminar dan event bisnis bersama para praktisi,
                    mentor, dan sesama pemilik usaha untuk mendapatkan insight
                    yang bisa langsung diterapkan dalam bisnis.
                </p>

            </div>

        </div>
    </section>


    {{-- FILTER --}}
    <section class="mt-12">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5">

                <div>
                    <h2 class="text-2xl font-bold text-slate-900">
                        Temukan Seminar
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Pilih event yang sesuai dengan kebutuhan bisnis kamu.
                    </p>
                </div>


                <div class="flex items-center gap-2 p-1 bg-white border border-slate-200
                            rounded-xl shadow-sm">

                    <button
                        type="button"
                        class="px-4 py-2 rounded-lg bg-blue-600 text-white
                               text-sm font-semibold">
                        Semua
                    </button>

                    <button
                        type="button"
                        class="px-4 py-2 rounded-lg text-slate-600
                               hover:bg-slate-50 text-sm font-medium transition">
                        Mendatang
                    </button>

                    <button
                        type="button"
                        class="hidden sm:block px-4 py-2 rounded-lg text-slate-600
                               hover:bg-slate-50 text-sm font-medium transition">
                        Selesai
                    </button>

                </div>

            </div>

        </div>

    </section>


    {{-- UPCOMING SEMINARS --}}
    <section class="mt-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">


                {{-- SEMINAR CARD 1 --}}
                <article class="group bg-white rounded-3xl border border-slate-200
                                overflow-hidden shadow-sm hover:shadow-xl
                                hover:-translate-y-1 transition-all duration-300">

                    <div class="relative h-52 bg-gradient-to-br from-blue-600 to-blue-800
                                overflow-hidden">

                        <div class="absolute inset-0 opacity-10">
                            <div class="absolute -right-10 -top-10 w-40 h-40 rounded-full border-[30px] border-white"></div>
                            <div class="absolute -left-12 bottom-0 w-36 h-36 rounded-full border-[20px] border-white"></div>
                        </div>

                        <div class="relative h-full p-6 flex flex-col justify-between">

                            <div class="flex items-start justify-between">

                                <span class="px-3 py-1.5 rounded-lg bg-white/15
                                             text-white text-xs font-semibold backdrop-blur-sm">
                                    ONLINE
                                </span>

                                <span class="px-3 py-1.5 rounded-lg bg-emerald-400
                                             text-emerald-950 text-xs font-bold">
                                    TERSEDIA
                                </span>

                            </div>

                            <div>

                                <p class="text-blue-100 text-sm">
                                    Sabtu, 20 September 2026
                                </p>

                                <h3 class="mt-1 text-xl font-bold text-white">
                                    Leadership untuk Pemilik Bisnis
                                </h3>

                            </div>

                        </div>

                    </div>


                    <div class="p-6">

                        <p class="text-sm text-slate-600 leading-relaxed">
                            Pelajari cara membangun tim yang solid,
                            meningkatkan leadership, dan menciptakan budaya kerja
                            yang produktif.
                        </p>


                        <div class="mt-5 space-y-3">

                            <div class="flex items-center gap-3 text-sm text-slate-600">

                                <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                </div>

                                <span>
                                    09.00 - 12.00 WIB
                                </span>

                            </div>


                            <div class="flex items-center gap-3 text-sm text-slate-600">

                                <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0Z" />
                                    </svg>

                                </div>

                                <span>
                                    Zoom Meeting
                                </span>

                            </div>

                        </div>


                        <div class="mt-6 pt-5 border-t border-slate-100
                                    flex items-center justify-between">

                            <div>

                                <p class="text-xs text-slate-500">
                                    Mulai dari
                                </p>

                                <p class="text-lg font-bold text-slate-900">
                                    Rp150.000
                                </p>

                            </div>

                            <a
                                href="#"
                                class="inline-flex items-center gap-2 px-4 py-2.5
                                       rounded-xl bg-blue-600 text-white text-sm
                                       font-semibold hover:bg-blue-700 transition">

                                Detail

                                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m9 5 7 7-7 7" />
                                </svg>

                            </a>

                        </div>

                    </div>

                </article>


                {{-- SEMINAR CARD 2 --}}
                <article class="group bg-white rounded-3xl border border-slate-200
                                overflow-hidden shadow-sm hover:shadow-xl
                                hover:-translate-y-1 transition-all duration-300">

                    <div class="relative h-52 bg-gradient-to-br from-emerald-500 to-emerald-700
                                overflow-hidden">

                        <div class="absolute inset-0 opacity-10">
                            <div class="absolute -right-10 -top-10 w-40 h-40 rounded-full border-[30px] border-white"></div>
                            <div class="absolute -left-12 bottom-0 w-36 h-36 rounded-full border-[20px] border-white"></div>
                        </div>

                        <div class="relative h-full p-6 flex flex-col justify-between">

                            <div class="flex items-start justify-between">

                                <span class="px-3 py-1.5 rounded-lg bg-white/15
                                             text-white text-xs font-semibold backdrop-blur-sm">
                                    OFFLINE
                                </span>

                                <span class="px-3 py-1.5 rounded-lg bg-white
                                             text-emerald-700 text-xs font-bold">
                                    TERSEDIA
                                </span>

                            </div>

                            <div>

                                <p class="text-emerald-100 text-sm">
                                    Sabtu, 27 September 2026
                                </p>

                                <h3 class="mt-1 text-xl font-bold text-white">
                                    Bangun SOP Bisnis yang Efektif
                                </h3>

                            </div>

                        </div>

                    </div>


                    <div class="p-6">

                        <p class="text-sm text-slate-600 leading-relaxed">
                            Workshop praktis untuk membantu pemilik bisnis
                            membuat SOP yang rapi, mudah dipahami, dan bisa
                            diterapkan oleh tim.
                        </p>


                        <div class="mt-5 space-y-3">

                            <div class="flex items-center gap-3 text-sm text-slate-600">

                                <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                </div>

                                <span>
                                    08.30 - 15.00 WIB
                                </span>

                            </div>


                            <div class="flex items-center gap-3 text-sm text-slate-600">

                                <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0Z" />
                                    </svg>

                                </div>

                                <span>
                                    Jakarta Business Center
                                </span>

                            </div>

                        </div>


                        <div class="mt-6 pt-5 border-t border-slate-100
                                    flex items-center justify-between">

                            <div>

                                <p class="text-xs text-slate-500">
                                    Mulai dari
                                </p>

                                <p class="text-lg font-bold text-slate-900">
                                    Rp250.000
                                </p>

                            </div>

                            <a
                                href="#"
                                class="inline-flex items-center gap-2 px-4 py-2.5
                                       rounded-xl bg-blue-600 text-white text-sm
                                       font-semibold hover:bg-blue-700 transition">

                                Detail

                                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m9 5 7 7-7 7" />
                                </svg>

                            </a>

                        </div>

                    </div>

                </article>


                {{-- SEMINAR CARD 3 --}}
                <article class="group bg-white rounded-3xl border border-slate-200
                                overflow-hidden shadow-sm hover:shadow-xl
                                hover:-translate-y-1 transition-all duration-300">

                    <div class="relative h-52 bg-gradient-to-br from-indigo-600 to-purple-700
                                overflow-hidden">

                        <div class="absolute inset-0 opacity-10">
                            <div class="absolute -right-10 -top-10 w-40 h-40 rounded-full border-[30px] border-white"></div>
                            <div class="absolute -left-12 bottom-0 w-36 h-36 rounded-full border-[20px] border-white"></div>
                        </div>

                        <div class="relative h-full p-6 flex flex-col justify-between">

                            <div class="flex items-start justify-between">

                                <span class="px-3 py-1.5 rounded-lg bg-white/15
                                             text-white text-xs font-semibold backdrop-blur-sm">
                                    ONLINE
                                </span>

                                <span class="px-3 py-1.5 rounded-lg bg-amber-300
                                             text-amber-950 text-xs font-bold">
                                    SEGERA PENUH
                                </span>

                            </div>

                            <div>

                                <p class="text-indigo-100 text-sm">
                                    Minggu, 5 Oktober 2026
                                </p>

                                <h3 class="mt-1 text-xl font-bold text-white">
                                    Strategi Bisnis di Era Digital
                                </h3>

                            </div>

                        </div>

                    </div>


                    <div class="p-6">

                        <p class="text-sm text-slate-600 leading-relaxed">
                            Bahas strategi digital marketing, pemanfaatan
                            teknologi, dan cara membangun bisnis yang tetap
                            relevan di era digital.
                        </p>


                        <div class="mt-5 space-y-3">

                            <div class="flex items-center gap-3 text-sm text-slate-600">

                                <div class="w-9 h-9 rounded-lg bg-indigo-50 text-indigo-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                </div>

                                <span>
                                    13.00 - 16.00 WIB
                                </span>

                            </div>


                            <div class="flex items-center gap-3 text-sm text-slate-600">

                                <div class="w-9 h-9 rounded-lg bg-indigo-50 text-indigo-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0Z" />
                                    </svg>

                                </div>

                                <span>
                                    Zoom Meeting
                                </span>

                            </div>

                        </div>


                        <div class="mt-6 pt-5 border-t border-slate-100
                                    flex items-center justify-between">

                            <div>

                                <p class="text-xs text-slate-500">
                                    Mulai dari
                                </p>

                                <p class="text-lg font-bold text-slate-900">
                                    Rp175.000
                                </p>

                            </div>

                            <a
                                href="#"
                                class="inline-flex items-center gap-2 px-4 py-2.5
                                       rounded-xl bg-blue-600 text-white text-sm
                                       font-semibold hover:bg-blue-700 transition">

                                Detail

                                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m9 5 7 7-7 7" />
                                </svg>

                            </a>

                        </div>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- WHY JOIN --}}
    <section class="mt-20">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-10 items-center">

                <div>

                    <span class="text-sm font-semibold text-blue-600">
                        KENAPA IKUT SEMINAR?
                    </span>

                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-slate-900">
                        Bukan Sekadar Dengar Materi,
                        <span class="text-blue-600">
                            Tapi Dapat Insight Nyata.
                        </span>
                    </h2>

                    <p class="mt-5 text-slate-600 leading-relaxed">
                        Setiap event Forum Juragan dirancang agar peserta
                        mendapatkan pengetahuan yang relevan dan bisa langsung
                        digunakan untuk mengembangkan bisnis.
                    </p>


                    <div class="mt-8 space-y-5">

                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl bg-blue-50
                                        text-blue-600 flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5S19.832 5.477 21 6.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253" />
                                </svg>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900">
                                    Materi Praktis
                                </h3>

                                <p class="mt-1 text-sm text-slate-600">
                                    Materi dibuat berdasarkan kebutuhan dan
                                    permasalahan bisnis nyata.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl bg-emerald-50
                                        text-emerald-600 flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5V4H2v16h5m10 0v-5H7v5m10 0H7" />
                                </svg>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900">
                                    Networking
                                </h3>

                                <p class="mt-1 text-sm text-slate-600">
                                    Bertemu dan membangun relasi dengan
                                    pemilik bisnis lainnya.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="w-11 h-11 shrink-0 rounded-xl bg-purple-50
                                        text-purple-600 flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.586A2 2 0 0 1 14 3.586L19.414 9A2 2 0 0 1 20 10.414V19a2 2 0 0 1-2 2Z" />
                                </svg>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900">
                                    Sertifikat & Materi
                                </h3>

                                <p class="mt-1 text-sm text-slate-600">
                                    Dapatkan materi dan sertifikat setelah
                                    mengikuti event tertentu.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- INFO CARD --}}
                <div class="relative">

                    <div class="bg-slate-900 rounded-3xl p-8 sm:p-10 text-white overflow-hidden">

                        <div class="absolute -right-16 -top-16 w-48 h-48
                                    rounded-full bg-blue-600/30 blur-2xl"></div>

                        <div class="relative">

                            <span class="inline-flex px-3 py-1.5 rounded-lg
                                         bg-white/10 text-blue-200 text-xs
                                         font-semibold">
                                FORUM JURAGAN
                            </span>

                            <h3 class="mt-6 text-2xl sm:text-3xl font-bold">
                                Belajar Bersama,
                                Bertumbuh Bersama.
                            </h3>

                            <p class="mt-4 text-slate-300 leading-relaxed">
                                Jangan lewatkan kesempatan untuk mendapatkan
                                insight baru dan memperluas jaringan bisnis.
                            </p>


                            <div class="mt-8 grid grid-cols-2 gap-4">

                                <div class="rounded-2xl bg-white/5 border border-white/10 p-5">

                                    <p class="text-3xl font-bold">
                                        50+
                                    </p>

                                    <p class="mt-1 text-sm text-slate-400">
                                        Event
                                    </p>

                                </div>


                                <div class="rounded-2xl bg-white/5 border border-white/10 p-5">

                                    <p class="text-3xl font-bold">
                                        2K+
                                    </p>

                                    <p class="mt-1 text-sm text-slate-400">
                                        Peserta
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- CTA --}}
    <section class="mt-20">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl bg-blue-600 p-8 sm:p-12">

                <div class="absolute -right-20 -top-20 w-72 h-72 rounded-full
                            bg-white/10"></div>

                <div class="absolute -left-16 -bottom-20 w-60 h-60 rounded-full
                            bg-emerald-400/20"></div>

                <div class="relative flex flex-col lg:flex-row lg:items-center
                            lg:justify-between gap-8">

                    <div class="max-w-2xl">

                        <h2 class="text-3xl sm:text-4xl font-bold text-white">
                            Mau bisnis kamu berkembang lebih cepat?
                        </h2>

                        <p class="mt-4 text-blue-100 leading-relaxed">
                            Ikuti seminar, diskusi dengan sesama juragan,
                            dan dapatkan insight yang bisa membantu kamu
                            mengambil keputusan bisnis dengan lebih baik.
                        </p>

                    </div>


                    <a
                        href="#"
                        class="shrink-0 inline-flex items-center justify-center gap-2
                               px-6 py-3.5 rounded-xl bg-white text-blue-700
                               font-bold hover:bg-blue-50 transition">

                        Lihat Semua Event

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