@extends('layouts.landing')

@section('content')

<div
    class="min-h-screen bg-slate-50"
    x-data="{ filter: 'semua' }"
>

    {{-- =========================================================
        HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-slate-50 pt-28 pb-16 sm:pt-32 sm:pb-20">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute -right-32 -top-32 h-80 w-80 rounded-full bg-blue-100 blur-3xl opacity-60"></div>
            <div class="absolute -bottom-32 -left-32 h-80 w-80 rounded-full bg-emerald-100 blur-3xl opacity-50"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl">

                {{-- Badge --}}
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-blue-50 px-3 py-1.5 text-xs font-semibold text-blue-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>

                    SEMINAR & EVENT BISNIS
                </div>

                {{-- Heading --}}
                <h1 class="text-4xl font-bold leading-tight tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">

                    Upgrade Skill,

                    <span class="text-blue-600">
                        Upgrade Bisnis.
                    </span>

                </h1>

                {{-- Description --}}
                <p class="mt-6 max-w-2xl text-base leading-relaxed text-slate-600 sm:text-lg">
                    Ikuti seminar dan event bisnis bersama para praktisi,
                    mentor, dan sesama pemilik usaha untuk mendapatkan insight
                    yang bisa langsung diterapkan dalam bisnis.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
        FILTER SECTION
    ========================================================== --}}
    <section class="pb-8">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                        EVENT BISNIS
                    </p>

                    <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">
                        Temukan Seminar
                    </h2>

                    <p class="mt-2 text-sm text-slate-500 sm:text-base">
                        Pilih event yang sesuai dengan kebutuhan bisnis kamu.
                    </p>

                </div>


                {{-- Filter --}}
                <div class="flex w-fit items-center gap-1 rounded-xl border border-slate-200 bg-white p-1 shadow-sm">

                    <button
                        type="button"
                        @click="filter = 'semua'"
                        :class="filter === 'semua'
                            ? 'bg-blue-600 text-white shadow-sm'
                            : 'text-slate-600 hover:bg-slate-50'"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition"
                    >
                        Semua
                    </button>

                    <button
                        type="button"
                        @click="filter = 'mendatang'"
                        :class="filter === 'mendatang'
                            ? 'bg-blue-600 text-white shadow-sm'
                            : 'text-slate-600 hover:bg-slate-50'"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition"
                    >
                        Mendatang
                    </button>

                    <button
                        type="button"
                        @click="filter = 'selesai'"
                        :class="filter === 'selesai'
                            ? 'bg-blue-600 text-white shadow-sm'
                            : 'text-slate-600 hover:bg-slate-50'"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition"
                    >
                        Selesai
                    </button>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        SEMINAR LIST
    ========================================================== --}}
    <section class="pb-20">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            @if($seminars->count())

                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                    @foreach($seminars as $index => $seminar)

                        @php

                            $gradients = [
                                'from-blue-600 to-blue-800',
                                'from-emerald-500 to-emerald-700',
                                'from-indigo-600 to-purple-700',
                            ];

                            $softColors = [
                                'bg-blue-50 text-blue-600',
                                'bg-emerald-50 text-emerald-600',
                                'bg-indigo-50 text-indigo-600',
                            ];

                            $gradient = $gradients[$index % count($gradients)];

                            $softColor = $softColors[$index % count($softColors)];

                            $tanggal = $seminar->tanggal
                                ->locale('id')
                                ->translatedFormat('l, d F Y');

                            $tanggalSingkat = $seminar->tanggal
                                ->locale('id')
                                ->translatedFormat('d M Y');

                            $jamMulai = \Carbon\Carbon::parse(
                                $seminar->jam_mulai
                            )->format('H.i');

                            $jamSelesai = \Carbon\Carbon::parse(
                                $seminar->jam_selesai
                            )->format('H.i');

                            $formatLabel = match ($seminar->format) {
                                'online' => 'ONLINE',
                                'offline' => 'OFFLINE',
                                'hybrid' => 'HYBRID',
                                default => strtoupper($seminar->format),
                            };

                            $formatIcon = match ($seminar->format) {
                                'online' => 'bi-globe2',
                                'offline' => 'bi-geo-alt',
                                'hybrid' => 'bi-arrow-left-right',
                                default => 'bi-calendar-event',
                            };

                            $isSelesai = $seminar->tanggal->lt(today());

                            $jumlahPeserta = $seminar->registrations()->count();

                            $sisaKapasitas = $seminar->kapasitas
                                ? max($seminar->kapasitas - $jumlahPeserta, 0)
                                : null;

                            $kapasitasPenuh =
                                $seminar->kapasitas !== null &&
                                $sisaKapasitas <= 0;

                        @endphp


                        {{-- =================================================
                            SEMINAR CARD
                        ================================================== --}}
                        <article
                            x-show="
                                filter === 'semua'
                                || (filter === 'mendatang' && {{ $isSelesai ? 'false' : 'true' }})
                                || (filter === 'selesai' && {{ $isSelesai ? 'true' : 'false' }})
                            "
                            x-cloak
                            class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                        >

                            {{-- Card Header --}}
                            <div class="relative h-48 overflow-hidden">

                                <div class="absolute inset-0 bg-gradient-to-br {{ $gradient }}"></div>

                                <div class="absolute -right-16 -top-16 h-40 w-40 rounded-full bg-white/10"></div>

                                <div class="absolute -bottom-20 -left-10 h-40 w-40 rounded-full bg-white/10"></div>


                                <div class="relative flex h-full flex-col justify-between p-6">

                                    {{-- Top --}}
                                    <div class="flex items-start justify-between gap-4">

                                        <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/15 px-3 py-1.5 text-xs font-semibold text-white backdrop-blur-sm">

                                            <i class="bi {{ $formatIcon }}"></i>

                                            {{ $formatLabel }}

                                        </span>


                                        @if($isSelesai)

                                            <span class="inline-flex items-center gap-1.5 rounded-full border border-white/10 bg-slate-900/30 px-3 py-1.5 text-xs font-semibold text-white backdrop-blur-sm">

                                                <span class="h-1.5 w-1.5 rounded-full bg-slate-300"></span>

                                                SELESAI

                                            </span>

                                        @elseif($kapasitasPenuh)

                                            <span class="inline-flex items-center gap-1.5 rounded-full border border-red-400/20 bg-red-500/15 px-3 py-1.5 text-xs font-semibold text-red-100 backdrop-blur-sm">

                                                <span class="h-1.5 w-1.5 rounded-full bg-red-300"></span>

                                                PENUH

                                            </span>

                                        @else

                                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-400 px-3 py-1.5 text-xs font-semibold text-white shadow-sm">

                                                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                                TERSEDIA

                                            </span>

                                        @endif

                                    </div>


                                    {{-- Bottom --}}
                                    <div>

                                        <p class="text-xs font-medium uppercase tracking-wider text-white/80">
                                            {{ $tanggalSingkat }}
                                        </p>

                                        <h3 class="mt-2 line-clamp-2 text-lg font-bold leading-snug text-white">
                                            {{ $seminar->judul }}
                                        </h3>

                                    </div>

                                </div>

                            </div>


                            {{-- Card Body --}}
                            <div class="p-6">

                                <h3 class="line-clamp-2 text-lg font-bold leading-snug text-slate-900">
                                    {{ $seminar->judul }}
                                </h3>


                                {{-- Description --}}
                                @if($seminar->deskripsi)

                                    <p class="mt-3 line-clamp-3 text-sm leading-relaxed text-slate-500">
                                        {{ \Illuminate\Support\Str::limit($seminar->deskripsi, 130) }}
                                    </p>

                                @else

                                    <p class="mt-3 line-clamp-3 text-sm leading-relaxed text-slate-400">
                                        Informasi seminar akan segera diperbarui.
                                    </p>

                                @endif


                                {{-- Info --}}
                                <div class="mt-5 space-y-3">

                                    {{-- Tanggal --}}
                                    <div class="flex items-center gap-3">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl {{ $softColor }}">
                                            <i class="bi bi-calendar3"></i>
                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-xs text-slate-400">
                                                Tanggal
                                            </p>

                                            <p class="truncate text-sm font-semibold text-slate-700">
                                                {{ $tanggal }}
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Waktu --}}
                                    <div class="flex items-center gap-3">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl {{ $softColor }}">
                                            <i class="bi bi-clock"></i>
                                        </div>

                                        <div>

                                            <p class="text-xs text-slate-400">
                                                Waktu
                                            </p>

                                            <p class="text-sm font-semibold text-slate-700">
                                                {{ $jamMulai }} - {{ $jamSelesai }} WIB
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Lokasi --}}
                                    <div class="flex items-center gap-3">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl {{ $softColor }}">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-xs text-slate-400">
                                                Lokasi
                                            </p>

                                            <p class="truncate text-sm font-semibold text-slate-700">
                                                {{ $seminar->lokasi ?: ucfirst($seminar->format) }}
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Pembicara --}}
                                    <div class="flex items-center gap-3">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl {{ $softColor }}">
                                            <i class="bi bi-person-badge"></i>
                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-xs text-slate-400">
                                                Pembicara
                                            </p>

                                            <p class="truncate text-sm font-semibold text-slate-700">
                                                {{ $seminar->pembicara }}
                                            </p>

                                        </div>

                                    </div>

                                </div>


                                {{-- Divider --}}
                                <div class="my-5 border-t border-slate-100"></div>


                                {{-- Footer --}}
                                <div class="flex items-center justify-between gap-4">

                                    <div>

                                        <p class="text-xs text-slate-400">
                                            Biaya
                                        </p>

                                        <p class="mt-1 text-lg font-bold text-slate-900">

                                            @if($seminar->harga > 0)

                                                Rp{{ number_format($seminar->harga, 0, ',', '.') }}

                                            @else

                                                Gratis

                                            @endif

                                        </p>

                                    </div>


                                    <a
                                        href="{{ route('seminar.show', $seminar->slug) }}"
                                        class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold transition shadow-sm
                                        {{ $isSelesai
                                            ? 'bg-slate-100 text-slate-600 hover:bg-slate-200'
                                            : 'bg-blue-600 text-white hover:bg-blue-700'
                                        }}"
                                    >

                                        {{ $isSelesai ? 'Lihat Detail' : 'Detail' }}

                                        <i class="bi bi-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>

                                    </a>

                                </div>


                                {{-- Capacity --}}
                                @if($seminar->kapasitas)

                                    <div class="mt-5 rounded-xl bg-slate-50 p-3">

                                        <div class="mb-2 flex items-center justify-between">

                                            <span class="text-xs text-slate-500">
                                                Ketersediaan
                                            </span>

                                            <span class="text-xs font-semibold text-slate-700">
                                                {{ $jumlahPeserta }}/{{ $seminar->kapasitas }}
                                            </span>

                                        </div>


                                        @php

                                            $progress = $seminar->kapasitas > 0
                                                ? min(($jumlahPeserta / $seminar->kapasitas) * 100, 100)
                                                : 0;

                                        @endphp

                                        <div class="h-1.5 overflow-hidden rounded-full bg-slate-200">

                                            <div
                                                class="h-full rounded-full bg-blue-600 transition-all"
                                                style="width: {{ $progress }}%"
                                            ></div>

                                        </div>


                                        <p class="mt-2 text-xs text-slate-400">

                                            @if($sisaKapasitas > 0)

                                                Tersisa {{ $sisaKapasitas }} slot

                                            @elseif($sisaKapasitas === 0)

                                                Kuota penuh

                                            @endif

                                        </p>

                                    </div>

                                @endif

                            </div>

                        </article>

                    @endforeach

                </div>


                {{-- Empty after filter --}}
                <div
                    x-show="
                        filter !== 'semua'
                        && !document.querySelector('article[x-show*=&quot;filter === \''
                    )"
                    x-cloak
                ></div>

            @else

                {{-- Empty --}}
                <div class="py-20 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 text-2xl text-slate-400">
                        <i class="bi bi-calendar-event"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-bold text-slate-900">
                        Belum ada seminar
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm text-slate-500">
                        Saat ini belum ada seminar yang tersedia.
                        Silakan cek kembali beberapa waktu lagi.
                    </p>

                </div>

            @endif

        </div>

    </section>


    {{-- =========================================================
        WHY JOIN
    ========================================================== --}}
    <section class="border-t border-slate-200 bg-white py-20">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid items-center gap-10 lg:grid-cols-2">

                {{-- Left --}}
                <div>

                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                        KENAPA IKUT SEMINAR?
                    </p>

                    <h2 class="mt-3 text-3xl font-bold leading-tight text-slate-900 sm:text-4xl">

                        Bukan Sekadar Dengar Materi,

                        <span class="text-blue-600">
                            Tapi Dapat Insight Nyata.
                        </span>

                    </h2>

                    <p class="mt-5 leading-relaxed text-slate-500">
                        Seminar Forum Juragan dirancang untuk membantu pemilik
                        bisnis mendapatkan wawasan praktis yang bisa langsung
                        diterapkan dalam operasional dan pengembangan usaha.
                    </p>


                    <div class="mt-8 space-y-5">

                        {{-- Benefit --}}
                        <div class="flex gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                <i class="bi bi-lightbulb"></i>
                            </div>

                            <div>

                                <h3 class="font-semibold text-slate-900">
                                    Materi Praktis
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Insight yang relevan dan dapat langsung diterapkan.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                <i class="bi bi-people"></i>
                            </div>

                            <div>

                                <h3 class="font-semibold text-slate-900">
                                    Networking
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Bertemu dan terhubung dengan sesama pemilik bisnis.
                                </p>

                            </div>

                        </div>


                        <div class="flex gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                                <i class="bi bi-award"></i>
                            </div>

                            <div>

                                <h3 class="font-semibold text-slate-900">
                                    Sertifikat & Materi
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Dapatkan sertifikat dan materi seminar jika tersedia.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Right --}}
                <div>

                    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-blue-600 to-blue-800 p-8 shadow-xl sm:p-10">

                        <div class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-white/10"></div>

                        <div class="absolute -bottom-24 -left-16 h-64 w-64 rounded-full bg-white/10"></div>


                        <div class="relative">

                            <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-semibold text-white">

                                <i class="bi bi-people"></i>

                                FORUM JURAGAN

                            </div>


                            <h3 class="mt-6 text-3xl font-bold text-white">

                                Belajar Bersama,

                                <br>

                                Bertumbuh Bersama.

                            </h3>


                            <p class="mt-4 leading-relaxed text-blue-100">
                                Bangun bisnis yang lebih kuat dengan belajar
                                dari pengalaman praktisi dan komunitas bisnis.
                            </p>


                            <div class="mt-8 grid grid-cols-2 gap-4">

                                <div class="rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm">

                                    <p class="text-3xl font-bold text-white">
                                        50+
                                    </p>

                                    <p class="mt-1 text-sm text-blue-100">
                                        Event
                                    </p>

                                </div>


                                <div class="rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm">

                                    <p class="text-3xl font-bold text-white">
                                        2K+
                                    </p>

                                    <p class="mt-1 text-sm text-blue-100">
                                        Peserta
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CTA
    ========================================================== --}}
    <section class="bg-slate-50 py-16 sm:py-20">

        <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white px-6 py-12 shadow-sm sm:px-10">

                <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-blue-50"></div>

                <div class="absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-emerald-50"></div>


                <div class="relative">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-xl text-blue-600">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>


                    <h2 class="mt-5 text-3xl font-bold text-slate-900 sm:text-4xl">
                        Siap upgrade kemampuan bisnis?
                    </h2>


                    <p class="mx-auto mt-4 max-w-2xl leading-relaxed text-slate-500">
                        Temukan seminar yang sesuai dan dapatkan insight
                        baru untuk membantu bisnis kamu berkembang.
                    </p>


                    <a
                        href="#"
                        @click.prevent="window.scrollTo({ top: 0, behavior: 'smooth' })"
                        class="mt-7 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 hover:shadow-md"
                    >
                        <i class="bi bi-arrow-up"></i>
                        Kembali ke Atas
                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection