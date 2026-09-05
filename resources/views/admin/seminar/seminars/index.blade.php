@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <span>Admin</span>
                <span>/</span>
                <span>Seminar</span>
                <span>/</span>
                <span class="font-medium text-slate-700">Seminars</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Kelola Seminar
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola seminar, jadwal, pembicara, harga, dan status pendaftaran.
            </p>
        </div>

        <a
            href="#"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 4v16m8-8H4"/>
            </svg>

            Tambah Seminar
        </a>
    </div>


    {{-- Stats --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Seminar
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        24
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Semua seminar
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>


        {{-- Upcoming --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Akan Datang
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        8
                    </p>

                    <p class="mt-1 text-xs text-emerald-600">
                        Seminar aktif
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
            </div>
        </div>


        {{-- Registrations --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Peserta
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        1,284
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Seluruh seminar
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5V4H2v16h5m10 0v-6H7v6m10 0H7"/>
                    </svg>
                </div>
            </div>
        </div>


        {{-- Revenue --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Pendapatan
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        Rp48,6jt
                    </p>

                    <p class="mt-1 text-xs text-emerald-600">
                        +12,8% bulan ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3 1.343 3 3-1.343 3-3 3m0-14V3m0 18v-2m8-7h2M2 12h2m14.364-6.364l1.414-1.414M4.222 19.778l1.414-1.414m0-12.728L4.222 4.222m15.556 15.556l-1.414-1.414"/>
                    </svg>
                </div>
            </div>
        </div>

    </div>


    {{-- Filter --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">

        <div class="flex flex-col gap-3 lg:flex-row">

            {{-- Search --}}
            <div class="relative flex-1">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"/>
                </svg>

                <input
                    type="text"
                    placeholder="Cari seminar, pembicara..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                >
            </div>


            {{-- Status --}}
            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Status</option>
                <option>Published</option>
                <option>Draft</option>
                <option>Selesai</option>
                <option>Dibatalkan</option>
            </select>


            {{-- Type --}}
            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Format</option>
                <option>Online</option>
                <option>Offline</option>
                <option>Hybrid</option>
            </select>

        </div>
    </div>


    {{-- Desktop Table --}}
    <div class="hidden overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm lg:block">

        <div class="overflow-x-auto">

            <table class="w-full text-left">

                <thead class="border-b border-slate-200 bg-slate-50">
                    <tr>
                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Seminar
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Jadwal
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Format
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Peserta
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Harga
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>
                    </tr>
                </thead>


                <tbody class="divide-y divide-slate-100">

                    {{-- Seminar 1 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">

                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6v12m-6-6h12"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Leadership untuk Pemilik Bisnis
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Budi Santoso • Business Coach
                                    </p>
                                </div>

                            </div>
                        </td>

                        <td class="px-6 py-5">
                            <p class="text-sm font-medium text-slate-700">
                                20 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                09.00 - 12.00 WIB
                            </p>
                        </td>

                        <td class="px-6 py-5">
                            <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-blue-700">
                                Online
                            </span>
                        </td>

                        <td class="px-6 py-5">
                            <p class="text-sm font-semibold text-slate-700">
                                87 / 100
                            </p>

                            <div class="mt-2 h-1.5 w-24 overflow-hidden rounded-full bg-slate-100">
                                <div class="h-full w-[87%] rounded-full bg-blue-600"></div>
                            </div>
                        </td>

                        <td class="px-6 py-5 text-sm font-semibold text-slate-700">
                            Rp150.000
                        </td>

                        <td class="px-6 py-5">
                            <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                                Published
                            </span>
                        </td>

                        <td class="px-6 py-5">
                            <div class="flex justify-end gap-2">

                                <a href="#"
                                    class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                                    title="Lihat">
                                    👁
                                </a>

                                <a href="#"
                                    class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                                    title="Edit">
                                    ✎
                                </a>

                                <button
                                    class="rounded-lg p-2 text-slate-500 transition hover:bg-red-50 hover:text-red-600"
                                    title="Hapus">
                                    🗑
                                </button>

                            </div>
                        </td>

                    </tr>


                    {{-- Seminar 2 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">

                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 12l2 2 4-4m5-2a9 9 0 11-16 0 9 9 0 0116 0z"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Strategi Bisnis di Era Digital
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Andi Pratama • Digital Strategist
                                    </p>
                                </div>

                            </div>
                        </td>

                        <td class="px-6 py-5">
                            <p class="text-sm font-medium text-slate-700">
                                27 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                13.00 - 16.00 WIB
                            </p>
                        </td>

                        <td class="px-6 py-5">
                            <span class="rounded-full bg-violet-50 px-3 py-1 text-xs font-medium text-violet-700">
                                Hybrid
                            </span>
                        </td>

                        <td class="px-6 py-5">
                            <p class="text-sm font-semibold text-slate-700">
                                64 / 150
                            </p>

                            <div class="mt-2 h-1.5 w-24 overflow-hidden rounded-full bg-slate-100">
                                <div class="h-full w-[43%] rounded-full bg-violet-600"></div>
                            </div>
                        </td>

                        <td class="px-6 py-5 text-sm font-semibold text-slate-700">
                            Rp200.000
                        </td>

                        <td class="px-6 py-5">
                            <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                                Published
                            </span>
                        </td>

                        <td class="px-6 py-5">
                            <div class="flex justify-end gap-2">

                                <a href="#"
                                    class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-blue-600">
                                    👁
                                </a>

                                <a href="#"
                                    class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-blue-600">
                                    ✎
                                </a>

                                <button
                                    class="rounded-lg p-2 text-slate-500 hover:bg-red-50 hover:text-red-600">
                                    🗑
                                </button>

                            </div>
                        </td>

                    </tr>


                    {{-- Seminar 3 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">

                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6v6l4 2"/>
                                        <circle cx="12" cy="12" r="9"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Membangun Tim yang Produktif
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Rina Maharani • HR Consultant
                                    </p>
                                </div>

                            </div>
                        </td>

                        <td class="px-6 py-5">
                            <p class="text-sm font-medium text-slate-700">
                                04 Okt 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                09.00 - 12.00 WIB
                            </p>
                        </td>

                        <td class="px-6 py-5">
                            <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-medium text-amber-700">
                                Offline
                            </span>
                        </td>

                        <td class="px-6 py-5">
                            <p class="text-sm font-semibold text-slate-700">
                                42 / 75
                            </p>

                            <div class="mt-2 h-1.5 w-24 overflow-hidden rounded-full bg-slate-100">
                                <div class="h-full w-[56%] rounded-full bg-amber-500"></div>
                            </div>
                        </td>

                        <td class="px-6 py-5 text-sm font-semibold text-slate-700">
                            Rp175.000
                        </td>

                        <td class="px-6 py-5">
                            <span class="rounded-full bg-yellow-50 px-3 py-1 text-xs font-semibold text-yellow-700">
                                Draft
                            </span>
                        </td>

                        <td class="px-6 py-5">
                            <div class="flex justify-end gap-2">

                                <a href="#"
                                    class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-blue-600">
                                    👁
                                </a>

                                <a href="#"
                                    class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-blue-600">
                                    ✎
                                </a>

                                <button
                                    class="rounded-lg p-2 text-slate-500 hover:bg-red-50 hover:text-red-600">
                                    🗑
                                </button>

                            </div>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        {{-- Pagination --}}
        <div class="flex items-center justify-between border-t border-slate-200 px-6 py-4">

            <p class="text-sm text-slate-500">
                Menampilkan <span class="font-medium text-slate-700">1–3</span>
                dari <span class="font-medium text-slate-700">24</span> seminar
            </p>

            <div class="flex items-center gap-1">

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-400">
                    Sebelumnya
                </button>

                <button class="rounded-lg bg-blue-600 px-3 py-2 text-sm font-medium text-white">
                    1
                </button>

                <button class="rounded-lg px-3 py-2 text-sm text-slate-600 hover:bg-slate-100">
                    2
                </button>

                <button class="rounded-lg px-3 py-2 text-sm text-slate-600 hover:bg-slate-100">
                    3
                </button>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                    Berikutnya
                </button>

            </div>

        </div>

    </div>


    {{-- Mobile Cards --}}
    <div class="space-y-4 lg:hidden">

        {{-- Card 1 --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between gap-4">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        📅
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Leadership untuk Pemilik Bisnis
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            Budi Santoso • Business Coach
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                    Published
                </span>

            </div>


            <div class="mt-5 grid grid-cols-2 gap-4 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">Jadwal</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        20 Sep 2026
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Peserta</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        87 / 100
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Format</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Online
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Harga</p>
                    <p class="mt-1 text-sm font-semibold text-slate-700">
                        Rp150.000
                    </p>
                </div>

            </div>


            <div class="mt-5 flex gap-2 border-t border-slate-100 pt-4">

                <a href="#"
                    class="flex-1 rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 hover:bg-slate-50">
                    Lihat
                </a>

                <a href="#"
                    class="flex-1 rounded-xl bg-blue-600 px-4 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700">
                    Edit
                </a>

            </div>

        </div>


        {{-- Card 2 --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between gap-4">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                        📅
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Strategi Bisnis di Era Digital
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            Andi Pratama • Digital Strategist
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                    Published
                </span>

            </div>


            <div class="mt-5 grid grid-cols-2 gap-4 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">Jadwal</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        27 Sep 2026
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Peserta</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        64 / 150
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Format</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Hybrid
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Harga</p>
                    <p class="mt-1 text-sm font-semibold text-slate-700">
                        Rp200.000
                    </p>
                </div>

            </div>


            <div class="mt-5 flex gap-2 border-t border-slate-100 pt-4">

                <a href="#"
                    class="flex-1 rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 hover:bg-slate-50">
                    Lihat
                </a>

                <a href="#"
                    class="flex-1 rounded-xl bg-blue-600 px-4 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700">
                    Edit
                </a>

            </div>

        </div>


        {{-- Card 3 --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between gap-4">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                        📅
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Membangun Tim yang Produktif
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            Rina Maharani • HR Consultant
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-yellow-50 px-2.5 py-1 text-xs font-semibold text-yellow-700">
                    Draft
                </span>

            </div>


            <div class="mt-5 grid grid-cols-2 gap-4 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">Jadwal</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        04 Okt 2026
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Peserta</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        42 / 75
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Format</p>
                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Offline
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">Harga</p>
                    <p class="mt-1 text-sm font-semibold text-slate-700">
                        Rp175.000
                    </p>
                </div>

            </div>


            <div class="mt-5 flex gap-2 border-t border-slate-100 pt-4">

                <a href="#"
                    class="flex-1 rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 hover:bg-slate-50">
                    Lihat
                </a>

                <a href="#"
                    class="flex-1 rounded-xl bg-blue-600 px-4 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700">
                    Edit
                </a>

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
                    Tentang Manajemen Seminar
                </h3>

                <p class="mt-1 text-sm leading-6 text-blue-700">
                    Di halaman ini admin dapat membuat seminar baru,
                    mengatur jadwal dan pembicara, menentukan harga,
                    melihat jumlah peserta, serta mengatur status publikasi seminar.
                </p>
            </div>

        </div>

    </div>

</div>

@endsection