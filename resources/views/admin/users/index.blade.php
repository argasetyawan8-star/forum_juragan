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
                <span class="text-slate-900">Users</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                Manajemen Users
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola pengguna yang terdaftar di Forum Juragan.
            </p>
        </div>

        <button
            type="button"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 hover:shadow-md"
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4v16m8-8H4"/>
            </svg>
            Tambah User
        </button>
    </div>


    {{-- STAT CARDS --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Users
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        1,248
                    </p>

                    <p class="mt-2 text-xs font-medium text-emerald-600">
                        +12% bulan ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 0 0-4-4h-1M9 20H4v-2a4 4 0 0 1 4-4h1m8-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-8 0a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Active --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        User Aktif
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        1,186
                    </p>

                    <p class="mt-2 text-xs font-medium text-emerald-600">
                        95.0% dari total
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- New --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        User Baru
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        84
                    </p>

                    <p class="mt-2 text-xs font-medium text-blue-600">
                        Bulan ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Admin --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Admin
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        6
                    </p>

                    <p class="mt-2 text-xs font-medium text-slate-500">
                        Administrator
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2Zm10-9V7a4 4 0 0 0-8 0v4h8Z"/>
                    </svg>
                </div>
            </div>
        </div>

    </div>


    {{-- FILTER + TABLE --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- Toolbar --}}
        <div class="border-b border-slate-200 p-4 sm:p-5">

            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

                {{-- Search --}}
                <div class="relative w-full lg:max-w-md">
                    <svg
                        class="pointer-events-none absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>

                    <input
                        type="text"
                        placeholder="Cari nama atau email..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    >
                </div>

                {{-- Filters --}}
                <div class="flex flex-col gap-3 sm:flex-row">

                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Semua Role</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>

                    <select
                        class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                        <option>Semua Status</option>
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select>

                </div>

            </div>

        </div>


        {{-- Desktop Table --}}
        <div class="hidden overflow-x-auto md:block">

            <table class="w-full text-left">

                <thead class="border-b border-slate-200 bg-slate-50">
                    <tr>
                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            User
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Bisnis
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Role
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Bergabung
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">

                    @php
                        $users = [
                            [
                                'name' => 'Budi Santoso',
                                'email' => 'budi@example.com',
                                'business' => 'Maju Jaya Group',
                                'role' => 'User',
                                'status' => 'Aktif',
                                'date' => '02 Sep 2026',
                            ],
                            [
                                'name' => 'Siti Rahma',
                                'email' => 'siti@example.com',
                                'business' => 'Rahma Fashion',
                                'role' => 'User',
                                'status' => 'Aktif',
                                'date' => '01 Sep 2026',
                            ],
                            [
                                'name' => 'Andi Pratama',
                                'email' => 'andi@example.com',
                                'business' => 'Pratama Food',
                                'role' => 'User',
                                'status' => 'Aktif',
                                'date' => '30 Agu 2026',
                            ],
                            [
                                'name' => 'Dewi Lestari',
                                'email' => 'dewi@example.com',
                                'business' => 'Dewi Beauty',
                                'role' => 'User',
                                'status' => 'Nonaktif',
                                'date' => '28 Agu 2026',
                            ],
                            [
                                'name' => 'Admin Forum',
                                'email' => 'admin@example.com',
                                'business' => 'Forum Juragan',
                                'role' => 'Admin',
                                'status' => 'Aktif',
                                'date' => '20 Agu 2026',
                            ],
                        ];
                    @endphp

                    @foreach ($users as $user)

                        <tr class="transition hover:bg-slate-50">

                            {{-- User --}}
                            <td class="px-6 py-4">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-700">
                                        {{ strtoupper(substr($user['name'], 0, 1)) }}
                                    </div>

                                    <div>
                                        <p class="font-semibold text-slate-900">
                                            {{ $user['name'] }}
                                        </p>

                                        <p class="text-sm text-slate-500">
                                            {{ $user['email'] }}
                                        </p>
                                    </div>

                                </div>

                            </td>

                            {{-- Business --}}
                            <td class="px-6 py-4 text-sm text-slate-600">
                                {{ $user['business'] }}
                            </td>

                            {{-- Role --}}
                            <td class="px-6 py-4">

                                @if ($user['role'] === 'Admin')
                                    <span class="inline-flex rounded-full bg-violet-100 px-3 py-1 text-xs font-semibold text-violet-700">
                                        Admin
                                    </span>
                                @else
                                    <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                                        User
                                    </span>
                                @endif

                            </td>

                            {{-- Status --}}
                            <td class="px-6 py-4">

                                @if ($user['status'] === 'Aktif')
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        Aktif
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-500">
                                        <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                                        Nonaktif
                                    </span>
                                @endif

                            </td>

                            {{-- Date --}}
                            <td class="px-6 py-4 text-sm text-slate-500">
                                {{ $user['date'] }}
                            </td>

                            {{-- Actions --}}
                            <td class="px-6 py-4">

                                <div class="flex justify-end gap-2">

                                    <button
                                        type="button"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-blue-50 hover:text-blue-600"
                                        title="Lihat"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"/>
                                            <circle cx="12" cy="12" r="2.5" stroke-width="2"/>
                                        </svg>
                                    </button>

                                    <button
                                        type="button"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-amber-50 hover:text-amber-600"
                                        title="Edit"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="m12 20 8.5-8.5a2.12 2.12 0 0 0-3-3L9 17v3h3Z"/>
                                            <path stroke-linecap="round" stroke-width="2"
                                                d="M15.5 9.5 18 12"/>
                                        </svg>
                                    </button>

                                    <button
                                        type="button"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-red-50 hover:text-red-600"
                                        title="Hapus"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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


        {{-- Mobile Cards --}}
        <div class="divide-y divide-slate-100 md:hidden">

            @foreach ($users as $user)

                <div class="p-4">

                    <div class="flex items-start justify-between gap-3">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-700">
                                {{ strtoupper(substr($user['name'], 0, 1)) }}
                            </div>

                            <div>
                                <p class="font-semibold text-slate-900">
                                    {{ $user['name'] }}
                                </p>

                                <p class="text-sm text-slate-500">
                                    {{ $user['email'] }}
                                </p>
                            </div>

                        </div>

                        @if ($user['status'] === 'Aktif')
                            <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                Aktif
                            </span>
                        @else
                            <span class="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-500">
                                Nonaktif
                            </span>
                        @endif

                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-3 text-sm">

                        <div>
                            <p class="text-xs text-slate-400">Bisnis</p>
                            <p class="mt-1 font-medium text-slate-700">
                                {{ $user['business'] }}
                            </p>
                        </div>

                        <div>
                            <p class="text-xs text-slate-400">Role</p>
                            <p class="mt-1 font-medium text-slate-700">
                                {{ $user['role'] }}
                            </p>
                        </div>

                        <div>
                            <p class="text-xs text-slate-400">Bergabung</p>
                            <p class="mt-1 font-medium text-slate-700">
                                {{ $user['date'] }}
                            </p>
                        </div>

                    </div>

                    <div class="mt-4 flex gap-2 border-t border-slate-100 pt-3">

                        <button class="flex-1 rounded-lg bg-slate-50 py-2 text-sm font-medium text-slate-600 hover:bg-blue-50 hover:text-blue-600">
                            Lihat
                        </button>

                        <button class="flex-1 rounded-lg bg-slate-50 py-2 text-sm font-medium text-slate-600 hover:bg-amber-50 hover:text-amber-600">
                            Edit
                        </button>

                        <button class="rounded-lg bg-slate-50 px-3 py-2 text-sm font-medium text-slate-500 hover:bg-red-50 hover:text-red-600">
                            Hapus
                        </button>

                    </div>

                </div>

            @endforeach

        </div>


        {{-- Pagination Dummy --}}
        <div class="flex flex-col gap-3 border-t border-slate-200 px-4 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">

            <p class="text-sm text-slate-500">
                Menampilkan <span class="font-semibold text-slate-700">1–5</span>
                dari <span class="font-semibold text-slate-700">1.248</span> users
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

                <span class="px-2 text-slate-400">...</span>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                    250
                </button>

                <button class="rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                    ›
                </button>

            </div>

        </div>

    </div>

</div>

@endsection