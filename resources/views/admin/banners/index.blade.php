@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <span>Admin</span>
                <span>/</span>
                <span class="font-medium text-slate-700">Banners</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Kelola Banner
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola banner promosi dan informasi yang tampil di website.
            </p>
        </div>

        <a
            href="#"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4v16m8-8H4"/>
            </svg>

            Tambah Banner
        </a>
    </div>


    {{-- Stats --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-medium text-slate-500">
                Total Banner
            </p>

            <div class="mt-2 flex items-end justify-between">
                <p class="text-2xl font-bold text-slate-900">
                    12
                </p>

                <span class="rounded-full bg-blue-50 px-2.5 py-1 text-xs font-semibold text-blue-700">
                    Semua
                </span>
            </div>
        </div>


        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-medium text-slate-500">
                Aktif
            </p>

            <div class="mt-2 flex items-end justify-between">
                <p class="text-2xl font-bold text-slate-900">
                    5
                </p>

                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                    Published
                </span>
            </div>
        </div>


        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-medium text-slate-500">
                Draft
            </p>

            <div class="mt-2 flex items-end justify-between">
                <p class="text-2xl font-bold text-slate-900">
                    4
                </p>

                <span class="rounded-full bg-amber-50 px-2.5 py-1 text-xs font-semibold text-amber-700">
                    Draft
                </span>
            </div>
        </div>


        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-medium text-slate-500">
                Nonaktif
            </p>

            <div class="mt-2 flex items-end justify-between">
                <p class="text-2xl font-bold text-slate-900">
                    3
                </p>

                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                    Archived
                </span>
            </div>
        </div>

    </div>


    {{-- Filter --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">

        <div class="flex flex-col gap-3 lg:flex-row">

            <div class="relative flex-1">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"/>
                </svg>

                <input
                    type="text"
                    placeholder="Cari judul banner..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                >

            </div>


            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Status</option>
                <option>Published</option>
                <option>Draft</option>
                <option>Archived</option>
            </select>


            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Posisi</option>
                <option>Hero</option>
                <option>Homepage</option>
                <option>Forum</option>
                <option>Seminar</option>
                <option>Konsultasi</option>
            </select>

        </div>

    </div>


    {{-- Banner Grid --}}
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">

        {{-- Banner 1 --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            {{-- Preview --}}
            <div class="relative h-52 overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800">

                <div class="absolute inset-0 opacity-10">
                    <div class="absolute -right-10 -top-16 h-48 w-48 rounded-full border-[30px] border-white"></div>
                    <div class="absolute -bottom-24 -left-10 h-56 w-56 rounded-full border-[35px] border-white"></div>
                </div>

                <div class="relative flex h-full flex-col justify-center px-7">

                    <span class="mb-3 inline-flex w-fit rounded-full bg-white/15 px-3 py-1 text-xs font-medium text-white">
                        SEMINAR
                    </span>

                    <h2 class="max-w-md text-2xl font-bold text-white">
                        Upgrade Skill, Upgrade Bisnis.
                    </h2>

                    <p class="mt-2 max-w-sm text-sm text-blue-100">
                        Ikuti seminar bisnis bersama para praktisi berpengalaman.
                    </p>

                    <button class="mt-4 w-fit rounded-lg bg-white px-4 py-2 text-xs font-semibold text-blue-700">
                        Lihat Seminar
                    </button>

                </div>

            </div>


            {{-- Content --}}
            <div class="p-5">

                <div class="flex items-start justify-between gap-4">

                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="font-semibold text-slate-900">
                                Promo Seminar September
                            </h3>

                            <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                Published
                            </span>
                        </div>

                        <p class="mt-1 text-sm text-slate-500">
                            Posisi: Hero Homepage
                        </p>
                    </div>

                    <button class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-700">
                        ⋮
                    </button>

                </div>


                <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                    <div class="text-xs text-slate-500">
                        <span class="font-medium text-slate-700">
                            1,842
                        </span>
                        views
                    </div>

                    <div class="flex gap-2">

                        <a
                            href="#"
                            class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-medium text-slate-700 hover:bg-slate-50"
                        >
                            Preview
                        </a>

                        <a
                            href="#"
                            class="rounded-lg bg-blue-600 px-3 py-2 text-xs font-medium text-white hover:bg-blue-700"
                        >
                            Edit
                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- Banner 2 --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="relative h-52 overflow-hidden bg-gradient-to-br from-emerald-500 via-emerald-600 to-teal-700">

                <div class="absolute right-0 top-0 h-40 w-40 rounded-full bg-white/10"></div>
                <div class="absolute -bottom-20 -left-10 h-48 w-48 rounded-full bg-white/10"></div>

                <div class="relative flex h-full flex-col justify-center px-7">

                    <span class="mb-3 inline-flex w-fit rounded-full bg-white/15 px-3 py-1 text-xs font-medium text-white">
                        KONSULTASI
                    </span>

                    <h2 class="max-w-md text-2xl font-bold text-white">
                        Bisnis Lagi Stuck?
                    </h2>

                    <p class="mt-2 max-w-sm text-sm text-emerald-100">
                        Dapatkan solusi bersama mentor dan konsultan bisnis.
                    </p>

                    <button class="mt-4 w-fit rounded-lg bg-white px-4 py-2 text-xs font-semibold text-emerald-700">
                        Konsultasi Sekarang
                    </button>

                </div>

            </div>


            <div class="p-5">

                <div class="flex items-start justify-between gap-4">

                    <div>

                        <div class="flex items-center gap-2">

                            <h3 class="font-semibold text-slate-900">
                                CTA Konsultasi Bisnis
                            </h3>

                            <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                Published
                            </span>

                        </div>

                        <p class="mt-1 text-sm text-slate-500">
                            Posisi: Homepage
                        </p>

                    </div>

                    <button class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-700">
                        ⋮
                    </button>

                </div>


                <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                    <div class="text-xs text-slate-500">
                        <span class="font-medium text-slate-700">
                            1,126
                        </span>
                        views
                    </div>

                    <div class="flex gap-2">

                        <a
                            href="#"
                            class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-medium text-slate-700 hover:bg-slate-50"
                        >
                            Preview
                        </a>

                        <a
                            href="#"
                            class="rounded-lg bg-blue-600 px-3 py-2 text-xs font-medium text-white hover:bg-blue-700"
                        >
                            Edit
                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- Banner 3 --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="relative h-52 overflow-hidden bg-gradient-to-br from-slate-800 via-slate-900 to-blue-950">

                <div class="absolute right-10 top-8 h-32 w-32 rounded-full border-[18px] border-blue-500/20"></div>

                <div class="relative flex h-full flex-col justify-center px-7">

                    <span class="mb-3 inline-flex w-fit rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-slate-200">
                        FORUM
                    </span>

                    <h2 class="max-w-md text-2xl font-bold text-white">
                        Punya Masalah Bisnis?
                    </h2>

                    <p class="mt-2 max-w-sm text-sm text-slate-300">
                        Diskusikan masalah dan pengalaman bisnis bersama juragan lainnya.
                    </p>

                    <button class="mt-4 w-fit rounded-lg bg-blue-500 px-4 py-2 text-xs font-semibold text-white">
                        Gabung Forum
                    </button>

                </div>

            </div>


            <div class="p-5">

                <div class="flex items-start justify-between gap-4">

                    <div>

                        <div class="flex items-center gap-2">

                            <h3 class="font-semibold text-slate-900">
                                CTA Forum Juragan
                            </h3>

                            <span class="rounded-full bg-yellow-50 px-2.5 py-1 text-xs font-semibold text-yellow-700">
                                Draft
                            </span>

                        </div>

                        <p class="mt-1 text-sm text-slate-500">
                            Posisi: Forum
                        </p>

                    </div>

                    <button class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-700">
                        ⋮
                    </button>

                </div>


                <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                    <div class="text-xs text-slate-500">
                        <span class="font-medium text-slate-700">
                            0
                        </span>
                        views
                    </div>

                    <div class="flex gap-2">

                        <a
                            href="#"
                            class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-medium text-slate-700 hover:bg-slate-50"
                        >
                            Preview
                        </a>

                        <a
                            href="#"
                            class="rounded-lg bg-blue-600 px-3 py-2 text-xs font-medium text-white hover:bg-blue-700"
                        >
                            Edit
                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- Banner 4 --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="relative h-52 overflow-hidden bg-gradient-to-br from-indigo-600 via-violet-600 to-purple-700">

                <div class="absolute -right-8 -top-8 h-40 w-40 rounded-full bg-white/10"></div>
                <div class="absolute bottom-4 right-20 h-20 w-20 rounded-full bg-white/5"></div>

                <div class="relative flex h-full flex-col justify-center px-7">

                    <span class="mb-3 inline-flex w-fit rounded-full bg-white/15 px-3 py-1 text-xs font-medium text-white">
                        KOMUNITAS
                    </span>

                    <h2 class="max-w-md text-2xl font-bold text-white">
                        Belajar. Berbagi. Bertumbuh.
                    </h2>

                    <p class="mt-2 max-w-sm text-sm text-violet-100">
                        Bangun relasi dan temukan insight baru bersama komunitas juragan.
                    </p>

                    <button class="mt-4 w-fit rounded-lg bg-white px-4 py-2 text-xs font-semibold text-violet-700">
                        Gabung Gratis
                    </button>

                </div>

            </div>


            <div class="p-5">

                <div class="flex items-start justify-between gap-4">

                    <div>

                        <div class="flex items-center gap-2">

                            <h3 class="font-semibold text-slate-900">
                                Banner Komunitas
                            </h3>

                            <span class="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                                Archived
                            </span>

                        </div>

                        <p class="mt-1 text-sm text-slate-500">
                            Posisi: Homepage
                        </p>

                    </div>

                    <button class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-700">
                        ⋮
                    </button>

                </div>


                <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                    <div class="text-xs text-slate-500">
                        <span class="font-medium text-slate-700">
                            3,842
                        </span>
                        views
                    </div>

                    <div class="flex gap-2">

                        <a
                            href="#"
                            class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-medium text-slate-700 hover:bg-slate-50"
                        >
                            Preview
                        </a>

                        <a
                            href="#"
                            class="rounded-lg bg-blue-600 px-3 py-2 text-xs font-medium text-white hover:bg-blue-700"
                        >
                            Edit
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Info --}}
    <div class="rounded-2xl border border-blue-100 bg-blue-50 p-5">

        <div class="flex gap-4">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">
                ℹ
            </div>

            <div>

                <h3 class="font-semibold text-blue-900">
                    Tentang Banner
                </h3>

                <p class="mt-1 text-sm leading-6 text-blue-700">
                    Banner digunakan untuk menampilkan promosi, informasi penting,
                    seminar, maupun ajakan konsultasi kepada pengunjung website.
                    Nantinya admin dapat mengatur gambar, judul, deskripsi,
                    tombol, posisi, jadwal tayang, dan status banner.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection