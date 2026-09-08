@extends('admin.layouts.app')

@section('content')

<div class="mx-auto max-w-4xl space-y-6">

    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2 text-sm text-slate-500">
        <a
            href="{{ route('admin.forum.threads') }}"
            class="transition hover:text-blue-600"
        >
            Threads
        </a>

        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m9 5 7 7-7 7"/>
        </svg>

        <span class="text-slate-700">
            Edit Thread
        </span>
    </div>


    {{-- Header --}}
    <div>
        <h1 class="text-2xl font-bold tracking-tight text-slate-900">
            Edit Thread
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Perbarui informasi dan isi diskusi forum.
        </p>
    </div>


    {{-- Validation Errors --}}
    @if($errors->any())
        <div class="rounded-2xl border border-red-200 bg-red-50 p-4">

            <div class="flex items-start gap-3">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-100">
                    <svg class="h-5 w-5 text-red-600" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </div>

                <div>
                    <p class="text-sm font-semibold text-red-800">
                        Ada beberapa kesalahan
                    </p>

                    <ul class="mt-2 list-inside list-disc space-y-1 text-sm text-red-700">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>
    @endif


    {{-- Form --}}
    <form
        action="{{ route('admin.forum.threads.update', $thread) }}"
        method="POST"
        class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    >

        @csrf
        @method('PUT')


        {{-- Form Header --}}
        <div class="border-b border-slate-100 bg-slate-50/60 px-5 py-4 sm:px-6">
            <div class="flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-100">
                    <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 10h8M8 14h5m6 0a3 3 0 0 1-3 3H9l-4 4v-7a3 3 0 0 1-2-3V7a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v4a3 3 0 0 1-3 3Z"/>
                    </svg>
                </div>

                <div>
                    <h2 class="font-semibold text-slate-900">
                        Informasi Thread
                    </h2>

                    <p class="text-sm text-slate-500">
                        ID Thread #{{ $thread->id }}
                    </p>
                </div>

            </div>
        </div>


        {{-- Form Body --}}
        <div class="space-y-6 p-5 sm:p-6">

            {{-- Judul --}}
            <div>
                <label
                    for="judul"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Judul Thread
                    <span class="text-red-500">*</span>
                </label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ old('judul', $thread->judul) }}"
                    maxlength="255"
                    required
                    placeholder="Masukkan judul thread..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                >

                @error('judul')
                    <p class="mt-1.5 text-xs text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Category + Status --}}
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                {{-- Category --}}
                <div>
                    <label
                        for="category_id"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Kategori
                        <span class="text-red-500">*</span>
                    </label>

                    <select
                        id="category_id"
                        name="category_id"
                        required
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    >
                        <option value="">
                            Pilih kategori
                        </option>

                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                @selected(old('category_id', $thread->category_id) == $category->id)
                            >
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>

                    @error('category_id')
                        <p class="mt-1.5 text-xs text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Status --}}
                <div>
                    <label
                        for="status"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Status
                        <span class="text-red-500">*</span>
                    </label>

                    <select
                        id="status"
                        name="status"
                        required
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    >
                        <option value="published"
                            @selected(old('status', $thread->status) === 'published')
                        >
                            Published
                        </option>

                        <option value="draft"
                            @selected(old('status', $thread->status) === 'draft')
                        >
                            Draft
                        </option>

                        <option value="closed"
                            @selected(old('status', $thread->status) === 'closed')
                        >
                            Closed
                        </option>
                    </select>

                    @error('status')
                        <p class="mt-1.5 text-xs text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>


            {{-- Isi --}}
            <div>
                <label
                    for="isi"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Isi Thread
                    <span class="text-red-500">*</span>
                </label>

                <textarea
                    id="isi"
                    name="isi"
                    rows="12"
                    required
                    placeholder="Tulis isi diskusi..."
                    class="w-full resize-y rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm leading-7 text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100"
                >{{ old('isi', $thread->isi) }}</textarea>

                @error('isi')
                    <p class="mt-1.5 text-xs text-red-600">
                        {{ $message }}
                    </p>
                @enderror

                <p class="mt-2 text-xs text-slate-400">
                    Pastikan isi thread jelas, informatif, dan sesuai dengan kategori yang dipilih.
                </p>
            </div>


            {{-- Pinned Info --}}
            <div class="rounded-xl border border-amber-200 bg-amber-50 p-4">

                <div class="flex items-start gap-3">

                    <div class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-100">
                        <svg class="h-4 w-4 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 3H8l1 7-3 3v2h5v6l1 1v-6h5v-2l-3-3 1-7Z"/>
                        </svg>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-amber-800">
                            Status Pinned
                        </p>

                        <p class="mt-1 text-xs leading-5 text-amber-700">
                            Thread ini
                            <strong>
                                {{ $thread->is_pinned ? 'sedang dipasang sebagai pinned.' : 'belum dipasang sebagai pinned.' }}
                            </strong>
                            Pengaturan pinned dapat diubah melalui tombol Pin pada halaman detail thread.
                        </p>
                    </div>

                </div>

            </div>

        </div>


        {{-- Footer --}}
        <div class="flex flex-col-reverse gap-3 border-t border-slate-100 bg-slate-50/60 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">

            <a
                href="{{ route('admin.forum.threads.show', $thread) }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
            >
                <svg class="h-4 w-4" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 18l-6-6 6-6"/>
                </svg>

                Batal
            </a>


            <button
                type="submit"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 hover:shadow-md"
            >
                <svg class="h-4 w-4" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m5 12 5 5L20 7"/>
                </svg>

                Simpan Perubahan
            </button>

        </div>

    </form>


    {{-- Thread Metadata --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

        <h2 class="font-semibold text-slate-900">
            Informasi Tambahan
        </h2>

        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-3">

            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                    Views
                </p>

                <p class="mt-1 text-lg font-bold text-slate-800">
                    {{ $thread->views }}
                </p>
            </div>

            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                    Balasan
                </p>

                <p class="mt-1 text-lg font-bold text-slate-800">
                    {{ $thread->replies->count() }}
                </p>
            </div>

            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-xs font-medium uppercase tracking-wide text-slate-400">
                    Dibuat
                </p>

                <p class="mt-1 text-sm font-bold text-slate-800">
                    {{ $thread->created_at->format('d M Y') }}
                </p>
            </div>

        </div>

    </div>

</div>

@endsection