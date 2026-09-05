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

                <span class="text-slate-900">Categories</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Kategori Forum
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola kategori yang digunakan dalam forum diskusi.
            </p>
        </div>

        <button
            type="button"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 hover:shadow-md"
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-width="2" d="M12 5v14"/>
                <path stroke-linecap="round" stroke-width="2" d="M5 12h14"/>
            </svg>

            Tambah Kategori
        </button>
    </div>


    {{-- STATISTICS --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Kategori
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        7
                    </p>

                    <p class="mt-2 text-xs font-medium text-blue-600">
                        Kategori aktif
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h10"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Threads --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Diskusi
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        3,482
                    </p>

                    <p class="mt-2 text-xs font-medium text-emerald-600">
                        +12% bulan ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2"
                            d="M8 10h8M8 14h5"/>
                        <path stroke-linecap="round" stroke-width="2"
                            d="M19 11.5a7 7 0 0 1-7 7 7.5 7.5 0 0 1-3.5-.85L4 19l1.35-4.5A7.5 7.5 0 0 1 5 11.5a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Most Active --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Kategori Teraktif
                    </p>

                    <p class="mt-2 text-xl font-bold text-slate-900">
                        Manajemen Karyawan
                    </p>

                    <p class="mt-2 text-xs font-medium text-slate-500">
                        864 diskusi
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m12 3 2.4 5.1 5.6.8-4 4 1 5.6-5-2.7-5 2.7 1-5.6-4-4 5.6-.8L12 3Z"/>
                    </svg>
                </div>

            </div>
        </div>

    </div>


    {{-- CATEGORY LIST --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- TOOLBAR --}}
        <div class="border-b border-slate-200 p-4 sm:p-5">

            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

                <div>
                    <h2 class="font-semibold text-slate-900">
                        Semua Kategori
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Daftar kategori forum yang tersedia.
                    </p>
                </div>

                <div class="relative w-full lg:max-w-sm">

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
                        placeholder="Cari kategori..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    >

                </div>

            </div>

        </div>


        {{-- CATEGORY CARDS --}}
        @php
            $categories = [
                [
                    'name' => 'Manajemen Karyawan',
                    'slug' => 'manajemen-karyawan',
                    'description' => 'Diskusi seputar pengelolaan, evaluasi, dan pengembangan karyawan.',
                    'threads' => 864,
                    'color' => 'blue',
                ],
                [
                    'name' => 'Rekrutmen',
                    'slug' => 'rekrutmen',
                    'description' => 'Berbagi pengalaman dan strategi mencari kandidat terbaik.',
                    'threads' => 592,
                    'color' => 'violet',
                ],
                [
                    'name' => 'Payroll & Gaji',
                    'slug' => 'payroll-gaji',
                    'description' => 'Diskusi mengenai penggajian, payroll, tunjangan, dan benefit.',
                    'threads' => 421,
                    'color' => 'emerald',
                ],
                [
                    'name' => 'SOP & Operasional',
                    'slug' => 'sop-operasional',
                    'description' => 'Membangun sistem kerja dan operasional bisnis yang lebih rapi.',
                    'threads' => 507,
                    'color' => 'amber',
                ],
                [
                    'name' => 'Kepemimpinan',
                    'slug' => 'kepemimpinan',
                    'description' => 'Belajar menjadi pemimpin dan membangun tim yang solid.',
                    'threads' => 386,
                    'color' => 'rose',
                ],
                [
                    'name' => 'Produktivitas Bisnis',
                    'slug' => 'produktivitas-bisnis',
                    'description' => 'Strategi meningkatkan produktivitas dan efisiensi bisnis.',
                    'threads' => 438,
                    'color' => 'cyan',
                ],
                [
                    'name' => 'Motivasi & Pengembangan',
                    'slug' => 'motivasi-pengembangan',
                    'description' => 'Pengembangan diri, motivasi, dan pertumbuhan pemilik bisnis.',
                    'threads' => 274,
                    'color' => 'indigo',
                ],
            ];
        @endphp


        <div class="divide-y divide-slate-100">

            @foreach ($categories as $index => $category)

                <div class="group p-5 transition hover:bg-slate-50 sm:p-6">

                    <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

                        {{-- LEFT --}}
                        <div class="flex min-w-0 items-start gap-4">

                            {{-- Number --}}
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-sm font-bold text-blue-600">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>


                            {{-- Info --}}
                            <div class="min-w-0">

                                <div class="flex flex-wrap items-center gap-2">

                                    <h3 class="font-semibold text-slate-900">
                                        {{ $category['name'] }}
                                    </h3>

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        Aktif
                                    </span>

                                </div>

                                <p class="mt-1 max-w-2xl text-sm leading-6 text-slate-500">
                                    {{ $category['description'] }}
                                </p>

                                <div class="mt-3 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs text-slate-400">

                                    <span>
                                        Slug:
                                        <span class="font-medium text-slate-500">
                                            {{ $category['slug'] }}
                                        </span>
                                    </span>

                                    <span>
                                        {{ number_format($category['threads']) }} diskusi
                                    </span>

                                </div>

                            </div>

                        </div>


                        {{-- RIGHT --}}
                        <div class="flex shrink-0 items-center gap-2 lg:ml-6">

                            {{-- View --}}
                            <button
                                type="button"
                                title="Lihat kategori"
                                class="rounded-lg p-2.5 text-slate-500 transition hover:bg-blue-50 hover:text-blue-600"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-width="2"
                                        d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"/>
                                    <circle cx="12" cy="12" r="2.5" stroke-width="2"/>
                                </svg>
                            </button>


                            {{-- Edit --}}
                            <button
                                type="button"
                                title="Edit kategori"
                                class="rounded-lg p-2.5 text-slate-500 transition hover:bg-amber-50 hover:text-amber-600"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-width="2"
                                        d="m12 20 8.5-8.5a2.12 2.12 0 0 0-3-3L9 17v3h3Z"/>
                                    <path stroke-linecap="round" stroke-width="2"
                                        d="M15.5 9.5 18 12"/>
                                </svg>
                            </button>


                            {{-- Delete --}}
                            <button
                                type="button"
                                title="Hapus kategori"
                                class="rounded-lg p-2.5 text-slate-500 transition hover:bg-red-50 hover:text-red-600"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-width="2"
                                        d="M4 7h16M10 11v6m4-6v6M9 7V4h6v3m-8 0 1 13h8l1-13"/>
                                </svg>
                            </button>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>


        {{-- FOOTER --}}
        <div class="flex flex-col gap-3 border-t border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">

            <p class="text-sm text-slate-500">
                Menampilkan
                <span class="font-semibold text-slate-700">7</span>
                kategori
            </p>

            <span class="text-xs text-slate-400">
                Data sementara
            </span>

        </div>

    </div>


    {{-- INFO CARD --}}
    <div class="rounded-2xl border border-blue-100 bg-blue-50 p-5">

        <div class="flex items-start gap-3">

            <div class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-blue-600">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2"
                        d="M12 8h.01M11 12h1v4h1"/>
                    <circle cx="12" cy="12" r="9" stroke-width="2"/>
                </svg>
            </div>

            <div>
                <h3 class="font-semibold text-blue-900">
                    Tentang kategori forum
                </h3>

                <p class="mt-1 text-sm leading-6 text-blue-800">
                    Kategori membantu mengelompokkan diskusi berdasarkan topik.
                    Setiap kategori nantinya dapat memiliki banyak thread dan
                    dapat dikelola langsung dari panel admin.
                </p>
            </div>

        </div>

    </div>

</div>

@endsection