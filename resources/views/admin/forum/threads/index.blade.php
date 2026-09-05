@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- HEADER --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <span>Admin</span>

                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 18 6-6-6-6"/>
                </svg>

                <span>Forum</span>

                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 18 6-6-6-6"/>
                </svg>

                <span class="text-slate-900">Threads</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Kelola Threads
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola seluruh diskusi yang dibuat oleh pengguna Forum Juragan.
            </p>
        </div>

        <button
            type="button"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 hover:shadow-md"
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2"
                    d="M12 5v14"/>
                <path stroke-linecap="round" stroke-width="2"
                    d="M5 12h14"/>
            </svg>

            Buat Diskusi
        </button>

    </div>


    {{-- STAT CARDS --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Threads
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        3,482
                    </p>

                    <p class="mt-2 text-xs font-medium text-blue-600">
                        Semua diskusi
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2"
                            d="M8 10h8M8 14h5"/>
                        <path stroke-linecap="round" stroke-width="2"
                            d="M19 11.5a7 7 0 0 1-7 7 7.5 7.5 0 0 1-3.5-.85L4 19l1.35-4.5A7.5 7.5 0 0 1 5 11.5a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Published --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Published
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        3,214
                    </p>

                    <p class="mt-2 text-xs font-medium text-emerald-600">
                        92.3% dari total
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2"
                            d="m5 12 4 4L19 6"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Pending --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Menunggu Moderasi
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        42
                    </p>

                    <p class="mt-2 text-xs font-medium text-amber-600">
                        Perlu ditinjau
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2"
                            d="M12 8v4l2.5 2.5"/>
                        <circle cx="12" cy="12" r="9" stroke-width="2"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Pinned --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Thread Pinned
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        18
                    </p>

                    <p class="mt-2 text-xs font-medium text-violet-600">
                        Diskusi prioritas
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2"
                            d="m12 17 5 3-1.5-5.5L20 11l-5.5-.5L12 5l-2.5 5.5L4 11l4.5 3.5L7 20l5-3Z"/>
                    </svg>
                </div>

            </div>
        </div>

    </div>


    {{-- MAIN CARD --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- TOOLBAR --}}
        <div class="border-b border-slate-200 p-4 sm:p-5">

            <div class="flex flex-col gap-4">

                {{-- Search --}}
                <div class="relative w-full">

                    <svg
                        class="pointer-events-none absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-width="2"
                            d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>

                    <input
                        type="text"
                        placeholder="Cari judul diskusi atau nama user..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    >

                </div>


                {{-- Filters --}}
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">

                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Semua Kategori</option>
                        <option>Manajemen Karyawan</option>
                        <option>Rekrutmen</option>
                        <option>Payroll & Gaji</option>
                        <option>SOP & Operasional</option>
                        <option>Kepemimpinan</option>
                        <option>Produktivitas Bisnis</option>
                        <option>Motivasi & Pengembangan</option>
                    </select>


                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Semua Status</option>
                        <option>Published</option>
                        <option>Pending</option>
                        <option>Archived</option>
                    </select>


                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Semua Thread</option>
                        <option>Pinned</option>
                        <option>Normal</option>
                    </select>


                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Terbaru</option>
                        <option>Terlama</option>
                        <option>Paling Banyak Dilihat</option>
                        <option>Paling Banyak Dibalas</option>
                    </select>

                </div>

            </div>

        </div>


        {{-- THREAD DATA --}}
        @php
            $threads = [
                [
                    'title' => 'Bagaimana cara mengatasi karyawan yang sering terlambat?',
                    'category' => 'Manajemen Karyawan',
                    'author' => 'Budi Santoso',
                    'initial' => 'B',
                    'replies' => 24,
                    'views' => 842,
                    'status' => 'Published',
                    'pinned' => true,
                    'date' => '5 Sep 2026',
                ],
                [
                    'title' => 'Tips mencari kandidat yang cocok untuk bisnis kecil',
                    'category' => 'Rekrutmen',
                    'author' => 'Siti Rahma',
                    'initial' => 'S',
                    'replies' => 18,
                    'views' => 621,
                    'status' => 'Published',
                    'pinned' => false,
                    'date' => '4 Sep 2026',
                ],
                [
                    'title' => 'Sistem payroll sederhana untuk UMKM',
                    'category' => 'Payroll & Gaji',
                    'author' => 'Andi Pratama',
                    'initial' => 'A',
                    'replies' => 31,
                    'views' => 1_204,
                    'status' => 'Published',
                    'pinned' => false,
                    'date' => '3 Sep 2026',
                ],
                [
                    'title' => 'Apakah setiap bisnis wajib memiliki SOP?',
                    'category' => 'SOP & Operasional',
                    'author' => 'Dewi Lestari',
                    'initial' => 'D',
                    'replies' => 12,
                    'views' => 456,
                    'status' => 'Pending',
                    'pinned' => false,
                    'date' => '3 Sep 2026',
                ],
                [
                    'title' => 'Bagaimana membangun leadership yang kuat?',
                    'category' => 'Kepemimpinan',
                    'author' => 'Rizky Maulana',
                    'initial' => 'R',
                    'replies' => 27,
                    'views' => 936,
                    'status' => 'Published',
                    'pinned' => true,
                    'date' => '2 Sep 2026',
                ],
                [
                    'title' => 'Cara meningkatkan produktivitas tim tanpa menambah jam kerja',
                    'category' => 'Produktivitas Bisnis',
                    'author' => 'Fajar Hidayat',
                    'initial' => 'F',
                    'replies' => 16,
                    'views' => 713,
                    'status' => 'Published',
                    'pinned' => false,
                    'date' => '1 Sep 2026',
                ],
            ];
        @endphp


        {{-- DESKTOP TABLE --}}
        <div class="hidden overflow-x-auto lg:block">

            <table class="w-full text-left">

                <thead class="border-b border-slate-200 bg-slate-50">

                    <tr>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Diskusi
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Kategori
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Statistik
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Tanggal
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    @foreach ($threads as $thread)

                        <tr class="transition hover:bg-slate-50">

                            {{-- Discussion --}}
                            <td class="max-w-md px-6 py-5">

                                <div class="flex items-start gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-width="2"
                                                d="M8 10h8M8 14h5"/>
                                            <path stroke-linecap="round" stroke-width="2"
                                                d="M19 11.5a7 7 0 0 1-7 7 7.5 7.5 0 0 1-3.5-.85L4 19l1.35-4.5A7.5 7.5 0 0 1 5 11.5a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>

                                    <div class="min-w-0">

                                        <div class="flex items-start gap-2">

                                            <h3 class="font-semibold leading-5 text-slate-900">
                                                {{ $thread['title'] }}
                                            </h3>

                                            @if ($thread['pinned'])
                                                <svg
                                                    class="mt-0.5 h-4 w-4 shrink-0 text-violet-500"
                                                    fill="currentColor"
                                                    viewBox="0 0 24 24"
                                                    title="Pinned"
                                                >
                                                    <path d="m12 17 5 3-1.5-5.5L20 11l-5.5-.5L12 5l-2.5 5.5L4 11l4.5 3.5L7 20l5-3Z"/>
                                                </svg>
                                            @endif

                                        </div>

                                        <div class="mt-2 flex items-center gap-2">

                                            <div class="flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 text-[10px] font-bold text-blue-700">
                                                {{ $thread['initial'] }}
                                            </div>

                                            <span class="text-xs text-slate-500">
                                                {{ $thread['author'] }}
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </td>


                            {{-- Category --}}
                            <td class="px-6 py-5">

                                <span class="inline-flex whitespace-nowrap rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                    {{ $thread['category'] }}
                                </span>

                            </td>


                            {{-- Statistics --}}
                            <td class="px-6 py-5">

                                <div class="space-y-1 text-xs text-slate-500">

                                    <div class="flex items-center gap-1.5">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke-linecap="round"
                                                d="M8 10h8M8 14h5"/>
                                            <path stroke-width="2" stroke-linecap="round"
                                                d="M19 11.5a7 7 0 0 1-7 7 7.5 7.5 0 0 1-3.5-.85L4 19l1.35-4.5A7.5 7.5 0 0 1 5 11.5a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                        {{ $thread['replies'] }} balasan
                                    </div>

                                    <div class="flex items-center gap-1.5">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke-linecap="round"
                                                d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"/>
                                            <circle cx="12" cy="12" r="2.5" stroke-width="2"/>
                                        </svg>
                                        {{ number_format($thread['views']) }} views
                                    </div>

                                </div>

                            </td>


                            {{-- Status --}}
                            <td class="px-6 py-5">

                                @if ($thread['status'] === 'Published')

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        Published
                                    </span>

                                @else

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-semibold text-amber-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                        Pending
                                    </span>

                                @endif

                            </td>


                            {{-- Date --}}
                            <td class="whitespace-nowrap px-6 py-5 text-sm text-slate-500">
                                {{ $thread['date'] }}
                            </td>


                            {{-- Actions --}}
                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-1">

                                    <button
                                        type="button"
                                        title="Lihat"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-blue-50 hover:text-blue-600"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="2"
                                                d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"/>
                                            <circle cx="12" cy="12" r="2.5" stroke-width="2"/>
                                        </svg>
                                    </button>

                                    <button
                                        type="button"
                                        title="Edit"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-amber-50 hover:text-amber-600"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="2"
                                                d="m12 20 8.5-8.5a2.12 2.12 0 0 0-3-3L9 17v3h3Z"/>
                                            <path stroke-width="2" d="M15.5 9.5 18 12"/>
                                        </svg>
                                    </button>

                                    <button
                                        type="button"
                                        title="Hapus"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-red-50 hover:text-red-600"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="2"
                                                d="M4 7h16M10 11v6m4-6v6M9 7V4h6v3m-8 0 1 13h8l1-13"/>
                                        </svg>
                                    </button>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>


        {{-- MOBILE CARDS --}}
        <div class="divide-y divide-slate-100 lg:hidden">

            @foreach ($threads as $thread)

                <div class="p-5">

                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2"
                                    d="M8 10h8M8 14h5"/>
                                <path stroke-width="2"
                                    d="M19 11.5a7 7 0 0 1-7 7 7.5 7.5 0 0 1-3.5-.85L4 19l1.35-4.5A7.5 7.5 0 0 1 5 11.5a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>

                        <div class="min-w-0 flex-1">

                            <div class="flex items-start justify-between gap-3">

                                <h3 class="font-semibold leading-5 text-slate-900">
                                    {{ $thread['title'] }}
                                </h3>

                                @if ($thread['pinned'])
                                    <svg
                                        class="h-4 w-4 shrink-0 text-violet-500"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path d="m12 17 5 3-1.5-5.5L20 11l-5.5-.5L12 5l-2.5 5.5L4 11l4.5 3.5L7 20l5-3Z"/>
                                    </svg>
                                @endif

                            </div>

                            <p class="mt-2 text-xs text-slate-500">
                                {{ $thread['author'] }}
                            </p>

                            <div class="mt-3 flex flex-wrap items-center gap-2">

                                <span class="rounded-lg bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-600">
                                    {{ $thread['category'] }}
                                </span>

                                @if ($thread['status'] === 'Published')
                                    <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                        Published
                                    </span>
                                @else
                                    <span class="rounded-full bg-amber-50 px-2.5 py-1 text-xs font-semibold text-amber-700">
                                        Pending
                                    </span>
                                @endif

                            </div>

                            <div class="mt-3 flex flex-wrap gap-4 text-xs text-slate-400">

                                <span>
                                    {{ $thread['replies'] }} balasan
                                </span>

                                <span>
                                    {{ number_format($thread['views']) }} views
                                </span>

                                <span>
                                    {{ $thread['date'] }}
                                </span>

                            </div>

                        </div>

                    </div>


                    <div class="mt-4 flex gap-2 border-t border-slate-100 pt-3">

                        <button class="flex-1 rounded-lg bg-slate-50 py-2 text-sm font-medium text-slate-600 hover:bg-blue-50 hover:text-blue-600">
                            Lihat
                        </button>

                        <button class="flex-1 rounded-lg bg-slate-50 py-2 text-sm font-medium text-slate-600 hover:bg-amber-50 hover:text-amber-600">
                            Edit
                        </button>

                        <button class="rounded-lg bg-slate-50 px-4 py-2 text-sm font-medium text-slate-500 hover:bg-red-50 hover:text-red-600">
                            Hapus
                        </button>

                    </div>

                </div>

            @endforeach

        </div>


        {{-- PAGINATION --}}
        <div class="flex flex-col gap-3 border-t border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">

            <p class="text-sm text-slate-500">
                Menampilkan
                <span class="font-semibold text-slate-700">1–6</span>
                dari
                <span class="font-semibold text-slate-700">3.482</span>
                threads
            </p>

            <div class="flex items-center gap-1">

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-400">
                    ‹
                </button>

                <button class="rounded-lg bg-blue-600 px-3 py-2 text-sm font-semibold text-white">
                    1
                </button>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                    2
                </button>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                    3
                </button>

                <span class="px-2 text-slate-400">
                    ...
                </span>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                    581
                </button>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                    ›
                </button>

            </div>

        </div>

    </div>


    {{-- MODERATION INFO --}}
    <div class="rounded-2xl border border-amber-100 bg-amber-50 p-5">

        <div class="flex items-start gap-3">

            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-100 text-amber-600">

                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2"
                        d="M12 8v4l2.5 2.5"/>
                    <circle cx="12" cy="12" r="9" stroke-width="2"/>
                </svg>

            </div>

            <div>

                <h3 class="font-semibold text-amber-900">
                    Moderasi Forum
                </h3>

                <p class="mt-1 text-sm leading-6 text-amber-800">
                    Terdapat
                    <span class="font-semibold">42 thread</span>
                    yang sedang menunggu moderasi.
                    Pastikan setiap diskusi memenuhi aturan komunitas sebelum dipublikasikan.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection