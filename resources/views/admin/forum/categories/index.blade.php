@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- HEADER --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <div class="mb-2 flex items-center gap-2 text-sm text-slate-400">
                <span>Forum</span>
                <span>/</span>
                <span class="text-slate-600">Categories</span>
            </div>

            <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                Forum Categories
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola kategori yang digunakan untuk mengelompokkan diskusi forum.
            </p>
        </div>

        <a
            href="{{ route('admin.forum.categories.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700"
        >
            <svg
                class="h-5 w-5"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 5v14M5 12h14"
                />
            </svg>

            Tambah Kategori
        </a>

    </div>


    {{-- SUCCESS --}}
    @if(session('success'))

        <div
            class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-800"
        >

            <svg
                class="mt-0.5 h-5 w-5 shrink-0 text-emerald-600"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 13l4 4L19 7"
                />
            </svg>

            <p class="text-sm font-medium">
                {{ session('success') }}
            </p>

        </div>

    @endif


    {{-- ERROR --}}
    @if(session('error'))

        <div
            class="flex items-start gap-3 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-800"
        >

            <svg
                class="mt-0.5 h-5 w-5 shrink-0 text-red-600"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 9v4m0 4h.01"
                />

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.3 3.8L2.6 17a2 2 0 001.7 3h15.4a2 2 0 001.7-3L13.7 3.8a2 2 0 00-3.4 0z"
                />
            </svg>

            <p class="text-sm font-medium">
                {{ session('error') }}
            </p>

        </div>

    @endif


    {{-- CATEGORY LIST --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- TABLE HEADER --}}
        <div class="border-b border-slate-100 px-6 py-5">

            <div class="flex items-center justify-between">

                <div>
                    <h2 class="font-semibold text-slate-900">
                        Semua Kategori
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        {{ $categories->total() }} kategori tersedia
                    </p>
                </div>

                <div
                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600"
                >
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </div>

            </div>

        </div>


        {{-- DESKTOP TABLE --}}
        <div class="hidden overflow-x-auto md:block">

            <table class="w-full">

                <thead>
                    <tr class="border-b border-slate-100 bg-slate-50/70">

                        <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider text-slate-400">
                            #
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider text-slate-400">
                            Kategori
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider text-slate-400">
                            Slug
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-bold uppercase tracking-wider text-slate-400">
                            Threads
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-wider text-slate-400">
                            Aksi
                        </th>

                    </tr>
                </thead>


                <tbody class="divide-y divide-slate-100">

                    @forelse($categories as $category)

                        <tr class="transition hover:bg-slate-50/70">

                            <td class="px-6 py-5 text-sm text-slate-400">
                                {{ $categories->firstItem() + $loop->index }}
                            </td>


                            {{-- CATEGORY --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-sm font-bold text-blue-600"
                                    >
                                        {{ strtoupper(substr($category->nama_kategori, 0, 1)) }}
                                    </div>

                                    <div class="min-w-0">

                                        <p class="font-semibold text-slate-900">
                                            {{ $category->nama_kategori }}
                                        </p>

                                        @if($category->deskripsi)

                                            <p class="mt-1 max-w-md truncate text-xs text-slate-500">
                                                {{ $category->deskripsi }}
                                            </p>

                                        @else

                                            <p class="mt-1 text-xs italic text-slate-400">
                                                Tidak ada deskripsi
                                            </p>

                                        @endif

                                    </div>

                                </div>

                            </td>


                            {{-- SLUG --}}
                            <td class="px-6 py-5">

                                <code
                                    class="rounded-lg bg-slate-100 px-2.5 py-1 text-xs text-slate-600"
                                >
                                    {{ $category->slug }}
                                </code>

                            </td>


                            {{-- THREAD COUNT --}}
                            <td class="px-6 py-5 text-center">

                                <span
                                    class="inline-flex min-w-10 items-center justify-center rounded-full bg-blue-50 px-3 py-1.5 text-xs font-bold text-blue-700"
                                >
                                    {{ $category->threads_count }}
                                </span>

                            </td>


                            {{-- ACTION --}}
                            <td class="px-6 py-5">

                                <div class="flex justify-end gap-2">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route('admin.forum.categories.edit', $category) }}"
                                        class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                                        title="Edit"
                                    >

                                        <svg
                                            class="h-4 w-4"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 20h9"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.5 3.5a2.12 2.12 0 013 3L8 18l-4 1 1-4L16.5 3.5z"
                                            />
                                        </svg>

                                    </a>


                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route('admin.forum.categories.destroy', $category) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus kategori ini?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                                            title="Hapus"
                                        >

                                            <svg
                                                class="h-4 w-4"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M3 6h18"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M8 6V4h8v2"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M19 6l-1 14H6L5 6"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M10 11v5M14 11v5"
                                                />
                                            </svg>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="5"
                                class="px-6 py-16 text-center"
                            >

                                <div class="mx-auto flex max-w-sm flex-col items-center">

                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400"
                                    >
                                        <svg
                                            class="h-7 w-7"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M4 6h16M4 12h16M4 18h16"
                                            />
                                        </svg>
                                    </div>

                                    <h3 class="mt-4 font-semibold text-slate-900">
                                        Belum ada kategori
                                    </h3>

                                    <p class="mt-1 text-sm text-slate-500">
                                        Tambahkan kategori pertama untuk forum.
                                    </p>

                                    <a
                                        href="{{ route('admin.forum.categories.create') }}"
                                        class="mt-5 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700"
                                    >
                                        Tambah Kategori
                                    </a>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- MOBILE --}}
        <div class="divide-y divide-slate-100 md:hidden">

            @forelse($categories as $category)

                <div class="p-5">

                    <div class="flex items-start gap-3">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-sm font-bold text-blue-600"
                        >
                            {{ strtoupper(substr($category->nama_kategori, 0, 1)) }}
                        </div>

                        <div class="min-w-0 flex-1">

                            <h3 class="font-semibold text-slate-900">
                                {{ $category->nama_kategori }}
                            </h3>

                            <p class="mt-1 text-xs text-slate-500">
                                {{ $category->slug }}
                            </p>

                        </div>

                        <span
                            class="rounded-full bg-blue-50 px-2.5 py-1 text-xs font-bold text-blue-700"
                        >
                            {{ $category->threads_count }}
                        </span>

                    </div>


                    @if($category->deskripsi)

                        <p class="mt-4 text-sm leading-6 text-slate-500">
                            {{ $category->deskripsi }}
                        </p>

                    @endif


                    <div class="mt-4 flex gap-2">

                        <a
                            href="{{ route('admin.forum.categories.edit', $category) }}"
                            class="flex-1 rounded-xl border border-slate-200 px-4 py-2.5 text-center text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
                        >
                            Edit
                        </a>


                        <form
                            action="{{ route('admin.forum.categories.destroy', $category) }}"
                            method="POST"
                            class="flex-1"
                            onsubmit="return confirm('Yakin ingin menghapus kategori ini?')"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="w-full rounded-xl border border-red-200 px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-50"
                            >
                                Hapus
                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <div class="px-6 py-16 text-center">

                    <h3 class="font-semibold text-slate-900">
                        Belum ada kategori
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Tambahkan kategori pertama untuk forum.
                    </p>

                </div>

            @endforelse

        </div>


        {{-- PAGINATION --}}
        @if($categories->hasPages())

            <div class="border-t border-slate-100 px-6 py-4">
                {{ $categories->links() }}
            </div>

        @endif

    </div>

</div>

@endsection