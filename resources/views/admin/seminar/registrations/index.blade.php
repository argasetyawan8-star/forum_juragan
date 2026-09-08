@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- =========================================================
         ALERT SUCCESS
    ========================================================== --}}
    @if (session('success'))

        <div class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-4 text-sm text-emerald-700">

            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
                <i class="bi bi-check-circle-fill"></i>
            </div>

            <div>
                <p class="font-semibold">
                    Berhasil
                </p>

                <p class="mt-0.5">
                    {{ session('success') }}
                </p>
            </div>

        </div>

    @endif


    {{-- =========================================================
         HEADER
    ========================================================== --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

        <div>

            <div class="flex items-center gap-3">

                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-sm">
                    <i class="bi bi-people-fill text-lg"></i>
                </span>

                <div>
                    <h1 class="text-2xl font-bold text-slate-900">
                        Peserta Seminar
                    </h1>

                    <p class="mt-1 text-sm text-slate-500">
                        Kelola dan pantau seluruh peserta yang mendaftar seminar.
                    </p>
                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         STATISTICS
    ========================================================== --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Pendaftar
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        {{ $registrations->total() }}
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <i class="bi bi-people-fill text-xl"></i>
                </div>

            </div>

        </div>


        {{-- Data halaman --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Data Halaman
                    </p>

                    <p class="mt-2 text-3xl font-bold text-blue-600">
                        {{ $registrations->count() }}
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <i class="bi bi-list-ul text-xl"></i>
                </div>

            </div>

        </div>


        {{-- Terdaftar --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Terdaftar
                    </p>

                    <p class="mt-2 text-3xl font-bold text-amber-600">
                        {{ \App\Models\SeminarRegistration::where('status', 'registered')->count() }}
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <i class="bi bi-hourglass-split text-xl"></i>
                </div>

            </div>

        </div>


        {{-- Hadir --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Hadir
                    </p>

                    <p class="mt-2 text-3xl font-bold text-emerald-600">
                        {{ \App\Models\SeminarRegistration::where('status', 'attended')->count() }}
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="bi bi-person-check-fill text-xl"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         FILTER
    ========================================================== --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="mb-4 flex items-center gap-3">

            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-slate-100 text-slate-600">
                <i class="bi bi-funnel-fill"></i>
            </div>

            <div>
                <h2 class="font-semibold text-slate-900">
                    Filter Peserta
                </h2>

                <p class="text-xs text-slate-500">
                    Cari dan filter data peserta.
                </p>
            </div>

        </div>


        <form
            action="{{ route('admin.seminar.registrations') }}"
            method="GET"
            class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4"
        >

            {{-- Search --}}
            <div class="lg:col-span-2">

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Pencarian
                </label>

                <div class="relative">

                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i class="bi bi-search"></i>
                    </div>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari nama, email, WhatsApp, atau usaha..."
                        class="w-full rounded-xl border border-slate-200 bg-white py-2.5 pl-10 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >

                </div>

            </div>


            {{-- Seminar --}}
            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Seminar
                </label>

                <select
                    name="seminar_id"
                    class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >

                    <option value="">
                        Semua Seminar
                    </option>

                    @foreach ($seminars as $seminar)
                        <option
                            value="{{ $seminar->id }}"
                            @selected(request('seminar_id') == $seminar->id)
                        >
                            {{ $seminar->judul }}
                        </option>
                    @endforeach

                </select>

            </div>


            {{-- Status --}}
            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Status
                </label>

                <select
                    name="status"
                    class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >

                    <option value="">
                        Semua Status
                    </option>

                    <option
                        value="registered"
                        @selected(request('status') === 'registered')
                    >
                        Terdaftar
                    </option>

                    <option
                        value="confirmed"
                        @selected(request('status') === 'confirmed')
                    >
                        Dikonfirmasi
                    </option>

                    <option
                        value="attended"
                        @selected(request('status') === 'attended')
                    >
                        Hadir
                    </option>

                    <option
                        value="cancelled"
                        @selected(request('status') === 'cancelled')
                    >
                        Dibatalkan
                    </option>

                </select>

            </div>


            {{-- Buttons --}}
            <div class="flex items-end gap-2 md:col-span-2 lg:col-span-4">

                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    <i class="bi bi-search"></i>
                    Terapkan Filter
                </button>

                @if (request()->hasAny(['search', 'seminar_id', 'status']))

                    <a
                        href="{{ route('admin.seminar.registrations') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
                    >
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Reset
                    </a>

                @endif

            </div>

        </form>

    </div>


    {{-- =========================================================
         TABLE
    ========================================================== --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- Table Header --}}
        <div class="flex flex-col gap-1 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">

            <div>

                <h2 class="font-semibold text-slate-900">
                    Daftar Peserta
                </h2>

                <p class="text-xs text-slate-500">
                    Menampilkan
                    {{ $registrations->count() }}
                    dari
                    {{ $registrations->total() }}
                    peserta.
                </p>

            </div>

            <div class="flex items-center gap-2 text-xs text-slate-400">
                <i class="bi bi-database-check"></i>
                Data database
            </div>

        </div>


        {{-- =====================================================
             DESKTOP TABLE
        ====================================================== --}}
        <div class="hidden overflow-x-auto lg:block">

            <table class="min-w-full divide-y divide-slate-200">

                <thead class="bg-slate-50">

                    <tr>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Peserta
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Seminar
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            WhatsApp
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Tanggal Daftar
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    @forelse ($registrations as $registration)

                        <tr class="transition hover:bg-slate-50">

                            {{-- Peserta --}}
                            <td class="whitespace-nowrap px-6 py-4">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-50 text-sm font-bold text-blue-600">
                                        {{ strtoupper(substr($registration->nama, 0, 1)) }}
                                    </div>

                                    <div>

                                        <a
                                            href="{{ route('admin.seminar.registrations.show', $registration) }}"
                                            class="inline-flex items-center gap-1 font-semibold text-slate-900 transition hover:text-blue-600"
                                        >
                                            {{ $registration->nama }}

                                            <i class="bi bi-box-arrow-up-right text-xs opacity-0 transition group-hover:opacity-100"></i>
                                        </a>

                                        <p class="text-sm text-slate-500">
                                            {{ $registration->email }}
                                        </p>

                                        @if ($registration->nama_usaha)

                                            <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                                <i class="bi bi-building"></i>
                                                {{ $registration->nama_usaha }}
                                            </p>

                                        @endif

                                    </div>

                                </div>

                            </td>


                            {{-- Seminar --}}
                            <td class="px-6 py-4">

                                <p class="max-w-xs font-medium text-slate-800">
                                    {{ $registration->seminar->judul ?? '-' }}
                                </p>

                                @if ($registration->seminar)

                                    <p class="mt-1 flex items-center gap-1 text-xs text-slate-500">

                                        <i class="bi bi-calendar3"></i>

                                        {{ $registration->seminar->tanggal
                                            ->locale('id')
                                            ->translatedFormat('d M Y') }}

                                    </p>

                                @endif

                            </td>


                            {{-- WhatsApp --}}
                            <td class="whitespace-nowrap px-6 py-4">

                                <span class="inline-flex items-center gap-2 text-sm text-slate-700">

                                    <i class="bi bi-whatsapp text-emerald-500"></i>

                                    {{ $registration->whatsapp }}

                                </span>

                            </td>


                            {{-- Status --}}
                            <td class="whitespace-nowrap px-6 py-4">

                                @php

                                    $statusStyle = match ($registration->status) {

                                        'registered' =>
                                            'bg-amber-50 text-amber-700 ring-amber-200',

                                        'confirmed' =>
                                            'bg-blue-50 text-blue-700 ring-blue-200',

                                        'attended' =>
                                            'bg-emerald-50 text-emerald-700 ring-emerald-200',

                                        'cancelled' =>
                                            'bg-red-50 text-red-700 ring-red-200',

                                        default =>
                                            'bg-slate-50 text-slate-600 ring-slate-200',

                                    };

                                    $statusIcon = match ($registration->status) {

                                        'registered' =>
                                            'bi-hourglass-split',

                                        'confirmed' =>
                                            'bi-patch-check-fill',

                                        'attended' =>
                                            'bi-person-check-fill',

                                        'cancelled' =>
                                            'bi-x-circle-fill',

                                        default =>
                                            'bi-circle',

                                    };

                                    $statusLabel = match ($registration->status) {

                                        'registered' =>
                                            'Terdaftar',

                                        'confirmed' =>
                                            'Dikonfirmasi',

                                        'attended' =>
                                            'Hadir',

                                        'cancelled' =>
                                            'Dibatalkan',

                                        default =>
                                            ucfirst($registration->status),

                                    };

                                @endphp


                                <form
                                    action="{{ route('admin.seminar.registrations.status', $registration) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('PATCH')

                                    <div class="flex items-center gap-2">

                                        <span class="inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold ring-1 ring-inset {{ $statusStyle }}">
                                            <i class="bi {{ $statusIcon }}"></i>
                                            {{ $statusLabel }}
                                        </span>

                                        <select
                                            name="status"
                                            onchange="this.form.submit()"
                                            title="Ubah status"
                                            class="cursor-pointer rounded-xl border border-slate-200 bg-white px-2.5 py-1.5 text-xs font-semibold text-slate-700 shadow-sm outline-none transition hover:border-blue-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                        >

                                            <option
                                                value="registered"
                                                @selected($registration->status === 'registered')
                                            >
                                                Terdaftar
                                            </option>

                                            <option
                                                value="confirmed"
                                                @selected($registration->status === 'confirmed')
                                            >
                                                Dikonfirmasi
                                            </option>

                                            <option
                                                value="attended"
                                                @selected($registration->status === 'attended')
                                            >
                                                Hadir
                                            </option>

                                            <option
                                                value="cancelled"
                                                @selected($registration->status === 'cancelled')
                                            >
                                                Dibatalkan
                                            </option>

                                        </select>

                                    </div>

                                </form>

                            </td>


                            {{-- Tanggal --}}
                            <td class="whitespace-nowrap px-6 py-4">

                                <p class="text-sm font-medium text-slate-700">
                                    {{ $registration->created_at
                                        ->locale('id')
                                        ->translatedFormat('d M Y') }}
                                </p>

                                <p class="flex items-center gap-1 text-xs text-slate-400">

                                    <i class="bi bi-clock"></i>

                                    {{ $registration->created_at->format('H:i') }}

                                </p>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="5"
                                class="px-6 py-16 text-center"
                            >

                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                                    <i class="bi bi-person-x text-2xl"></i>
                                </div>

                                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                                    Tidak ada peserta
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Belum ada data peserta yang sesuai dengan filter.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- =====================================================
             MOBILE CARDS
        ====================================================== --}}
        <div class="divide-y divide-slate-100 lg:hidden">

            @forelse ($registrations as $registration)

                @php

                    $statusStyle = match ($registration->status) {

                        'registered' =>
                            'bg-amber-50 text-amber-700 ring-amber-200',

                        'confirmed' =>
                            'bg-blue-50 text-blue-700 ring-blue-200',

                        'attended' =>
                            'bg-emerald-50 text-emerald-700 ring-emerald-200',

                        'cancelled' =>
                            'bg-red-50 text-red-700 ring-red-200',

                        default =>
                            'bg-slate-50 text-slate-600 ring-slate-200',

                    };

                    $statusIcon = match ($registration->status) {

                        'registered' =>
                            'bi-hourglass-split',

                        'confirmed' =>
                            'bi-patch-check-fill',

                        'attended' =>
                            'bi-person-check-fill',

                        'cancelled' =>
                            'bi-x-circle-fill',

                        default =>
                            'bi-circle',

                    };

                    $statusLabel = match ($registration->status) {

                        'registered' =>
                            'Terdaftar',

                        'confirmed' =>
                            'Dikonfirmasi',

                        'attended' =>
                            'Hadir',

                        'cancelled' =>
                            'Dibatalkan',

                        default =>
                            ucfirst($registration->status),

                    };

                @endphp


                <div class="p-5">

                    {{-- Header Card --}}
                    <div class="flex items-start gap-3">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-blue-50 text-sm font-bold text-blue-600">
                            {{ strtoupper(substr($registration->nama, 0, 1)) }}
                        </div>

                        <div class="min-w-0 flex-1">

                            <div class="flex items-start justify-between gap-3">

                                <div class="min-w-0">

                                    <a
                                        href="{{ route('admin.seminar.registrations.show', $registration) }}"
                                        class="inline-flex items-center gap-1 font-semibold text-slate-900 transition hover:text-blue-600"
                                    >
                                        {{ $registration->nama }}

                                        <i class="bi bi-box-arrow-up-right text-xs text-slate-400"></i>
                                    </a>

                                    <p class="mt-1 truncate text-sm text-slate-500">
                                        {{ $registration->email }}
                                    </p>

                                </div>

                                <span class="inline-flex shrink-0 items-center gap-1.5 rounded-full px-3 py-1.5 text-xs font-semibold ring-1 ring-inset {{ $statusStyle }}">

                                    <i class="bi {{ $statusIcon }}"></i>

                                    {{ $statusLabel }}

                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Information --}}
                    <div class="mt-5 space-y-3 rounded-2xl bg-slate-50 p-4">

                        {{-- WhatsApp --}}
                        <div class="flex items-start gap-3">

                            <div class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-emerald-500 shadow-sm">
                                <i class="bi bi-whatsapp"></i>
                            </div>

                            <div>

                                <p class="text-xs text-slate-400">
                                    WhatsApp
                                </p>

                                <p class="mt-0.5 text-sm font-semibold text-slate-800">
                                    {{ $registration->whatsapp }}
                                </p>

                            </div>

                        </div>


                        {{-- Seminar --}}
                        <div class="flex items-start gap-3">

                            <div class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-blue-600 shadow-sm">
                                <i class="bi bi-easel2-fill"></i>
                            </div>

                            <div class="min-w-0">

                                <p class="text-xs text-slate-400">
                                    Seminar
                                </p>

                                <p class="mt-0.5 text-sm font-semibold text-slate-800">
                                    {{ $registration->seminar->judul ?? '-' }}
                                </p>

                                @if ($registration->seminar)

                                    <p class="mt-1 flex items-center gap-1 text-xs text-slate-500">

                                        <i class="bi bi-calendar3"></i>

                                        {{ $registration->seminar->tanggal
                                            ->locale('id')
                                            ->translatedFormat('d M Y') }}

                                    </p>

                                @endif

                            </div>

                        </div>


                        {{-- Business --}}
                        <div class="flex items-start gap-3">

                            <div class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-violet-600 shadow-sm">
                                <i class="bi bi-building"></i>
                            </div>

                            <div>

                                <p class="text-xs text-slate-400">
                                    Nama Usaha
                                </p>

                                <p class="mt-0.5 text-sm font-semibold text-slate-800">
                                    {{ $registration->nama_usaha ?: '-' }}
                                </p>

                                @if ($registration->jenis_usaha)

                                    <p class="mt-0.5 text-xs text-slate-500">
                                        {{ $registration->jenis_usaha }}
                                    </p>

                                @endif

                            </div>

                        </div>


                        {{-- Registration Date --}}
                        <div class="flex items-start gap-3">

                            <div class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-slate-500 shadow-sm">
                                <i class="bi bi-calendar-check"></i>
                            </div>

                            <div>

                                <p class="text-xs text-slate-400">
                                    Tanggal Daftar
                                </p>

                                <p class="mt-0.5 text-sm font-semibold text-slate-800">
                                    {{ $registration->created_at
                                        ->locale('id')
                                        ->translatedFormat('d M Y, H:i') }}
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Update Status --}}
                    <div class="mt-4">

                        <form
                            action="{{ route('admin.seminar.registrations.status', $registration) }}"
                            method="POST"
                        >

                            @csrf
                            @method('PATCH')

                            <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">
                                Ubah Status
                            </label>

                            <div class="relative">

                                <select
                                    name="status"
                                    onchange="this.form.submit()"
                                    class="w-full cursor-pointer appearance-none rounded-xl border border-slate-200 bg-white px-4 py-3 pr-10 text-sm font-semibold text-slate-700 outline-none transition hover:border-blue-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                >

                                    <option
                                        value="registered"
                                        @selected($registration->status === 'registered')
                                    >
                                        Terdaftar
                                    </option>

                                    <option
                                        value="confirmed"
                                        @selected($registration->status === 'confirmed')
                                    >
                                        Dikonfirmasi
                                    </option>

                                    <option
                                        value="attended"
                                        @selected($registration->status === 'attended')
                                    >
                                        Hadir
                                    </option>

                                    <option
                                        value="cancelled"
                                        @selected($registration->status === 'cancelled')
                                    >
                                        Dibatalkan
                                    </option>

                                </select>

                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-slate-400">
                                    <i class="bi bi-chevron-down text-sm"></i>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            @empty

                <div class="px-6 py-16 text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                        <i class="bi bi-person-x text-2xl"></i>
                    </div>

                    <h3 class="mt-4 text-sm font-semibold text-slate-900">
                        Tidak ada peserta
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Belum ada data peserta yang sesuai dengan filter.
                    </p>

                </div>

            @endforelse

        </div>


        {{-- =====================================================
             PAGINATION
        ====================================================== --}}
        @if ($registrations->hasPages())

            <div class="border-t border-slate-200 px-6 py-4">
                {{ $registrations->links() }}
            </div>

        @endif

    </div>

</div>

@endsection