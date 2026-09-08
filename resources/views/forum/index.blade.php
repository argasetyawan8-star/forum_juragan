@extends('layouts.landing')

@section('content')

<div class="min-h-screen bg-slate-50">

    {{-- =========================================================
         HERO / COMMUNITY HEADER
    ========================================================== --}}
    <section class="border-b border-slate-200 bg-white">

        <div class="mx-auto max-w-7xl px-4 pb-8 pt-28 sm:px-6 sm:pt-32 lg:px-8">

            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">

                <div class="max-w-2xl">

                    <div class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-bold text-blue-600">
                        <i class="bi bi-people-fill"></i>
                        Komunitas Bisnis
                    </div>

                    <h1 class="mt-5 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        Apa yang sedang dibahas
                        para juragan hari ini?
                    </h1>

                    <p class="mt-4 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                        Temukan pengalaman, pertanyaan, dan insight dari
                        pemilik bisnis lainnya.
                    </p>

                </div>


                @auth

                    <a
                        href="{{ route('forum.create') }}"
                        class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
                    >

                        <i class="bi bi-plus-lg"></i>

                        Buat Diskusi

                    </a>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3.5 text-sm font-bold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                    >

                        <i class="bi bi-box-arrow-in-right"></i>

                        Login untuk Berdiskusi

                    </a>

                @endauth

            </div>

        </div>

    </section>


    {{-- =========================================================
         MAIN FEED
    ========================================================== --}}
    <section>

        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

            <div class="grid gap-8 lg:grid-cols-[minmax(0,680px)_300px] lg:justify-center">


                {{-- =================================================
                     FEED
                ================================================== --}}
                <div class="min-w-0">


                    {{-- Search --}}
                    <form
                        action="{{ route('forum.index') }}"
                        method="GET"
                        class="mb-5"
                    >

                        @if (request('category'))

                            <input
                                type="hidden"
                                name="category"
                                value="{{ request('category') }}"
                            >

                        @endif


                        <div class="relative">

                            <i class="bi bi-search pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="Cari topik atau diskusi..."
                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-24 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >

                            <button
                                type="submit"
                                class="absolute right-2 top-1/2 -translate-y-1/2 rounded-xl bg-blue-600 px-4 py-2 text-xs font-bold text-white transition hover:bg-blue-700"
                            >
                                Cari
                            </button>

                        </div>

                    </form>


                    {{-- Topic Filter --}}
                    <div class="mb-6 flex gap-2 overflow-x-auto pb-2">

                        <a
                            href="{{ route('forum.index') }}"
                            class="inline-flex shrink-0 items-center gap-2 rounded-full px-4 py-2 text-xs font-bold transition
                                {{ !request('category')
                                    ? 'bg-blue-600 text-white'
                                    : 'border border-slate-200 bg-white text-slate-600 hover:border-blue-200 hover:text-blue-600' }}"
                        >

                            <i class="bi bi-grid-fill"></i>

                            Semua Topik

                        </a>


                        @foreach ($categories as $category)

                            <a
                                href="{{ route('forum.index', ['category' => $category->slug]) }}"
                                class="inline-flex shrink-0 items-center gap-2 rounded-full px-4 py-2 text-xs font-semibold transition
                                    {{ request('category') === $category->slug
                                        ? 'bg-blue-600 text-white'
                                        : 'border border-slate-200 bg-white text-slate-600 hover:border-blue-200 hover:text-blue-600' }}"
                            >

                                <i class="bi bi-folder-fill"></i>

                                {{ $category->nama_kategori }}

                            </a>

                        @endforeach

                    </div>


                    {{-- Feed Header --}}
                    <div class="mb-4 flex items-center justify-between">

                        <div>

                            <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                Forum
                            </p>

                            <h2 class="mt-1 text-xl font-black text-slate-900">
                                Diskusi Terbaru
                            </h2>

                        </div>


                        @if (request()->hasAny(['search', 'category']))

                            <a
                                href="{{ route('forum.index') }}"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700"
                            >

                                <i class="bi bi-arrow-counterclockwise"></i>

                                Reset

                            </a>

                        @endif

                    </div>


                    {{-- Feed Cards --}}
                    <div class="space-y-4">

                        @forelse ($threads as $thread)

                            <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:border-blue-200 hover:shadow-lg">


                                {{-- Post Header --}}
                                <div class="px-5 pt-5 sm:px-6 sm:pt-6">

                                    <div class="flex items-start gap-3">

                                        {{-- Avatar --}}
                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-blue-100 text-sm font-black text-blue-700">
                                            {{ strtoupper(substr($thread->user->name ?? 'U', 0, 1)) }}
                                        </div>


                                        <div class="min-w-0 flex-1">

                                            <div class="flex flex-wrap items-center gap-x-2 gap-y-1">

                                                <span class="text-sm font-bold text-slate-900">
                                                    {{ $thread->user->name ?? 'Pengguna' }}
                                                </span>

                                                <span class="text-slate-300">
                                                    •
                                                </span>

                                                <span class="text-xs text-slate-400">
                                                    {{ $thread->created_at->diffForHumans() }}
                                                </span>

                                            </div>


                                            <div class="mt-2 flex flex-wrap items-center gap-2">

                                                @if ($thread->category)

                                                    <a
                                                        href="{{ route('forum.index', ['category' => $thread->category->slug]) }}"
                                                        class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-600"
                                                    >

                                                        <i class="bi bi-folder-fill"></i>

                                                        {{ $thread->category->nama_kategori }}

                                                    </a>

                                                @endif


                                                @if ($thread->is_pinned)

                                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-[11px] font-bold text-amber-700">

                                                        <i class="bi bi-pin-fill"></i>

                                                        Dipin

                                                    </span>

                                                @endif

                                            </div>

                                        </div>


                                        {{-- More --}}
                                        <button
                                            type="button"
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full text-slate-400 transition hover:bg-slate-100 hover:text-slate-600"
                                            aria-label="Pilihan diskusi"
                                        >

                                            <i class="bi bi-three-dots"></i>

                                        </button>

                                    </div>

                                </div>


                                {{-- Post Content --}}
                                <div class="px-5 py-5 sm:px-6">

                                    <a
                                        href="{{ route('forum.show', $thread->slug) }}"
                                        class="group block"
                                    >

                                        <h3 class="text-lg font-black leading-7 text-slate-900 transition group-hover:text-blue-600 sm:text-xl">
                                            {{ $thread->judul }}
                                        </h3>


                                        <p class="mt-3 whitespace-pre-line text-sm leading-7 text-slate-600">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($thread->isi), 320) }}
                                        </p>


                                        @if (strlen(strip_tags($thread->isi)) > 320)

                                            <span class="mt-2 inline-block text-xs font-bold text-blue-600">
                                                Lihat selengkapnya
                                            </span>

                                        @endif

                                    </a>

                                </div>


                                {{-- Stats --}}
                                <div class="border-t border-slate-100 px-5 py-3 sm:px-6">

                                    <div class="flex flex-wrap items-center justify-between gap-3">

                                        <div class="flex items-center gap-4 text-xs text-slate-500">

                                            <span class="inline-flex items-center gap-1.5">
                                                <i class="bi bi-chat-dots-fill text-blue-500"></i>
                                                {{ $thread->replies_count }}
                                            </span>


                                            <span class="inline-flex items-center gap-1.5">
                                                <i class="bi bi-eye-fill"></i>
                                                {{ number_format($thread->views) }}
                                            </span>

                                        </div>


                                        <a
                                            href="{{ route('forum.show', $thread->slug) }}"
                                            class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-500 transition hover:text-blue-600"
                                        >

                                            Buka Diskusi

                                            <i class="bi bi-arrow-right"></i>

                                        </a>

                                    </div>

                                </div>


                                {{-- Interaction Bar --}}
                                <div class="grid grid-cols-2 border-t border-slate-100">

                                    <a
                                        href="{{ route('forum.show', $thread->slug) }}"
                                        class="inline-flex items-center justify-center gap-2 py-3 text-xs font-bold text-slate-500 transition hover:bg-slate-50 hover:text-blue-600"
                                    >

                                        <i class="bi bi-chat-square-text"></i>

                                        Balas

                                    </a>


                                    <a
                                        href="{{ route('forum.show', $thread->slug) }}"
                                        class="border-l border-slate-100 inline-flex items-center justify-center gap-2 py-3 text-xs font-bold text-slate-500 transition hover:bg-slate-50 hover:text-blue-600"
                                    >

                                        <i class="bi bi-box-arrow-up-right"></i>

                                        Lihat

                                    </a>

                                </div>

                            </article>

                        @empty

                            {{-- Empty --}}
                            <div class="rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-16 text-center">

                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">

                                    <i class="bi bi-chat-square-text text-2xl"></i>

                                </div>


                                <h3 class="mt-5 text-lg font-black text-slate-900">
                                    Belum ada diskusi
                                </h3>


                                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                                    Belum menemukan diskusi yang sesuai.
                                    Coba gunakan kata kunci lain atau mulai diskusi baru.
                                </p>


                                @auth

                                    <a
                                        href="{{ route('forum.create') }}"
                                        class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-blue-700"
                                    >

                                        <i class="bi bi-plus-lg"></i>

                                        Mulai Diskusi

                                    </a>

                                @else

                                    <a
                                        href="{{ route('login') }}"
                                        class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-blue-700"
                                    >

                                        <i class="bi bi-box-arrow-in-right"></i>

                                        Login untuk Berdiskusi

                                    </a>

                                @endauth

                            </div>

                        @endforelse

                    </div>


                    {{-- Pagination --}}
                    @if ($threads->hasPages())

                        <div class="mt-8">
                            {{ $threads->links() }}
                        </div>

                    @endif

                </div>


                {{-- =================================================
                     SIDEBAR
                ================================================== --}}
                <aside class="hidden space-y-5 lg:block">


                    {{-- Community Stats --}}
                    <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">

                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                            Forum Juragan
                        </p>

                        <h3 class="mt-1 text-lg font-black text-slate-900">
                            Komunitas untuk bertumbuh
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Tempat berbagi pengalaman dan solusi seputar dunia bisnis.
                        </p>


                        <div class="mt-5 grid grid-cols-2 gap-3">

                            <div class="rounded-2xl bg-slate-50 p-3 text-center">

                                <p class="text-lg font-black text-slate-900">
                                    {{ $threads->total() }}
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Diskusi
                                </p>

                            </div>


                            <div class="rounded-2xl bg-slate-50 p-3 text-center">

                                <p class="text-lg font-black text-slate-900">
                                    {{ $categories->count() }}
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Topik
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Popular Topics --}}
                    <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">

                        <div class="flex items-center justify-between">

                            <h3 class="font-black text-slate-900">
                                Topik Forum
                            </h3>

                            <i class="bi bi-grid-fill text-slate-300"></i>

                        </div>


                        <div class="mt-4 space-y-1">

                            @foreach ($categories->take(6) as $category)

                                <a
                                    href="{{ route('forum.index', ['category' => $category->slug]) }}"
                                    class="flex items-center justify-between rounded-xl px-3 py-2.5 transition hover:bg-blue-50"
                                >

                                    <span class="flex min-w-0 items-center gap-2 text-sm font-semibold text-slate-600">

                                        <i class="bi bi-folder2 text-blue-500"></i>

                                        <span class="truncate">
                                            {{ $category->nama_kategori }}
                                        </span>

                                    </span>


                                    <span class="shrink-0 text-xs font-semibold text-slate-400">
                                        {{ $category->threads_count }}
                                    </span>

                                </a>

                            @endforeach

                        </div>

                    </div>


                    {{-- Create CTA --}}
                    <div class="relative overflow-hidden rounded-3xl bg-blue-600 p-6 text-white shadow-lg">

                        <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-white/10"></div>


                        <div class="relative">

                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10">
                                <i class="bi bi-pencil-square text-lg"></i>
                            </div>


                            <h3 class="mt-5 text-lg font-black">
                                Punya pengalaman bisnis?
                            </h3>


                            <p class="mt-2 text-sm leading-6 text-blue-100">
                                Bagikan pengalaman kamu dan bantu juragan lain menemukan solusi.
                            </p>


                            @auth

                                <a
                                    href="{{ route('forum.create') }}"
                                    class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-3 text-sm font-bold text-blue-700 transition hover:bg-blue-50"
                                >

                                    <i class="bi bi-plus-lg"></i>

                                    Buat Diskusi

                                </a>

                            @else

                                <a
                                    href="{{ route('login') }}"
                                    class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-3 text-sm font-bold text-blue-700 transition hover:bg-blue-50"
                                >

                                    <i class="bi bi-box-arrow-in-right"></i>

                                    Login untuk Berdiskusi

                                </a>

                            @endauth

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </section>

</div>

@endsection