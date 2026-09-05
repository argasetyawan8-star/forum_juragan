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
                <span class="font-medium text-slate-700">Registrations</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Registrasi Seminar
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola peserta yang mendaftar pada seluruh seminar.
            </p>
        </div>

        <button
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:bg-slate-50"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 10v6m0 0l-3-3m3 3l3-3m5 6H4a2 2 0 01-2-2V7a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2z"/>
            </svg>

            Export Data
        </button>
    </div>


    {{-- Stats --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Registrasi
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        1,284
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Semua seminar
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    👥
                </div>

            </div>
        </div>


        {{-- Paid --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Sudah Bayar
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        1,126
                    </p>

                    <p class="mt-1 text-xs text-emerald-600">
                        87,7% dari total
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    ✓
                </div>

            </div>
        </div>


        {{-- Pending --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Menunggu Pembayaran
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        123
                    </p>

                    <p class="mt-1 text-xs text-amber-600">
                        Perlu diperiksa
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    ⏳
                </div>

            </div>
        </div>


        {{-- Cancelled --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Dibatalkan
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        35
                    </p>

                    <p class="mt-1 text-xs text-red-600">
                        2,7% dari total
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">
                    ✕
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
                    placeholder="Cari nama peserta, email, atau WhatsApp..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                >

            </div>


            {{-- Seminar --}}
            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Seminar</option>
                <option>Leadership untuk Pemilik Bisnis</option>
                <option>Strategi Bisnis di Era Digital</option>
                <option>Membangun Tim yang Produktif</option>
            </select>


            {{-- Status --}}
            <select
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option>Semua Status</option>
                <option>Paid</option>
                <option>Pending</option>
                <option>Cancelled</option>
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
                            Peserta
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Seminar
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Kontak
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Pembayaran
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Tanggal
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

                    {{-- Participant 1 --}}
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
                                        Pemilik Bisnis
                                    </p>
                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-5">

                            <p class="max-w-xs text-sm font-medium text-slate-700">
                                Leadership untuk Pemilik Bisnis
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                20 Sep 2026
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm text-slate-700">
                                arga@email.com
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                0812-3456-7890
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Rp150.000
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                QRIS
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm text-slate-700">
                                05 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                09:42 WIB
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                                Paid
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

                                <button
                                    class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-red-600"
                                    title="Hapus"
                                >
                                    🗑
                                </button>

                            </div>

                        </td>

                    </tr>


                    {{-- Participant 2 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-violet-100 font-semibold text-violet-700">
                                    RP
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Rudi Pratama
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Founder
                                    </p>
                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-5">

                            <p class="max-w-xs text-sm font-medium text-slate-700">
                                Strategi Bisnis di Era Digital
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                27 Sep 2026
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm text-slate-700">
                                rudi@email.com
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                0813-2233-4455
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Rp200.000
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Bank Transfer
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm text-slate-700">
                                05 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                08:17 WIB
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">
                                Pending
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

                                <button
                                    class="rounded-lg p-2 text-slate-500 hover:bg-red-50 hover:text-red-600"
                                >
                                    🗑
                                </button>

                            </div>

                        </td>

                    </tr>


                    {{-- Participant 3 --}}
                    <tr class="transition hover:bg-slate-50">

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-emerald-100 font-semibold text-emerald-700">
                                    RM
                                </div>

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Rina Maharani
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        HR Consultant
                                    </p>
                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-5">

                            <p class="max-w-xs text-sm font-medium text-slate-700">
                                Membangun Tim yang Produktif
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                04 Okt 2026
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm text-slate-700">
                                rina@email.com
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                0814-9988-7766
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm font-semibold text-slate-700">
                                Rp175.000
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                QRIS
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <p class="text-sm text-slate-700">
                                04 Sep 2026
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                16:31 WIB
                            </p>

                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-red-700">
                                Cancelled
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

                                <button
                                    class="rounded-lg p-2 text-slate-500 hover:bg-red-50 hover:text-red-600"
                                >
                                    🗑
                                </button>

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
                <span class="font-medium text-slate-700">1,284</span>
                registrasi
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

        {{-- Mobile Card 1 --}}
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
                            arga@email.com
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                    Paid
                </span>

            </div>


            <div class="mt-5 space-y-3 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">
                        Seminar
                    </p>

                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Leadership untuk Pemilik Bisnis
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-xs text-slate-400">
                            Tanggal
                        </p>

                        <p class="mt-1 text-sm text-slate-700">
                            05 Sep 2026
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400">
                            Pembayaran
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            Rp150.000
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
                    class="rounded-xl border border-red-100 px-4 py-2.5 text-sm font-medium text-red-600 hover:bg-red-50"
                >
                    Hapus
                </button>

            </div>

        </div>


        {{-- Mobile Card 2 --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between gap-3">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-violet-100 font-semibold text-violet-700">
                        RP
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Rudi Pratama
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            rudi@email.com
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-amber-50 px-2.5 py-1 text-xs font-semibold text-amber-700">
                    Pending
                </span>

            </div>


            <div class="mt-5 space-y-3 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">
                        Seminar
                    </p>

                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Strategi Bisnis di Era Digital
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-xs text-slate-400">
                            Tanggal
                        </p>

                        <p class="mt-1 text-sm text-slate-700">
                            05 Sep 2026
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400">
                            Pembayaran
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            Rp200.000
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


        {{-- Mobile Card 3 --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between gap-3">

                <div class="flex gap-3">

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-emerald-100 font-semibold text-emerald-700">
                        RM
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-900">
                            Rina Maharani
                        </h3>

                        <p class="mt-1 text-xs text-slate-500">
                            rina@email.com
                        </p>
                    </div>

                </div>

                <span class="rounded-full bg-red-50 px-2.5 py-1 text-xs font-semibold text-red-700">
                    Cancelled
                </span>

            </div>


            <div class="mt-5 space-y-3 border-t border-slate-100 pt-4">

                <div>
                    <p class="text-xs text-slate-400">
                        Seminar
                    </p>

                    <p class="mt-1 text-sm font-medium text-slate-700">
                        Membangun Tim yang Produktif
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-xs text-slate-400">
                            Tanggal
                        </p>

                        <p class="mt-1 text-sm text-slate-700">
                            04 Sep 2026
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400">
                            Pembayaran
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">
                            Rp175.000
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


    {{-- Info --}}
    <div class="rounded-2xl border border-blue-100 bg-blue-50 p-5">

        <div class="flex gap-4">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">
                ℹ
            </div>

            <div>

                <h3 class="font-semibold text-blue-900">
                    Tentang Registrasi Seminar
                </h3>

                <p class="mt-1 text-sm leading-6 text-blue-700">
                    Admin dapat memantau seluruh peserta seminar,
                    mengecek status pembayaran, melihat informasi peserta,
                    serta melakukan pengelolaan data registrasi.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection