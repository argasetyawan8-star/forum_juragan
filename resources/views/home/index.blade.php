@extends('layouts.landing')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}
<section class="relative overflow-hidden bg-white pt-28 pb-20 sm:pt-32 lg:pt-36 lg:pb-28">

    {{-- Background Decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-blue-100/70 blur-3xl"></div>
        <div class="absolute -left-32 bottom-0 h-96 w-96 rounded-full bg-emerald-100/60 blur-3xl"></div>
        <div class="absolute left-1/2 top-1/3 h-64 w-64 -translate-x-1/2 rounded-full bg-blue-50/60 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-16">

            {{-- =================================================
                 HERO CONTENT
            ================================================== --}}
            <div>

                {{-- Badge --}}
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700">

                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-70"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
                    </span>

                    Komunitas bisnis Indonesia

                </div>


                {{-- Title --}}
                <h1 class="max-w-4xl text-4xl font-black leading-[1.08] tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">

                    Bangun Bisnis Lebih Baik,

                    <span class="text-blue-600">
                        Bersama Juragan.
                    </span>

                </h1>


                {{-- Description --}}
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-500 sm:text-lg">
                    Tempat para pemilik usaha untuk berdiskusi,
                    belajar dari pengalaman, mengikuti seminar,
                    dan mendapatkan solusi bisnis yang lebih terarah.
                </p>


                {{-- CTA --}}
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="{{ route('forum.index') }}"
                        class="group inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-blue-600/20 transition duration-300 hover:-translate-y-1 hover:bg-blue-700"
                    >
                        <i class="bi bi-chat-square-text"></i>
                        Mulai Diskusi
                        <i class="bi bi-arrow-right text-base transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>

                    <a
                        href="{{ route('seminar.index') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-bold text-slate-700 transition duration-300 hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                    >
                        <i class="bi bi-easel2"></i>
                        Lihat Seminar
                    </a>

                </div>


                {{-- Trust Stats --}}
                <div class="mt-10 grid max-w-lg grid-cols-3 divide-x divide-slate-200">

                    <div class="pr-5">

                        <p class="text-2xl font-black text-slate-900 sm:text-3xl">
                            1K+
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Juragan bergabung
                        </p>

                    </div>


                    <div class="px-5">

                        <p class="text-2xl font-black text-slate-900 sm:text-3xl">
                            500+
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Diskusi bisnis
                        </p>

                    </div>


                    <div class="pl-5">

                        <p class="text-2xl font-black text-slate-900 sm:text-3xl">
                            50+
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Seminar
                        </p>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 HERO VISUAL
            ================================================== --}}
            <div class="relative">

                <div class="absolute -inset-5 rounded-[2rem] bg-blue-500/5 blur-2xl"></div>

                <div class="relative rounded-[2rem] border border-slate-200 bg-slate-50 p-4 shadow-2xl shadow-slate-200/70 sm:p-5">

                    {{-- Browser Header --}}
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

                        <div class="flex items-center justify-between border-b border-slate-100 px-4 py-3">

                            <div class="flex items-center gap-2">

                                <span class="h-2.5 w-2.5 rounded-full bg-red-300"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-amber-300"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-emerald-300"></span>

                            </div>

                            <div class="flex items-center gap-2 rounded-lg bg-slate-50 px-3 py-1.5">
                                <i class="bi bi-globe2 text-xs text-slate-400"></i>
                                <span class="text-[10px] text-slate-400">
                                    forumjuragan.com
                                </span>
                            </div>

                            <i class="bi bi-three-dots text-slate-400"></i>

                        </div>


                        <div class="p-5 sm:p-6">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        Aktivitas Komunitas
                                    </p>

                                    <h3 class="mt-1 text-lg font-black text-slate-900">
                                        Diskusi Terbaru
                                    </h3>

                                </div>

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                    <i class="bi bi-chat-square-text-fill text-xl"></i>
                                </div>

                            </div>


                            <div class="mt-5 space-y-3">

                                @forelse (($latestThreads ?? collect()) as $thread)

                                    <a
                                        href="{{ route('forum.show', $thread->slug) }}"
                                        class="block rounded-xl border border-slate-100 p-4 transition duration-300 hover:-translate-y-0.5 hover:border-blue-100 hover:bg-blue-50/40"
                                    >

                                        <div class="flex items-start justify-between gap-4">

                                            <div class="min-w-0">

                                                <p class="line-clamp-2 text-sm font-semibold leading-6 text-slate-800">
                                                    {{ $thread->judul }}
                                                </p>

                                                <div class="mt-2 flex flex-wrap items-center gap-2 text-[11px] text-slate-400">

                                                    @if ($thread->category)
                                                        <span class="rounded-full bg-blue-50 px-2 py-1 font-semibold text-blue-600">
                                                            {{ $thread->category->nama_kategori }}
                                                        </span>
                                                    @endif

                                                    <span class="flex items-center gap-1">
                                                        <i class="bi bi-chat-dots"></i>
                                                        {{ $thread->replies_count ?? 0 }}
                                                    </span>

                                                </div>

                                            </div>

                                            <i class="bi bi-arrow-up-right shrink-0 text-slate-300 transition group-hover:text-blue-500"></i>

                                        </div>

                                    </a>

                                @empty

                                    <div class="rounded-xl border border-dashed border-slate-200 p-6 text-center">

                                        <i class="bi bi-chat-square-text text-2xl text-slate-300"></i>

                                        <p class="mt-2 text-sm font-semibold text-slate-600">
                                            Belum ada diskusi
                                        </p>

                                    </div>

                                @endforelse

                            </div>

                        </div>

                    </div>


                    {{-- Floating Badge --}}
                    <div class="absolute -bottom-5 -left-3 hidden rounded-2xl border border-slate-100 bg-white p-4 shadow-xl sm:block sm:-left-5">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>

                            <div>

                                <p class="text-xs text-slate-400">
                                    Komunitas aktif
                                </p>

                                <p class="text-sm font-bold text-slate-900">
                                    Terhubung & Bertumbuh
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
     THREE SERVICES
========================================================= --}}
<section class="bg-slate-50 py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-2xl text-center">

            <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                Semua kebutuhan bisnis
            </span>

            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                Satu platform untuk berkembang
            </h2>

            <p class="mt-4 leading-7 text-slate-500">
                Mulai dari berdiskusi hingga mendapatkan bantuan langsung
                untuk menghadapi tantangan bisnis.
            </p>

        </div>


        <div class="mt-12 grid gap-6 md:grid-cols-3">

            {{-- Forum --}}
            <a
                href="{{ route('forum.index') }}"
                class="group rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-blue-200 hover:shadow-xl"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                    <i class="bi bi-chat-square-text-fill text-2xl"></i>
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Forum
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-500">
                    Tempat berbagi pengalaman, bertanya, dan menemukan
                    solusi dari sesama pemilik usaha.
                </p>

                <div class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-blue-600">
                    Jelajahi Forum
                    <i class="bi bi-arrow-right transition-transform group-hover:translate-x-1"></i>
                </div>

            </a>


            {{-- Seminar --}}
            <a
                href="{{ route('seminar.index') }}"
                class="group rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                    <i class="bi bi-easel2-fill text-2xl"></i>
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Seminar
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-500">
                    Ikuti seminar dan event bisnis bersama praktisi
                    dan pembicara berpengalaman.
                </p>

                <div class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-emerald-600">
                    Lihat Seminar
                    <i class="bi bi-arrow-right transition-transform group-hover:translate-x-1"></i>
                </div>

            </a>


            {{-- Consultation --}}
            <a
                href="{{ route('consultation.create') }}"
                class="group rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-violet-200 hover:shadow-xl"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-violet-50 text-violet-600">
                    <i class="bi bi-briefcase-fill text-2xl"></i>
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Konsultasi Bisnis
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-500">
                    Dapatkan bantuan yang lebih personal untuk
                    menghadapi tantangan bisnis Anda.
                </p>

                <div class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-violet-600">
                    Konsultasi Sekarang
                    <i class="bi bi-arrow-right transition-transform group-hover:translate-x-1"></i>
                </div>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     FORUM PREVIEW
========================================================= --}}
<section
    id="forum"
    class="bg-white py-20"
>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

            <div>

                <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                    Forum Juragan
                </span>

                <h2 class="mt-2 text-3xl font-black text-slate-900">
                    Diskusi terbaru
                </h2>

                <p class="mt-3 text-slate-500">
                    Insight dan pengalaman terbaru dari komunitas.
                </p>

            </div>

            <a
                href="{{ route('forum.index') }}"
                class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 transition hover:text-blue-700"
            >
                Lihat semua
                <i class="bi bi-arrow-up-right"></i>
            </a>

        </div>


        <div class="mt-10 grid gap-5 lg:grid-cols-3">

            @forelse (($latestThreads ?? collect()) as $thread)

                <article class="group rounded-2xl border border-slate-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-100 hover:shadow-lg">

                    @if ($thread->category)

                        <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-600">
                            <i class="bi bi-folder2-open"></i>
                            {{ $thread->category->nama_kategori }}
                        </span>

                    @endif


                    <a href="{{ route('forum.show', $thread->slug) }}">

                        <h3 class="mt-5 line-clamp-2 text-lg font-bold leading-7 text-slate-900 transition group-hover:text-blue-600">
                            {{ $thread->judul }}
                        </h3>

                    </a>


                    <p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-500">
                        {{ \Illuminate\Support\Str::limit(strip_tags($thread->isi), 120) }}
                    </p>


                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4 text-xs text-slate-400">

                        <span class="flex items-center gap-1.5">

                            <i class="bi bi-person-circle"></i>

                            {{ $thread->user->name ?? 'Juragan' }}

                        </span>

                        <span class="flex items-center gap-1.5">

                            <i class="bi bi-chat-dots"></i>

                            {{ $thread->replies_count ?? 0 }}

                            balasan

                        </span>

                    </div>

                </article>

            @empty

                <div class="lg:col-span-3">

                    <div class="rounded-2xl border border-dashed border-slate-200 bg-slate-50 p-10 text-center">

                        <i class="bi bi-chat-square-text text-3xl text-slate-300"></i>

                        <p class="mt-3 font-semibold text-slate-700">
                            Belum ada diskusi terbaru.
                        </p>

                        <p class="mt-1 text-sm text-slate-500">
                            Jadilah yang pertama memulai diskusi.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
     SEMINAR
========================================================= --}}
<section
    id="seminar"
    class="bg-slate-50 py-20"
>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

            <div>

                <span class="text-sm font-bold uppercase tracking-widest text-emerald-600">
                    Upcoming Event
                </span>

                <h2 class="mt-2 text-3xl font-black text-slate-900">
                    Seminar mendatang
                </h2>

                <p class="mt-3 text-slate-500">
                    Belajar langsung dari praktisi dan pembicara berpengalaman.
                </p>

            </div>

            <a
                href="{{ route('seminar.index') }}"
                class="inline-flex items-center gap-2 text-sm font-bold text-emerald-600 transition hover:text-emerald-700"
            >
                Lihat semua
                <i class="bi bi-arrow-up-right"></i>
            </a>

        </div>


        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @forelse (($upcomingSeminars ?? collect()) as $seminar)

                <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    {{-- Visual --}}
                    <div class="relative h-44 overflow-hidden bg-gradient-to-br from-blue-600 to-indigo-700 p-6 text-white">

                        <div class="absolute -right-8 -top-8 h-28 w-28 rounded-full bg-white/10 blur-2xl"></div>
                        <div class="absolute -bottom-10 -left-5 h-24 w-24 rounded-full bg-emerald-400/10 blur-2xl"></div>

                        <div class="relative flex h-full items-start justify-between">

                            {{-- Date --}}
                            <div class="rounded-2xl bg-white/15 px-4 py-3 text-center backdrop-blur-sm">

                                <p class="text-2xl font-black leading-none">
                                    {{ $seminar->tanggal->format('d') }}
                                </p>

                                <p class="mt-1 text-[10px] font-bold uppercase tracking-wider text-blue-100">
                                    {{ $seminar->tanggal->locale('id')->translatedFormat('M') }}
                                </p>

                            </div>


                            {{-- Status --}}
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-400 px-3 py-1.5 text-xs font-bold text-slate-950">

                                <i class="bi bi-broadcast-pin"></i>

                                Open

                            </span>

                        </div>

                    </div>


                    {{-- Content --}}
                    <div class="p-6">

                        <div class="flex flex-wrap items-center gap-2 text-xs text-slate-400">

                            <span class="inline-flex items-center gap-1.5">

                                <i class="bi bi-calendar3"></i>

                                {{ $seminar->tanggal
                                    ->locale('id')
                                    ->translatedFormat('d F Y') }}

                            </span>

                            <span>•</span>

                            <span class="inline-flex items-center gap-1.5">

                                <i class="bi bi-clock"></i>

                                {{ \Carbon\Carbon::parse($seminar->jam_mulai)->format('H.i') }}

                            </span>

                        </div>


                        <a href="{{ route('seminar.show', $seminar->slug) }}">

                            <h3 class="mt-4 line-clamp-2 text-lg font-bold leading-7 text-slate-900 transition group-hover:text-blue-600">
                                {{ $seminar->judul }}
                            </h3>

                        </a>


                        <div class="mt-4 flex items-center gap-2 text-sm text-slate-500">

                            <i class="bi bi-person-video3 text-slate-400"></i>

                            <span>
                                {{ $seminar->pembicara }}
                            </span>

                        </div>


                        <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-5">

                            <div>

                                <p class="text-xs text-slate-400">
                                    Investasi
                                </p>

                                <p class="mt-1 font-bold text-blue-600">
                                    @if ($seminar->harga > 0)
                                        Rp {{ number_format($seminar->harga, 0, ',', '.') }}
                                    @else
                                        Gratis
                                    @endif
                                </p>

                            </div>


                            <a
                                href="{{ route('seminar.show', $seminar->slug) }}"
                                class="inline-flex items-center gap-2 rounded-xl bg-slate-50 px-4 py-2.5 text-sm font-bold text-blue-600 transition hover:bg-blue-50"
                            >
                                Detail
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </article>

            @empty

                <div class="md:col-span-2 lg:col-span-3">

                    <div class="rounded-2xl border border-dashed border-slate-200 bg-white p-10 text-center">

                        <i class="bi bi-calendar-x text-3xl text-slate-300"></i>

                        <p class="mt-3 font-semibold text-slate-700">
                            Belum ada seminar mendatang.
                        </p>

                        <p class="mt-1 text-sm text-slate-500">
                            Seminar terbaru akan tampil di sini.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
     ABOUT
========================================================= --}}
<section
    id="tentang"
    class="bg-white py-20"
>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

            {{-- Content --}}
            <div>

                <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                    Tentang Forum Juragan
                </span>

                <h2 class="mt-3 text-3xl font-black leading-tight text-slate-900 sm:text-4xl">
                    Karena setiap juragan punya cerita untuk dibagikan.
                </h2>

                <p class="mt-5 leading-8 text-slate-500">
                    Forum Juragan hadir sebagai ruang bagi pemilik usaha
                    untuk saling belajar, berbagi pengalaman, dan
                    menemukan solusi dari tantangan bisnis sehari-hari.
                </p>


                <div class="mt-8 space-y-5">

                    {{-- Point --}}
                    <div class="flex gap-4">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <div>

                            <h3 class="font-bold text-slate-900">
                                Belajar bersama
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Insight nyata dari pengalaman para pelaku usaha.
                            </p>

                        </div>

                    </div>


                    {{-- Point --}}
                    <div class="flex gap-4">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <div>

                            <h3 class="font-bold text-slate-900">
                                Bangun networking
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Terhubung dengan pemilik bisnis lainnya.
                            </p>

                        </div>

                    </div>


                    {{-- Point --}}
                    <div class="flex gap-4">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <div>

                            <h3 class="font-bold text-slate-900">
                                Dapatkan solusi
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Konsultasikan masalah bisnis dengan lebih terarah.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Stats --}}
            <div class="rounded-[2rem] bg-slate-50 p-6 sm:p-8">

                <div class="grid gap-4 sm:grid-cols-2">

                    <div class="rounded-2xl bg-white p-6 shadow-sm">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <p class="mt-5 text-3xl font-black text-blue-600">
                            1K+
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Anggota komunitas
                        </p>

                    </div>


                    <div class="rounded-2xl bg-white p-6 shadow-sm">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                            <i class="bi bi-chat-square-text-fill"></i>
                        </div>

                        <p class="mt-5 text-3xl font-black text-emerald-500">
                            500+
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Diskusi bisnis
                        </p>

                    </div>


                    <div class="rounded-2xl bg-white p-6 shadow-sm">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                            <i class="bi bi-easel2-fill"></i>
                        </div>

                        <p class="mt-5 text-3xl font-black text-violet-600">
                            50+
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Seminar
                        </p>

                    </div>


                    <div class="rounded-2xl bg-white p-6 shadow-sm">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>

                        <p class="mt-5 text-3xl font-black text-amber-500">
                            100+
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Konsultasi
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CONSULTATION CTA
========================================================= --}}
<section
    id="konsultasi"
    class="relative overflow-hidden bg-blue-600 py-20"
>

    <div class="pointer-events-none absolute inset-0">

        <div class="absolute -left-20 -top-20 h-64 w-64 rounded-full bg-white/5 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-20 h-80 w-80 rounded-full bg-emerald-400/10 blur-3xl"></div>

    </div>


    <div class="relative mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">

        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-white ring-1 ring-white/10">
            <i class="bi bi-briefcase-fill text-2xl"></i>
        </div>


        <span class="mt-6 inline-block text-sm font-bold uppercase tracking-widest text-emerald-300">
            Butuh bantuan lebih serius?
        </span>


        <h2 class="mt-4 text-3xl font-black tracking-tight text-white sm:text-4xl">
            Jangan hadapi tantangan bisnis sendirian.
        </h2>


        <p class="mx-auto mt-5 max-w-2xl leading-7 text-blue-100">
            Dapatkan perspektif dan solusi yang lebih terarah
            melalui layanan konsultasi bisnis kami.
        </p>


        <a
            href="{{ route('consultation.create') }}"
            class="group mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-7 py-3.5 text-sm font-bold text-blue-600 shadow-xl transition duration-300 hover:-translate-y-1 hover:bg-emerald-50"
        >
            Konsultasi Sekarang
            <i class="bi bi-arrow-right transition-transform group-hover:translate-x-1"></i>
        </a>

    </div>

</section>

@endsection