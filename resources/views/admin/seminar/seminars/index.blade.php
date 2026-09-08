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

        {{-- Tambah Seminar --}}
        <a
            href="{{ route('admin.seminar.seminars.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4v16m8-8H4"
                />
            </svg>

            Tambah Seminar
        </a>

    </div>


    {{-- Stats --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total Seminar --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Seminar
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ $seminars->total() }}
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Semua seminar
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                    </svg>

                </div>

            </div>

        </div>


        {{-- Published --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Published
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ $seminars->getCollection()->where('status', 'published')->count() }}
                    </p>

                    <p class="mt-1 text-xs text-emerald-600">
                        Seminar dipublikasikan
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 13l4 4L19 7"
                        />
                    </svg>

                </div>

            </div>

        </div>


        {{-- Total Peserta --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Peserta
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ $seminars->sum('registrations_count') }}
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Pada halaman ini
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17 20h5V4H2v16h5m10 0v-6H7v6m10 0H7"
                        />
                    </svg>

                </div>

            </div>

        </div>


        {{-- Akan Datang --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Akan Datang
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ $seminars->getCollection()->where('tanggal', '>=', now()->toDateString())->count() }}
                    </p>

                    <p class="mt-1 text-xs text-blue-600">
                        Berdasarkan jadwal
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13 10V3L4 14h7v7l9-11h-7z"
                        />
                    </svg>

                </div>

            </div>

        </div>

    </div>


    {{-- Filter --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">

        <form
            method="GET"
            action="{{ route('admin.seminar.seminars') }}"
            class="flex flex-col gap-3 lg:flex-row"
        >

            {{-- Search --}}
            <div class="relative flex-1">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"
                    />
                </svg>

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari seminar, pembicara..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                >

            </div>


            {{-- Status --}}
            <select
                name="status"
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option value="">
                    Semua Status
                </option>

                <option
                    value="published"
                    {{ request('status') === 'published' ? 'selected' : '' }}
                >
                    Published
                </option>

                <option
                    value="draft"
                    {{ request('status') === 'draft' ? 'selected' : '' }}
                >
                    Draft
                </option>

                <option
                    value="completed"
                    {{ request('status') === 'completed' ? 'selected' : '' }}
                >
                    Selesai
                </option>

                <option
                    value="cancelled"
                    {{ request('status') === 'cancelled' ? 'selected' : '' }}
                >
                    Dibatalkan
                </option>
            </select>


            {{-- Format --}}
            <select
                name="format"
                class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            >
                <option value="">
                    Semua Format
                </option>

                <option
                    value="online"
                    {{ request('format') === 'online' ? 'selected' : '' }}
                >
                    Online
                </option>

                <option
                    value="offline"
                    {{ request('format') === 'offline' ? 'selected' : '' }}
                >
                    Offline
                </option>

                <option
                    value="hybrid"
                    {{ request('format') === 'hybrid' ? 'selected' : '' }}
                >
                    Hybrid
                </option>
            </select>


            {{-- Filter Button --}}
            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-slate-800"
            >
                Filter
            </button>

        </form>

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

                    @forelse ($seminars as $seminar)

                        @php

                            $formatClass = match ($seminar->format) {
                                'online' => 'bg-blue-50 text-blue-700',
                                'offline' => 'bg-amber-50 text-amber-700',
                                'hybrid' => 'bg-violet-50 text-violet-700',
                                default => 'bg-slate-50 text-slate-700',
                            };

                            $statusClass = match ($seminar->status) {
                                'published' => 'bg-emerald-50 text-emerald-700',
                                'draft' => 'bg-yellow-50 text-yellow-700',
                                'completed' => 'bg-blue-50 text-blue-700',
                                'cancelled' => 'bg-red-50 text-red-700',
                                default => 'bg-slate-50 text-slate-700',
                            };

                            $statusLabel = match ($seminar->status) {
                                'published' => 'Published',
                                'draft' => 'Draft',
                                'completed' => 'Selesai',
                                'cancelled' => 'Dibatalkan',
                                default => ucfirst($seminar->status),
                            };

                            $formatLabel = match ($seminar->format) {
                                'online' => 'Online',
                                'offline' => 'Offline',
                                'hybrid' => 'Hybrid',
                                default => ucfirst($seminar->format),
                            };

                            $progress = $seminar->kapasitas > 0
                                ? min(100, round(($seminar->registrations_count / $seminar->kapasitas) * 100))
                                : 0;

                        @endphp


                        <tr class="transition hover:bg-slate-50">

                            {{-- Seminar --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center gap-4">

                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-blue-50 text-blue-600">

                                        @if ($seminar->gambar)

                                            <img
                                                src="{{ asset('storage/' . $seminar->gambar) }}"
                                                alt="{{ $seminar->judul }}"
                                                class="h-full w-full object-cover"
                                            >

                                        @else

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10"
                                                />

                                                <rect
                                                    x="3"
                                                    y="5"
                                                    width="18"
                                                    height="16"
                                                    rx="2"
                                                />
                                            </svg>

                                        @endif

                                    </div>


                                    <div>

                                        <p class="font-semibold text-slate-900">
                                            {{ $seminar->judul }}
                                        </p>

                                        <p class="mt-1 text-xs text-slate-500">
                                            {{ $seminar->pembicara }}

                                            @if ($seminar->jabatan_pembicara)
                                                • {{ $seminar->jabatan_pembicara }}
                                            @endif
                                        </p>

                                    </div>

                                </div>

                            </td>


                            {{-- Jadwal --}}
                            <td class="px-6 py-5">

                                <p class="text-sm font-medium text-slate-700">
                                    {{ $seminar->tanggal->locale('id')->translatedFormat('d M Y') }}
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    {{ \Carbon\Carbon::parse($seminar->jam_mulai)->format('H.i') }}
                                    -
                                    {{ \Carbon\Carbon::parse($seminar->jam_selesai)->format('H.i') }}
                                    WIB
                                </p>

                            </td>


                            {{-- Format --}}
                            <td class="px-6 py-5">

                                <span class="rounded-full px-3 py-1 text-xs font-medium {{ $formatClass }}">
                                    {{ $formatLabel }}
                                </span>

                            </td>


                            {{-- Peserta --}}
                            <td class="px-6 py-5">

                                <p class="text-sm font-semibold text-slate-700">
                                    {{ $seminar->registrations_count }}

                                    @if ($seminar->kapasitas)
                                        / {{ $seminar->kapasitas }}
                                    @endif
                                </p>

                                @if ($seminar->kapasitas)

                                    <div class="mt-2 h-1.5 w-24 overflow-hidden rounded-full bg-slate-100">

                                        <div
                                            class="h-full rounded-full bg-blue-600"
                                            style="width: {{ $progress }}%"
                                        ></div>

                                    </div>

                                @endif

                            </td>


                            {{-- Harga --}}
                            <td class="px-6 py-5 text-sm font-semibold text-slate-700">

                                @if ($seminar->harga > 0)

                                    Rp{{ number_format($seminar->harga, 0, ',', '.') }}

                                @else

                                    Gratis

                                @endif

                            </td>


                            {{-- Status --}}
                            <td class="px-6 py-5">

                                <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $statusClass }}">
                                    {{ $statusLabel }}
                                </span>

                            </td>


                            {{-- Aksi --}}
                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-2">

                                    {{-- Lihat --}}
                                    <a
                                        href="{{ route('admin.seminar.seminars.show', $seminar) }}"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                                        title="Lihat"
                                    >
                                        👁
                                    </a>


                                    {{-- Edit --}}
                                    <a
                                        href="{{ route('admin.seminar.seminars.edit', $seminar) }}"
                                        class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                                        title="Edit"
                                    >
                                        ✎
                                    </a>


                                    {{-- Hapus --}}
                                    <form
                                        action="{{ route('admin.seminar.seminars.destroy', $seminar) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus seminar ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="rounded-lg p-2 text-slate-500 transition hover:bg-red-50 hover:text-red-600"
                                            title="Hapus"
                                        >
                                            🗑
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="px-6 py-16 text-center">

                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100">
                                    📅
                                </div>

                                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                                    Belum ada seminar
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Belum ada data seminar yang tersedia.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- Pagination --}}
        @if ($seminars->hasPages())

            <div class="border-t border-slate-200 px-6 py-4">

                {{ $seminars->withQueryString()->links() }}

            </div>

        @endif

    </div>


    {{-- Mobile Cards --}}
    <div class="space-y-4 lg:hidden">

        @forelse ($seminars as $seminar)

            @php

                $statusClass = match ($seminar->status) {
                    'published' => 'bg-emerald-50 text-emerald-700',
                    'draft' => 'bg-yellow-50 text-yellow-700',
                    'completed' => 'bg-blue-50 text-blue-700',
                    'cancelled' => 'bg-red-50 text-red-700',
                    default => 'bg-slate-50 text-slate-700',
                };

                $statusLabel = match ($seminar->status) {
                    'published' => 'Published',
                    'draft' => 'Draft',
                    'completed' => 'Selesai',
                    'cancelled' => 'Dibatalkan',
                    default => ucfirst($seminar->status),
                };

            @endphp


            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                <div class="flex items-start justify-between gap-4">

                    <div class="flex gap-3">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            📅
                        </div>

                        <div>

                            <h3 class="font-semibold text-slate-900">
                                {{ $seminar->judul }}
                            </h3>

                            <p class="mt-1 text-xs text-slate-500">
                                {{ $seminar->pembicara }}

                                @if ($seminar->jabatan_pembicara)
                                    • {{ $seminar->jabatan_pembicara }}
                                @endif
                            </p>

                        </div>

                    </div>

                    <span class="rounded-full px-2.5 py-1 text-xs font-semibold {{ $statusClass }}">
                        {{ $statusLabel }}
                    </span>

                </div>


                <div class="mt-5 grid grid-cols-2 gap-4 border-t border-slate-100 pt-4">

                    <div>

                        <p class="text-xs text-slate-400">
                            Jadwal
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            {{ $seminar->tanggal->locale('id')->translatedFormat('d M Y') }}
                        </p>

                    </div>


                    <div>

                        <p class="text-xs text-slate-400">
                            Peserta
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">

                            {{ $seminar->registrations_count }}

                            @if ($seminar->kapasitas)
                                / {{ $seminar->kapasitas }}
                            @endif

                        </p>

                    </div>


                    <div>

                        <p class="text-xs text-slate-400">
                            Format
                        </p>

                        <p class="mt-1 text-sm font-medium capitalize text-slate-700">
                            {{ $seminar->format }}
                        </p>

                    </div>


                    <div>

                        <p class="text-xs text-slate-400">
                            Harga
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-700">

                            @if ($seminar->harga > 0)
                                Rp{{ number_format($seminar->harga, 0, ',', '.') }}
                            @else
                                Gratis
                            @endif

                        </p>

                    </div>

                </div>


                <div class="mt-5 flex gap-2 border-t border-slate-100 pt-4">

                    <a
                        href="{{ route('admin.seminar.seminars.show', $seminar) }}"
                        class="flex-1 rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-medium text-slate-700 transition hover:bg-slate-50"
                    >
                        Lihat
                    </a>

                    <a
                        href="{{ route('admin.seminar.seminars.edit', $seminar) }}"
                        class="flex-1 rounded-xl bg-blue-600 px-4 py-2.5 text-center text-sm font-medium text-white transition hover:bg-blue-700"
                    >
                        Edit
                    </a>

                </div>

            </div>

        @empty

            <div class="rounded-2xl border border-slate-200 bg-white p-10 text-center shadow-sm">

                <div class="text-4xl">
                    📅
                </div>

                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                    Belum ada seminar
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Belum ada data seminar yang tersedia.
                </p>

            </div>

        @endforelse

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