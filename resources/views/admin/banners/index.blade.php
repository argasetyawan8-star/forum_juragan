@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- =========================================================
         HEADER
    ========================================================== --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <span>Business</span>

                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 0 1 .02-1.06L10.94 10 7.23 6.29a.75.75 0 1 1 1.06-1.06l4.24 4.24a.75.75 0 0 1 0 1.06l-4.24 4.24a.75.75 0 0 1-1.06-.02Z"
                        clip-rule="evenodd"
                    />
                </svg>

                <span class="font-medium text-slate-900">
                    Banners
                </span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Manajemen Banner
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola banner promosi dan informasi yang tampil di website.
            </p>
        </div>

        <a
            href="{{ route('admin.banners.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 active:scale-[0.98]"
        >
            <svg
                class="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 5v14M5 12h14"
                />
            </svg>

            Tambah Banner
        </a>

    </div>


    {{-- =========================================================
         FLASH MESSAGE
    ========================================================== --}}
    @if(session('success'))
        <div class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-800">

            <svg
                class="mt-0.5 h-5 w-5 shrink-0"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m5 12 4 4L19 6"
                />
            </svg>

            <div>
                <p class="font-semibold">
                    Berhasil
                </p>

                <p class="mt-0.5 text-sm">
                    {{ session('success') }}
                </p>
            </div>

        </div>
    @endif


    @if(session('error'))
        <div class="flex items-start gap-3 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-800">

            <svg
                class="mt-0.5 h-5 w-5 shrink-0"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 9v3m0 4h.01M10.29 3.86 2.82 17a2 2 0 0 0 1.74 3h14.88a2 2 0 0 0 1.74-3L13.71 3.86a2 2 0 0 0-3.42 0Z"
                />
            </svg>

            <div>
                <p class="font-semibold">
                    Terjadi kesalahan
                </p>

                <p class="mt-0.5 text-sm">
                    {{ session('error') }}
                </p>
            </div>

        </div>
    @endif


    {{-- =========================================================
         SUMMARY
    ========================================================== --}}
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Banner
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ number_format($banners->total()) }}
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <svg
                        class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <rect
                            x="3"
                            y="5"
                            width="18"
                            height="14"
                            rx="2"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7 15 3-3 2 2 2-2 3 3"
                        />
                    </svg>
                </div>

            </div>

        </div>


        {{-- Active --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Banner Aktif
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ number_format($banners->getCollection()->where('status', true)->count()) }}
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg
                        class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m5 12 4 4L19 6"
                        />
                    </svg>
                </div>

            </div>

        </div>


        {{-- Inactive --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Banner Nonaktif
                    </p>

                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ number_format($banners->getCollection()->where('status', false)->count()) }}
                    </p>
                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                    <svg
                        class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 6l12 12M6 18 18 6"
                        />
                    </svg>
                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         BANNER LIST
    ========================================================== --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- Header --}}
        <div class="border-b border-slate-200 px-5 py-4 sm:px-6">

            <div class="flex flex-col gap-1 sm:flex-row sm:items-center sm:justify-between">

                <div>
                    <h2 class="font-semibold text-slate-900">
                        Daftar Banner
                    </h2>

                    <p class="text-sm text-slate-500">
                        Banner diurutkan berdasarkan posisi tampil.
                    </p>
                </div>

            </div>

        </div>


        {{-- Desktop --}}
        <div class="hidden lg:block">

            <div class="overflow-x-auto">

                <table class="w-full min-w-[1000px]">

                    <thead>
                        <tr class="border-b border-slate-200 bg-slate-50">

                            <th class="w-20 px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-slate-500">
                                Urutan
                            </th>

                            <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                                Banner
                            </th>

                            <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                                Tombol
                            </th>

                            <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-slate-500">
                                Status
                            </th>

                            <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                                Aksi
                            </th>

                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">

                        @forelse($banners as $banner)

                            <tr class="transition hover:bg-slate-50/70">

                                {{-- Urutan --}}
                                <td class="px-6 py-5 text-center align-top">

                                    <span class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg bg-slate-100 px-2 text-sm font-bold text-slate-700">
                                        {{ $banner->urutan }}
                                    </span>

                                </td>


                                {{-- Banner --}}
                                <td class="px-6 py-5 align-top">

                                    <div class="flex items-start gap-4">

                                        {{-- Image --}}
                                        <div class="h-20 w-32 shrink-0 overflow-hidden rounded-xl border border-slate-200 bg-slate-100">

                                            @if($banner->gambar)

                                                <img
                                                    src="{{ asset('storage/' . $banner->gambar) }}"
                                                    alt="{{ $banner->judul }}"
                                                    class="h-full w-full object-cover"
                                                >

                                            @else

                                                <div class="flex h-full w-full items-center justify-center text-slate-400">

                                                    <svg
                                                        class="h-8 w-8"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    >
                                                        <rect
                                                            x="3"
                                                            y="5"
                                                            width="18"
                                                            height="14"
                                                            rx="2"
                                                        />

                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m7 15 3-3 2 2 2-2 3 3"
                                                        />
                                                    </svg>

                                                </div>

                                            @endif

                                        </div>


                                        <div class="min-w-0">

                                            <h3 class="font-semibold text-slate-900">
                                                {{ $banner->judul }}
                                            </h3>

                                            @if($banner->subjudul)

                                                <p class="mt-1 line-clamp-2 max-w-md text-sm leading-5 text-slate-500">
                                                    {{ $banner->subjudul }}
                                                </p>

                                            @else

                                                <p class="mt-1 text-sm text-slate-400">
                                                    Tidak ada subjudul
                                                </p>

                                            @endif

                                        </div>

                                    </div>

                                </td>


                                {{-- Tombol --}}
                                <td class="px-6 py-5 align-top">

                                    @if($banner->teks_tombol)

                                        <p class="text-sm font-semibold text-slate-700">
                                            {{ $banner->teks_tombol }}
                                        </p>

                                        @if($banner->link)
                                            <p class="mt-1 max-w-xs truncate text-xs text-slate-400">
                                                {{ $banner->link }}
                                            </p>
                                        @endif

                                    @else

                                        <span class="text-sm text-slate-400">
                                            Tidak ada tombol
                                        </span>

                                    @endif

                                </td>


                                {{-- Status --}}
                                <td class="px-6 py-5 text-center align-top">

                                    <form
                                        action="{{ route('admin.banners.status', $banner) }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('PATCH')

                                        <button
                                            type="submit"
                                            class="inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold transition
                                                {{ $banner->status
                                                    ? 'bg-emerald-50 text-emerald-700 hover:bg-emerald-100'
                                                    : 'bg-slate-100 text-slate-500 hover:bg-slate-200'
                                                }}"
                                            title="Klik untuk mengubah status"
                                        >

                                            <span
                                                class="h-1.5 w-1.5 rounded-full
                                                    {{ $banner->status
                                                        ? 'bg-emerald-500'
                                                        : 'bg-slate-400'
                                                    }}"
                                            ></span>

                                            {{ $banner->status ? 'Aktif' : 'Nonaktif' }}

                                        </button>

                                    </form>

                                </td>


                                {{-- Action --}}
                                <td class="px-6 py-5 align-top">

                                    <div class="flex justify-end gap-2">

                                        <a
                                            href="{{ route('admin.banners.edit', $banner) }}"
                                            title="Edit banner"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-500 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                                        >
                                            <svg
                                                class="h-4 w-4"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="m16.86 4.14 3 3L8 19H5v-3L16.86 4.14Z"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="m14.5 6.5 3 3"
                                                />
                                            </svg>
                                        </a>


                                        <form
                                            action="{{ route('admin.banners.destroy', $banner) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus banner ini?')"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                title="Hapus banner"
                                                class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-red-200 bg-white text-red-500 transition hover:bg-red-50 hover:text-red-600"
                                            >
                                                <svg
                                                    class="h-4 w-4"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
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

                                        <svg
                                            class="h-7 w-7"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        >
                                            <rect
                                                x="3"
                                                y="5"
                                                width="18"
                                                height="14"
                                                rx="2"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m7 15 3-3 2 2 2-2 3 3"
                                            />
                                        </svg>

                                    </div>

                                    <h3 class="mt-4 font-semibold text-slate-900">
                                        Belum ada banner
                                    </h3>

                                    <p class="mt-1 text-sm text-slate-500">
                                        Mulai dengan membuat banner pertama.
                                    </p>

                                    <a
                                        href="{{ route('admin.banners.create') }}"
                                        class="mt-5 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700"
                                    >
                                        <svg
                                            class="h-4 w-4"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 5v14M5 12h14"
                                            />
                                        </svg>

                                        Tambah Banner
                                    </a>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        {{-- =====================================================
             MOBILE
        ====================================================== --}}
        <div class="space-y-4 p-4 lg:hidden">

            @forelse($banners as $banner)

                <div class="overflow-hidden rounded-2xl border border-slate-200">

                    {{-- Image --}}
                    <div class="relative aspect-[16/7] w-full bg-slate-100">

                        @if($banner->gambar)

                            <img
                                src="{{ asset('storage/' . $banner->gambar) }}"
                                alt="{{ $banner->judul }}"
                                class="h-full w-full object-cover"
                            >

                        @else

                            <div class="flex h-full w-full items-center justify-center text-slate-400">

                                <svg
                                    class="h-10 w-10"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                >
                                    <rect
                                        x="3"
                                        y="5"
                                        width="18"
                                        height="14"
                                        rx="2"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m7 15 3-3 2 2 2-2 3 3"
                                    />
                                </svg>

                            </div>

                        @endif

                        <div class="absolute left-3 top-3">

                            <span class="rounded-lg bg-white/90 px-2.5 py-1 text-xs font-bold text-slate-700 shadow-sm backdrop-blur">
                                #{{ $banner->urutan }}
                            </span>

                        </div>

                    </div>


                    {{-- Content --}}
                    <div class="p-4">

                        <div class="flex items-start justify-between gap-3">

                            <div class="min-w-0">

                                <h3 class="font-semibold text-slate-900">
                                    {{ $banner->judul }}
                                </h3>

                                @if($banner->subjudul)

                                    <p class="mt-1 line-clamp-3 text-sm leading-5 text-slate-500">
                                        {{ $banner->subjudul }}
                                    </p>

                                @endif

                            </div>


                            {{-- Status --}}
                            <form
                                action="{{ route('admin.banners.status', $banner) }}"
                                method="POST"
                                class="shrink-0"
                            >
                                @csrf
                                @method('PATCH')

                                <button
                                    type="submit"
                                    class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1.5 text-xs font-semibold
                                        {{ $banner->status
                                            ? 'bg-emerald-50 text-emerald-700'
                                            : 'bg-slate-100 text-slate-500'
                                        }}"
                                >

                                    <span
                                        class="h-1.5 w-1.5 rounded-full
                                            {{ $banner->status
                                                ? 'bg-emerald-500'
                                                : 'bg-slate-400'
                                            }}"
                                    ></span>

                                    {{ $banner->status ? 'Aktif' : 'Nonaktif' }}

                                </button>

                            </form>

                        </div>


                        @if($banner->teks_tombol)

                            <div class="mt-4 rounded-xl bg-slate-50 p-3">

                                <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">
                                    Tombol
                                </p>

                                <p class="mt-1 text-sm font-semibold text-slate-700">
                                    {{ $banner->teks_tombol }}
                                </p>

                                @if($banner->link)

                                    <p class="mt-1 truncate text-xs text-slate-400">
                                        {{ $banner->link }}
                                    </p>

                                @endif

                            </div>

                        @endif


                        {{-- Actions --}}
                        <div class="mt-4 flex gap-2 border-t border-slate-100 pt-4">

                            <a
                                href="{{ route('admin.banners.edit', $banner) }}"
                                class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                            >
                                <svg
                                    class="h-4 w-4"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m16.86 4.14 3 3L8 19H5v-3L16.86 4.14Z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m14.5 6.5 3 3"
                                    />
                                </svg>

                                Edit
                            </a>


                            <form
                                action="{{ route('admin.banners.destroy', $banner) }}"
                                method="POST"
                                class="flex-1"
                                onsubmit="return confirm('Yakin ingin menghapus banner ini?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-red-200 bg-red-50 px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-100"
                                >
                                    <svg
                                        class="h-4 w-4"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 7h16m-10 4v6m4-6v6M9 7V4h6v3m-8 0 1 13h8l1-13"
                                        />
                                    </svg>

                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @empty

                <div class="px-4 py-12 text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">

                        <svg
                            class="h-7 w-7"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m7 15 3-3 2 2 2-2 3 3"
                            />
                        </svg>

                    </div>

                    <h3 class="mt-4 font-semibold text-slate-900">
                        Belum ada banner
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Mulai dengan membuat banner pertama.
                    </p>

                </div>

            @endforelse

        </div>

    </div>


    {{-- =========================================================
         PAGINATION
    ========================================================== --}}
    @if($banners->hasPages())

        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-4 shadow-sm sm:px-6">
            {{ $banners->links() }}
        </div>

    @endif

</div>

@endsection