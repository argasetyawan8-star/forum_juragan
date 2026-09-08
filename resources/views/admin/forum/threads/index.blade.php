@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- =========================================================
         ALERT SUCCESS
    ========================================================== --}}
    @if (session('success'))

        <div class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-4 text-sm text-emerald-700">

            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
                <i class="bi bi-check-circle-fill"></i>
            </div>

            <div>
                <p class="font-semibold">
                    Berhasil
                </p>

                <p class="mt-0.5">
                    {{ session('success') }}
                </p>
            </div>

        </div>

    @endif


    {{-- =========================================================
         HEADER
    ========================================================== --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

        <div>

            <div class="flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-sm">
                    <i class="bi bi-chat-square-text-fill text-lg"></i>
                </div>

                <div>

                    <h1 class="text-2xl font-bold text-slate-900">
                        Thread Forum
                    </h1>

                    <p class="mt-1 text-sm text-slate-500">
                        Kelola seluruh diskusi yang dibuat oleh anggota forum.
                    </p>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         STATISTICS
    ========================================================== --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Total Thread
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        {{ $threads->total() }}
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <i class="bi bi-chat-square-text-fill text-xl"></i>
                </div>

            </div>

        </div>


        {{-- Published --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Published
                    </p>

                    <p class="mt-2 text-3xl font-bold text-emerald-600">
                        {{ \App\Models\Thread::where('status', 'published')->count() }}
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="bi bi-check-circle-fill text-xl"></i>
                </div>

            </div>

        </div>


        {{-- Pinned --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Thread Dipin
                    </p>

                    <p class="mt-2 text-3xl font-bold text-amber-600">
                        {{ \App\Models\Thread::where('is_pinned', true)->count() }}
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <i class="bi bi-pin-angle-fill text-xl"></i>
                </div>

            </div>

        </div>


        {{-- Replies --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Total Balasan
                    </p>

                    <p class="mt-2 text-3xl font-bold text-violet-600">
                        {{ \App\Models\Reply::count() }}
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                    <i class="bi bi-reply-all-fill text-xl"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         FILTER
    ========================================================== --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

        <div class="mb-4 flex items-center gap-3">

            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-slate-100 text-slate-600">
                <i class="bi bi-funnel-fill"></i>
            </div>

            <div>

                <h2 class="font-semibold text-slate-900">
                    Filter Thread
                </h2>

                <p class="text-xs text-slate-500">
                    Cari dan filter diskusi forum.
                </p>

            </div>

        </div>


        <form
            action="{{ route('admin.forum.threads') }}"
            method="GET"
            class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4"
        >

            {{-- Search --}}
            <div class="lg:col-span-2">

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Pencarian
                </label>

                <div class="relative">

                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i class="bi bi-search"></i>
                    </div>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari judul thread, isi, atau nama pengguna..."
                        class="w-full rounded-xl border border-slate-200 bg-white py-2.5 pl-10 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >

                </div>

            </div>


            {{-- Category --}}
            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Kategori
                </label>

                <select
                    name="category_id"
                    class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >

                    <option value="">
                        Semua Kategori
                    </option>

                    @foreach ($categories as $category)

                        <option
                            value="{{ $category->id }}"
                            @selected(request('category_id') == $category->id)
                        >
                            {{ $category->nama_kategori }}
                        </option>

                    @endforeach

                </select>

            </div>


            {{-- Status --}}
            <div>

                <label class="mb-1.5 block text-sm font-medium text-slate-700">
                    Status
                </label>

                <select
                    name="status"
                    class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >

                    <option value="">
                        Semua Status
                    </option>

                    <option
                        value="published"
                        @selected(request('status') === 'published')
                    >
                        Published
                    </option>

                    <option
                        value="draft"
                        @selected(request('status') === 'draft')
                    >
                        Draft
                    </option>

                </select>

            </div>


            {{-- Buttons --}}
            <div class="flex items-end gap-2 md:col-span-2 lg:col-span-4">

                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    <i class="bi bi-search"></i>
                    Terapkan Filter
                </button>

                @if (request()->hasAny(['search', 'category_id', 'status']))

                    <a
                        href="{{ route('admin.forum.threads') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
                    >
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Reset
                    </a>

                @endif

            </div>

        </form>

    </div>


    {{-- =========================================================
         TABLE
    ========================================================== --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- Header --}}
        <div class="flex flex-col gap-1 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">

            <div>

                <h2 class="font-semibold text-slate-900">
                    Daftar Thread
                </h2>

                <p class="text-xs text-slate-500">
                    Menampilkan
                    {{ $threads->count() }}
                    dari
                    {{ $threads->total() }}
                    thread.
                </p>

            </div>

            <div class="flex items-center gap-2 text-xs text-slate-400">
                <i class="bi bi-database-check"></i>
                Data database
            </div>

        </div>


        {{-- Desktop --}}
        <div class="hidden overflow-x-auto lg:block">

            <table class="min-w-full divide-y divide-slate-200">

                <thead class="bg-slate-50">

                    <tr>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Thread
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Kategori
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Penulis
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aktivitas
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    @forelse ($threads as $thread)

                        @php
                            $statusStyle = match ($thread->status) {
                                'published' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
                                'draft' => 'bg-amber-50 text-amber-700 ring-amber-200',
                                default => 'bg-slate-50 text-slate-600 ring-slate-200',
                            };

                            $statusIcon = match ($thread->status) {
                                'published' => 'bi-check-circle-fill',
                                'draft' => 'bi-file-earmark-text-fill',
                                default => 'bi-circle',
                            };
                        @endphp


                        <tr class="transition hover:bg-slate-50">

                            {{-- Thread --}}
                            <td class="px-6 py-5">

                                <div class="flex max-w-md items-start gap-3">

                                    @if ($thread->is_pinned)

                                        <div class="mt-1 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-amber-50 text-amber-600">
                                            <i class="bi bi-pin-angle-fill"></i>
                                        </div>

                                    @else

                                        <div class="mt-1 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-slate-100 text-slate-400">
                                            <i class="bi bi-chat-left-text"></i>
                                        </div>

                                    @endif


                                    <div class="min-w-0">

                                        <a
                                            href="{{ route('admin.forum.threads.show', $thread) }}"
                                            class="font-semibold leading-5 text-slate-900 transition hover:text-blue-600"
                                        >
                                            {{ $thread->judul }}
                                        </a>

                                        <p class="mt-1 line-clamp-2 text-xs leading-5 text-slate-500">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($thread->isi), 100) }}
                                        </p>

                                        @if ($thread->is_pinned)

                                            <span class="mt-2 inline-flex items-center gap-1 rounded-full bg-amber-50 px-2.5 py-1 text-[11px] font-bold text-amber-700">
                                                <i class="bi bi-pin-fill"></i>
                                                Dipin
                                            </span>

                                        @endif

                                    </div>

                                </div>

                            </td>


                            {{-- Category --}}
                            <td class="px-6 py-5">

                                @if ($thread->category)

                                    <span class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-3 py-1.5 text-xs font-semibold text-blue-700">

                                        <i class="bi bi-folder-fill"></i>

                                        {{ $thread->category->nama_kategori }}

                                    </span>

                                @else

                                    <span class="text-sm text-slate-400">
                                        -
                                    </span>

                                @endif

                            </td>


                            {{-- Author --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-slate-100 text-xs font-bold text-slate-600">
                                        {{ strtoupper(substr($thread->user->name ?? 'U', 0, 1)) }}
                                    </div>

                                    <div>

                                        <p class="text-sm font-semibold text-slate-800">
                                            {{ $thread->user->name ?? 'User' }}
                                        </p>

                                        <p class="text-xs text-slate-400">
                                            {{ $thread->created_at->locale('id')->translatedFormat('d M Y') }}
                                        </p>

                                    </div>

                                </div>

                            </td>


                            {{-- Activity --}}
                            <td class="px-6 py-5">

                                <div class="space-y-1 text-xs text-slate-500">

                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-chat-dots text-slate-400"></i>
                                        <span>
                                            {{ $thread->replies_count ?? $thread->replies()->count() }}
                                            balasan
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-eye text-slate-400"></i>
                                        <span>
                                            {{ number_format($thread->views) }}
                                            views
                                        </span>
                                    </div>

                                </div>

                            </td>


                            {{-- Status --}}
                            <td class="px-6 py-5">

                                <span class="inline-flex items-center gap-2 rounded-full px-3 py-1.5 text-xs font-semibold ring-1 ring-inset {{ $statusStyle }}">

                                    <i class="bi {{ $statusIcon }}"></i>

                                    {{ ucfirst($thread->status) }}

                                </span>

                            </td>


                            {{-- Actions --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center justify-end gap-2">

                                    <a
                                        href="{{ route('admin.forum.threads.show', $thread) }}"
                                        title="Lihat detail"
                                        class="flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a
                                        href="{{ route('admin.forum.threads.edit', $thread) }}"
                                        title="Edit thread"
                                        class="flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-amber-200 hover:bg-amber-50 hover:text-amber-600"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form
                                        action="{{ route('admin.forum.threads.pin', $thread) }}"
                                        method="POST"
                                    >

                                        @csrf
                                        @method('PATCH')

                                        <button
                                            type="submit"
                                            title="{{ $thread->is_pinned ? 'Lepas pin' : 'Pin thread' }}"
                                            class="flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-amber-200 hover:bg-amber-50 hover:text-amber-600"
                                        >
                                            <i class="bi {{ $thread->is_pinned ? 'bi-pin-angle-fill' : 'bi-pin-angle' }}"></i>
                                        </button>

                                    </form>

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
                                    <i class="bi bi-chat-square-text text-2xl"></i>
                                </div>

                                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                                    Belum ada thread
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Tidak ada diskusi yang sesuai dengan filter.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- =====================================================
             MOBILE
        ====================================================== --}}
        <div class="divide-y divide-slate-100 lg:hidden">

            @forelse ($threads as $thread)

                @php
                    $statusStyle = match ($thread->status) {
                        'published' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
                        'draft' => 'bg-amber-50 text-amber-700 ring-amber-200',
                        default => 'bg-slate-50 text-slate-600 ring-slate-200',
                    };

                    $statusIcon = match ($thread->status) {
                        'published' => 'bi-check-circle-fill',
                        'draft' => 'bi-file-earmark-text-fill',
                        default => 'bi-circle',
                    };
                @endphp


                <div class="p-5">

                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="bi bi-chat-square-text-fill"></i>
                        </div>

                        <div class="min-w-0 flex-1">

                            <div class="flex items-start justify-between gap-3">

                                <div class="min-w-0">

                                    <a
                                        href="{{ route('admin.forum.threads.show', $thread) }}"
                                        class="font-semibold leading-5 text-slate-900 hover:text-blue-600"
                                    >
                                        {{ $thread->judul }}
                                    </a>

                                    <p class="mt-1 text-xs text-slate-500">
                                        {{ $thread->user->name ?? 'User' }}
                                    </p>

                                </div>

                                @if ($thread->is_pinned)

                                    <i class="bi bi-pin-angle-fill shrink-0 text-amber-500"></i>

                                @endif

                            </div>

                            <div class="mt-3 flex flex-wrap gap-2">

                                @if ($thread->category)

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700">
                                        <i class="bi bi-folder-fill"></i>
                                        {{ $thread->category->nama_kategori }}
                                    </span>

                                @endif

                                <span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[11px] font-semibold ring-1 ring-inset {{ $statusStyle }}">
                                    <i class="bi {{ $statusIcon }}"></i>
                                    {{ ucfirst($thread->status) }}
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Activity --}}
                    <div class="mt-4 flex items-center gap-4 text-xs text-slate-400">

                        <span class="flex items-center gap-1.5">
                            <i class="bi bi-chat-dots"></i>
                            {{ $thread->replies_count ?? $thread->replies()->count() }}
                            balasan
                        </span>

                        <span class="flex items-center gap-1.5">
                            <i class="bi bi-eye"></i>
                            {{ number_format($thread->views) }}
                            views
                        </span>

                        <span class="flex items-center gap-1.5">
                            <i class="bi bi-calendar3"></i>
                            {{ $thread->created_at->locale('id')->translatedFormat('d M Y') }}
                        </span>

                    </div>


                    {{-- Actions --}}
                    <div class="mt-4 flex gap-2">

                        <a
                            href="{{ route('admin.forum.threads.show', $thread) }}"
                            class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-xs font-semibold text-slate-700 transition hover:bg-slate-50"
                        >
                            <i class="bi bi-eye"></i>
                            Detail
                        </a>

                        <a
                            href="{{ route('admin.forum.threads.edit', $thread) }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-xs font-semibold text-slate-700 transition hover:bg-slate-50"
                        >
                            <i class="bi bi-pencil"></i>
                            Edit
                        </a>

                        <form
                            action="{{ route('admin.forum.threads.pin', $thread) }}"
                            method="POST"
                        >

                            @csrf
                            @method('PATCH')

                            <button
                                type="submit"
                                title="{{ $thread->is_pinned ? 'Lepas pin' : 'Pin thread' }}"
                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-amber-200 hover:bg-amber-50 hover:text-amber-600"
                            >
                                <i class="bi {{ $thread->is_pinned ? 'bi-pin-angle-fill' : 'bi-pin-angle' }}"></i>
                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <div class="px-6 py-16 text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                        <i class="bi bi-chat-square-text text-2xl"></i>
                    </div>

                    <h3 class="mt-4 text-sm font-semibold text-slate-900">
                        Belum ada thread
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Tidak ada diskusi yang sesuai dengan filter.
                    </p>

                </div>

            @endforelse

        </div>


        {{-- Pagination --}}
        @if ($threads->hasPages())

            <div class="border-t border-slate-200 px-6 py-4">
                {{ $threads->links() }}
            </div>

        @endif

    </div>

</div>

@endsection