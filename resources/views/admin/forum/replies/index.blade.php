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
                    <path stroke-linecap="round" stroke-width="2"
                        d="m9 18 6-6-6-6"/>
                </svg>

                <span class="text-slate-900">Replies</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Kelola Replies
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Pantau dan moderasi balasan dalam diskusi Forum Juragan.
            </p>
        </div>

    </div>


    {{-- STAT CARDS --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Replies
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        8,724
                    </p>

                    <p class="mt-2 text-xs font-medium text-blue-600">
                        Semua balasan
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round"
                            d="M8 10h8M8 14h5"/>
                        <path stroke-width="2" stroke-linecap="round"
                            d="M19 11.5a7 7 0 0 1-7 7 7.5 7.5 0 0 1-3.5-.85L4 19l1.35-4.5A7.5 7.5 0 0 1 5 11.5a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Today --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Reply Hari Ini
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        126
                    </p>

                    <p class="mt-2 text-xs font-medium text-emerald-600">
                        +18% dibanding kemarin
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round"
                            d="M8 10h8M8 14h5"/>
                        <path stroke-width="2" stroke-linecap="round"
                            d="M19 11.5a7 7 0 0 1-7 7 7.5 7.5 0 0 1-3.5-.85L4 19l1.35-4.5A7.5 7.5 0 0 1 5 11.5a7.5 7.5 0 0 1 14 0Z"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Reported --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Dilaporkan
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        17
                    </p>

                    <p class="mt-2 text-xs font-medium text-red-600">
                        Perlu ditinjau
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round"
                            d="M12 9v4"/>
                        <path stroke-width="2" stroke-linecap="round"
                            d="M12 17h.01"/>
                        <path stroke-width="2"
                            d="M10.3 4.3 2.8 17.5A2 2 0 0 0 4.5 20h15a2 2 0 0 0 1.7-2.5L13.7 4.3a2 2 0 0 0-3.4 0Z"/>
                    </svg>
                </div>

            </div>
        </div>


        {{-- Hidden --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Disembunyikan
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        38
                    </p>

                    <p class="mt-2 text-xs font-medium text-slate-500">
                        Moderasi admin
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-slate-100 text-slate-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2"
                            d="M4 4l16 16"/>
                        <path stroke-width="2"
                            d="M10.6 10.6A2 2 0 0 0 13.4 13.4"/>
                        <path stroke-width="2"
                            d="M9.9 5.2A9.7 9.7 0 0 1 12 5c6 0 9.5 7 9.5 7a17.6 17.6 0 0 1-3 3.9M6.2 6.2C3.7 8.2 2.5 12 2.5 12s3.5 7 9.5 7c1 0 2-.2 2.9-.5"/>
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
                <div class="relative">

                    <svg
                        class="pointer-events-none absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-width="2" stroke-linecap="round"
                            d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>

                    <input
                        type="text"
                        placeholder="Cari isi reply, nama user, atau judul thread..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    >

                </div>


                {{-- Filters --}}
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">

                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Semua Status</option>
                        <option>Published</option>
                        <option>Dilaporkan</option>
                        <option>Disembunyikan</option>
                    </select>

                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Semua Waktu</option>
                        <option>Hari Ini</option>
                        <option>7 Hari Terakhir</option>
                        <option>30 Hari Terakhir</option>
                    </select>

                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Terbaru</option>
                        <option>Terlama</option>
                        <option>Paling Banyak Dibalas</option>
                    </select>

                </div>

            </div>

        </div>


        {{-- DUMMY DATA --}}
        @php

            $replies = [

                [
                    'user' => 'Budi Santoso',
                    'initial' => 'B',
                    'thread' => 'Bagaimana cara mengatasi karyawan yang sering terlambat?',
                    'category' => 'Manajemen Karyawan',
                    'content' => 'Menurut pengalaman saya, sebaiknya jangan langsung memberikan sanksi. Coba cari tahu dulu penyebab keterlambatannya dan buat aturan yang jelas.',
                    'status' => 'Published',
                    'date' => '5 Sep 2026, 09:42',
                    'reported' => false,
                ],

                [
                    'user' => 'Siti Rahma',
                    'initial' => 'S',
                    'thread' => 'Tips mencari kandidat yang cocok untuk bisnis kecil',
                    'category' => 'Rekrutmen',
                    'content' => 'Untuk bisnis kecil, saya biasanya lebih fokus melihat attitude dan kemauan belajar daripada hanya pengalaman kerja.',
                    'status' => 'Published',
                    'date' => '5 Sep 2026, 08:17',
                    'reported' => false,
                ],

                [
                    'user' => 'Andi Pratama',
                    'initial' => 'A',
                    'thread' => 'Sistem payroll sederhana untuk UMKM',
                    'category' => 'Payroll & Gaji',
                    'content' => 'Saya menggunakan spreadsheet dengan template khusus untuk menghitung gaji, lembur, dan tunjangan. Sejauh ini cukup membantu.',
                    'status' => 'Dilaporkan',
                    'date' => '4 Sep 2026, 21:35',
                    'reported' => true,
                ],

                [
                    'user' => 'Dewi Lestari',
                    'initial' => 'D',
                    'thread' => 'Apakah setiap bisnis wajib memiliki SOP?',
                    'category' => 'SOP & Operasional',
                    'content' => 'Menurut saya SOP sangat penting supaya pekerjaan tidak hanya bergantung pada satu orang.',
                    'status' => 'Published',
                    'date' => '4 Sep 2026, 16:21',
                    'reported' => false,
                ],

                [
                    'user' => 'Rizky Maulana',
                    'initial' => 'R',
                    'thread' => 'Bagaimana membangun leadership yang kuat?',
                    'category' => 'Kepemimpinan',
                    'content' => 'Pemimpin harus bisa memberikan contoh terlebih dahulu sebelum meminta tim melakukan sesuatu.',
                    'status' => 'Disembunyikan',
                    'date' => '3 Sep 2026, 14:08',
                    'reported' => false,
                ],

            ];

        @endphp


        {{-- DESKTOP --}}
        <div class="hidden overflow-x-auto lg:block">

            <table class="w-full text-left">

                <thead class="border-b border-slate-200 bg-slate-50">

                    <tr>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            User
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Reply
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Thread
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Waktu
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    @foreach ($replies as $reply)

                        <tr class="transition hover:bg-slate-50">

                            {{-- User --}}
                            <td class="whitespace-nowrap px-6 py-5">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-700">
                                        {{ $reply['initial'] }}
                                    </div>

                                    <div>
                                        <p class="font-semibold text-slate-900">
                                            {{ $reply['user'] }}
                                        </p>

                                        <p class="text-xs text-slate-400">
                                            Member
                                        </p>
                                    </div>

                                </div>

                            </td>


                            {{-- Reply --}}
                            <td class="max-w-sm px-6 py-5">

                                <p class="line-clamp-2 text-sm leading-6 text-slate-600">
                                    {{ $reply['content'] }}
                                </p>

                            </td>


                            {{-- Thread --}}
                            <td class="max-w-xs px-6 py-5">

                                <p class="line-clamp-2 text-sm font-medium text-slate-800">
                                    {{ $reply['thread'] }}
                                </p>

                                <span class="mt-2 inline-flex rounded-lg bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-500">
                                    {{ $reply['category'] }}
                                </span>

                            </td>


                            {{-- Status --}}
                            <td class="px-6 py-5">

                                @if ($reply['status'] === 'Published')

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        Published
                                    </span>

                                @elseif ($reply['status'] === 'Dilaporkan')

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-red-50 px-3 py-1.5 text-xs font-semibold text-red-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                        Dilaporkan
                                    </span>

                                @else

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1.5 text-xs font-semibold text-slate-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                                        Disembunyikan
                                    </span>

                                @endif

                            </td>


                            {{-- Date --}}
                            <td class="whitespace-nowrap px-6 py-5 text-sm text-slate-500">
                                {{ $reply['date'] }}
                            </td>


                            {{-- Actions --}}
                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-1">

                                    {{-- View --}}
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


                                    {{-- Hide --}}
                                    <button
                                        type="button"
                                        title="Sembunyikan"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-amber-50 hover:text-amber-600"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="2"
                                                d="M4 4l16 16"/>
                                            <path stroke-width="2"
                                                d="M10.6 10.6A2 2 0 0 0 13.4 13.4"/>
                                            <path stroke-width="2"
                                                d="M9.9 5.2A9.7 9.7 0 0 1 12 5c6 0 9.5 7 9.5 7a17.6 17.6 0 0 1-3 3.9M6.2 6.2C3.7 8.2 2.5 12 2.5 12s3.5 7 9.5 7c1 0 2-.2 2.9-.5"/>
                                        </svg>
                                    </button>


                                    {{-- Delete --}}
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


        {{-- MOBILE --}}
        <div class="divide-y divide-slate-100 lg:hidden">

            @foreach ($replies as $reply)

                <div class="p-5">

                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-700">
                            {{ $reply['initial'] }}
                        </div>

                        <div class="min-w-0 flex-1">

                            <div class="flex items-start justify-between gap-3">

                                <div>
                                    <p class="font-semibold text-slate-900">
                                        {{ $reply['user'] }}
                                    </p>

                                    <p class="text-xs text-slate-400">
                                        {{ $reply['date'] }}
                                    </p>
                                </div>

                                @if ($reply['status'] === 'Published')

                                    <span class="shrink-0 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                        Published
                                    </span>

                                @elseif ($reply['status'] === 'Dilaporkan')

                                    <span class="shrink-0 rounded-full bg-red-50 px-2.5 py-1 text-xs font-semibold text-red-700">
                                        Dilaporkan
                                    </span>

                                @else

                                    <span class="shrink-0 rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                                        Disembunyikan
                                    </span>

                                @endif

                            </div>


                            <div class="mt-4 rounded-xl bg-slate-50 p-4">

                                <p class="text-sm leading-6 text-slate-600">
                                    {{ $reply['content'] }}
                                </p>

                            </div>


                            <div class="mt-3">

                                <p class="text-xs text-slate-400">
                                    Membalas thread:
                                </p>

                                <p class="mt-1 text-sm font-medium text-slate-800">
                                    {{ $reply['thread'] }}
                                </p>

                                <span class="mt-2 inline-flex rounded-lg bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-500">
                                    {{ $reply['category'] }}
                                </span>

                            </div>


                            <div class="mt-4 flex gap-2 border-t border-slate-100 pt-3">

                                <button class="flex-1 rounded-lg bg-slate-50 py-2 text-sm font-medium text-slate-600 hover:bg-blue-50 hover:text-blue-600">
                                    Lihat
                                </button>

                                <button class="flex-1 rounded-lg bg-slate-50 py-2 text-sm font-medium text-slate-600 hover:bg-amber-50 hover:text-amber-600">
                                    Moderasi
                                </button>

                                <button class="rounded-lg bg-slate-50 px-4 py-2 text-sm font-medium text-slate-500 hover:bg-red-50 hover:text-red-600">
                                    Hapus
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>


        {{-- PAGINATION --}}
        <div class="flex flex-col gap-3 border-t border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">

            <p class="text-sm text-slate-500">
                Menampilkan
                <span class="font-semibold text-slate-700">1–5</span>
                dari
                <span class="font-semibold text-slate-700">8.724</span>
                replies
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
                    1.745
                </button>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600">
                    ›
                </button>

            </div>

        </div>

    </div>


    {{-- MODERATION INFO --}}
    <div class="rounded-2xl border border-red-100 bg-red-50 p-5">

        <div class="flex items-start gap-3">

            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-600">

                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2"
                        d="M12 9v4"/>
                    <path stroke-width="2"
                        d="M12 17h.01"/>
                    <path stroke-width="2"
                        d="M10.3 4.3 2.8 17.5A2 2 0 0 0 4.5 20h15a2 2 0 0 0 1.7-2.5L13.7 4.3a2 2 0 0 0-3.4 0Z"/>
                </svg>

            </div>

            <div>

                <h3 class="font-semibold text-red-900">
                    Perhatian Moderasi
                </h3>

                <p class="mt-1 text-sm leading-6 text-red-800">
                    Terdapat
                    <span class="font-semibold">17 reply yang dilaporkan</span>.
                    Periksa konten tersebut dan ambil tindakan jika diperlukan
                    untuk menjaga komunitas tetap aman dan nyaman.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection