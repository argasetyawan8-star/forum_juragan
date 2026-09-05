@extends('admin.layouts.app')

@section('content')

<div class="space-y-8">

    {{-- =====================================================
         PAGE HEADER
    ====================================================== --}}
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">

        <div>
            <p class="text-sm font-medium text-slate-500">
                Sabtu, 5 September 2026
            </p>

            <h2 class="mt-1 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Selamat datang, Administrator 👋
            </h2>

            <p class="mt-2 text-sm text-slate-500">
                Berikut ringkasan aktivitas Forum Juragan hari ini.
            </p>
        </div>

        <a
            href="#"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700"
        >
            <svg
                class="h-5 w-5"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 5v14M5 12h14"
                />
            </svg>

            Tambah Seminar
        </a>

    </div>


    {{-- =====================================================
         STATISTICS
    ====================================================== --}}
    <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Users --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Users
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        1,248
                    </p>

                    <p class="mt-2 text-xs font-medium text-emerald-600">
                        ↑ 12.5% bulan ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"
                        />
                        <circle cx="9" cy="7" r="4"/>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M23 21v-2a4 4 0 00-3-3.87"
                        />
                    </svg>
                </div>

            </div>

        </div>


        {{-- Threads --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Diskusi
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        3,482
                    </p>

                    <p class="mt-2 text-xs font-medium text-emerald-600">
                        ↑ 8.4% bulan ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 11.5a8 8 0 01-8 8H7l-4 2 1.5-4A8 8 0 1112 3.5a8 8 0 019 8z"
                        />
                    </svg>
                </div>

            </div>

        </div>


        {{-- Seminar --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Seminar Aktif
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        18
                    </p>

                    <p class="mt-2 text-xs font-medium text-blue-600">
                        6 seminar bulan ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <rect x="3" y="4" width="18" height="17" rx="2"/>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16 2v4M8 2v4M3 10h18"
                        />
                    </svg>
                </div>

            </div>

        </div>


        {{-- Consultation --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Konsultasi Masuk
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        27
                    </p>

                    <p class="mt-2 text-xs font-medium text-amber-600">
                        8 perlu ditindaklanjuti
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"
                        />
                    </svg>
                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         MAIN GRID
    ====================================================== --}}
    <div class="grid gap-6 xl:grid-cols-3">

        {{-- Activity --}}
        <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                <div>
                    <h3 class="font-bold text-slate-900">
                        Aktivitas Forum
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Aktivitas komunitas dalam 7 hari terakhir.
                    </p>
                </div>

                <button class="text-sm font-semibold text-blue-600 hover:text-blue-700">
                    Lihat Detail
                </button>

            </div>

            <div class="p-6">

                <div class="flex h-64 items-end gap-3">

                    @php
                        $activity = [42, 58, 47, 73, 64, 88, 76, 94, 82, 96, 78, 90];
                    @endphp

                    @foreach ($activity as $value)

                        <div class="group flex h-full flex-1 items-end">

                            <div
                                class="w-full rounded-t-lg bg-blue-100 transition group-hover:bg-blue-600"
                                style="height: {{ $value }}%;"
                            ></div>

                        </div>

                    @endforeach

                </div>

                <div class="mt-4 flex justify-between text-xs text-slate-400">
                    <span>Sen</span>
                    <span>Sel</span>
                    <span>Rab</span>
                    <span>Kam</span>
                    <span>Jum</span>
                    <span>Sab</span>
                    <span>Min</span>
                </div>

            </div>

        </div>


        {{-- Quick Actions --}}
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="border-b border-slate-100 px-6 py-5">

                <h3 class="font-bold text-slate-900">
                    Quick Actions
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Akses cepat menu admin.
                </p>

            </div>

            <div class="space-y-3 p-6">

                @php
                    $actions = [
                        ['title' => 'Tambah Seminar', 'desc' => 'Buat event baru', 'icon' => '+'],
                        ['title' => 'Moderasi Diskusi', 'desc' => 'Periksa konten forum', 'icon' => '✓'],
                        ['title' => 'Lihat Konsultasi', 'desc' => 'Kelola leads baru', 'icon' => '→'],
                        ['title' => 'Kelola Users', 'desc' => 'Lihat anggota', 'icon' => '•'],
                    ];
                @endphp

                @foreach ($actions as $action)

                    <a
                        href="#"
                        class="group flex items-center gap-4 rounded-xl border border-slate-100 p-4 transition hover:border-blue-200 hover:bg-blue-50"
                    >

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-600 transition group-hover:bg-blue-600 group-hover:text-white">
                            {{ $action['icon'] }}
                        </div>

                        <div class="min-w-0 flex-1">

                            <p class="text-sm font-semibold text-slate-900">
                                {{ $action['title'] }}
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                {{ $action['desc'] }}
                            </p>

                        </div>

                        <span class="text-slate-300 transition group-hover:translate-x-1 group-hover:text-blue-600">
                            →
                        </span>

                    </a>

                @endforeach

            </div>

        </div>

    </div>


    {{-- =====================================================
         BOTTOM GRID
    ====================================================== --}}
    <div class="grid gap-6 lg:grid-cols-2">


        {{-- Latest Threads --}}
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                <div>
                    <h3 class="font-bold text-slate-900">
                        Diskusi Terbaru
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Diskusi yang baru dibuat.
                    </p>
                </div>

                <a
                    href="#"
                    class="text-sm font-semibold text-blue-600"
                >
                    Lihat Semua
                </a>

            </div>

            <div class="divide-y divide-slate-100">

                @php
                    $threads = [
                        [
                            'title' => 'Bagaimana cara meningkatkan produktivitas tim?',
                            'user' => 'Arga Setyawan',
                            'category' => 'Produktivitas Bisnis',
                            'replies' => 8,
                        ],
                        [
                            'title' => 'Tips menghadapi karyawan yang kurang disiplin',
                            'user' => 'Dimas Pratama',
                            'category' => 'Manajemen Karyawan',
                            'replies' => 5,
                        ],
                        [
                            'title' => 'Apakah bisnis kecil perlu memiliki SOP?',
                            'user' => 'Siti Rahma',
                            'category' => 'SOP & Operasional',
                            'replies' => 11,
                        ],
                    ];
                @endphp

                @foreach ($threads as $thread)

                    <div class="flex gap-4 p-5">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-700">
                            {{ substr($thread['user'], 0, 1) }}
                        </div>

                        <div class="min-w-0 flex-1">

                            <p class="truncate text-sm font-semibold text-slate-900">
                                {{ $thread['title'] }}
                            </p>

                            <div class="mt-2 flex flex-wrap items-center gap-2 text-xs text-slate-500">

                                <span>
                                    {{ $thread['user'] }}
                                </span>

                                <span>•</span>

                                <span class="text-blue-600">
                                    {{ $thread['category'] }}
                                </span>

                                <span>•</span>

                                <span>
                                    {{ $thread['replies'] }} balasan
                                </span>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>


        {{-- Seminar --}}
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                <div>
                    <h3 class="font-bold text-slate-900">
                        Seminar Terdekat
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Event yang akan datang.
                    </p>
                </div>

                <a
                    href="#"
                    class="text-sm font-semibold text-blue-600"
                >
                    Lihat Semua
                </a>

            </div>

            <div class="divide-y divide-slate-100">

                @php
                    $seminars = [
                        [
                            'title' => 'Leadership untuk Pemilik Bisnis',
                            'date' => '20 Sep 2026',
                            'participants' => 87,
                        ],
                        [
                            'title' => 'Strategi Mengelola Karyawan Secara Efektif',
                            'date' => '4 Okt 2026',
                            'participants' => 64,
                        ],
                        [
                            'title' => 'Strategi Marketing untuk UMKM',
                            'date' => '18 Okt 2026',
                            'participants' => 42,
                        ],
                    ];
                @endphp

                @foreach ($seminars as $seminar)

                    <div class="flex items-center gap-4 p-5">

                        <div class="flex h-12 w-12 shrink-0 flex-col items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                            <span class="text-[10px] font-bold uppercase">
                                Sep
                            </span>

                            <span class="text-lg font-bold leading-none">
                                20
                            </span>

                        </div>

                        <div class="min-w-0 flex-1">

                            <p class="truncate text-sm font-semibold text-slate-900">
                                {{ $seminar['title'] }}
                            </p>

                            <div class="mt-2 flex items-center gap-2 text-xs text-slate-500">

                                <span>
                                    {{ $seminar['date'] }}
                                </span>

                                <span>•</span>

                                <span>
                                    {{ $seminar['participants'] }} peserta
                                </span>

                            </div>

                        </div>

                        <span class="hidden rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-600 sm:inline-flex">
                            Aktif
                        </span>

                    </div>

                @endforeach

            </div>

        </div>

    </div>


    {{-- =====================================================
         CONSULTATION ALERT
    ====================================================== --}}
    <div class="rounded-2xl border border-blue-100 bg-gradient-to-r from-blue-600 to-indigo-700 p-6 shadow-xl shadow-blue-900/10 sm:p-8">

        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

            <div class="flex items-start gap-4">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/10 text-white">

                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"
                        />
                    </svg>

                </div>

                <div>

                    <h3 class="font-bold text-white">
                        8 konsultasi membutuhkan tindak lanjut
                    </h3>

                    <p class="mt-1 text-sm text-blue-100">
                        Ada beberapa consultation lead baru yang belum diproses.
                    </p>

                </div>

            </div>

            <a
                href="#"
                class="inline-flex shrink-0 items-center justify-center rounded-xl bg-white px-5 py-3 text-sm font-semibold text-blue-700 transition hover:bg-blue-50"
            >
                Kelola Konsultasi
            </a>

        </div>

    </div>

</div>

@endsection