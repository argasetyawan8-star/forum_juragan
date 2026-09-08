@extends('admin.layouts.app')

@section('content')
<div class="mx-auto max-w-7xl space-y-6">

    {{-- Breadcrumb --}}
    <div class="flex flex-wrap items-center gap-2 text-sm text-slate-500">
        <a
            href="{{ route('admin.forum.threads') }}"
            class="transition hover:text-blue-600"
        >
            Forum
        </a>

        <span>/</span>

        <span class="font-medium text-slate-900">
            Detail Thread
        </span>
    </div>


    {{-- Success Message --}}
    @if (session('success'))
        <div class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mt-0.5 h-5 w-5 shrink-0"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 13l4 4L19 7"
                />
            </svg>

            <span>{{ session('success') }}</span>
        </div>
    @endif


    {{-- Error Message --}}
    @if (session('error'))
        <div class="flex items-start gap-3 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mt-0.5 h-5 w-5 shrink-0"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 9v4m0 4h.01M10.29 3.86l-8.82 15a1 1 0 001.71 1.02L12 4.88l8.82 15a1 1 0 001.71-1.02l-8.82-15a1 1 0 00-1.71 0z"
                />
            </svg>

            <span>{{ session('error') }}</span>
        </div>
    @endif


    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <p class="text-sm font-medium text-blue-600">
                Forum Management
            </p>

            <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Detail Thread
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Lihat detail diskusi dan kelola balasan pengguna.
            </p>
        </div>

        <a
            href="{{ route('admin.forum.threads') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-slate-300 hover:bg-slate-50"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 19l-7-7m0 0l7-7m-7 7h20"
                />
            </svg>

            Kembali
        </a>

    </div>


    {{-- Thread --}}
    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

        {{-- Thread Header --}}
        <div class="border-b border-slate-100 p-5 sm:p-7">

            {{-- Badges --}}
            <div class="flex flex-wrap items-center gap-2">

                <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                    {{ $thread->category->nama_kategori ?? 'Tanpa Kategori' }}
                </span>

                @if ($thread->status === 'published')
                    <span class="inline-flex items-center rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                        Published
                    </span>
                @elseif ($thread->status === 'draft')
                    <span class="inline-flex items-center rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">
                        Draft
                    </span>
                @else
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                        Closed
                    </span>
                @endif

                @if ($thread->is_pinned)
                    <span class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-3 py-1 text-xs font-semibold text-violet-700">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-3.5 w-3.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 17v4m0-4l-4-4V6h8v7l-4 4zM9 6V3h6v3"
                            />
                        </svg>

                        Pinned
                    </span>
                @endif

            </div>


            {{-- Title --}}
            <h2 class="mt-4 text-xl font-bold leading-tight text-slate-900 sm:text-2xl">
                {{ $thread->judul }}
            </h2>


            {{-- Author --}}
            <div class="mt-5 flex items-center gap-3">

                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-sm font-bold text-blue-700">
                    {{ strtoupper(substr($thread->user->name ?? 'U', 0, 1)) }}
                </div>

                <div>
                    <p class="text-sm font-semibold text-slate-900">
                        {{ $thread->user->name ?? 'User' }}
                    </p>

                    <p class="text-xs text-slate-400">
                        {{ $thread->created_at->format('d F Y, H:i') }}
                    </p>
                </div>

            </div>

        </div>


        {{-- Thread Body --}}
        <div class="p-5 sm:p-7">

            <div class="whitespace-pre-line text-sm leading-7 text-slate-600 sm:text-base">
                {{ $thread->isi }}
            </div>


            {{-- Stats --}}
            <div class="mt-7 flex flex-wrap items-center gap-5 border-t border-slate-100 pt-5">

                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                        />

                        <circle
                            cx="12"
                            cy="12"
                            r="3"
                        />
                    </svg>

                    <span>
                        {{ number_format($thread->views) }} views
                    </span>
                </div>


                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 10h8M8 14h5M21 12a8.94 8.94 0 01-1.34 4.74A9 9 0 0112 21a8.94 8.94 0 01-4.74-1.34L3 21l1.34-4.26A8.94 8.94 0 013 12a9 9 0 0118 0z"
                        />
                    </svg>

                    <span>
                        {{ $thread->replies->count() }} replies
                    </span>
                </div>

            </div>

        </div>

    </div>


    {{-- Replies --}}
    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

        <div class="border-b border-slate-100 px-5 py-5 sm:px-7">

            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">

                <div>
                    <h3 class="text-lg font-bold text-slate-900">
                        Balasan Diskusi
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        {{ $thread->replies->count() }}
                        {{ $thread->replies->count() === 1 ? 'balasan' : 'balasan' }}
                    </p>
                </div>

                <div class="rounded-xl bg-slate-50 px-3 py-2 text-xs font-medium text-slate-500">
                    Kelola komentar pengguna
                </div>

            </div>

        </div>


        @if ($thread->replies->count())

            <div class="divide-y divide-slate-100">

                @foreach ($thread->replies as $reply)

                    <div class="p-5 sm:p-7">

                        <div class="flex gap-4">

                            {{-- Avatar --}}
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-sm font-bold text-blue-700">
                                {{ strtoupper(substr($reply->user->name ?? 'U', 0, 1)) }}
                            </div>


                            {{-- Content --}}
                            <div class="min-w-0 flex-1">

                                {{-- Reply Header --}}
                                <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">

                                    <div>
                                        <p class="font-semibold text-slate-900">
                                            {{ $reply->user->name ?? 'User' }}
                                        </p>

                                        <p class="mt-1 text-xs text-slate-400">
                                            {{ $reply->created_at->format('d M Y, H:i') }}
                                        </p>
                                    </div>


                                    {{-- Delete Reply --}}
                                    <form
                                        action="{{ route('admin.forum.replies.destroy', $reply) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus balasan ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="inline-flex items-center gap-2 rounded-xl px-3 py-2 text-xs font-semibold text-red-600 transition hover:bg-red-50 hover:text-red-700"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M6 7h12M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2m2 0v12a1 1 0 01-1 1H8a1 1 0 01-1-1V7h10zM10 11v5M14 11v5"
                                                />
                                            </svg>

                                            Hapus
                                        </button>

                                    </form>

                                </div>


                                {{-- Reply Body --}}
                                <div class="mt-4 rounded-2xl bg-slate-50 p-4 text-sm leading-7 text-slate-600">
                                    {{ $reply->isi }}
                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            {{-- Empty Replies --}}
            <div class="px-5 py-12 text-center sm:px-7">

                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 10h8M8 14h5M21 12a8.94 8.94 0 01-1.34 4.74A9 9 0 0112 21a8.94 8.94 0 01-4.74-1.34L3 21l1.34-4.26A8.94 8.94 0 013 12a9 9 0 0118 0z"
                        />
                    </svg>
                </div>

                <h4 class="mt-4 text-sm font-semibold text-slate-900">
                    Belum ada balasan
                </h4>

                <p class="mt-1 text-sm text-slate-500">
                    Thread ini belum memiliki balasan dari pengguna.
                </p>

            </div>

        @endif

    </div>


    {{-- Bottom Grid --}}
    <div class="grid gap-6 lg:grid-cols-3">

        {{-- Actions --}}
        <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6 lg:col-span-2">

            <h3 class="text-lg font-bold text-slate-900">
                Aksi Thread
            </h3>

            <p class="mt-1 text-sm text-slate-500">
                Kelola status dan konten thread ini.
            </p>


            <div class="mt-5 flex flex-col gap-3 sm:flex-row sm:flex-wrap">

                {{-- Edit --}}
                <a
                    href="{{ route('admin.forum.threads.edit', $thread) }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 20h9"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"
                        />
                    </svg>

                    Edit Thread
                </a>


                {{-- Pin --}}
                <form
                    action="{{ route('admin.forum.threads.pin', $thread) }}"
                    method="POST"
                >
                    @csrf
                    @method('PATCH')

                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-violet-200 bg-violet-50 px-4 py-2.5 text-sm font-semibold text-violet-700 transition hover:bg-violet-100 sm:w-auto"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 17v4m0-4l-4-4V6h8v7l-4 4zM9 6V3h6v3"
                            />
                        </svg>

                        {{ $thread->is_pinned ? 'Unpin Thread' : 'Pin Thread' }}
                    </button>

                </form>


                {{-- Delete Thread --}}
                <form
                    action="{{ route('admin.forum.threads.destroy', $thread) }}"
                    method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus thread ini? Semua balasan di dalamnya juga akan terhapus.')"
                >
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-red-200 bg-red-50 px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-100 sm:w-auto"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 7h12M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2m2 0v12a1 1 0 01-1 1H8a1 1 0 01-1-1V7h10zM10 11v5M14 11v5"
                            />
                        </svg>

                        Hapus Thread
                    </button>

                </form>

            </div>

        </div>


        {{-- Thread Information --}}
        <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

            <h3 class="text-lg font-bold text-slate-900">
                Informasi Thread
            </h3>


            <div class="mt-5 space-y-4">

                <div>
                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        ID Thread
                    </p>

                    <p class="mt-1 text-sm font-semibold text-slate-900">
                        #{{ $thread->id }}
                    </p>
                </div>


                <div>
                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Slug
                    </p>

                    <p class="mt-1 break-all text-sm text-slate-600">
                        {{ $thread->slug }}
                    </p>
                </div>


                <div>
                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Dibuat
                    </p>

                    <p class="mt-1 text-sm text-slate-600">
                        {{ $thread->created_at->format('d F Y, H:i') }}
                    </p>
                </div>


                <div>
                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Terakhir diperbarui
                    </p>

                    <p class="mt-1 text-sm text-slate-600">
                        {{ $thread->updated_at->format('d F Y, H:i') }}
                    </p>
                </div>

            </div>

        </div>

    </div>


    {{-- Back --}}
    <div>
        <a
            href="{{ route('admin.forum.threads') }}"
            class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 transition hover:text-blue-600"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 19l-7-7m0 0l7-7m-7 7h20"
                />
            </svg>

            Kembali ke Threads
        </a>
    </div>

</div>
@endsection