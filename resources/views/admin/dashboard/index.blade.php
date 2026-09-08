@extends('admin.layouts.app')

@section('content')

<div class="space-y-8">

    {{-- Header --}}
    <div>
        <h1 class="text-2xl font-bold tracking-tight text-slate-900">
            Dashboard
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Ringkasan aktivitas dan perkembangan Forum Juragan.
        </p>
    </div>


    {{-- Statistik --}}
    <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Users --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Pengguna
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ number_format($totalUsers) }}
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 01-6 0M18.75 10.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM6.75 15.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0z"
                        />
                    </svg>
                </div>

            </div>

            <div class="mt-4 flex items-center gap-2 text-xs text-slate-400">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Pengguna terdaftar
            </div>

        </div>


        {{-- Threads --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Diskusi
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ number_format($totalThreads) }}
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 text-indigo-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.625 9.75h6.75m-6.75 3h4.5M21 12c0 4.142-4.03 7.5-9 7.5a9.72 9.72 0 01-4.11-.885L3 20l1.62-4.86A7.11 7.11 0 013 12c0-4.142 4.03-7.5 9-7.5s9 3.358 9 7.5z"
                        />
                    </svg>
                </div>

            </div>

            <div class="mt-4 flex items-center gap-2 text-xs text-slate-400">
                <span class="h-2 w-2 rounded-full bg-blue-500"></span>
                Thread forum
            </div>

        </div>


        {{-- Seminars --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Seminar
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ number_format($totalSeminars) }}
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6.75 8.25h10.5M6.75 12h6.75m-9.75 8.25h10.5a2.25 2.25 0 002.25-2.25V5.25A2.25 2.25 0 0014.25 3h-6.5A2.25 2.25 0 005.5 5.25V18a2.25 2.25 0 002.25 2.25z"
                        />
                    </svg>
                </div>

            </div>

            <div class="mt-4 flex items-center gap-2 text-xs text-slate-400">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                {{ number_format($publishedSeminars) }} seminar aktif
            </div>

        </div>


        {{-- Consultations --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Konsultasi
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ number_format($totalConsultations) }}
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 13.125h3.375a1.125 1.125 0 011.125 1.125v.75a1.125 1.125 0 001.125 1.125h6.75a1.125 1.125 0 001.125-1.125v-.75a1.125 1.125 0 011.125-1.125H21M5.25 13.125V6.75a2.25 2.25 0 012.25-2.25h9a2.25 2.25 0 012.25 2.25v6.375M9 8.625h6"
                        />
                    </svg>
                </div>

            </div>

            <div class="mt-4 flex items-center gap-2 text-xs text-slate-400">
                <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                Permintaan konsultasi
            </div>

        </div>

    </div>


    {{-- Main Content --}}
    <div class="grid gap-6 xl:grid-cols-2">

        {{-- Seminar Terdekat --}}
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Seminar Terdekat
                    </h2>

                    <p class="mt-1 text-xs text-slate-400">
                        Jadwal seminar yang akan datang.
                    </p>
                </div>

                <a
                    href="{{ route('admin.seminar.seminars') }}"
                    class="text-sm font-semibold text-blue-600 transition hover:text-blue-700"
                >
                    Lihat semua
                </a>

            </div>


            <div class="divide-y divide-slate-100">

                @forelse($recentSeminars as $seminar)

                    <div class="flex items-center gap-4 px-6 py-5">

                        {{-- Date --}}
                        <div class="flex h-14 w-14 shrink-0 flex-col items-center justify-center rounded-2xl bg-blue-50 text-blue-600">

                            <span class="text-lg font-bold leading-none">
                                {{ $seminar->tanggal->format('d') }}
                            </span>

                            <span class="mt-1 text-[10px] font-bold uppercase">
                                {{ $seminar->tanggal->format('M') }}
                            </span>

                        </div>


                        {{-- Info --}}
                        <div class="min-w-0 flex-1">

                            <h3 class="truncate text-sm font-bold text-slate-900">
                                {{ $seminar->judul }}
                            </h3>

                            <div class="mt-2 flex flex-wrap items-center gap-3 text-xs text-slate-400">

                                <span>
                                    🎤 {{ $seminar->pembicara }}
                                </span>

                                <span class="hidden sm:inline">
                                    •
                                </span>

                                <span>
                                    {{ ucfirst($seminar->format) }}
                                </span>

                            </div>

                        </div>


                        {{-- Price --}}
                        <div class="hidden text-right sm:block">

                            <p class="text-sm font-bold text-slate-900">
                                {{ $seminar->harga > 0
                                    ? 'Rp ' . number_format($seminar->harga, 0, ',', '.')
                                    : 'Gratis'
                                }}
                            </p>

                            <p class="mt-1 text-xs text-slate-400">
                                {{ ucfirst($seminar->status) }}
                            </p>

                        </div>

                    </div>

                @empty

                    <div class="px-6 py-12 text-center">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                            📅
                        </div>

                        <p class="mt-4 text-sm font-semibold text-slate-700">
                            Belum ada seminar.
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Seminar yang akan datang akan muncul di sini.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>


        {{-- Diskusi Terbaru --}}
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Diskusi Terbaru
                    </h2>

                    <p class="mt-1 text-xs text-slate-400">
                        Thread terbaru dari komunitas.
                    </p>
                </div>

                <a
                    href="{{ route('admin.forum.threads') }}"
                    class="text-sm font-semibold text-blue-600 transition hover:text-blue-700"
                >
                    Lihat semua
                </a>

            </div>


            <div class="divide-y divide-slate-100">

                @forelse($recentThreads as $thread)

                    <div class="px-6 py-5">

                        <div class="flex items-start gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-sm font-bold text-indigo-600">
                                {{ strtoupper(substr($thread->user->name ?? 'U', 0, 1)) }}
                            </div>

                            <div class="min-w-0 flex-1">

                                <h3 class="line-clamp-2 text-sm font-bold leading-6 text-slate-900">
                                    {{ $thread->judul }}
                                </h3>

                                <div class="mt-2 flex flex-wrap items-center gap-2 text-xs text-slate-400">

                                    <span>
                                        {{ $thread->user->name ?? 'Pengguna' }}
                                    </span>

                                    <span>•</span>

                                    <span>
                                        {{ $thread->category->nama_kategori ?? 'Tanpa kategori' }}
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="px-6 py-12 text-center">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                            💬
                        </div>

                        <p class="mt-4 text-sm font-semibold text-slate-700">
                            Belum ada diskusi.
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Thread terbaru akan muncul di sini.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </div>


    {{-- Quick Actions --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="mb-5">
            <h2 class="text-base font-bold text-slate-900">
                Aksi Cepat
            </h2>

            <p class="mt-1 text-xs text-slate-400">
                Akses cepat ke beberapa bagian penting admin.
            </p>
        </div>

        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-4">

            <a
                href="{{ route('admin.seminar.seminars.create') }}"
                class="group rounded-xl border border-slate-200 p-4 transition hover:border-blue-200 hover:bg-blue-50/40"
            >
                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        +
                    </div>

                    <div>
                        <p class="text-sm font-bold text-slate-800">
                            Tambah Seminar
                        </p>

                        <p class="text-xs text-slate-400">
                            Buat event baru
                        </p>
                    </div>

                </div>
            </a>


            <a
                href="{{ route('admin.forum.categories.create') }}"
                class="group rounded-xl border border-slate-200 p-4 transition hover:border-indigo-200 hover:bg-indigo-50/40"
            >
                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                        +
                    </div>

                    <div>
                        <p class="text-sm font-bold text-slate-800">
                            Tambah Kategori
                        </p>

                        <p class="text-xs text-slate-400">
                            Kelola forum
                        </p>
                    </div>

                </div>
            </a>


            <a
                href="{{ route('admin.banners.create') }}"
                class="group rounded-xl border border-slate-200 p-4 transition hover:border-emerald-200 hover:bg-emerald-50/40"
            >
                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                        +
                    </div>

                    <div>
                        <p class="text-sm font-bold text-slate-800">
                            Tambah Banner
                        </p>

                        <p class="text-xs text-slate-400">
                            Update promosi
                        </p>
                    </div>

                </div>
            </a>


            <a
                href="{{ route('admin.testimonials.create') }}"
                class="group rounded-xl border border-slate-200 p-4 transition hover:border-amber-200 hover:bg-amber-50/40"
            >
                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                        +
                    </div>

                    <div>
                        <p class="text-sm font-bold text-slate-800">
                            Tambah Testimonial
                        </p>

                        <p class="text-xs text-slate-400">
                            Tambahkan testimoni
                        </p>
                    </div>

                </div>
            </a>

        </div>

    </div>

</div>

@endsection