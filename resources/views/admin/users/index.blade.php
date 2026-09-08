@extends('admin.layouts.app')

@section('content')
<div class="mx-auto max-w-7xl space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

        <div>
            <p class="text-sm font-medium text-blue-600">
                User Management
            </p>

            <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Pengguna
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Kelola pengguna yang terdaftar di Forum Juragan.
            </p>
        </div>

        {{-- Total User --}}
        <div class="inline-flex w-fit items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">

            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
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
                        d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"
                    />
                    <circle
                        cx="9"
                        cy="7"
                        r="4"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"
                    />
                </svg>
            </div>

            <div>
                <p class="text-xs font-medium text-slate-400">
                    Total Pengguna
                </p>

                <p class="text-lg font-bold text-slate-900">
                    {{ number_format($users->total()) }}
                </p>
            </div>

        </div>

    </div>


    {{-- Flash Message --}}
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
                    d="M12 9v4m0 4h.01M10.29 3.86l-8.82 15a1 1 0 001.71 1.02L12 4.88l8.82 15a1 1 0 00-1.71 0z"
                />
            </svg>

            <span>{{ session('error') }}</span>
        </div>
    @endif


    {{-- Filters --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

        <form
            action="{{ route('admin.users') }}"
            method="GET"
            class="grid gap-4 lg:grid-cols-[1fr_220px_auto]"
        >

            {{-- Search --}}
            <div>
                <label
                    for="search"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Cari Pengguna
                </label>

                <div class="relative">

                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-slate-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <circle
                                cx="11"
                                cy="11"
                                r="7"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M20 20l-4-4"
                            />
                        </svg>
                    </div>

                    <input
                        id="search"
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari nama atau email..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                    >

                </div>
            </div>


            {{-- Verification Filter --}}
            <div>
                <label
                    for="verification"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Status Email
                </label>

                <select
                    id="verification"
                    name="verification"
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                >
                    <option value="">
                        Semua Status
                    </option>

                    <option
                        value="verified"
                        @selected(request('verification') === 'verified')
                    >
                        Sudah Diverifikasi
                    </option>

                    <option
                        value="unverified"
                        @selected(request('verification') === 'unverified')
                    >
                        Belum Diverifikasi
                    </option>
                </select>

            </div>


            {{-- Buttons --}}
            <div class="flex items-end gap-2">

                <button
                    type="submit"
                    class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle
                            cx="11"
                            cy="11"
                            r="7"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M20 20l-4-4"
                        />
                    </svg>

                    Cari
                </button>

                @if (request()->hasAny(['search', 'verification']))
                    <a
                        href="{{ route('admin.users') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
                        title="Reset filter"
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
                                d="M4 4v5h5M20 20v-5h-5M5.5 15A7 7 0 0019 9M18.5 9A7 7 0 005 15"
                            />
                        </svg>
                    </a>
                @endif

            </div>

        </form>

    </div>


    {{-- Desktop Table --}}
    <div class="hidden overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm lg:block">

        <div class="overflow-x-auto">

            <table class="w-full min-w-[900px]">

                <thead class="border-b border-slate-100 bg-slate-50/70">

                    <tr>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Pengguna
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Status Email
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Threads
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Replies
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Bergabung
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    @forelse ($users as $user)

                        <tr class="transition hover:bg-slate-50/70">

                            {{-- User --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-sm font-bold text-blue-700">
                                        {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                                    </div>

                                    <div class="min-w-0">

                                        <p class="truncate text-sm font-semibold text-slate-900">
                                            {{ $user->name }}
                                        </p>

                                        <p class="mt-0.5 truncate text-xs text-slate-400">
                                            {{ $user->email }}
                                        </p>

                                    </div>

                                </div>

                            </td>


                            {{-- Verification --}}
                            <td class="px-6 py-5">

                                @if ($user->email_verified_at)

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">

                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                        Terverifikasi

                                    </span>

                                @else

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-semibold text-amber-700">

                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>

                                        Belum Verifikasi

                                    </span>

                                @endif

                            </td>


                            {{-- Threads --}}
                            <td class="px-6 py-5 text-center">

                                <span class="inline-flex min-w-9 items-center justify-center rounded-lg bg-blue-50 px-2.5 py-1.5 text-xs font-bold text-blue-700">
                                    {{ $user->threads_count }}
                                </span>

                            </td>


                            {{-- Replies --}}
                            <td class="px-6 py-5 text-center">

                                <span class="inline-flex min-w-9 items-center justify-center rounded-lg bg-violet-50 px-2.5 py-1.5 text-xs font-bold text-violet-700">
                                    {{ $user->replies_count }}
                                </span>

                            </td>


                            {{-- Date --}}
                            <td class="px-6 py-5">

                                <p class="text-sm text-slate-600">
                                    {{ $user->created_at->format('d M Y') }}
                                </p>

                                <p class="mt-0.5 text-xs text-slate-400">
                                    {{ $user->created_at->format('H:i') }}
                                </p>

                            </td>


                            {{-- Actions --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center justify-end gap-2">

                                    {{-- Detail --}}
                                    <a
                                        href="{{ route('admin.users.show', $user) }}"
                                        class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-600 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-700"
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
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                            />

                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="3"
                                            />
                                        </svg>

                                        Detail
                                    </a>


                                    {{-- Delete --}}
                                    @if (auth()->id() !== $user->id)

                                        <form
                                            action="{{ route('admin.users.destroy', $user) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus pengguna {{ addslashes($user->name) }}?')"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="inline-flex items-center justify-center rounded-xl border border-red-200 bg-red-50 p-2 text-red-600 transition hover:bg-red-100"
                                                title="Hapus pengguna"
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
                                            </button>

                                        </form>

                                    @endif

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="px-6 py-16 text-center"
                            >

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
                                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"
                                        />

                                        <circle
                                            cx="9"
                                            cy="7"
                                            r="4"
                                        />
                                    </svg>

                                </div>

                                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                                    Pengguna tidak ditemukan
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Belum ada pengguna yang sesuai dengan filter.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>


    {{-- Mobile Cards --}}
    <div class="space-y-3 lg:hidden">

        @forelse ($users as $user)

            <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">

                <div class="flex items-start gap-3">

                    {{-- Avatar --}}
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-sm font-bold text-blue-700">
                        {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                    </div>


                    {{-- User --}}
                    <div class="min-w-0 flex-1">

                        <p class="truncate font-semibold text-slate-900">
                            {{ $user->name }}
                        </p>

                        <p class="mt-0.5 truncate text-xs text-slate-400">
                            {{ $user->email }}
                        </p>


                        {{-- Status --}}
                        <div class="mt-3">

                            @if ($user->email_verified_at)

                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">

                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                    Terverifikasi

                                </span>

                            @else

                                <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-semibold text-amber-700">

                                    <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>

                                    Belum Verifikasi

                                </span>

                            @endif

                        </div>

                    </div>

                </div>


                {{-- Stats --}}
                <div class="mt-5 grid grid-cols-2 gap-3">

                    <div class="rounded-2xl bg-blue-50 p-3">

                        <p class="text-xs font-medium text-blue-600">
                            Threads
                        </p>

                        <p class="mt-1 text-lg font-bold text-blue-800">
                            {{ $user->threads_count }}
                        </p>

                    </div>


                    <div class="rounded-2xl bg-violet-50 p-3">

                        <p class="text-xs font-medium text-violet-600">
                            Replies
                        </p>

                        <p class="mt-1 text-lg font-bold text-violet-800">
                            {{ $user->replies_count }}
                        </p>

                    </div>

                </div>


                {{-- Joined --}}
                <div class="mt-4 flex items-center justify-between border-t border-slate-100 pt-4">

                    <div>
                        <p class="text-xs text-slate-400">
                            Bergabung
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-700">
                            {{ $user->created_at->format('d M Y') }}
                        </p>
                    </div>


                    {{-- Actions --}}
                    <div class="flex items-center gap-2">

                        <a
                            href="{{ route('admin.users.show', $user) }}"
                            class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-600 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-700"
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
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542-7-4.477-7-8.268-4.057-9.542-7z"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="3"
                                />
                            </svg>

                            Detail
                        </a>


                        @if (auth()->id() !== $user->id)

                            <form
                                action="{{ route('admin.users.destroy', $user) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center rounded-xl border border-red-200 bg-red-50 p-2 text-red-600 transition hover:bg-red-100"
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
                                </button>

                            </form>

                        @endif

                    </div>

                </div>

            </div>

        @empty

            <div class="rounded-3xl border border-slate-200 bg-white px-5 py-16 text-center shadow-sm">

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
                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"
                        />

                        <circle
                            cx="9"
                            cy="7"
                            r="4"
                        />
                    </svg>

                </div>

                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                    Pengguna tidak ditemukan
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Belum ada pengguna yang sesuai dengan filter.
                </p>

            </div>

        @endforelse

    </div>


    {{-- Pagination --}}
    @if ($users->hasPages())

        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-4 shadow-sm sm:px-6">
            {{ $users->links() }}
        </div>

    @endif

</div>
@endsection