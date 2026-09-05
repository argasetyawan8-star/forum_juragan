@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <span>Admin</span>
                <span>/</span>
                <span class="font-medium text-slate-700">Konsultasi</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Konsultasi Bisnis
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola permintaan konsultasi dan pantau proses konsultasi bisnis.
            </p>
        </div>

        <button
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

            Tambah Konsultasi
        </button>
    </div>


    {{-- Stats --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Konsultasi
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        186
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Semua permintaan
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    💬
                </div>

            </div>
        </div>


        {{-- New --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Permintaan Baru
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        18
                    </p>

                    <p class="mt-1 text-xs text-blue-600">
                        Perlu ditindaklanjuti
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    ✨
                </div>

            </div>
        </div>


        {{-- Scheduled --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Terjadwal
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        24
                    </p>

                    <p class="mt-1 text-xs text-violet-600">
                        Siap dilaksanakan
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                    📅
                </div>

            </div>
        </div>


        {{-- Completed --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Selesai
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        144
                    </p>

                    <p class="mt-1 text-xs text-emerald-600">
                        Konsultasi berhasil
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    ✓
                </div>

            </div>
        </div>

    </div>


    {{-- Filter --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">

        <div class="grid grid-cols-1 gap-3 lg:grid-cols-4">

            {{-- Search --}}
            <div class="relative lg:col-span-2">

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
                    placeholder="Cari nama, email, atau nama usaha..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                >

            </div>


            {{-- Package --}}
            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Paket</option>
                <option>Basic</option>
                <option>Professional</option>
                <option>Business Growth</option>
            </select>


            {{-- Status --}}
            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Status</option>
                <option>Baru</option>
                <option>Diproses</option>
                <option>Terjadwal</option>
                <option>Selesai</option>
                <option>Dibatalkan</option>
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
                            Klien
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Paket
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Masalah Bisnis
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Jadwal
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

                    {{-- Consultation 1 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 font-semibold text-blue-700">
                                    AS
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Arga Setyawan
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Maju Jaya Group
                                    </p>

                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Professional
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                120 menit
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="max-w-xs text-sm text-slate-700">
                                Masalah pengelolaan tim dan produktivitas karyawan.
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-medium text-slate-700">
                                08 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                10.00 WIB
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Rp350.000
                            </p>

                            <p class="mt-1 text-xs text-emerald-600">
                                Paid
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-full bg-violet-50 px-3 py-1 text-xs font-semibold text-violet-700">
                                Terjadwal
                            </span>

                        </td>


                        <td class="px-6 py-5">

                            <div class="flex justify-end gap-2">

                                <a
                                    href="#"
                                    class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                                    title="Lihat Detail"
                                >
                                    👁
                                </a>

                                <a
                                    href="#"
                                    class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                                    title="Edit"
                                >
                                    ✎
                                </a>

                            </div>

                        </td>

                    </tr>


                    {{-- Consultation 2 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-emerald-100 font-semibold text-emerald-700">
                                    RP
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Rudi Pratama
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Digital Store Indonesia
                                    </p>

                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Basic
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                60 menit
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="max-w-xs text-sm text-slate-700">
                                Strategi pemasaran dan peningkatan penjualan online.
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-medium text-slate-700">
                                09 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                14.00 WIB
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Rp150.000
                            </p>

                            <p class="mt-1 text-xs text-amber-600">
                                Pending
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">
                                Diproses
                            </span>

                        </td>


                        <td class="px-6 py-5">

                            <div class="flex justify-end gap-2">

                                <a
                                    href="#"
                                    class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-blue-600"
                                >
                                    👁
                                </a>

                                <a
                                    href="#"
                                    class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-blue-600"
                                >
                                    ✎
                                </a>

                            </div>

                        </td>

                    </tr>


                    {{-- Consultation 3 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-violet-100 font-semibold text-violet-700">
                                    RM
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Rina Maharani
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Rina Fashion
                                    </p>

                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Business Growth
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Custom
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="max-w-xs text-sm text-slate-700">
                                Pengembangan bisnis dan strategi ekspansi usaha.
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-medium text-slate-700">
                                11 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                13.30 WIB
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Custom
                            </p>

                            <p class="mt-1 text-xs text-emerald-600">
                                Paid
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                                Selesai
                            </span>

                        </td>


                        <td class="px-6 py-5">

                            <div class="flex justify-end gap-2">

                                <a
                                    href="#"
                                    class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 hover:text-blue-600"
                                >
                                    👁
                                </a>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        {{-- Pagination --}}
        <div class="flex flex-col gap-3 border-t border-slate-200 px-6 py-4 sm:flex-row sm:items-center sm:justify-between">

            <p class="text-sm text-slate-500">
                Menampilkan
                <span class="font-medium text-slate-700">1–3</span>
                dari
                <span class="font-medium text-slate-700">186</span>
                konsultasi
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

            <div class="flex items-start justify-between gap-3">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-blue-100 font-semibold text-blue-700">
                        AS
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Arga Setyawan
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            Maju Jaya Group
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-violet-50 px-2.5 py-1 text-xs font-semibold text-violet-700">
                    Terjadwal
                </span>

            </div>


            <div class="mt-5 space-y-4 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">
                        Paket
                    </p>

                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Professional · 120 menit
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">
                        Masalah Bisnis
                    </p>

                    <p class="mt-1 text-sm leading-5 text-slate-700">
                        Masalah pengelolaan tim dan produktivitas karyawan.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-xs text-slate-400">
                            Jadwal
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            08 Sep 2026
                        </p>

                        <p class="text-xs text-slate-500">
                            10.00 WIB
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400">
                            Harga
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            Rp350.000
                        </p>

                        <p class="text-xs text-emerald-600">
                            Paid
                        </p>
                    </div>

                </div>

            </div>


            <div class="mt-5 flex gap-2 border-t border-slate-100 pt-4">

                <a
                    href="#"
                    class="flex-1 rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 hover:bg-slate-50"
                >
                    Detail
                </a>

                <a
                    href="#"
                    class="flex-1 rounded-xl bg-blue-600 px-4 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700"
                >
                    Edit
                </a>

            </div>

        </div>


        {{-- Card 2 --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between gap-3">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-emerald-100 font-semibold text-emerald-700">
                        RP
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Rudi Pratama
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            Digital Store Indonesia
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-amber-50 px-2.5 py-1 text-xs font-semibold text-amber-700">
                    Diproses
                </span>

            </div>


            <div class="mt-5 space-y-4 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">
                        Paket
                    </p>

                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Basic · 60 menit
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">
                        Masalah Bisnis
                    </p>

                    <p class="mt-1 text-sm leading-5 text-slate-700">
                        Strategi pemasaran dan peningkatan penjualan online.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-xs text-slate-400">
                            Jadwal
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            09 Sep 2026
                        </p>

                        <p class="text-xs text-slate-500">
                            14.00 WIB
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400">
                            Harga
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            Rp150.000
                        </p>

                        <p class="text-xs text-amber-600">
                            Pending
                        </p>
                    </div>

                </div>

            </div>


            <div class="mt-5 flex gap-2 border-t border-slate-100 pt-4">

                <a
                    href="#"
                    class="flex-1 rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 hover:bg-slate-50"
                >
                    Detail
                </a>

                <button
                    class="flex-1 rounded-xl bg-amber-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-amber-600"
                >
                    Periksa
                </button>

            </div>

        </div>


        {{-- Card 3 --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between gap-3">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-violet-100 font-semibold text-violet-700">
                        RM
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Rina Maharani
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            Rina Fashion
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                    Selesai
                </span>

            </div>


            <div class="mt-5 space-y-4 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">
                        Paket
                    </p>

                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Business Growth · Custom
                    </p>
                </div>

                <div>
                    <p class="text-xs text-slate-400">
                        Masalah Bisnis
                    </p>

                    <p class="mt-1 text-sm leading-5 text-slate-700">
                        Pengembangan bisnis dan strategi ekspansi usaha.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-xs text-slate-400">
                            Jadwal
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            11 Sep 2026
                        </p>

                        <p class="text-xs text-slate-500">
                            13.30 WIB
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400">
                            Pembayaran
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            Paid
                        </p>
                    </div>

                </div>

            </div>


            <div class="mt-5 border-t border-slate-100 pt-4">

                <a
                    href="#"
                    class="block rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 hover:bg-slate-50"
                >
                    Lihat Detail
                </a>

            </div>

        </div>

    </div>


    {{-- Consultation Alert --}}
    <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-5">

        <div class="flex gap-4">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                ✓
            </div>

            <div>

                <h3 class="font-semibold text-emerald-900">
                    Fokus pada Lead Konsultasi
                </h3>

                <p class="mt-1 text-sm leading-6 text-emerald-700">
                    Setiap permintaan konsultasi dapat menjadi peluang bisnis.
                    Pastikan permintaan baru segera dihubungi dan jadwal konsultasi
                    dikonfirmasi bersama klien.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection