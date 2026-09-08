@extends('layouts.user')

@section('content')
<div class="min-h-screen bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="mb-8">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-sm font-medium text-blue-600">
                        Dashboard Anggota
                    </p>

                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Halo, {{ auth()->user()->name }} 👋
                    </h1>

                    <p class="mt-2 text-sm text-slate-500 sm:text-base">
                        Pantau aktivitasmu dan tetap terhubung dengan komunitas para juragan.
                    </p>
                </div>

                <a
                    href="{{ route('forum.create') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
                >
                    <i class="bi bi-plus-circle"></i>
                    Buat Diskusi
                </a>
            </div>
        </div>


        {{-- STATISTIK --}}
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Diskusi --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500">
                            Diskusi Dibuat
                        </p>

                        <p class="mt-2 text-3xl font-bold text-slate-900">
                            {{ auth()->user()->threads()->count() }}
                        </p>
                    </div>

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <i class="bi bi-chat-square-text text-xl"></i>
                    </div>
                </div>

                <p class="mt-4 text-xs text-slate-400">
                    Total topik yang pernah kamu buat
                </p>
            </div>


            {{-- Balasan --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500">
                            Balasan Saya
                        </p>

                        <p class="mt-2 text-3xl font-bold text-slate-900">
                            {{ auth()->user()->replies()->count() }}
                        </p>
                    </div>

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                        <i class="bi bi-reply-all text-xl"></i>
                    </div>
                </div>

                <p class="mt-4 text-xs text-slate-400">
                    Kontribusi kamu di forum
                </p>
            </div>


            {{-- Bergabung --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500">
                            Bergabung Sejak
                        </p>

                        <p class="mt-2 text-lg font-bold text-slate-900">
                            {{ auth()->user()->created_at->format('d M Y') }}
                        </p>
                    </div>

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                        <i class="bi bi-calendar3 text-xl"></i>
                    </div>
                </div>

                <p class="mt-4 text-xs text-slate-400">
                    Menjadi bagian dari Forum Juragan
                </p>
            </div>

        </div>


        {{-- GRID UTAMA --}}
        <div class="mt-8 grid gap-8 lg:grid-cols-3">

            {{-- AKTIVITAS UTAMA --}}
            <div class="space-y-8 lg:col-span-2">

                {{-- Diskusi Saya --}}
                <section class="rounded-2xl border border-slate-200 bg-white shadow-sm">

                    <div class="flex items-center justify-between border-b border-slate-100 px-5 py-5 sm:px-6">
                        <div>
                            <h2 class="text-lg font-bold text-slate-900">
                                Diskusi Saya
                            </h2>

                            <p class="mt-1 text-sm text-slate-500">
                                Topik yang pernah kamu bagikan.
                            </p>
                        </div>

                        <a
                            href="{{ route('forum.index') }}"
                            class="text-sm font-semibold text-blue-600 hover:text-blue-700"
                        >
                            Lihat Forum
                        </a>
                    </div>

                    <div class="divide-y divide-slate-100">
                        @php
                            $myThreads = auth()->user()
                                ->threads()
                                ->with('category')
                                ->withCount('replies')
                                ->latest()
                                ->take(4)
                                ->get();
                        @endphp

                        @forelse ($myThreads as $thread)
                            <a
                                href="{{ route('forum.show', $thread->slug) }}"
                                class="block px-5 py-5 transition hover:bg-slate-50 sm:px-6"
                            >
                                <div class="flex gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                        <i class="bi bi-chat-left-text"></i>
                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <div class="flex flex-wrap items-center gap-2">
                                            @if ($thread->category)
                                                <span class="rounded-full bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-600">
                                                    {{ $thread->category->nama }}
                                                </span>
                                            @endif

                                            @if ($thread->status === 'published')
                                                <span class="text-xs text-emerald-600">
                                                    Dipublikasikan
                                                </span>
                                            @endif
                                        </div>

                                        <h3 class="mt-2 truncate text-sm font-semibold text-slate-900 sm:text-base">
                                            {{ $thread->judul }}
                                        </h3>

                                        <div class="mt-2 flex items-center gap-4 text-xs text-slate-400">
                                            <span>
                                                <i class="bi bi-chat-dots mr-1"></i>
                                                {{ $thread->replies_count }} balasan
                                            </span>

                                            <span>
                                                <i class="bi bi-eye mr-1"></i>
                                                {{ $thread->views }} views
                                            </span>

                                            <span>
                                                {{ $thread->created_at->diffForHumans() }}
                                            </span>
                                        </div>

                                    </div>

                                    <i class="bi bi-chevron-right hidden self-center text-slate-300 sm:block"></i>

                                </div>
                            </a>

                        @empty

                            <div class="px-6 py-12 text-center">
                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                                    <i class="bi bi-chat-square-text text-xl"></i>
                                </div>

                                <h3 class="mt-4 font-semibold text-slate-900">
                                    Belum ada diskusi
                                </h3>

                                <p class="mx-auto mt-1 max-w-sm text-sm text-slate-500">
                                    Bagikan pengalaman atau pertanyaan pertama kamu kepada komunitas.
                                </p>

                                <a
                                    href="{{ route('forum.create') }}"
                                    class="mt-5 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700"
                                >
                                    <i class="bi bi-plus-circle"></i>
                                    Buat Diskusi
                                </a>
                            </div>

                        @endforelse
                    </div>
                </section>


                {{-- Balasan Terbaru --}}
                <section class="rounded-2xl border border-slate-200 bg-white shadow-sm">

                    <div class="border-b border-slate-100 px-5 py-5 sm:px-6">
                        <h2 class="text-lg font-bold text-slate-900">
                            Balasan Terbaru
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Percakapan yang baru saja kamu ikuti.
                        </p>
                    </div>

                    @php
                        $myReplies = auth()->user()
                            ->replies()
                            ->with('thread')
                            ->latest()
                            ->take(5)
                            ->get();
                    @endphp

                    <div class="divide-y divide-slate-100">

                        @forelse ($myReplies as $reply)

                            <a
                                href="{{ route('forum.show', $reply->thread->slug) }}"
                                class="block px-5 py-5 transition hover:bg-slate-50 sm:px-6"
                            >
                                <div class="flex gap-4">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                                        <i class="bi bi-reply"></i>
                                    </div>

                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm font-semibold text-slate-900">
                                            Kamu membalas:
                                        </p>

                                        <p class="mt-1 truncate text-sm text-blue-600">
                                            {{ $reply->thread->judul }}
                                        </p>

                                        <p class="mt-2 line-clamp-2 text-sm text-slate-500">
                                            {{ $reply->isi }}
                                        </p>

                                        <p class="mt-2 text-xs text-slate-400">
                                            {{ $reply->created_at->diffForHumans() }}
                                        </p>
                                    </div>

                                    <i class="bi bi-chevron-right hidden self-center text-slate-300 sm:block"></i>

                                </div>
                            </a>

                        @empty

                            <div class="px-6 py-10 text-center">
                                <i class="bi bi-reply-all text-3xl text-slate-300"></i>

                                <p class="mt-3 text-sm text-slate-500">
                                    Belum ada balasan yang kamu buat.
                                </p>
                            </div>

                        @endforelse

                    </div>
                </section>

            </div>


            {{-- SIDEBAR --}}
            <aside class="space-y-6">

                {{-- Profile --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex items-center gap-4">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-xl font-bold text-white">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>

                        <div class="min-w-0">
                            <h3 class="truncate font-bold text-slate-900">
                                {{ auth()->user()->name }}
                            </h3>

                            <p class="truncate text-sm text-slate-500">
                                {{ auth()->user()->email }}
                            </p>
                        </div>
                    </div>

                    <a
                        href="{{ route('profile.edit') }}"
                        class="mt-5 flex w-full items-center justify-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                    >
                        <i class="bi bi-person"></i>
                        Edit Profil
                    </a>
                </div>


                {{-- Quick Action --}}
                <div class="rounded-2xl bg-slate-900 p-6 text-white shadow-sm">

                    <p class="text-sm font-medium text-blue-300">
                        Jelajahi Forum Juragan
                    </p>

                    <h3 class="mt-2 text-xl font-bold leading-snug">
                        Belajar, berdiskusi, dan berkembang bersama.
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-300">
                        Temukan insight bisnis, pengalaman pengusaha lain,
                        dan solusi untuk tantangan usahamu.
                    </p>

                    <a
                        href="{{ route('forum.index') }}"
                        class="mt-5 inline-flex items-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 transition hover:bg-slate-100"
                    >
                        Masuk Forum
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>


                {{-- Menu --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                    <h3 class="font-bold text-slate-900">
                        Akses Cepat
                    </h3>

                    <div class="mt-4 space-y-2">

                        <a
                            href="{{ route('forum.index') }}"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm text-slate-600 transition hover:bg-blue-50 hover:text-blue-600"
                        >
                            <i class="bi bi-chat-square-text"></i>
                            Forum Diskusi
                        </a>

                        <a
                            href="{{ route('seminar.index') }}"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm text-slate-600 transition hover:bg-blue-50 hover:text-blue-600"
                        >
                            <i class="bi bi-calendar-event"></i>
                            Seminar
                        </a>

                        <a
                            href="{{ route('consultation.create') }}"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm text-slate-600 transition hover:bg-blue-50 hover:text-blue-600"
                        >
                            <i class="bi bi-person-workspace"></i>
                            Konsultasi Bisnis
                        </a>

                    </div>
                </div>

            </aside>

        </div>

    </div>
</div>
@endsection