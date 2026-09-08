@extends('layouts.landing')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

        {{-- =====================================================
             BREADCRUMB
        ====================================================== --}}
        <div class="mb-6 flex items-center gap-2 text-sm text-slate-400">
            <a
                href="{{ route('home') }}"
                class="transition hover:text-blue-600"
            >
                Home
            </a>

            <i class="bi bi-chevron-right text-xs"></i>

            <span>
                Profil Anggota
            </span>
        </div>


        {{-- =====================================================
             PROFILE HERO
        ====================================================== --}}
        <section class="overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-sm">

            {{-- COVER --}}
            <div class="relative h-40 overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 sm:h-56">

                <div class="absolute -right-16 -top-20 h-72 w-72 rounded-full border-[50px] border-white/5"></div>

                <div class="absolute -bottom-36 left-24 h-80 w-80 rounded-full border-[60px] border-emerald-400/10"></div>

                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/10 to-transparent"></div>

            </div>


            {{-- PROFILE INFO --}}
            <div class="relative px-6 pb-8 sm:px-8">

                <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

                    {{-- AVATAR --}}
                    <div class="-mt-14 sm:-mt-16">

                        <div class="h-28 w-28 rounded-3xl bg-white p-1.5 shadow-lg sm:h-32 sm:w-32">

                            <div class="h-full w-full overflow-hidden rounded-[1.3rem] bg-blue-100">

                                @if ($user->avatar)

                                    <img
                                        src="{{ asset('storage/' . $user->avatar) }}"
                                        alt="Foto profil {{ $user->name }}"
                                        class="h-full w-full object-cover"
                                    >

                                @else

                                    <div class="flex h-full w-full items-center justify-center bg-blue-100 text-4xl font-black text-blue-700 sm:text-5xl">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>

                                @endif

                            </div>

                        </div>

                    </div>


                    {{-- ACTION --}}
                    <div class="flex flex-wrap gap-3">

                        @auth

                            @if (auth()->id() === $user->id)

                                <a
                                    href="{{ route('profile.edit') }}"
                                    class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:border-blue-300 hover:text-blue-600"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Edit Profil
                                </a>

                            @endif

                        @endauth

                    </div>

                </div>


                {{-- USER INFO --}}
                <div class="mt-5">

                    <div class="flex flex-wrap items-center gap-2">

                        <h1 class="text-2xl font-black tracking-tight text-slate-900 sm:text-3xl">
                            {{ $user->name }}
                        </h1>

                        @if ($user->isAdmin())

                            <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-3 py-1.5 text-xs font-bold text-blue-600">
                                <i class="bi bi-shield-check"></i>
                                Administrator
                            </span>

                        @else

                            <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-600">
                                <i class="bi bi-person-check"></i>
                                Member
                            </span>

                        @endif

                    </div>


                    {{-- POSITION / BUSINESS --}}
                    @if ($user->jabatan || $user->nama_usaha)

                        <p class="mt-2 text-slate-500">

                            @if ($user->jabatan)
                                {{ $user->jabatan }}
                            @endif

                            @if ($user->jabatan && $user->nama_usaha)
                                <span class="mx-1">•</span>
                            @endif

                            @if ($user->nama_usaha)
                                {{ $user->nama_usaha }}
                            @endif

                        </p>

                    @else

                        <p class="mt-2 text-slate-500">
                            Anggota Forum Juragan
                        </p>

                    @endif


                    {{-- META --}}
                    <div class="mt-4 flex flex-wrap gap-x-6 gap-y-2 text-sm text-slate-500">

                        <span class="inline-flex items-center gap-2">
                            <i class="bi bi-calendar3"></i>

                            Bergabung
                            {{ $user->created_at->translatedFormat('F Y') }}
                        </span>


                        <span class="inline-flex items-center gap-2">
                            <i class="bi bi-chat-square-text"></i>

                            {{ $user->threads()->count() }}
                            diskusi
                        </span>


                        <span class="inline-flex items-center gap-2">
                            <i class="bi bi-reply"></i>

                            {{ $user->replies()->count() }}
                            balasan
                        </span>

                    </div>

                </div>

            </div>

        </section>



        {{-- =====================================================
             MAIN GRID
        ====================================================== --}}
        <div class="mt-8 grid gap-8 lg:grid-cols-3">


            {{-- =================================================
                 MAIN
            ================================================== --}}
            <main class="space-y-8 lg:col-span-2">


                {{-- =================================================
                     ABOUT & BUSINESS PROFILE
                ================================================== --}}
                <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                    <div class="flex items-start justify-between gap-4">

                        <div>

                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                Tentang
                            </p>

                            <h2 class="mt-1 text-xl font-black text-slate-900">
                                {{ $user->name }}
                            </h2>

                        </div>


                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                            <i class="bi bi-person-lines-fill"></i>

                        </div>

                    </div>


                    <div class="mt-6 space-y-5">


                        {{-- BIO --}}
                        @if ($user->bio)

                            <div>

                                <p class="text-sm leading-7 text-slate-600">
                                    {{ $user->bio }}
                                </p>

                            </div>

                        @endif


                        {{-- ABOUT --}}
                        @if ($user->about)

                            <div>

                                <p class="mb-2 text-sm font-bold text-slate-900">
                                    Tentang Saya
                                </p>

                                <p class="whitespace-pre-line text-sm leading-7 text-slate-600">
                                    {{ $user->about }}
                                </p>

                            </div>

                        @endif


                        {{-- BUSINESS INFORMATION --}}
                        @if ($user->nama_usaha || $user->jabatan || $user->bidang_usaha || $user->lokasi)

                            <div class="border-t border-slate-100 pt-5">

                                <p class="mb-4 text-sm font-bold text-slate-900">
                                    Profil Bisnis
                                </p>


                                <div class="grid gap-4 sm:grid-cols-2">


                                    {{-- NAMA USAHA --}}
                                    @if ($user->nama_usaha)

                                        <div class="rounded-2xl bg-slate-50 p-4">

                                            <div class="flex items-center gap-3">

                                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                                                    <i class="bi bi-building"></i>

                                                </div>


                                                <div class="min-w-0">

                                                    <p class="text-xs text-slate-400">
                                                        Nama Usaha
                                                    </p>

                                                    <p class="mt-1 truncate text-sm font-bold text-slate-900">
                                                        {{ $user->nama_usaha }}
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    @endif



                                    {{-- JABATAN --}}
                                    @if ($user->jabatan)

                                        <div class="rounded-2xl bg-slate-50 p-4">

                                            <div class="flex items-center gap-3">

                                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">

                                                    <i class="bi bi-person-badge"></i>

                                                </div>


                                                <div class="min-w-0">

                                                    <p class="text-xs text-slate-400">
                                                        Jabatan
                                                    </p>

                                                    <p class="mt-1 truncate text-sm font-bold text-slate-900">
                                                        {{ $user->jabatan }}
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    @endif



                                    {{-- BIDANG USAHA --}}
                                    @if ($user->bidang_usaha)

                                        <div class="rounded-2xl bg-slate-50 p-4">

                                            <div class="flex items-center gap-3">

                                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-purple-600">

                                                    <i class="bi bi-briefcase"></i>

                                                </div>


                                                <div class="min-w-0">

                                                    <p class="text-xs text-slate-400">
                                                        Bidang Usaha
                                                    </p>

                                                    <p class="mt-1 truncate text-sm font-bold text-slate-900">
                                                        {{ $user->bidang_usaha }}
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    @endif



                                    {{-- LOKASI --}}
                                    @if ($user->lokasi)

                                        <div class="rounded-2xl bg-slate-50 p-4">

                                            <div class="flex items-center gap-3">

                                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-orange-600">

                                                    <i class="bi bi-geo-alt"></i>

                                                </div>


                                                <div class="min-w-0">

                                                    <p class="text-xs text-slate-400">
                                                        Lokasi
                                                    </p>

                                                    <p class="mt-1 truncate text-sm font-bold text-slate-900">
                                                        {{ $user->lokasi }}
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    @endif

                                </div>

                            </div>

                        @endif


                        {{-- EMPTY STATE --}}
                        @if (
                            !$user->bio &&
                            !$user->about &&
                            !$user->nama_usaha &&
                            !$user->jabatan &&
                            !$user->bidang_usaha &&
                            !$user->lokasi
                        )

                            <div class="rounded-2xl bg-slate-50 p-5 text-sm leading-6 text-slate-500">

                                Anggota ini belum menambahkan informasi profil atau bisnis.

                            </div>

                        @endif

                    </div>

                </section>



                {{-- =================================================
                     LINKS
                ================================================== --}}
                @if ($user->links->count())

                    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                        <div class="flex items-start justify-between gap-4">

                            <div>

                                <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                    Terhubung
                                </p>

                                <h2 class="mt-1 text-xl font-black text-slate-900">
                                    Tautan
                                </h2>

                            </div>


                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

                                <i class="bi bi-link-45deg"></i>

                            </div>

                        </div>


                        <div class="mt-6 grid gap-3 sm:grid-cols-2">

                            @foreach ($user->links as $link)

                                @php

                                    $iconMap = [
                                        'Website' => 'bi-globe2',
                                        'Instagram' => 'bi-instagram',
                                        'Facebook' => 'bi-facebook',
                                        'LinkedIn' => 'bi-linkedin',
                                        'TikTok' => 'bi-tiktok',
                                        'YouTube' => 'bi-youtube',
                                        'Shopee' => 'bi-bag',
                                        'Tokopedia' => 'bi-shop',
                                        'WhatsApp' => 'bi-whatsapp',
                                    ];

                                    $icon = $iconMap[$link->label] ?? 'bi-link-45deg';

                                @endphp


                                <a
                                    href="{{ $link->url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group flex items-center gap-4 rounded-2xl border border-slate-100 bg-slate-50 p-4 transition hover:border-blue-200 hover:bg-blue-50"
                                >

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-lg text-blue-600 shadow-sm transition group-hover:bg-blue-600 group-hover:text-white">

                                        <i class="bi {{ $icon }}"></i>

                                    </div>


                                    <div class="min-w-0 flex-1">

                                        <p class="truncate text-sm font-bold text-slate-900 group-hover:text-blue-600">
                                            {{ $link->label }}
                                        </p>

                                        <p class="mt-1 truncate text-xs text-slate-400">
                                            {{ $link->url }}
                                        </p>

                                    </div>


                                    <i class="bi bi-box-arrow-up-right shrink-0 text-slate-300 transition group-hover:text-blue-500"></i>

                                </a>

                            @endforeach

                        </div>

                    </section>

                @endif



                {{-- =================================================
                     DISCUSSIONS
                ================================================== --}}
                <section class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                    <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                    Aktivitas
                                </p>

                                <h2 class="mt-1 text-xl font-black text-slate-900">
                                    Diskusi yang Dibuat
                                </h2>

                            </div>


                            <div class="flex h-10 min-w-10 items-center justify-center rounded-xl bg-blue-50 px-3 text-sm font-bold text-blue-600">

                                {{ $user->threads()->where('status', 'published')->count() }}

                            </div>

                        </div>

                    </div>


                    <div class="divide-y divide-slate-100">

                        @forelse ($threads as $thread)

                            <a
                                href="{{ route('forum.show', $thread->slug) }}"
                                class="group block px-6 py-5 transition hover:bg-slate-50 sm:px-8"
                            >

                                <div class="flex gap-4">


                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">

                                        <i class="bi bi-chat-square-text-fill"></i>

                                    </div>


                                    <div class="min-w-0 flex-1">

                                        @if ($thread->category)

                                            <span class="inline-flex rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-600">

                                                {{ $thread->category->nama }}

                                            </span>

                                        @endif


                                        <h3 class="mt-2 line-clamp-2 text-sm font-bold leading-6 text-slate-900 transition group-hover:text-blue-600 sm:text-base">

                                            {{ $thread->judul }}

                                        </h3>


                                        <div class="mt-2 flex flex-wrap items-center gap-3 text-xs text-slate-400">

                                            <span>

                                                <i class="bi bi-chat mr-1"></i>

                                                {{ $thread->replies_count }}

                                                balasan

                                            </span>


                                            <span>

                                                <i class="bi bi-eye mr-1"></i>

                                                {{ $thread->views }}

                                                views

                                            </span>


                                            <span>

                                                {{ $thread->created_at->diffForHumans() }}

                                            </span>

                                        </div>

                                    </div>


                                    <i class="bi bi-chevron-right hidden self-center text-slate-300 transition group-hover:text-blue-500 sm:block"></i>

                                </div>

                            </a>

                        @empty

                            <div class="px-6 py-12 text-center">

                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">

                                    <i class="bi bi-chat-square-text text-xl"></i>

                                </div>


                                <h3 class="mt-4 font-bold text-slate-900">
                                    Belum ada diskusi
                                </h3>


                                <p class="mt-1 text-sm text-slate-500">
                                    Anggota ini belum membuat diskusi publik.
                                </p>

                            </div>

                        @endforelse

                    </div>

                </section>



                {{-- =================================================
                     REPLIES
                ================================================== --}}
                <section class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                    <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                            Kontribusi
                        </p>

                        <h2 class="mt-1 text-xl font-black text-slate-900">
                            Balasan Terbaru
                        </h2>

                    </div>


                    <div class="divide-y divide-slate-100">

                        @forelse ($replies as $reply)

                            @if ($reply->thread)

                                <a
                                    href="{{ route('forum.show', $reply->thread->slug) }}#reply-{{ $reply->id }}"
                                    class="group block px-6 py-5 transition hover:bg-slate-50 sm:px-8"
                                >

                                    <div class="flex gap-4">


                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">

                                            <i class="bi bi-reply-fill"></i>

                                        </div>


                                        <div class="min-w-0 flex-1">

                                            <p class="text-xs font-medium text-slate-400">
                                                Membalas diskusi
                                            </p>


                                            <h3 class="mt-1 truncate text-sm font-bold text-blue-600">

                                                {{ $reply->thread->judul }}

                                            </h3>


                                            <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-600">

                                                {{ $reply->isi }}

                                            </p>


                                            <p class="mt-2 text-xs text-slate-400">

                                                {{ $reply->created_at->diffForHumans() }}

                                            </p>

                                        </div>


                                        <i class="bi bi-chevron-right hidden self-center text-slate-300 sm:block"></i>

                                    </div>

                                </a>

                            @endif

                        @empty

                            <div class="px-6 py-12 text-center">

                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">

                                    <i class="bi bi-reply text-xl"></i>

                                </div>


                                <h3 class="mt-4 font-bold text-slate-900">
                                    Belum ada balasan
                                </h3>


                                <p class="mt-1 text-sm text-slate-500">
                                    Belum ada kontribusi komentar dari anggota ini.
                                </p>

                            </div>

                        @endforelse

                    </div>

                </section>

            </main>



            {{-- =================================================
                 SIDEBAR
            ================================================== --}}
            <aside class="space-y-6 lg:sticky lg:top-28 lg:self-start">


                {{-- =================================================
                     STATS
                ================================================== --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                        Aktivitas Komunitas
                    </p>


                    <div class="mt-5 grid grid-cols-2 gap-3">


                        {{-- THREADS --}}
                        <div class="rounded-2xl bg-blue-50 p-4">

                            <p class="text-2xl font-black text-blue-600">

                                {{ $user->threads()->where('status', 'published')->count() }}

                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Diskusi
                            </p>

                        </div>


                        {{-- REPLIES --}}
                        <div class="rounded-2xl bg-emerald-50 p-4">

                            <p class="text-2xl font-black text-emerald-600">

                                {{ $user->replies()->count() }}

                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Balasan
                            </p>

                        </div>


                        {{-- JOIN DATE --}}
                        <div class="col-span-2 rounded-2xl bg-slate-50 p-4">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-slate-500 shadow-sm">

                                    <i class="bi bi-calendar-check"></i>

                                </div>


                                <div>

                                    <p class="text-xs text-slate-400">
                                        Bergabung sejak
                                    </p>


                                    <p class="mt-0.5 text-sm font-bold text-slate-900">

                                        {{ $user->created_at->translatedFormat('d M Y') }}

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     CONTACT
                ================================================== --}}
                @if ($user->website || $user->whatsapp)

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                            Kontak
                        </p>


                        <div class="mt-5 space-y-3">


                            {{-- WEBSITE --}}
                            @if ($user->website)

                                <a
                                    href="{{ $user->website }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center gap-3 rounded-2xl bg-slate-50 p-3 transition hover:bg-blue-50"
                                >

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-blue-600">

                                        <i class="bi bi-globe2"></i>

                                    </div>


                                    <div class="min-w-0">

                                        <p class="text-xs text-slate-400">
                                            Website
                                        </p>

                                        <p class="truncate text-sm font-bold text-slate-900">
                                            {{ $user->website }}
                                        </p>

                                    </div>

                                </a>

                            @endif



                            {{-- WHATSAPP --}}
                            @if ($user->whatsapp)

                                @php

                                    $waNumber = preg_replace('/[^0-9]/', '', $user->whatsapp);

                                    if (str_starts_with($waNumber, '0')) {
                                        $waNumber = '62' . substr($waNumber, 1);
                                    }

                                @endphp


                                <a
                                    href="https://wa.me/{{ $waNumber }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center gap-3 rounded-2xl bg-slate-50 p-3 transition hover:bg-emerald-50"
                                >

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">

                                        <i class="bi bi-whatsapp"></i>

                                    </div>


                                    <div class="min-w-0">

                                        <p class="text-xs text-slate-400">
                                            WhatsApp
                                        </p>

                                        <p class="truncate text-sm font-bold text-slate-900">
                                            {{ $user->whatsapp }}
                                        </p>

                                    </div>

                                </a>

                            @endif

                        </div>

                    </div>

                @endif



                {{-- =================================================
                     COMMUNITY CTA
                ================================================== --}}
                <div class="overflow-hidden rounded-3xl bg-slate-900 p-6 text-white shadow-xl">

                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/10">

                        <i class="bi bi-people-fill text-blue-400"></i>

                    </div>


                    <h3 class="mt-5 text-lg font-black">
                        Bergabung dalam percakapan.
                    </h3>


                    <p class="mt-2 text-sm leading-6 text-slate-300">

                        Temukan diskusi menarik dan berbagi pengalaman
                        bersama para anggota Forum Juragan.

                    </p>


                    <a
                        href="{{ route('forum.index') }}"
                        class="mt-5 inline-flex items-center gap-2 rounded-xl bg-white px-4 py-3 text-sm font-bold text-slate-900 transition hover:bg-blue-50"
                    >

                        Jelajahi Forum

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>



                {{-- BACK --}}
                <a
                    href="{{ route('forum.index') }}"
                    class="flex items-center justify-center gap-2 rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-600 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                >

                    <i class="bi bi-arrow-left"></i>

                    Kembali ke Forum

                </a>

            </aside>

        </div>

    </div>

</div>

@endsection