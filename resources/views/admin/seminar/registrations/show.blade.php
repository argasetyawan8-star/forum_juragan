@extends('admin.layouts.app')

@section('content')

@php
    $statusStyle = match ($registration->status) {
        'registered' => 'bg-amber-50 text-amber-700 ring-amber-200',
        'confirmed' => 'bg-blue-50 text-blue-700 ring-blue-200',
        'attended' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
        'cancelled' => 'bg-red-50 text-red-700 ring-red-200',
        default => 'bg-slate-50 text-slate-600 ring-slate-200',
    };

    $statusIcon = match ($registration->status) {
        'registered' => 'bi-hourglass-split',
        'confirmed' => 'bi-patch-check-fill',
        'attended' => 'bi-person-check-fill',
        'cancelled' => 'bi-x-circle-fill',
        default => 'bi-circle',
    };

    $statusLabel = match ($registration->status) {
        'registered' => 'Terdaftar',
        'confirmed' => 'Dikonfirmasi',
        'attended' => 'Hadir',
        'cancelled' => 'Dibatalkan',
        default => ucfirst($registration->status),
    };

    $tanggalSeminar = $registration->seminar?->tanggal
        ? $registration->seminar->tanggal
            ->locale('id')
            ->translatedFormat('l, d F Y')
        : '-';

    $jamMulai = $registration->seminar?->jam_mulai
        ? \Carbon\Carbon::parse($registration->seminar->jam_mulai)->format('H.i')
        : '-';

    $jamSelesai = $registration->seminar?->jam_selesai
        ? \Carbon\Carbon::parse($registration->seminar->jam_selesai)->format('H.i')
        : '-';

    $formatLabel = match ($registration->seminar?->format) {
        'online' => 'Online',
        'offline' => 'Offline',
        'hybrid' => 'Hybrid',
        default => $registration->seminar?->format
            ? ucfirst($registration->seminar->format)
            : '-',
    };

    $formatIcon = match ($registration->seminar?->format) {
        'online' => 'bi-globe2',
        'offline' => 'bi-geo-alt-fill',
        'hybrid' => 'bi-shuffle',
        default => 'bi-calendar-event',
    };

    $tanggalDaftar = $registration->created_at
        ->locale('id')
        ->translatedFormat('d F Y');

    $waktuDaftar = $registration->created_at->format('H:i');

    $initial = strtoupper(substr($registration->nama, 0, 1));

    /*
    |--------------------------------------------------------------------------
    | Nomor WhatsApp
    |--------------------------------------------------------------------------
    | Ubah 08xxx menjadi 628xxx untuk link WhatsApp.
    */
    $whatsappNumber = preg_replace('/[^0-9]/', '', $registration->whatsapp);

    if (str_starts_with($whatsappNumber, '0')) {
        $whatsappNumber = '62' . substr($whatsappNumber, 1);
    }
@endphp


<div class="space-y-6">

    {{-- =====================================================
         BREADCRUMB
    ====================================================== --}}
    <div class="flex flex-wrap items-center gap-2 text-sm text-slate-500">

        <a
            href="{{ route('admin.dashboard') }}"
            class="transition hover:text-blue-600"
        >
            Dashboard
        </a>

        <i class="bi bi-chevron-right text-xs text-slate-400"></i>

        <a
            href="{{ route('admin.seminar.registrations') }}"
            class="transition hover:text-blue-600"
        >
            Peserta Seminar
        </a>

        <i class="bi bi-chevron-right text-xs text-slate-400"></i>

        <span class="font-medium text-slate-700">
            Detail Peserta
        </span>

    </div>


    {{-- =====================================================
         HEADER
    ====================================================== --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>

            <div class="flex items-center gap-3">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-white shadow-sm">
                    <i class="bi bi-person-vcard-fill text-xl"></i>
                </div>

                <div>

                    <h1 class="text-2xl font-bold text-slate-900">
                        Detail Peserta
                    </h1>

                    <p class="mt-1 text-sm text-slate-500">
                        Informasi lengkap peserta seminar.
                    </p>

                </div>

            </div>

        </div>

        <a
            href="{{ route('admin.seminar.registrations') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 shadow-sm transition hover:bg-slate-50"
        >
            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>

    </div>


    {{-- =====================================================
         MAIN GRID
    ====================================================== --}}
    <div class="grid gap-6 lg:grid-cols-3">


        {{-- =================================================
             LEFT CONTENT
        ================================================== --}}
        <div class="space-y-6 lg:col-span-2">

            {{-- =================================================
                 PARTICIPANT PROFILE
            ================================================== --}}
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <div class="border-b border-slate-100 px-6 py-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <div>

                            <h2 class="font-semibold text-slate-900">
                                Data Peserta
                            </h2>

                            <p class="text-xs text-slate-500">
                                Informasi kontak peserta
                            </p>

                        </div>

                    </div>

                </div>


                <div class="p-6">

                    {{-- Identity --}}
                    <div class="flex flex-col gap-5 sm:flex-row sm:items-center">

                        <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-3xl bg-gradient-to-br from-blue-500 to-indigo-600 text-2xl font-bold text-white shadow-lg shadow-blue-600/20">
                            {{ $initial }}
                        </div>

                        <div>

                            <h3 class="text-2xl font-bold text-slate-900">
                                {{ $registration->nama }}
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Peserta seminar
                            </p>

                            <div class="mt-3 flex flex-wrap gap-2">

                                <span class="inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold ring-1 ring-inset {{ $statusStyle }}">
                                    <i class="bi {{ $statusIcon }}"></i>
                                    {{ $statusLabel }}
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Contact --}}
                    <div class="mt-7 grid gap-4 sm:grid-cols-2">

                        {{-- Email --}}
                        <div class="rounded-2xl bg-slate-50 p-4">

                            <div class="flex items-start gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>

                                <div class="min-w-0">

                                    <p class="text-xs font-medium text-slate-400">
                                        Email
                                    </p>

                                    <p class="mt-1 break-all text-sm font-semibold text-slate-800">
                                        {{ $registration->email }}
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- WhatsApp --}}
                        <div class="rounded-2xl bg-slate-50 p-4">

                            <div class="flex items-start gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 shadow-sm">
                                    <i class="bi bi-whatsapp"></i>
                                </div>

                                <div>

                                    <p class="text-xs font-medium text-slate-400">
                                        WhatsApp
                                    </p>

                                    <p class="mt-1 text-sm font-semibold text-slate-800">
                                        {{ $registration->whatsapp }}
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Contact Actions --}}
                    <div class="mt-5 flex flex-col gap-3 sm:flex-row">

                        @if ($whatsappNumber)

                            <a
                                href="https://wa.me/{{ $whatsappNumber }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-2 rounded-xl bg-emerald-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-700"
                            >
                                <i class="bi bi-whatsapp"></i>
                                Hubungi WhatsApp
                            </a>

                        @endif

                        <a
                            href="mailto:{{ $registration->email }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                        >
                            <i class="bi bi-envelope"></i>
                            Kirim Email
                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 BUSINESS
            ================================================== --}}
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <div class="border-b border-slate-100 px-6 py-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                            <i class="bi bi-building-fill"></i>
                        </div>

                        <div>

                            <h2 class="font-semibold text-slate-900">
                                Data Bisnis
                            </h2>

                            <p class="text-xs text-slate-500">
                                Informasi bisnis peserta
                            </p>

                        </div>

                    </div>

                </div>


                <div class="grid gap-4 p-6 sm:grid-cols-2">

                    <div class="rounded-2xl border border-slate-100 p-4">

                        <div class="flex items-center gap-2 text-xs font-medium text-slate-400">
                            <i class="bi bi-shop"></i>
                            Nama Usaha
                        </div>

                        <p class="mt-2 font-semibold text-slate-900">
                            {{ $registration->nama_usaha ?: '-' }}
                        </p>

                    </div>


                    <div class="rounded-2xl border border-slate-100 p-4">

                        <div class="flex items-center gap-2 text-xs font-medium text-slate-400">
                            <i class="bi bi-briefcase"></i>
                            Jenis Usaha
                        </div>

                        <p class="mt-2 font-semibold text-slate-900">
                            {{ $registration->jenis_usaha ?: '-' }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 EXPECTATION
            ================================================== --}}
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <div class="border-b border-slate-100 px-6 py-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                            <i class="bi bi-chat-quote-fill"></i>
                        </div>

                        <div>

                            <h2 class="font-semibold text-slate-900">
                                Harapan Peserta
                            </h2>

                            <p class="text-xs text-slate-500">
                                Ekspektasi peserta terhadap seminar
                            </p>

                        </div>

                    </div>

                </div>


                <div class="p-6">

                    @if ($registration->harapan)

                        <div class="rounded-2xl bg-slate-50 p-5">

                            <p class="whitespace-pre-line text-sm leading-7 text-slate-700">
                                {{ $registration->harapan }}
                            </p>

                        </div>

                    @else

                        <div class="flex items-center gap-3 rounded-2xl bg-slate-50 p-5 text-sm text-slate-500">

                            <i class="bi bi-info-circle"></i>

                            Peserta tidak mengisi harapan atau kebutuhan seminar.

                        </div>

                    @endif

                </div>

            </div>

        </div>


        {{-- =================================================
             RIGHT CONTENT
        ================================================== --}}
        <div class="space-y-6">


            {{-- =================================================
                 SEMINAR INFO
            ================================================== --}}
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <div class="bg-gradient-to-br from-blue-600 to-indigo-700 px-6 py-6 text-white">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/15">
                        <i class="bi bi-easel2-fill text-xl"></i>
                    </div>

                    <p class="mt-5 text-xs font-semibold uppercase tracking-wider text-blue-100">
                        Seminar
                    </p>

                    <h2 class="mt-2 text-xl font-bold leading-7">
                        {{ $registration->seminar->judul ?? 'Seminar tidak ditemukan' }}
                    </h2>

                </div>


                <div class="space-y-5 p-6">

                    {{-- Date --}}
                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-calendar3"></i>
                        </div>

                        <div>

                            <p class="text-xs font-medium text-slate-400">
                                Tanggal
                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-900">
                                {{ $tanggalSeminar }}
                            </p>

                        </div>

                    </div>


                    {{-- Time --}}
                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                            <i class="bi bi-clock-fill"></i>
                        </div>

                        <div>

                            <p class="text-xs font-medium text-slate-400">
                                Waktu
                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-900">
                                {{ $jamMulai }} - {{ $jamSelesai }} WIB
                            </p>

                        </div>

                    </div>


                    {{-- Format --}}
                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                            <i class="bi {{ $formatIcon }}"></i>
                        </div>

                        <div>

                            <p class="text-xs font-medium text-slate-400">
                                Format
                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-900">
                                {{ $formatLabel }}
                            </p>

                        </div>

                    </div>


                    {{-- Location --}}
                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>

                        <div>

                            <p class="text-xs font-medium text-slate-400">
                                Lokasi
                            </p>

                            <p class="mt-1 text-sm font-semibold text-slate-900">
                                {{ $registration->seminar->lokasi ?? 'Online' }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 REGISTRATION INFO
            ================================================== --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-100 text-slate-600">
                        <i class="bi bi-clock-history"></i>
                    </div>

                    <div>

                        <h2 class="font-semibold text-slate-900">
                            Informasi Pendaftaran
                        </h2>

                        <p class="text-xs text-slate-500">
                            Riwayat pendaftaran peserta
                        </p>

                    </div>

                </div>


                <div class="mt-5 divide-y divide-slate-100">

                    {{-- Date --}}
                    <div class="flex items-center justify-between gap-4 py-3">

                        <span class="text-sm text-slate-500">
                            Tanggal
                        </span>

                        <span class="text-right text-sm font-semibold text-slate-800">
                            {{ $tanggalDaftar }}
                        </span>

                    </div>


                    {{-- Time --}}
                    <div class="flex items-center justify-between gap-4 py-3">

                        <span class="text-sm text-slate-500">
                            Waktu
                        </span>

                        <span class="text-sm font-semibold text-slate-800">
                            {{ $waktuDaftar }} WIB
                        </span>

                    </div>


                    {{-- Status --}}
                    <div class="flex items-center justify-between gap-4 py-3">

                        <span class="text-sm text-slate-500">
                            Status
                        </span>

                        <span class="inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold ring-1 ring-inset {{ $statusStyle }}">
                            <i class="bi {{ $statusIcon }}"></i>
                            {{ $statusLabel }}
                        </span>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 UPDATE STATUS
            ================================================== --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <i class="bi bi-arrow-repeat"></i>
                    </div>

                    <div>

                        <h2 class="font-semibold text-slate-900">
                            Ubah Status
                        </h2>

                        <p class="text-xs text-slate-500">
                            Perbarui status peserta
                        </p>

                    </div>

                </div>


                <form
                    action="{{ route('admin.seminar.registrations.status', $registration) }}"
                    method="POST"
                    class="mt-5"
                >

                    @csrf
                    @method('PATCH')

                    <label
                        for="status"
                        class="mb-2 block text-sm font-medium text-slate-700"
                    >
                        Status Peserta
                    </label>

                    <div class="relative">

                        <select
                            id="status"
                            name="status"
                            class="w-full appearance-none rounded-xl border border-slate-200 bg-white px-4 py-3 pr-10 text-sm font-semibold text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
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
                            <i class="bi bi-chevron-down"></i>
                        </div>

                    </div>


                    <button
                        type="submit"
                        class="mt-3 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        <i class="bi bi-check-lg"></i>
                        Simpan Status
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection