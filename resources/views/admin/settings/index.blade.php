@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div>
        <div class="mb-2 flex items-center gap-2 text-sm text-slate-500">
            <span>Admin</span>

            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 18 6-6-6-6" />
            </svg>

            <span class="text-slate-700">Settings</span>
        </div>

        <h1 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
            Website Settings
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Kelola informasi umum dan konfigurasi website Forum Juragan.
        </p>
    </div>


    {{-- Settings Navigation --}}
    <div class="overflow-x-auto rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="flex min-w-max items-center gap-1 p-2">

            <button
                class="rounded-xl bg-blue-50 px-4 py-2.5 text-sm font-semibold text-blue-700">
                Umum
            </button>

            <button
                class="rounded-xl px-4 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                Branding
            </button>

            <button
                class="rounded-xl px-4 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                Kontak
            </button>

            <button
                class="rounded-xl px-4 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                Sosial Media
            </button>

            <button
                class="rounded-xl px-4 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                SEO
            </button>

        </div>
    </div>


    {{-- General Settings --}}
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-3">

        <div class="xl:col-span-2">

            <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

                <div class="border-b border-slate-100 p-5 sm:p-6">
                    <h2 class="font-bold text-slate-900">
                        Informasi Website
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Informasi utama yang digunakan oleh website.
                    </p>
                </div>


                <div class="space-y-5 p-5 sm:p-6">

                    {{-- Website Name --}}
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Nama Website
                        </label>

                        <input
                            type="text"
                            value="Forum Juragan"
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                    </div>


                    {{-- Tagline --}}
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Tagline
                        </label>

                        <input
                            type="text"
                            value="Tempat Juragan Belajar, Berbagi & Bertumbuh"
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                    </div>


                    {{-- Description --}}
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Deskripsi Website
                        </label>

                        <textarea
                            rows="4"
                            class="w-full resize-none rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm leading-6 text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">Forum Juragan adalah komunitas untuk pemilik bisnis dan UMKM untuk berdiskusi, mengikuti seminar, dan mendapatkan konsultasi bisnis.</textarea>
                    </div>


                    {{-- URL --}}
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Website URL
                        </label>

                        <div class="flex overflow-hidden rounded-xl border border-slate-200 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-100">

                            <span class="flex items-center border-r border-slate-200 bg-slate-50 px-4 text-sm text-slate-500">
                                https://
                            </span>

                            <input
                                type="text"
                                value="forumjuragan.com"
                                class="min-w-0 flex-1 px-4 py-3 text-sm text-slate-700 outline-none">
                        </div>
                    </div>


                    {{-- Language --}}
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                        <div>
                            <label class="mb-2 block text-sm font-semibold text-slate-700">
                                Bahasa
                            </label>

                            <select
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                                <option selected>Bahasa Indonesia</option>
                                <option>English</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-semibold text-slate-700">
                                Zona Waktu
                            </label>

                            <select
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                                <option selected>Asia/Jakarta (WIB)</option>
                                <option>Asia/Makassar (WITA)</option>
                                <option>Asia/Jayapura (WIT)</option>
                            </select>
                        </div>

                    </div>

                </div>


                {{-- Footer --}}
                <div class="flex flex-col gap-3 border-t border-slate-100 bg-slate-50 p-5 sm:flex-row sm:items-center sm:justify-end sm:p-6">

                    <button
                        type="button"
                        class="rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">
                        Batal
                    </button>

                    <button
                        type="button"
                        class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700">
                        Simpan Perubahan
                    </button>

                </div>

            </div>

        </div>


        {{-- Website Status --}}
        <div class="space-y-6">

            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-slate-900">
                            Status Website
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Website sedang aktif.
                        </p>
                    </div>

                    <span class="relative flex h-3 w-3">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex h-3 w-3 rounded-full bg-emerald-500"></span>
                    </span>
                </div>


                <div class="mt-5 rounded-xl bg-emerald-50 p-4">

                    <div class="flex gap-3">

                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-emerald-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>

                        <div>
                            <p class="text-sm font-semibold text-emerald-800">
                                Website Online
                            </p>

                            <p class="mt-1 text-xs leading-5 text-emerald-700">
                                Pengunjung dapat mengakses seluruh halaman website.
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Maintenance --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                <h3 class="font-bold text-slate-900">
                    Mode Maintenance
                </h3>

                <p class="mt-1 text-sm leading-5 text-slate-500">
                    Aktifkan jika website sedang dalam proses pemeliharaan.
                </p>


                <div class="mt-5 flex items-center justify-between rounded-xl bg-slate-50 p-4">

                    <div>
                        <p class="text-sm font-semibold text-slate-700">
                            Maintenance Mode
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Saat ini tidak aktif.
                        </p>
                    </div>


                    <button
                        type="button"
                        class="relative h-6 w-11 rounded-full bg-slate-300 transition">

                        <span class="absolute left-1 top-1 h-4 w-4 rounded-full bg-white shadow-sm"></span>

                    </button>

                </div>

            </div>

        </div>

    </div>


    {{-- Branding --}}
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

        <div class="border-b border-slate-100 p-5 sm:p-6">
            <h2 class="font-bold text-slate-900">
                Branding
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Kelola logo dan identitas visual website.
            </p>
        </div>


        <div class="grid grid-cols-1 gap-6 p-5 sm:p-6 lg:grid-cols-2">

            {{-- Logo --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Logo Website
                </label>

                <div class="flex items-center gap-4 rounded-xl border border-dashed border-slate-300 p-4">

                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-xl font-bold text-white">
                        FJ
                    </div>

                    <div class="min-w-0">
                        <p class="text-sm font-semibold text-slate-700">
                            forum-juragan-logo.png
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            PNG, JPG atau SVG · Maks. 2 MB
                        </p>

                        <button
                            type="button"
                            class="mt-3 text-sm font-semibold text-blue-600 hover:text-blue-700">
                            Ganti Logo
                        </button>
                    </div>

                </div>
            </div>


            {{-- Favicon --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Favicon
                </label>

                <div class="flex items-center gap-4 rounded-xl border border-dashed border-slate-300 p-4">

                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-xl bg-slate-900 text-lg font-bold text-white">
                        F
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-700">
                            favicon.png
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Rekomendasi 512 × 512 px
                        </p>

                        <button
                            type="button"
                            class="mt-3 text-sm font-semibold text-blue-600 hover:text-blue-700">
                            Ganti Favicon
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </div>


    {{-- Social Media --}}
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

        <div class="border-b border-slate-100 p-5 sm:p-6">

            <h2 class="font-bold text-slate-900">
                Social Media
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Masukkan akun sosial media resmi Forum Juragan.
            </p>

        </div>


        <div class="grid grid-cols-1 gap-5 p-5 sm:p-6 md:grid-cols-2">

            {{-- Instagram --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Instagram
                </label>

                <div class="flex overflow-hidden rounded-xl border border-slate-200 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-100">

                    <span class="flex items-center bg-slate-50 px-3 text-sm text-slate-400">
                        @
                    </span>

                    <input
                        type="text"
                        value="forumjuragan"
                        class="min-w-0 flex-1 px-4 py-3 text-sm outline-none">
                </div>
            </div>


            {{-- Facebook --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Facebook
                </label>

                <input
                    type="text"
                    value="Forum Juragan"
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </div>


            {{-- YouTube --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    YouTube
                </label>

                <input
                    type="text"
                    value="Forum Juragan"
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </div>


            {{-- LinkedIn --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    LinkedIn
                </label>

                <input
                    type="text"
                    value="forum-juragan"
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </div>

        </div>

    </div>


    {{-- SEO --}}
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

        <div class="border-b border-slate-100 p-5 sm:p-6">

            <h2 class="font-bold text-slate-900">
                SEO
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Pengaturan dasar untuk membantu website ditemukan di mesin pencari.
            </p>

        </div>


        <div class="space-y-5 p-5 sm:p-6">

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Meta Title
                </label>

                <input
                    type="text"
                    value="Forum Juragan - Komunitas Bisnis Indonesia"
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </div>


            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Meta Description
                </label>

                <textarea
                    rows="3"
                    class="w-full resize-none rounded-xl border border-slate-200 px-4 py-3 text-sm leading-6 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">Forum komunitas untuk pemilik bisnis dan UMKM Indonesia. Berdiskusi, belajar dari seminar, dan mendapatkan konsultasi bisnis.</textarea>
            </div>


            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Keywords
                </label>

                <input
                    type="text"
                    value="forum bisnis, komunitas bisnis, UMKM, konsultasi bisnis, seminar bisnis"
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </div>

        </div>


        <div class="flex justify-end border-t border-slate-100 bg-slate-50 p-5 sm:p-6">

            <button
                type="button"
                class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700">

                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>

                Simpan Pengaturan

            </button>

        </div>

    </div>


    {{-- Danger Zone --}}
    <div class="rounded-2xl border border-red-200 bg-white shadow-sm">

        <div class="p-5 sm:p-6">

            <div class="flex gap-4">

                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-50">

                    <svg class="h-5 w-5 text-red-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v4m0 4h.01M10.3 3.6h3.4L21 17.4a2 2 0 0 1-1.73 3H4.73A2 2 0 0 1 3 17.4L10.3 3.6Z" />
                    </svg>

                </div>

                <div>
                    <h2 class="font-bold text-red-700">
                        Danger Zone
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-slate-500">
                        Pengaturan di area ini dapat memengaruhi seluruh website.
                        Gunakan dengan hati-hati.
                    </p>
                </div>

            </div>


            <div class="mt-5 flex flex-col gap-4 rounded-xl border border-red-100 bg-red-50/50 p-4 sm:flex-row sm:items-center sm:justify-between">

                <div>
                    <p class="text-sm font-semibold text-slate-800">
                        Reset Website Settings
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Mengembalikan pengaturan website ke konfigurasi awal.
                    </p>
                </div>

                <button
                    type="button"
                    class="shrink-0 rounded-xl border border-red-200 bg-white px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                    Reset Settings
                </button>

            </div>

        </div>

    </div>

</div>

@endsection