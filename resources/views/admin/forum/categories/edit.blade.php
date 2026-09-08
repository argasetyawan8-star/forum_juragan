@extends('admin.layouts.app')

@section('content')

<div class="mx-auto max-w-4xl space-y-6">

    {{-- HEADER --}}
    <div>
        <div class="mb-2 flex items-center gap-2 text-sm text-slate-400">

            <a
                href="{{ route('admin.forum.categories') }}"
                class="transition hover:text-blue-600"
            >
                Forum
            </a>

            <span>/</span>

            <span>
                Categories
            </span>

            <span>/</span>

            <span class="text-slate-600">
                Edit
            </span>

        </div>

        <h1 class="text-2xl font-bold tracking-tight text-slate-900">
            Edit Kategori
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Perbarui informasi kategori forum.
        </p>
    </div>


    {{-- VALIDATION ERROR --}}
    @if($errors->any())

        <div class="rounded-2xl border border-red-200 bg-red-50 p-5">

            <div class="flex items-start gap-3">

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
                        d="M10.3 3.8L2.6 17a2 2 0 001.7 3h15.4a2 2 0 001.7 3l-3.4 0a2 2 0 001.7-3L13.7 3.8a2 2 0 00-3.4 0z"
                    />
                </svg>

                <div>

                    <p class="text-sm font-semibold text-red-800">
                        Ada data yang perlu diperbaiki.
                    </p>

                    <ul class="mt-2 space-y-1 text-sm text-red-700">

                        @foreach($errors->all() as $error)

                            <li>
                                • {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    @endif


    {{-- FORM --}}
    <form
        action="{{ route('admin.forum.categories.update', $category) }}"
        method="POST"
        class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    >

        @csrf
        @method('PUT')


        {{-- FORM HEADER --}}
        <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

            <div class="flex items-center gap-4">

                <div
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600"
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
                            d="M12 20h9"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16.5 3.5a2.12 2.12 0 013 3L8 18l-4 1 1-4L16.5 3.5z"
                        />
                    </svg>

                </div>

                <div>

                    <h2 class="font-semibold text-slate-900">
                        Informasi Kategori
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Ubah nama atau deskripsi kategori.
                    </p>

                </div>

            </div>

        </div>


        {{-- FORM BODY --}}
        <div class="space-y-6 px-6 py-6 sm:px-8 sm:py-8">


            {{-- NAMA KATEGORI --}}
            <div>

                <label
                    for="nama_kategori"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Nama Kategori
                    <span class="text-red-500">*</span>
                </label>

                <input
                    type="text"
                    id="nama_kategori"
                    name="nama_kategori"
                    value="{{ old('nama_kategori', $category->nama_kategori) }}"
                    maxlength="255"
                    required
                    autofocus
                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                >

                @error('nama_kategori')

                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>

                @enderror

            </div>


            {{-- DESKRIPSI --}}
            <div>

                <label
                    for="deskripsi"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Deskripsi
                    <span class="font-normal text-slate-400">
                        (opsional)
                    </span>
                </label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    rows="5"
                    maxlength="1000"
                    placeholder="Jelaskan secara singkat topik yang dibahas dalam kategori ini..."
                    class="w-full resize-none rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm leading-6 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                >{{ old('deskripsi', $category->deskripsi) }}</textarea>

                <div class="mt-2 flex justify-between">

                    <p class="text-xs text-slate-400">
                        Deskripsi membantu pengguna memahami kategori.
                    </p>

                    <p class="text-xs text-slate-400">
                        Maks. 1000 karakter
                    </p>

                </div>

                @error('deskripsi')

                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>

                @enderror

            </div>


            {{-- SLUG --}}
            <div
                class="rounded-2xl border border-slate-200 bg-slate-50 p-4"
            >

                <div class="flex items-start gap-3">

                    <svg
                        class="mt-0.5 h-5 w-5 shrink-0 text-slate-500"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M7 7h10v10H7z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M7 12h10"
                        />

                    </svg>

                    <div class="min-w-0">

                        <p class="text-sm font-semibold text-slate-700">
                            Slug saat ini
                        </p>

                        <code
                            class="mt-1 block break-all text-xs text-slate-500"
                        >
                            {{ $category->slug }}
                        </code>

                        <p class="mt-2 text-xs text-slate-400">
                            Slug akan diperbarui otomatis berdasarkan nama kategori.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- FORM FOOTER --}}
        <div
            class="flex flex-col-reverse gap-3 border-t border-slate-100 bg-slate-50/70 px-6 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-8"
        >

            <a
                href="{{ route('admin.forum.categories') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-50 hover:text-slate-900"
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
                        d="M19 12H5"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 19l-7-7 7-7"
                    />
                </svg>

                Kembali

            </a>


            <button
                type="submit"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700 hover:shadow-blue-600/30"
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
                        d="M5 12h14"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 5l7 7-7 7"
                    />
                </svg>

                Simpan Perubahan

            </button>

        </div>

    </form>

</div>

@endsection