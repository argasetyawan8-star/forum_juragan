@extends('layouts.landing')

@section('content')

<div class="min-h-screen bg-[#f8fafc] pt-24 pb-16">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- =========================================================
             ALERT
        ========================================================== --}}
        @if (session('success'))
            <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4">
                <div class="flex items-start gap-3 text-sm font-medium text-emerald-700">
                    <i class="bi bi-check-circle-fill mt-0.5"></i>

                    <span>
                        {{ session('success') }}
                    </span>
                </div>
            </div>
        @endif


        {{-- =========================================================
             VALIDATION ERROR
        ========================================================== --}}
        @if ($errors->any())
            <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4">

                <div class="flex items-start gap-3">

                    <i class="bi bi-exclamation-circle-fill mt-0.5 text-red-500"></i>

                    <div class="text-sm text-red-700">

                        <p class="font-bold">
                            Ada yang perlu diperbaiki.
                        </p>

                        <ul class="mt-2 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>

                    </div>

                </div>

            </div>
        @endif


        {{-- =========================================================
             BREADCRUMB
        ========================================================== --}}
        <div class="mb-6 flex flex-wrap items-center gap-2 text-sm">

            <a
                href="{{ route('forum.index') }}"
                class="font-semibold text-slate-400 transition hover:text-blue-600"
            >
                Forum
            </a>

            <i class="bi bi-chevron-right text-[10px] text-slate-300"></i>

            @if ($thread->category)

                <span class="font-medium text-slate-500">
                    {{ $thread->category->nama }}
                </span>

                <i class="bi bi-chevron-right text-[10px] text-slate-300"></i>

            @endif

            <span class="truncate font-medium text-slate-400">
                {{ $thread->judul }}
            </span>

        </div>


        {{-- =========================================================
             MAIN GRID
        ========================================================== --}}
        <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_340px]">


            {{-- =====================================================
                 MAIN CONTENT
            ====================================================== --}}
            <main class="min-w-0">


                {{-- =================================================
                     THREAD
                ================================================== --}}
                <article
                    class="overflow-hidden rounded-[28px] border border-slate-200/80 bg-white shadow-[0_10px_40px_-18px_rgba(15,23,42,0.20)]"
                >

                    {{-- Accent --}}
                    <div class="h-1.5 bg-gradient-to-r from-blue-600 via-indigo-500 to-emerald-400"></div>


                    {{-- =================================================
                         HEADER THREAD
                    ================================================== --}}
                    <div class="px-5 py-6 sm:px-8 sm:py-8">

                        {{-- Category --}}
                        <div class="flex flex-wrap items-center gap-2">

                            @if ($thread->category)

                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-3 py-1.5 text-xs font-bold text-blue-600"
                                >
                                    <i class="bi bi-grid-fill text-[10px]"></i>

                                    {{ $thread->category->nama }}
                                </span>

                            @endif


                            @if ($thread->is_pinned)

                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-bold text-amber-600"
                                >
                                    <i class="bi bi-pin-angle-fill"></i>

                                    Pinned
                                </span>

                            @endif

                        </div>


                        {{-- Title --}}
                        <h1
                            class="mt-5 max-w-4xl text-2xl font-black leading-tight tracking-tight text-slate-950 sm:text-4xl"
                        >
                            {{ $thread->judul }}
                        </h1>


                        {{-- =================================================
                             AUTHOR + STATS
                        ================================================== --}}
                        <div class="mt-6 flex flex-wrap items-center justify-between gap-4">

                            {{-- Author --}}
                            <a
                                href="{{ route('profile.public', $thread->user) }}"
                                class="group flex items-center gap-3"
                            >

                                {{-- Avatar --}}
                                <div class="h-11 w-11 overflow-hidden rounded-full bg-blue-100">

                                    @if ($thread->user?->avatar)

                                        <img
                                            src="{{ asset('storage/' . $thread->user->avatar) }}"
                                            alt="Foto {{ $thread->user->name }}"
                                            class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                                        >

                                    @else

                                        <div
                                            class="flex h-full w-full items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 text-sm font-black text-white"
                                        >
                                            {{ strtoupper(substr($thread->user->name ?? 'U', 0, 1)) }}
                                        </div>

                                    @endif

                                </div>


                                {{-- Name --}}
                                <div>

                                    <p class="text-sm font-bold text-slate-900 transition group-hover:text-blue-600">
                                        {{ $thread->user->name ?? 'User' }}
                                    </p>

                                    <p class="mt-0.5 text-xs text-slate-400">
                                        {{ $thread->created_at->diffForHumans() }}
                                    </p>

                                </div>

                            </a>


                            {{-- Stats --}}
                            <div class="flex items-center gap-2">

                                <span
                                    class="inline-flex items-center gap-1.5 rounded-xl bg-slate-50 px-3 py-2 text-xs font-semibold text-slate-500"
                                >
                                    <i class="bi bi-eye"></i>

                                    {{ $thread->views }}
                                </span>


                                <a
                                    href="#comments"
                                    class="inline-flex items-center gap-1.5 rounded-xl bg-blue-50 px-3 py-2 text-xs font-bold text-blue-600 transition hover:bg-blue-100"
                                >
                                    <i class="bi bi-chat-left-text-fill"></i>

                                    {{ $thread->replies->count() }}
                                </a>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         THREAD BODY
                    ================================================== --}}
                    <div class="border-t border-slate-100 px-5 py-7 sm:px-8 sm:py-9">

                        <div class="max-w-none whitespace-pre-line text-[15px] leading-8 text-slate-700 sm:text-base">
                            {{ $thread->isi }}
                        </div>

                    </div>


                    {{-- =================================================
                         THREAD FOOTER
                    ================================================== --}}
                    <div
                        class="flex flex-wrap items-center justify-between gap-3 border-t border-slate-100 bg-slate-50/80 px-5 py-4 sm:px-8"
                    >

                        <div class="flex items-center gap-2 text-xs font-medium text-slate-400">

                            <i class="bi bi-calendar3"></i>

                            {{ $thread->created_at->format('d M Y, H:i') }}

                        </div>


                        <a
                            href="#comments"
                            class="inline-flex items-center gap-2 rounded-xl px-3 py-2 text-xs font-bold text-blue-600 transition hover:bg-blue-50"
                        >
                            Ikuti diskusi

                            <i class="bi bi-arrow-down"></i>
                        </a>

                    </div>

                </article>



                {{-- =================================================
                     COMMENTS
                ================================================== --}}
                <section
                    id="comments"
                    class="mt-8 overflow-hidden rounded-[28px] border border-slate-200/80 bg-white shadow-[0_10px_40px_-18px_rgba(15,23,42,0.16)]"
                >

                    {{-- Header --}}
                    <div class="border-b border-slate-100 px-5 py-6 sm:px-8">

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <div class="flex items-center gap-2">

                                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                                    <span class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                        Community Discussion
                                    </span>

                                </div>


                                <h2 class="mt-2 text-xl font-black text-slate-950">
                                    Percakapan
                                </h2>


                                <p class="mt-1 text-sm text-slate-500">
                                    Saling berbagi pengalaman dan sudut pandang.
                                </p>

                            </div>


                            <div
                                class="flex h-11 min-w-11 items-center justify-center rounded-2xl bg-slate-900 px-3 text-sm font-black text-white"
                            >
                                {{ $thread->replies->count() }}
                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         COMMENTS LIST
                    ================================================== --}}
                    <div class="px-5 py-7 sm:px-8 sm:py-8">

                        <div class="space-y-8">

                            @forelse ($thread->replies as $reply)

                                @include('forum.partials.reply', [
                                    'reply' => $reply,
                                    'thread' => $thread,
                                ])

                            @empty

                                <div class="py-14 text-center">

                                    <div
                                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 text-slate-400"
                                    >
                                        <i class="bi bi-chat-square-quote text-2xl"></i>
                                    </div>

                                    <h3 class="mt-5 font-bold text-slate-900">
                                        Percakapan belum dimulai
                                    </h3>

                                    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                                        Jadilah anggota pertama yang memberikan pendapat pada diskusi ini.
                                    </p>

                                </div>

                            @endforelse

                        </div>

                    </div>


                    {{-- =================================================
                         MAIN COMMENT FORM
                    ================================================== --}}
                    @auth

                        <div class="border-t border-slate-100 bg-slate-50/70 px-5 py-6 sm:px-8">

                            <form
                                method="POST"
                                action="{{ route('forum.reply.store', $thread) }}"
                                class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition focus-within:border-blue-200 focus-within:shadow-md"
                            >

                                @csrf

                                <div class="flex gap-3">

                                    {{-- Current User Avatar --}}
                                    <a
                                        href="{{ route('profile.public', auth()->user()) }}"
                                        class="h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                    >

                                        @if (auth()->user()->avatar)

                                            <img
                                                src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                                alt="Foto {{ auth()->user()->name }}"
                                                class="h-full w-full object-cover"
                                            >

                                        @else

                                            <div
                                                class="flex h-full w-full items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 text-sm font-black text-white"
                                            >
                                                {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                                            </div>

                                        @endif

                                    </a>


                                    <div class="min-w-0 flex-1">

                                        <textarea
                                            name="isi"
                                            rows="3"
                                            required
                                            maxlength="5000"
                                            placeholder="Bagikan pendapat atau pengalamanmu..."
                                            class="w-full resize-none border-0 bg-transparent px-1 py-1 text-sm leading-7 text-slate-700 outline-none placeholder:text-slate-400 focus:ring-0"
                                        >{{ old('isi') }}</textarea>


                                        <div
                                            class="mt-3 flex flex-col gap-3 border-t border-slate-100 pt-3 sm:flex-row sm:items-center sm:justify-between"
                                        >

                                            <p class="text-xs text-slate-400">
                                                Tetap santun dan bantu anggota lain berkembang.
                                            </p>


                                            <button
                                                type="submit"
                                                class="inline-flex items-center justify-center gap-2 rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-blue-600"
                                            >
                                                Kirim

                                                <i class="bi bi-send-fill text-xs"></i>
                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    @else

                        {{-- Guest --}}
                        <div class="border-t border-slate-100 bg-slate-50/70 px-5 py-6 sm:px-8">

                            <div class="rounded-2xl border border-blue-100 bg-gradient-to-r from-blue-50 to-indigo-50 p-5">

                                <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

                                    <div>

                                        <p class="text-xs font-bold uppercase tracking-wider text-blue-600">
                                            Join the conversation
                                        </p>

                                        <h3 class="mt-2 font-black text-slate-900">
                                            Punya pengalaman atau pendapat?
                                        </h3>

                                        <p class="mt-1 text-sm text-slate-500">
                                            Login untuk ikut berdiskusi dengan para juragan lainnya.
                                        </p>

                                    </div>


                                    <div class="flex shrink-0 gap-2">

                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-bold text-slate-700 transition hover:bg-slate-50"
                                        >
                                            Masuk
                                        </a>

                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700"
                                        >
                                            Daftar
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endauth

                </section>

            </main>



            {{-- =====================================================
                 SIDEBAR
            ====================================================== --}}
            <aside class="space-y-6 lg:sticky lg:top-28 lg:self-start">


                {{-- =================================================
                     AUTHOR CARD
                ================================================== --}}
                <div class="rounded-[28px] border border-slate-200/80 bg-white p-6 shadow-sm">

                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                        Diposting oleh
                    </p>


                    <a
                        href="{{ route('profile.public', $thread->user) }}"
                        class="group mt-5 flex items-center gap-3"
                    >

                        {{-- Avatar --}}
                        <div class="h-12 w-12 overflow-hidden rounded-2xl bg-blue-100">

                            @if ($thread->user?->avatar)

                                <img
                                    src="{{ asset('storage/' . $thread->user->avatar) }}"
                                    alt="Foto {{ $thread->user->name }}"
                                    class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                                >

                            @else

                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 font-black text-white"
                                >
                                    {{ strtoupper(substr($thread->user->name ?? 'U', 0, 1)) }}
                                </div>

                            @endif

                        </div>


                        <div class="min-w-0">

                            <h3 class="truncate font-bold text-slate-900 transition group-hover:text-blue-600">
                                {{ $thread->user->name ?? 'User' }}
                            </h3>

                            <p class="mt-1 text-xs text-slate-400">
                                Lihat profil anggota
                            </p>

                        </div>

                    </a>


                    <div class="mt-5 grid grid-cols-2 gap-3">

                        <div class="rounded-2xl bg-slate-50 p-4">

                            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-400">
                                Views
                            </p>

                            <p class="mt-1 text-xl font-black text-slate-900">
                                {{ $thread->views }}
                            </p>

                        </div>


                        <div class="rounded-2xl bg-slate-50 p-4">

                            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-400">
                                Komentar
                            </p>

                            <p class="mt-1 text-xl font-black text-slate-900">
                                {{ $thread->replies->count() }}
                            </p>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     POPULAR DISCUSSIONS
                ================================================== --}}
                <div class="rounded-[28px] border border-slate-200/80 bg-white p-6 shadow-sm">

                    <div class="flex items-start justify-between">

                        <div>

                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                Discover
                            </p>

                            <h3 class="mt-1 text-lg font-black text-slate-900">
                                Diskusi populer
                            </h3>

                        </div>


                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-orange-50 text-orange-500"
                        >
                            <i class="bi bi-fire"></i>
                        </div>

                    </div>


                    <div class="mt-6 space-y-5">

                        @forelse ($popularThreads as $popular)

                            <a
                                href="{{ route('forum.show', $popular->slug) }}"
                                class="group block"
                            >

                                <div class="flex gap-3">

                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-500 transition group-hover:bg-blue-50 group-hover:text-blue-600"
                                    >
                                        <i class="bi bi-chat-square-text"></i>
                                    </div>


                                    <div class="min-w-0 flex-1">

                                        <h4
                                            class="line-clamp-2 text-sm font-bold leading-5 text-slate-800 transition group-hover:text-blue-600"
                                        >
                                            {{ $popular->judul }}
                                        </h4>


                                        <div class="mt-2 flex items-center gap-3 text-[11px] font-medium text-slate-400">

                                            <span>
                                                <i class="bi bi-eye mr-1"></i>
                                                {{ $popular->views }}
                                            </span>

                                            <span>
                                                <i class="bi bi-chat mr-1"></i>
                                                {{ $popular->replies_count }}
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </a>

                        @empty

                            <p class="text-sm text-slate-400">
                                Belum ada diskusi lain.
                            </p>

                        @endforelse

                    </div>

                </div>



                {{-- =================================================
                     CONSULTATION
                ================================================== --}}
                <div class="relative overflow-hidden rounded-[28px] bg-slate-950 p-6 text-white shadow-xl">

                    <div class="absolute -right-12 -top-12 h-32 w-32 rounded-full bg-blue-600/20 blur-2xl"></div>

                    <div class="absolute -bottom-12 -left-12 h-32 w-32 rounded-full bg-emerald-400/10 blur-2xl"></div>


                    <div class="relative">

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/10"
                        >
                            <i class="bi bi-lightbulb-fill text-emerald-400"></i>
                        </div>


                        <p class="mt-5 text-xs font-bold uppercase tracking-widest text-emerald-400">
                            Business Consultation
                        </p>


                        <h3 class="mt-2 text-xl font-black leading-snug">
                            Diskusi belum cukup?
                        </h3>


                        <p class="mt-3 text-sm leading-6 text-slate-300">
                            Dapatkan bantuan yang lebih terarah untuk masalah
                            bisnis yang sedang kamu hadapi.
                        </p>


                        <a
                            href="{{ route('consultation.create') }}"
                            class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-3 text-sm font-black text-slate-900 transition hover:bg-blue-50"
                        >
                            Konsultasi Bisnis

                            <i class="bi bi-arrow-up-right"></i>
                        </a>

                    </div>

                </div>



                {{-- =================================================
                     BACK
                ================================================== --}}
                <a
                    href="{{ route('forum.index') }}"
                    class="flex items-center justify-center gap-2 rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-bold text-slate-600 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                >
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke forum
                </a>

            </aside>

        </div>

    </div>

</div>


{{-- =========================================================
     JAVASCRIPT
========================================================= --}}
<script>
    function openReplyForm(replyId, username) {
        const form = document.getElementById(`reply-form-${replyId}`);

        if (!form) {
            return;
        }

        form.classList.remove('hidden');

        const textarea = form.querySelector('textarea');

        if (textarea) {

            textarea.value = `@${username} `;

            textarea.focus();

            textarea.setSelectionRange(
                textarea.value.length,
                textarea.value.length
            );
        }
    }


    function closeReplyForm(replyId) {
        const form = document.getElementById(`reply-form-${replyId}`);

        if (!form) {
            return;
        }

        form.classList.add('hidden');

        const textarea = form.querySelector('textarea');

        if (textarea) {
            textarea.value = '';
        }
    }


    document.addEventListener('DOMContentLoaded', function () {

        if (window.location.hash.startsWith('#reply-')) {

            const target = document.querySelector(window.location.hash);

            if (target) {

                setTimeout(() => {

                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });


                    target.classList.add(
                        'ring-4',
                        'ring-blue-100',
                        'rounded-2xl'
                    );


                    setTimeout(() => {

                        target.classList.remove(
                            'ring-4',
                            'ring-blue-100'
                        );

                    }, 2500);

                }, 300);

            }

        }

    });
</script>

@endsection