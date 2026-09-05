@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50">

    {{-- =========================================================
        HEADER CATEGORY
    ========================================================== --}}
    <section class="border-b border-slate-200 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">

            {{-- Breadcrumb --}}
            <div class="flex flex-wrap items-center gap-2 text-sm text-slate-500">
                <a href="/" class="transition hover:text-blue-600">
                    Forum Juragan
                </a>

                <span>›</span>

                <span class="font-medium text-slate-900">
                    Manajemen Karyawan
                </span>
            </div>

            <div class="mt-8 flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">

                <div class="max-w-3xl">

                    <div class="flex items-center gap-4">

                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-2xl">
                            👥
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-blue-600">
                                KATEGORI FORUM
                            </p>

                            <h1 class="mt-1 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                                Manajemen Karyawan
                            </h1>
                        </div>

                    </div>

                    <p class="mt-5 leading-7 text-slate-600">
                        Diskusikan cara mengelola karyawan, membangun tim,
                        meningkatkan kinerja, dan menciptakan lingkungan kerja
                        yang lebih baik.
                    </p>

                </div>


                {{-- Create Thread Button --}}
                <a
                    href="#"
                    class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
                >
                    <span class="text-lg leading-none">+</span>
                    Buat Diskusi
                </a>

            </div>

        </div>
    </section>


    {{-- =========================================================
        MAIN CONTENT
    ========================================================== --}}
    <section class="mx-auto max-w-7xl px-6 py-10 lg:px-8">

        <div class="grid gap-8 lg:grid-cols-[1fr_320px]">

            {{-- =================================================
                THREAD LIST
            ================================================== --}}
            <div>

                {{-- Toolbar --}}
                <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div>
                        <h2 class="text-xl font-bold text-slate-900">
                            Diskusi Terbaru
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Temukan diskusi dan pengalaman dari para juragan.
                        </p>
                    </div>

                    {{-- Sort --}}
                    <div class="flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm">
                        <span class="text-slate-500">
                            Urutkan:
                        </span>

                        <button class="font-semibold text-slate-900">
                            Terbaru
                            <span class="ml-1 text-xs">⌄</span>
                        </button>
                    </div>

                </div>


                {{-- Thread Cards --}}
                <div class="space-y-4">

                    {{-- Thread 1 --}}
                    <a
                        href="#"
                        class="group block rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-lg sm:p-6"
                    >

                        <div class="flex gap-4">

                            {{-- Avatar --}}
                            <div class="hidden h-11 w-11 shrink-0 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-700 sm:flex">
                                AR
                            </div>

                            <div class="min-w-0 flex-1">

                                {{-- Meta --}}
                                <div class="flex flex-wrap items-center gap-2 text-xs text-slate-500">
                                    <span class="font-semibold text-slate-700">
                                        Arga Setyawan
                                    </span>

                                    <span>•</span>

                                    <span>
                                        2 jam yang lalu
                                    </span>

                                    <span class="rounded-full bg-emerald-50 px-2.5 py-1 font-medium text-emerald-600">
                                        Diskusi
                                    </span>
                                </div>

                                {{-- Title --}}
                                <h3 class="mt-3 text-lg font-bold leading-7 text-slate-900 transition group-hover:text-blue-600">
                                    Bagaimana cara menghadapi karyawan yang performanya menurun?
                                </h3>

                                {{-- Excerpt --}}
                                <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500">
                                    Saya sedang mengalami kondisi di mana salah satu karyawan
                                    mulai mengalami penurunan performa. Menurut teman-teman,
                                    pendekatan seperti apa yang paling baik dilakukan?
                                </p>

                                {{-- Stats --}}
                                <div class="mt-5 flex flex-wrap items-center gap-5 text-xs font-medium text-slate-500">

                                    <span class="flex items-center gap-1.5">
                                        💬
                                        12 Balasan
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        👁
                                        245 Dilihat
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        ❤️
                                        18
                                    </span>

                                </div>

                            </div>

                            <div class="hidden text-slate-300 transition group-hover:translate-x-1 group-hover:text-blue-500 sm:block">
                                →
                            </div>

                        </div>

                    </a>


                    {{-- Thread 2 --}}
                    <a
                        href="#"
                        class="group block rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-lg sm:p-6"
                    >

                        <div class="flex gap-4">

                            <div class="hidden h-11 w-11 shrink-0 items-center justify-center rounded-full bg-emerald-100 font-bold text-emerald-700 sm:flex">
                                BS
                            </div>

                            <div class="min-w-0 flex-1">

                                <div class="flex flex-wrap items-center gap-2 text-xs text-slate-500">
                                    <span class="font-semibold text-slate-700">
                                        Budi Santoso
                                    </span>

                                    <span>•</span>

                                    <span>
                                        5 jam yang lalu
                                    </span>
                                </div>

                                <h3 class="mt-3 text-lg font-bold leading-7 text-slate-900 transition group-hover:text-blue-600">
                                    Tips membuat SOP untuk bisnis yang baru berkembang
                                </h3>

                                <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500">
                                    Bisnis saya mulai memiliki beberapa karyawan dan
                                    saya ingin mulai membuat SOP agar pekerjaan lebih
                                    terstruktur. Ada tips dari juragan lain?
                                </p>

                                <div class="mt-5 flex flex-wrap items-center gap-5 text-xs font-medium text-slate-500">

                                    <span class="flex items-center gap-1.5">
                                        💬
                                        8 Balasan
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        👁
                                        189 Dilihat
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        ❤️
                                        11
                                    </span>

                                </div>

                            </div>

                            <div class="hidden text-slate-300 transition group-hover:translate-x-1 group-hover:text-blue-500 sm:block">
                                →
                            </div>

                        </div>

                    </a>


                    {{-- Thread 3 --}}
                    <a
                        href="#"
                        class="group block rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-lg sm:p-6"
                    >

                        <div class="flex gap-4">

                            <div class="hidden h-11 w-11 shrink-0 items-center justify-center rounded-full bg-violet-100 font-bold text-violet-700 sm:flex">
                                DN
                            </div>

                            <div class="min-w-0 flex-1">

                                <div class="flex flex-wrap items-center gap-2 text-xs text-slate-500">
                                    <span class="font-semibold text-slate-700">
                                        Deni Nugraha
                                    </span>

                                    <span>•</span>

                                    <span>
                                        Kemarin
                                    </span>
                                </div>

                                <h3 class="mt-3 text-lg font-bold leading-7 text-slate-900 transition group-hover:text-blue-600">
                                    Lebih baik merekrut karyawan berpengalaman atau fresh graduate?
                                </h3>

                                <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500">
                                    Saya sedang membuka beberapa posisi baru untuk bisnis.
                                    Menurut pengalaman juragan di sini, apa kelebihan dan
                                    kekurangan merekrut orang berpengalaman dibandingkan fresh graduate?
                                </p>

                                <div class="mt-5 flex flex-wrap items-center gap-5 text-xs font-medium text-slate-500">

                                    <span class="flex items-center gap-1.5">
                                        💬
                                        21 Balasan
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        👁
                                        342 Dilihat
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        ❤️
                                        27
                                    </span>

                                </div>

                            </div>

                            <div class="hidden text-slate-300 transition group-hover:translate-x-1 group-hover:text-blue-500 sm:block">
                                →
                            </div>

                        </div>

                    </a>


                    {{-- Thread 4 --}}
                    <a
                        href="#"
                        class="group block rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-lg sm:p-6"
                    >

                        <div class="flex gap-4">

                            <div class="hidden h-11 w-11 shrink-0 items-center justify-center rounded-full bg-amber-100 font-bold text-amber-700 sm:flex">
                                RS
                            </div>

                            <div class="min-w-0 flex-1">

                                <div class="flex flex-wrap items-center gap-2 text-xs text-slate-500">
                                    <span class="font-semibold text-slate-700">
                                        Rina Sari
                                    </span>

                                    <span>•</span>

                                    <span>
                                        2 hari yang lalu
                                    </span>
                                </div>

                                <h3 class="mt-3 text-lg font-bold leading-7 text-slate-900 transition group-hover:text-blue-600">
                                    Bagaimana cara membangun budaya kerja yang positif?
                                </h3>

                                <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500">
                                    Selain memberikan gaji yang baik, saya ingin membuat
                                    lingkungan kerja yang membuat karyawan nyaman dan
                                    tetap produktif. Apa yang biasanya dilakukan?
                                </p>

                                <div class="mt-5 flex flex-wrap items-center gap-5 text-xs font-medium text-slate-500">

                                    <span class="flex items-center gap-1.5">
                                        💬
                                        15 Balasan
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        👁
                                        276 Dilihat
                                    </span>

                                    <span class="flex items-center gap-1.5">
                                        ❤️
                                        22
                                    </span>

                                </div>

                            </div>

                            <div class="hidden text-slate-300 transition group-hover:translate-x-1 group-hover:text-blue-500 sm:block">
                                →
                            </div>

                        </div>

                    </a>

                </div>


                {{-- Pagination --}}
                <div class="mt-8 flex items-center justify-center gap-2">

                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-400"
                    >
                        ←
                    </button>

                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600 text-sm font-semibold text-white shadow-sm"
                    >
                        1
                    </button>

                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-white text-sm font-medium text-slate-600 transition hover:border-blue-200 hover:text-blue-600"
                    >
                        2
                    </button>

                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-white text-sm font-medium text-slate-600 transition hover:border-blue-200 hover:text-blue-600"
                    >
                        3
                    </button>

                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 transition hover:border-blue-200 hover:text-blue-600"
                    >
                        →
                    </button>

                </div>

            </div>


            {{-- =================================================
                SIDEBAR
            ================================================== --}}
            <aside class="space-y-6">

                {{-- Search --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                    <h3 class="font-bold text-slate-900">
                        Cari Diskusi
                    </h3>

                    <div class="mt-4 relative">

                        <input
                            type="text"
                            placeholder="Cari topik..."
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 pr-10 text-sm outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                        >

                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                            🔍
                        </span>

                    </div>

                </div>


                {{-- Popular Categories --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <h3 class="font-bold text-slate-900">
                            Kategori Forum
                        </h3>

                        <a
                            href="/forum"
                            class="text-xs font-semibold text-blue-600 hover:text-blue-700"
                        >
                            Semua
                        </a>

                    </div>

                    <div class="mt-5 space-y-2">

                        <a href="#" class="flex items-center justify-between rounded-xl bg-blue-50 px-4 py-3 text-sm font-semibold text-blue-700">
                            <span>👥 Manajemen Karyawan</span>
                            <span>24</span>
                        </a>

                        <a href="#" class="flex items-center justify-between rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-50">
                            <span>🎯 Rekrutmen</span>
                            <span class="text-xs text-slate-400">18</span>
                        </a>

                        <a href="#" class="flex items-center justify-between rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-50">
                            <span>💰 Payroll & Gaji</span>
                            <span class="text-xs text-slate-400">15</span>
                        </a>

                        <a href="#" class="flex items-center justify-between rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-50">
                            <span>📋 SOP & Operasional</span>
                            <span class="text-xs text-slate-400">21</span>
                        </a>

                        <a href="#" class="flex items-center justify-between rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-50">
                            <span>👑 Kepemimpinan</span>
                            <span class="text-xs text-slate-400">12</span>
                        </a>

                    </div>

                </div>


                {{-- Community CTA --}}
                <div class="overflow-hidden rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700 p-6 text-white shadow-lg">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/15 text-xl">
                        💡
                    </div>

                    <h3 class="mt-5 text-lg font-bold">
                        Punya pengalaman bisnis?
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-blue-100">
                        Bagikan pengalaman kamu dan bantu juragan lain
                        menemukan solusi.
                    </p>

                    <a
                        href="#"
                        class="mt-5 inline-flex w-full items-center justify-center rounded-xl bg-white px-4 py-3 text-sm font-semibold text-blue-700 transition hover:bg-blue-50"
                    >
                        Buat Diskusi
                    </a>

                </div>

            </aside>

        </div>

    </section>

</div>

@endsection