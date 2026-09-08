@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- =========================================================
         HEADER
    ========================================================== --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <a
                    href="{{ route('admin.forum.threads') }}"
                    class="transition hover:text-blue-600"
                >
                    Forum
                </a>

                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 0 1 .02-1.06L10.94 10 7.23 6.29a.75.75 0 1 1 1.06-1.06l4.24 4.24a.75.75 0 0 1 0 1.06l-4.24 4.24a.75.75 0 0 1-1.06-.02Z"
                        clip-rule="evenodd"
                    />
                </svg>

                <span class="text-slate-900">Replies</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Manajemen Replies
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola seluruh balasan yang diberikan pengguna di forum.
            </p>
        </div>

        {{-- Total --}}
        <div class="flex w-fit items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 10h8M8 14h5m-8 5 3-3h8a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v4a4 4 0 0 0 4 4v3Z"
                    />
                </svg>
            </div>

            <div>
                <p class="text-xs font-medium text-slate-500">
                    Total Replies
                </p>

                <p class="text-lg font-bold text-slate-900">
                    {{ number_format($replies->total()) }}
                </p>
            </div>
        </div>

    </div>


    {{-- =========================================================
         FLASH MESSAGE
    ========================================================== --}}
    @if(session('success'))
        <div
            class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-800"
        >
            <svg class="mt-0.5 h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m5 12 4 4L19 6"
                />
            </svg>

            <div>
                <p class="font-semibold">Berhasil</p>
                <p class="mt-0.5 text-sm">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    @endif


    @if(session('error'))
        <div
            class="flex items-start gap-3 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-800"
        >
            <svg class="mt-0.5 h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 9v3m0 4h.01M10.29 3.86 2.82 17a2 2 0 0 0 1.74 3h14.88a2 2 0 0 0 1.74-3L13.71 3.86a2 2 0 0 0-3.42 0Z"
                />
            </svg>

            <div>
                <p class="font-semibold">Terjadi kesalahan</p>
                <p class="mt-0.5 text-sm">
                    {{ session('error') }}
                </p>
            </div>
        </div>
    @endif


    {{-- =========================================================
         SEARCH
    ========================================================== --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm sm:p-5">

        <form
            action="{{ route('admin.forum.replies') }}"
            method="GET"
            class="flex flex-col gap-3 sm:flex-row"
        >

            <div class="relative flex-1">

                <svg
                    class="pointer-events-none absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m21 21-4.35-4.35m1.35-5.15a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0Z"
                    />
                </svg>

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari isi reply, nama user, email, atau judul thread..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                >

            </div>

            <button
                type="submit"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 active:scale-[0.98]"
            >
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m21 21-4.35-4.35m1.35-5.15a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0Z"
                    />
                </svg>

                Cari
            </button>

            @if(request('search'))
                <a
                    href="{{ route('admin.forum.replies') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-50 hover:text-slate-900"
                >
                    Reset
                </a>
            @endif

        </form>

    </div>


    {{-- =========================================================
         DESKTOP TABLE
    ========================================================== --}}
    <div class="hidden overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm lg:block">

        <div class="overflow-x-auto">

            <table class="w-full min-w-[900px]">

                <thead>
                    <tr class="border-b border-slate-200 bg-slate-50">

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Pengguna
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Thread
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Balasan
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Tanggal
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>

                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">

                    @forelse($replies as $reply)

                        <tr class="transition hover:bg-slate-50/70">

                            {{-- USER --}}
                            <td class="px-6 py-5 align-top">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-sm font-bold text-blue-700">
                                        {{ strtoupper(substr($reply->user->name ?? 'U', 0, 1)) }}
                                    </div>

                                    <div class="min-w-0">

                                        <p class="truncate font-semibold text-slate-900">
                                            {{ $reply->user->name ?? 'Pengguna' }}
                                        </p>

                                        <p class="truncate text-xs text-slate-500">
                                            {{ $reply->user->email ?? '-' }}
                                        </p>

                                    </div>

                                </div>

                            </td>


                            {{-- THREAD --}}
                            <td class="px-6 py-5 align-top">

                                @if($reply->thread)

                                    <a
                                        href="{{ route('admin.forum.threads.show', $reply->thread) }}"
                                        class="line-clamp-2 max-w-xs text-sm font-semibold text-slate-900 transition hover:text-blue-600"
                                    >
                                        {{ $reply->thread->judul }}
                                    </a>

                                @else

                                    <span class="text-sm text-slate-400">
                                        Thread tidak ditemukan
                                    </span>

                                @endif

                            </td>


                            {{-- REPLY --}}
                            <td class="max-w-md px-6 py-5 align-top">

                                <p class="line-clamp-3 text-sm leading-6 text-slate-600">
                                    {{ $reply->isi }}
                                </p>

                            </td>


                            {{-- DATE --}}
                            <td class="whitespace-nowrap px-6 py-5 align-top">

                                <p class="text-sm font-medium text-slate-700">
                                    {{ $reply->created_at->format('d M Y') }}
                                </p>

                                <p class="mt-1 text-xs text-slate-400">
                                    {{ $reply->created_at->format('H:i') }} WIB
                                </p>

                            </td>


                            {{-- ACTION --}}
                            <td class="px-6 py-5 align-top">

                                <div class="flex justify-end gap-2">

                                    @if($reply->thread)

                                        <a
                                            href="{{ route('admin.forum.threads.show', $reply->thread) }}"
                                            title="Lihat thread"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-500 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                                        >
                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M2.25 12s3.5-6.25 9.75-6.25S21.75 12 21.75 12 18.25 18.25 12 18.25 2.25 12 2.25 12Z"
                                                />
                                                <circle cx="12" cy="12" r="2.75" />
                                            </svg>
                                        </a>

                                    @endif

                                    <form
                                        action="{{ route('admin.forum.replies.destroy', $reply) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus balasan ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            title="Hapus reply"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-red-200 bg-white text-red-500 transition hover:bg-red-50 hover:text-red-600"
                                        >
                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M4 7h16m-10 4v6m4-6v6M9 7V4h6v3m-8 0 1 13h8l1-13"
                                                />
                                            </svg>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center">

                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8 10h8M8 14h5m-8 5 3-3h8a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v4a4 4 0 0 0 4 4v3Z"
                                        />
                                    </svg>
                                </div>

                                <h3 class="mt-4 font-semibold text-slate-900">
                                    Belum ada balasan
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Belum terdapat reply yang sesuai dengan pencarian.
                                </p>

                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>


    {{-- =========================================================
         MOBILE CARDS
    ========================================================== --}}
    <div class="space-y-4 lg:hidden">

        @forelse($replies as $reply)

            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">

                {{-- User --}}
                <div class="flex items-center justify-between gap-3">

                    <div class="flex min-w-0 items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-sm font-bold text-blue-700">
                            {{ strtoupper(substr($reply->user->name ?? 'U', 0, 1)) }}
                        </div>

                        <div class="min-w-0">

                            <p class="truncate font-semibold text-slate-900">
                                {{ $reply->user->name ?? 'Pengguna' }}
                            </p>

                            <p class="truncate text-xs text-slate-500">
                                {{ $reply->created_at->format('d M Y, H:i') }}
                            </p>

                        </div>

                    </div>

                    <span class="shrink-0 rounded-full bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-600">
                        Reply
                    </span>

                </div>


                {{-- Thread --}}
                @if($reply->thread)

                    <div class="mt-4 rounded-xl bg-slate-50 p-3">

                        <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">
                            Thread
                        </p>

                        <a
                            href="{{ route('admin.forum.threads.show', $reply->thread) }}"
                            class="mt-1 block line-clamp-2 text-sm font-semibold text-slate-800 transition hover:text-blue-600"
                        >
                            {{ $reply->thread->judul }}
                        </a>

                    </div>

                @endif


                {{-- Reply content --}}
                <div class="mt-4">

                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                        Isi Balasan
                    </p>

                    <p class="mt-2 line-clamp-4 text-sm leading-6 text-slate-600">
                        {{ $reply->isi }}
                    </p>

                </div>


                {{-- Actions --}}
                <div class="mt-4 flex items-center gap-2 border-t border-slate-100 pt-4">

                    @if($reply->thread)

                        <a
                            href="{{ route('admin.forum.threads.show', $reply->thread) }}"
                            class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                        >
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 12s3.5-6.25 9.75-6.25S21.75 18.25 12 18.25 2.25 12 2.25 12Z"
                                />
                                <circle cx="12" cy="12" r="2.75" />
                            </svg>

                            Lihat Thread
                        </a>

                    @endif

                    <form
                        action="{{ route('admin.forum.replies.destroy', $reply) }}"
                        method="POST"
                        class="{{ $reply->thread ? '' : 'flex-1' }}"
                        onsubmit="return confirm('Yakin ingin menghapus balasan ini?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-red-200 bg-red-50 px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-100"
                        >
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 7h16m-10 4v6m4-6v6M9 7V4h6v3m-8 0 1 13"
                                />
                            </svg>

                            Hapus
                        </button>

                    </form>

                </div>

            </div>

        @empty

            <div class="rounded-2xl border border-slate-200 bg-white px-6 py-16 text-center shadow-sm">

                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 10h8M8 14h5m-8 5 3-3h8a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v4a4 4 0 0 0 4 4v3Z"
                        />
                    </svg>
                </div>

                <h3 class="mt-4 font-semibold text-slate-900">
                    Belum ada balasan
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Belum terdapat reply yang sesuai dengan pencarian.
                </p>

            </div>

        @endforelse

    </div>


    {{-- =========================================================
         PAGINATION
    ========================================================== --}}
    @if($replies->hasPages())

        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-4 shadow-sm sm:px-6">
            {{ $replies->links() }}
        </div>

    @endif

</div>

@endsection