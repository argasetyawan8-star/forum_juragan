@extends('admin.layouts.app')

@section('content')
<div class="mx-auto max-w-7xl space-y-6">

    {{-- Breadcrumb --}}
    <div class="flex flex-wrap items-center gap-2 text-sm text-slate-500">
        <a
            href="{{ route('admin.users') }}"
            class="transition hover:text-blue-600"
        >
            Users
        </a>

        <span>/</span>

        <span class="font-medium text-slate-900">
            Detail Pengguna
        </span>
    </div>


    {{-- Flash Success --}}
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


    {{-- Flash Error --}}
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
                    d="M12 9v4m0 4h.01M10.29 3.86l-8.82 15a1 1 0 001.71 1.02L12 4.88l8.82 15a1 1 0 01-1.71 1.02l-8.82-15a1 1 0 01-1.71 0z"
                />
            </svg>

            <span>{{ session('error') }}</span>
        </div>
    @endif


    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <p class="text-sm font-medium text-blue-600">
                User Management
            </p>

            <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Detail Pengguna
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Informasi akun dan aktivitas pengguna Forum Juragan.
            </p>
        </div>

        <a
            href="{{ route('admin.users') }}"
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


    {{-- Profile Card --}}
    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

        <div class="relative overflow-hidden bg-slate-900 px-5 py-8 sm:px-8">

            {{-- Decorative --}}
            <div class="absolute -right-16 -top-16 h-40 w-40 rounded-full bg-blue-500/20 blur-2xl"></div>
            <div class="absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-violet-500/10 blur-3xl"></div>

            <div class="relative flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

                <div class="flex items-center gap-4">

                    {{-- Avatar --}}
                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-white text-xl font-bold text-blue-700 shadow-lg">
                        {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                    </div>


                    <div class="min-w-0">

                        <h2 class="truncate text-xl font-bold text-white sm:text-2xl">
                            {{ $user->name }}
                        </h2>

                        <p class="mt-1 truncate text-sm text-slate-300">
                            {{ $user->email }}
                        </p>

                        <div class="mt-3">

                            @if ($user->email_verified_at)

                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-400/15 px-3 py-1.5 text-xs font-semibold text-emerald-300">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                    Email Terverifikasi
                                </span>

                            @else

                                <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-400/15 px-3 py-1.5 text-xs font-semibold text-amber-300">
                                    <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                                    Email Belum Diverifikasi
                                </span>

                            @endif

                        </div>

                    </div>

                </div>


                {{-- User ID --}}
                <div class="w-fit rounded-2xl border border-white/10 bg-white/5 px-4 py-3">

                    <p class="text-xs font-medium text-slate-400">
                        User ID
                    </p>

                    <p class="mt-1 text-lg font-bold text-white">
                        #{{ $user->id }}
                    </p>

                </div>

            </div>

        </div>


        {{-- Stats --}}
        <div class="grid grid-cols-1 divide-y divide-slate-100 sm:grid-cols-3 sm:divide-x sm:divide-y-0">

            {{-- Threads --}}
            <div class="p-5 sm:p-6">

                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">

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

                    </div>

                    <div>
                        <p class="text-xs font-medium text-slate-400">
                            Total Threads
                        </p>

                        <p class="mt-1 text-xl font-bold text-slate-900">
                            {{ $user->threads_count }}
                        </p>
                    </div>

                </div>

            </div>


            {{-- Replies --}}
            <div class="p-5 sm:p-6">

                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">

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
                                d="M21 12a8.94 8.94 0 01-1.34 4.74A9 9 0 0112 21a8.94 8.94 0 01-4.74-1.34L3 21l1.34-4.26A8.94 8.94 0 013 12a9 9 0 0118 0z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 10h8M8 14h5"
                            />
                        </svg>

                    </div>

                    <div>
                        <p class="text-xs font-medium text-slate-400">
                            Total Replies
                        </p>

                        <p class="mt-1 text-xl font-bold text-slate-900">
                            {{ $user->replies_count }}
                        </p>
                    </div>

                </div>

            </div>


            {{-- Joined --}}
            <div class="p-5 sm:p-6">

                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <rect
                                width="18"
                                height="18"
                                x="3"
                                y="4"
                                rx="2"
                                ry="2"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16 2v4M8 2v4M3 10h18"
                            />
                        </svg>

                    </div>

                    <div>
                        <p class="text-xs font-medium text-slate-400">
                            Bergabung
                        </p>

                        <p class="mt-1 text-sm font-bold text-slate-900">
                            {{ $user->created_at->format('d M Y') }}
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Main Content --}}
    <div class="grid gap-6 lg:grid-cols-3">

        {{-- User Information --}}
        <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

            <div class="flex items-center justify-between">

                <div>
                    <h3 class="text-lg font-bold text-slate-900">
                        Informasi Akun
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Detail dasar pengguna.
                    </p>
                </div>

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-100 text-slate-500">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle
                            cx="12"
                            cy="8"
                            r="4"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 21a8 8 0 0116 0"
                        />
                    </svg>

                </div>

            </div>


            <div class="mt-6 space-y-5">

                {{-- Name --}}
                <div>

                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Nama
                    </p>

                    <p class="mt-1 text-sm font-semibold text-slate-900">
                        {{ $user->name }}
                    </p>

                </div>


                {{-- Email --}}
                <div>

                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Email
                    </p>

                    <p class="mt-1 break-all text-sm text-slate-700">
                        {{ $user->email }}
                    </p>

                </div>


                {{-- Verification --}}
                <div>

                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Verifikasi Email
                    </p>

                    @if ($user->email_verified_at)

                        <div class="mt-1">

                            <p class="text-sm font-semibold text-emerald-600">
                                Sudah diverifikasi
                            </p>

                            <p class="mt-0.5 text-xs text-slate-400">
                                {{ $user->email_verified_at->format('d F Y, H:i') }}
                            </p>

                        </div>

                    @else

                        <p class="mt-1 text-sm font-semibold text-amber-600">
                            Belum diverifikasi
                        </p>

                    @endif

                </div>


                {{-- Created --}}
                <div>

                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Akun Dibuat
                    </p>

                    <p class="mt-1 text-sm text-slate-700">
                        {{ $user->created_at->format('d F Y, H:i') }}
                    </p>

                </div>


                {{-- Updated --}}
                <div>

                    <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                        Terakhir Diperbarui
                    </p>

                    <p class="mt-1 text-sm text-slate-700">
                        {{ $user->updated_at->format('d F Y, H:i') }}
                    </p>

                </div>

            </div>

        </div>


        {{-- Latest Threads --}}
        <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6 lg:col-span-2">

            <div class="flex items-center justify-between gap-4">

                <div>
                    <h3 class="text-lg font-bold text-slate-900">
                        Thread Terbaru
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Diskusi terbaru yang dibuat pengguna.
                    </p>
                </div>

                <span class="rounded-xl bg-blue-50 px-3 py-1.5 text-xs font-semibold text-blue-700">
                    {{ $user->threads_count }} Total
                </span>

            </div>


            <div class="mt-5 space-y-3">

                @forelse ($threads as $thread)

                    <a
                        href="{{ route('admin.forum.threads.show', $thread) }}"
                        class="group block rounded-2xl border border-slate-100 bg-slate-50/70 p-4 transition hover:border-blue-200 hover:bg-blue-50/40"
                    >

                        <div class="flex items-start gap-3">

                            <div class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-blue-600">

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
                                        d="M8 10h8M8 14h5M21 12a8.94 8.94 0 01-1.34 4.74A9 9 0 0112 21a8.94 8.94 0 01-4.74-1.34L3 21l1.34-4.26A8.94 8.94 0 013 12a9 9 0 0118 0z"
                                    />
                                </svg>

                            </div>


                            <div class="min-w-0 flex-1">

                                <div class="flex flex-wrap items-center gap-2">

                                    @if ($thread->category)

                                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700">
                                            {{ $thread->category->nama_kategori }}
                                        </span>

                                    @endif

                                    @if ($thread->is_pinned)

                                        <span class="rounded-full bg-violet-50 px-2.5 py-1 text-[11px] font-semibold text-violet-700">
                                            Pinned
                                        </span>

                                    @endif

                                </div>


                                <h4 class="mt-2 line-clamp-2 text-sm font-semibold text-slate-900 transition group-hover:text-blue-700">
                                    {{ $thread->judul }}
                                </h4>


                                <div class="mt-2 flex flex-wrap items-center gap-3 text-xs text-slate-400">

                                    <span>
                                        {{ $thread->created_at->format('d M Y, H:i') }}
                                    </span>

                                    <span>
                                        {{ number_format($thread->views) }} views
                                    </span>

                                    <span>
                                        {{ $thread->replies->count() }} replies
                                    </span>

                                </div>

                            </div>


                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mt-1 h-5 w-5 shrink-0 text-slate-300 transition group-hover:translate-x-0.5 group-hover:text-blue-500"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>

                        </div>

                    </a>

                @empty

                    <div class="rounded-2xl border border-dashed border-slate-200 px-5 py-10 text-center">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-slate-100 text-slate-400">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
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

                        <p class="mt-3 text-sm font-semibold text-slate-900">
                            Belum ada thread
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Pengguna ini belum membuat thread.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </div>


    {{-- Latest Replies --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

        <div>
            <h3 class="text-lg font-bold text-slate-900">
                Balasan Terbaru
            </h3>

            <p class="mt-1 text-sm text-slate-500">
                Aktivitas balasan terbaru pengguna di forum.
            </p>
        </div>


        <div class="mt-5 grid gap-4 md:grid-cols-2">

            @forelse ($replies as $reply)

                <div class="rounded-2xl border border-slate-100 bg-slate-50/70 p-5">

                    <div class="flex items-start justify-between gap-3">

                        <div class="min-w-0">

                            <p class="text-xs font-semibold uppercase tracking-wide text-blue-600">
                                Balasan pada
                            </p>

                            @if ($reply->thread)

                                <a
                                    href="{{ route('admin.forum.threads.show', $reply->thread) }}"
                                    class="mt-1 block line-clamp-2 text-sm font-semibold text-slate-900 transition hover:text-blue-600"
                                >
                                    {{ $reply->thread->judul }}
                                </a>

                            @else

                                <p class="mt-1 text-sm font-semibold text-slate-500">
                                    Thread tidak tersedia
                                </p>

                            @endif

                        </div>

                        <span class="shrink-0 text-xs text-slate-400">
                            {{ $reply->created_at->format('d M Y') }}
                        </span>

                    </div>


                    <div class="mt-4 rounded-xl bg-white p-4 text-sm leading-6 text-slate-600">
                        {{ $reply->isi }}
                    </div>


                    <div class="mt-3 flex items-center justify-between">

                        <span class="text-xs text-slate-400">
                            {{ $reply->created_at->format('H:i') }}
                        </span>

                        @if ($reply->thread)

                            <a
                                href="{{ route('admin.forum.threads.show', $reply->thread) }}"
                                class="text-xs font-semibold text-blue-600 transition hover:text-blue-700"
                            >
                                Lihat Thread →
                            </a>

                        @endif

                    </div>

                </div>

            @empty

                <div class="rounded-2xl border border-dashed border-slate-200 px-5 py-10 text-center md:col-span-2">

                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-slate-100 text-slate-400">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
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

                    <p class="mt-3 text-sm font-semibold text-slate-900">
                        Belum ada reply
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        Pengguna ini belum memberikan balasan di forum.
                    </p>

                </div>

            @endforelse

        </div>

    </div>


    {{-- Account Actions --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

            <div>

                <h3 class="text-lg font-bold text-slate-900">
                    Aksi Akun
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Tindakan administratif untuk pengguna ini.
                </p>

            </div>


            <div class="flex flex-col gap-3 sm:flex-row">

                <a
                    href="{{ route('admin.users') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
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

                    Kembali ke Users
                </a>


                @if (auth()->id() !== $user->id)

                    <form
                        action="{{ route('admin.users.destroy', $user) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus pengguna {{ addslashes($user->name) }}? Semua thread dan reply milik pengguna ini akan ikut terhapus.')"
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

                            Hapus Pengguna
                        </button>

                    </form>

                @else

                    <span class="inline-flex items-center justify-center gap-2 rounded-xl bg-slate-100 px-4 py-2.5 text-sm font-semibold text-slate-400">
                        Akun Sedang Digunakan
                    </span>

                @endif

            </div>

        </div>

    </div>


    {{-- Bottom Back --}}
    <div>

        <a
            href="{{ route('admin.users') }}"
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

            Kembali ke Daftar Pengguna
        </a>

    </div>

</div>
@endsection