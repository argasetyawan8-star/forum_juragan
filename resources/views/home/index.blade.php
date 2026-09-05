@extends('layouts.app')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}

<section class="relative overflow-hidden bg-white pt-32 pb-20 lg:pt-40 lg:pb-28">

    {{-- Background Decoration --}}
    <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-blue-100/60 blur-3xl"></div>

    <div class="absolute -left-32 bottom-0 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            {{-- Hero Content --}}
            <div>

                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700">

                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                    Komunitas bisnis Indonesia

                </div>

                <h1 class="max-w-3xl text-4xl font-bold leading-tight tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">

                    Bangun Bisnis Lebih Baik,

                    <span class="text-blue-600">
                        Bersama Juragan.
                    </span>

                </h1>

                <p class="mt-6 max-w-xl text-base leading-8 text-slate-500 sm:text-lg">

                    Tempat para pemilik usaha untuk berdiskusi,
                    belajar dari pengalaman, mengikuti seminar,
                    dan mendapatkan solusi bisnis yang tepat.

                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="/forum"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-blue-600/20 transition hover:-translate-y-1 hover:bg-blue-700"
                    >
                        Mulai Diskusi

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13 7l5 5m0 0-5 5m5-5H6"
                            />
                        </svg>

                    </a>

                    <a
                        href="/seminar"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-bold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                    >
                        Lihat Seminar
                    </a>

                </div>

                {{-- Trust --}}
                <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">

                    <div>
                        <p class="text-2xl font-bold text-slate-900">
                            1K+
                        </p>

                        <p class="text-xs text-slate-500">
                            Juragan bergabung
                        </p>
                    </div>

                    <div class="h-10 w-px bg-slate-200"></div>

                    <div>
                        <p class="text-2xl font-bold text-slate-900">
                            500+
                        </p>

                        <p class="text-xs text-slate-500">
                            Diskusi bisnis
                        </p>
                    </div>

                    <div class="h-10 w-px bg-slate-200"></div>

                    <div>
                        <p class="text-2xl font-bold text-slate-900">
                            50+
                        </p>

                        <p class="text-xs text-slate-500">
                            Seminar
                        </p>
                    </div>

                </div>

            </div>

            {{-- Hero Visual --}}
            <div class="relative">

                <div class="relative rounded-3xl border border-slate-200 bg-slate-50 p-5 shadow-2xl shadow-slate-200/70">

                    <div class="rounded-2xl bg-white p-5 shadow-sm">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-xs font-medium text-slate-400">
                                    Diskusi Terbaru
                                </p>

                                <h3 class="mt-1 font-bold text-slate-900">
                                    Komunitas Juragan
                                </h3>

                            </div>

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                💬
                            </div>

                        </div>

                        <div class="mt-5 space-y-3">

                            @foreach([
                                ['title' => 'Bagaimana cara mengatur karyawan?', 'reply' => '24 balasan'],
                                ['title' => 'Tips meningkatkan produktivitas tim', 'reply' => '18 balasan'],
                                ['title' => 'Cara membuat SOP sederhana', 'reply' => '12 balasan'],
                            ] as $discussion)

                                <div class="rounded-xl border border-slate-100 p-4 transition hover:border-blue-100 hover:bg-blue-50/40">

                                    <p class="text-sm font-semibold text-slate-800">
                                        {{ $discussion['title'] }}
                                    </p>

                                    <div class="mt-2 flex items-center gap-3 text-xs text-slate-400">

                                        <span>
                                            💬 {{ $discussion['reply'] }}
                                        </span>

                                        <span>
                                            •
                                        </span>

                                        <span>
                                            Hari ini
                                        </span>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                    {{-- Floating Badge --}}
                    <div class="absolute -bottom-5 -left-5 rounded-2xl border border-slate-100 bg-white p-4 shadow-xl">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                ✓
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

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                Satu platform untuk berkembang
            </h2>

            <p class="mt-4 text-slate-500">
                Mulai dari berdiskusi hingga mendapatkan bantuan langsung
                untuk bisnis Anda.
            </p>

        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">

            {{-- Forum --}}
            <a
                href="/forum"
                class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-blue-200 hover:shadow-xl"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-2xl">
                    💬
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Forum
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-500">
                    Tempat berbagi pengalaman, bertanya, dan menemukan
                    solusi dari sesama pemilik usaha.
                </p>

                <div class="mt-6 text-sm font-bold text-blue-600">
                    Jelajahi Forum →
                </div>

            </a>

            {{-- Seminar --}}
            <a
                href="/seminar"
                class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-2xl">
                    🎓
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Seminar
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-500">
                    Ikuti seminar dan event bisnis bersama praktisi
                    dan pembicara berpengalaman.
                </p>

                <div class="mt-6 text-sm font-bold text-emerald-600">
                    Lihat Seminar →
                </div>

            </a>

            {{-- Consultation --}}
            <a
                href="/konsultasi"
                class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-blue-200 hover:shadow-xl"
            >

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-2xl">
                    💼
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Konsultasi Bisnis
                </h3>

                <p class="mt-3 text-sm leading-7 text-slate-500">
                    Dapatkan bantuan yang lebih personal untuk
                    menghadapi tantangan bisnis Anda.
                </p>

                <div class="mt-6 text-sm font-bold text-blue-600">
                    Konsultasi Sekarang →
                </div>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     FORUM PREVIEW
========================================================= --}}

<section id="forum" class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

            <div>

                <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                    Forum Juragan
                </span>

                <h2 class="mt-2 text-3xl font-bold text-slate-900">
                    Diskusi terbaru
                </h2>

                <p class="mt-3 text-slate-500">
                    Insight dan pengalaman terbaru dari komunitas.
                </p>

            </div>

            <a
                href="/forum"
                class="text-sm font-bold text-blue-600 hover:text-blue-700"
            >
                Lihat semua →
            </a>

        </div>

        <div class="mt-10 grid gap-5 lg:grid-cols-3">

            @foreach([
                ['category' => 'Manajemen', 'title' => 'Bagaimana cara membangun tim yang solid?', 'comments' => 24],
                ['category' => 'Produktivitas', 'title' => 'Tips meningkatkan produktivitas karyawan', 'comments' => 18],
                ['category' => 'SOP Bisnis', 'title' => 'Apa saja SOP dasar yang wajib dimiliki?', 'comments' => 12],
            ] as $thread)

                <article class="rounded-2xl border border-slate-200 bg-white p-6 transition hover:-translate-y-1 hover:border-blue-100 hover:shadow-lg">

                    <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-600">
                        {{ $thread['category'] }}
                    </span>

                    <h3 class="mt-5 text-lg font-bold leading-7 text-slate-900">
                        {{ $thread['title'] }}
                    </h3>

                    <div class="mt-6 flex items-center justify-between text-xs text-slate-400">

                        <span>
                            Oleh Juragan
                        </span>

                        <span>
                            💬 {{ $thread['comments'] }}
                        </span>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     SEMINAR
========================================================= --}}

<section id="seminar" class="bg-slate-50 py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

            <div>

                <span class="text-sm font-bold uppercase tracking-widest text-emerald-600">
                    Upcoming Event
                </span>

                <h2 class="mt-2 text-3xl font-bold text-slate-900">
                    Seminar mendatang
                </h2>

            </div>

            <a
                href="/seminar"
                class="text-sm font-bold text-emerald-600 hover:text-emerald-700"
            >
                Lihat semua →
            </a>

        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach([
                ['date' => '15', 'month' => 'SEP', 'title' => 'Leadership untuk Pemilik Bisnis', 'speaker' => 'Business Practitioner'],
                ['date' => '22', 'month' => 'SEP', 'title' => 'Strategi Membangun Tim Produktif', 'speaker' => 'HR Consultant'],
                ['date' => '05', 'month' => 'OKT', 'title' => 'Mengembangkan Bisnis di Era Digital', 'speaker' => 'Business Mentor'],
            ] as $seminar)

                <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl">

                    <div class="h-40 bg-gradient-to-br from-blue-600 to-blue-800 p-6 text-white">

                        <div class="flex items-start justify-between">

                            <div class="rounded-xl bg-white/15 px-3 py-2 text-center backdrop-blur">

                                <p class="text-2xl font-bold">
                                    {{ $seminar['date'] }}
                                </p>

                                <p class="text-[10px] font-bold">
                                    {{ $seminar['month'] }}
                                </p>

                            </div>

                            <span class="rounded-full bg-emerald-400 px-3 py-1 text-xs font-bold text-slate-900">
                                Open
                            </span>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-lg font-bold leading-7 text-slate-900">
                            {{ $seminar['title'] }}
                        </h3>

                        <p class="mt-3 text-sm text-slate-500">
                            🎤 {{ $seminar['speaker'] }}
                        </p>

                        <a
                            href="/seminar"
                            class="mt-6 block rounded-xl bg-slate-50 py-3 text-center text-sm font-bold text-blue-600 transition hover:bg-blue-50"
                        >
                            Lihat Detail
                        </a>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     ABOUT
========================================================= --}}

<section id="tentang" class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            <div>

                <span class="text-sm font-bold uppercase tracking-widest text-blue-600">
                    Tentang Forum Juragan
                </span>

                <h2 class="mt-3 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">
                    Karena setiap juragan punya cerita untuk dibagikan.
                </h2>

                <p class="mt-5 leading-8 text-slate-500">
                    Forum Juragan hadir sebagai ruang bagi pemilik usaha
                    untuk saling belajar, berbagi pengalaman, dan
                    menemukan solusi dari tantangan bisnis sehari-hari.
                </p>

                <div class="mt-8 space-y-4">

                    <div class="flex gap-4">

                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                            ✓
                        </div>

                        <div>
                            <h3 class="font-bold text-slate-900">
                                Belajar bersama
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Insight nyata dari pengalaman para pelaku usaha.
                            </p>
                        </div>

                    </div>

                    <div class="flex gap-4">

                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                            ✓
                        </div>

                        <div>
                            <h3 class="font-bold text-slate-900">
                                Bangun networking
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Terhubung dengan pemilik bisnis lainnya.
                            </p>
                        </div>

                    </div>

                    <div class="flex gap-4">

                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                            ✓
                        </div>

                        <div>
                            <h3 class="font-bold text-slate-900">
                                Dapatkan solusi
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Konsultasikan masalah bisnis dengan lebih terarah.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="rounded-3xl bg-slate-50 p-8">

                <div class="grid grid-cols-2 gap-4">

                    <div class="rounded-2xl bg-white p-6 shadow-sm">
                        <p class="text-3xl font-bold text-blue-600">1K+</p>
                        <p class="mt-2 text-sm text-slate-500">Anggota</p>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm">
                        <p class="text-3xl font-bold text-emerald-500">500+</p>
                        <p class="mt-2 text-sm text-slate-500">Diskusi</p>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm">
                        <p class="text-3xl font-bold text-blue-600">50+</p>
                        <p class="mt-2 text-sm text-slate-500">Seminar</p>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm">
                        <p class="text-3xl font-bold text-emerald-500">100+</p>
                        <p class="mt-2 text-sm text-slate-500">Konsultasi</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CONSULTATION CTA
========================================================= --}}

<section id="konsultasi" class="bg-blue-600 py-20">

    <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">

        <span class="text-sm font-bold uppercase tracking-widest text-emerald-300">
            Butuh bantuan lebih serius?
        </span>

        <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
            Jangan hadapi tantangan bisnis sendirian.
        </h2>

        <p class="mx-auto mt-5 max-w-2xl leading-7 text-blue-100">
            Dapatkan perspektif dan solusi yang lebih terarah
            melalui layanan konsultasi bisnis kami.
        </p>

        <a
            href="/konsultasi"
            class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-7 py-3.5 text-sm font-bold text-blue-600 shadow-xl transition hover:-translate-y-1 hover:bg-emerald-50"
        >
            Konsultasi Sekarang

            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13 7l5 5m0 0-5 5m5-5H6"
                />
            </svg>

        </a>

    </div>

</section>

@endsection