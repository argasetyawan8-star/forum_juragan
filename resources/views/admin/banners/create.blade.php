@extends('admin.layouts.app')

@section('content')

<div class="mx-auto max-w-5xl space-y-6">

    {{-- Header --}}
    <div>
        <div class="flex items-center gap-2 text-sm text-slate-500">
            <a
                href="{{ route('admin.banners.index') }}"
                class="transition hover:text-blue-600"
            >
                Banners
            </a>

            <svg
                class="h-4 w-4"
                viewBox="0 0 20 20"
                fill="currentColor"
            >
                <path
                    fill-rule="evenodd"
                    d="M7.21 14.77a.75.75 0 0 1 .02-1.06L10.94 10 7.23 6.29a.75.75 0 1 1 1.06-1.06l4.24 4.24a.75.75 0 0 1 0 1.06l-4.24 4.24a.75.75 0 0 1-1.06-.02Z"
                    clip-rule="evenodd"
                />
            </svg>

            <span class="font-medium text-slate-900">
                Tambah Banner
            </span>
        </div>

        <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
            Tambah Banner
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Buat banner baru yang nantinya dapat ditampilkan di website.
        </p>
    </div>


    {{-- Validation Error --}}
    @if($errors->any())
        <div class="rounded-2xl border border-red-200 bg-red-50 p-4 text-red-800">

            <div class="flex items-start gap-3">

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
                        Periksa kembali data yang dimasukkan.
                    </p>

                    <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">
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
        action="{{ route('admin.banners.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-6"
    >

        @csrf


        {{-- =====================================================
             INFORMASI UTAMA
        ====================================================== --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="border-b border-slate-200 px-5 py-4 sm:px-6">
                <h2 class="font-semibold text-slate-900">
                    Informasi Banner
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Masukkan informasi utama yang akan ditampilkan pada banner.
                </p>
            </div>


            <div class="space-y-6 p-5 sm:p-6">

                {{-- Judul --}}
                <div>

                    <label
                        for="judul"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Judul Banner
                        <span class="text-red-500">*</span>
                    </label>

                    <input
                        type="text"
                        name="judul"
                        id="judul"
                        value="{{ old('judul') }}"
                        required
                        maxlength="255"
                        placeholder="Contoh: Bangun Bisnis Lebih Terarah"
                        class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                    @error('judul')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Subjudul --}}
                <div>

                    <label
                        for="subjudul"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Subjudul
                    </label>

                    <textarea
                        name="subjudul"
                        id="subjudul"
                        rows="4"
                        maxlength="1000"
                        placeholder="Tuliskan penjelasan singkat mengenai banner..."
                        class="w-full resize-none rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm leading-6 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >{{ old('subjudul') }}</textarea>

                    <p class="mt-2 text-xs text-slate-400">
                        Maksimal 1000 karakter.
                    </p>

                    @error('subjudul')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Gambar --}}
                <div>

                    <label
                        for="gambar"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Gambar Banner
                    </label>

                    <label
                        for="gambar"
                        class="group flex cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-200 bg-slate-50 px-6 py-10 text-center transition hover:border-blue-300 hover:bg-blue-50/40"
                    >

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-slate-400 shadow-sm transition group-hover:text-blue-600">

                            <svg
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 16V4m0 0L8 8m4-4 4 4"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 12v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6"
                                />
                            </svg>

                        </div>

                        <p class="mt-4 text-sm font-semibold text-slate-700">
                            Klik untuk memilih gambar
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            JPG, JPEG, PNG, atau WEBP • Maksimal 2 MB
                        </p>

                        <input
                            type="file"
                            name="gambar"
                            id="gambar"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            class="hidden"
                        >

                    </label>

                    <p
                        id="file-name"
                        class="mt-2 hidden text-sm font-medium text-blue-600"
                    ></p>

                    @error('gambar')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

            </div>

        </div>


        {{-- =====================================================
             CTA
        ====================================================== --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="border-b border-slate-200 px-5 py-4 sm:px-6">

                <h2 class="font-semibold text-slate-900">
                    Tombol Call-to-Action
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Atur tombol yang muncul pada banner.
                </p>

            </div>


            <div class="grid gap-6 p-5 sm:grid-cols-2 sm:p-6">

                {{-- Text tombol --}}
                <div>

                    <label
                        for="teks_tombol"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Teks Tombol
                    </label>

                    <input
                        type="text"
                        name="teks_tombol"
                        id="teks_tombol"
                        value="{{ old('teks_tombol') }}"
                        maxlength="100"
                        placeholder="Contoh: Daftar Sekarang"
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                    @error('teks_tombol')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Link --}}
                <div>

                    <label
                        for="link"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Link Tombol
                    </label>

                    <input
                        type="text"
                        name="link"
                        id="link"
                        value="{{ old('link') }}"
                        maxlength="500"
                        placeholder="/konsultasi atau https://..."
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                    <p class="mt-2 text-xs text-slate-400">
                        Bisa menggunakan URL internal maupun eksternal.
                    </p>

                    @error('link')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

            </div>

        </div>


        {{-- =====================================================
             PENGATURAN
        ====================================================== --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

            <div class="border-b border-slate-200 px-5 py-4 sm:px-6">

                <h2 class="font-semibold text-slate-900">
                    Pengaturan Tampilan
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Atur posisi dan status banner.
                </p>

            </div>


            <div class="space-y-6 p-5 sm:p-6">

                {{-- Urutan --}}
                <div class="max-w-xs">

                    <label
                        for="urutan"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Urutan
                        <span class="text-red-500">*</span>
                    </label>

                    <input
                        type="number"
                        name="urutan"
                        id="urutan"
                        value="{{ old('urutan', 0) }}"
                        min="0"
                        required
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm font-medium text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                    <p class="mt-2 text-xs leading-5 text-slate-400">
                        Semakin kecil angka, semakin awal banner ditampilkan.
                    </p>

                    @error('urutan')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Status --}}
                <div class="flex items-center justify-between gap-4 rounded-2xl border border-slate-200 bg-slate-50 p-4">

                    <div>

                        <p class="text-sm font-semibold text-slate-800">
                            Aktifkan banner
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Banner aktif dapat ditampilkan pada website.
                        </p>

                    </div>


                    <label class="relative inline-flex cursor-pointer items-center">

                        <input
                            type="checkbox"
                            name="status"
                            value="1"
                            class="peer sr-only"
                            {{ old('status', true) ? 'checked' : '' }}
                        >

                        <div class="h-6 w-11 rounded-full bg-slate-300 transition peer-checked:bg-blue-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-500/20 after:absolute after:left-[3px] after:top-[3px] after:h-5 after:w-5 after:rounded-full after:border after:border-slate-300 after:bg-white after:transition-all peer-checked:after:translate-x-full peer-checked:after:border-white"></div>

                    </label>

                </div>

            </div>

        </div>


        {{-- =====================================================
             ACTION
        ====================================================== --}}
        <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">

            <a
                href="{{ route('admin.banners.index') }}"
                class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
            >
                Batal
            </a>

            <button
                type="submit"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 active:scale-[0.98]"
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

                Simpan Banner

            </button>

        </div>

    </form>

</div>


{{-- =========================================================
     FILE NAME SCRIPT
========================================================== --}}
<script>
    const gambarInput = document.getElementById('gambar');
    const fileName = document.getElementById('file-name');

    gambarInput?.addEventListener('change', function () {

        if (this.files && this.files.length > 0) {

            fileName.textContent =
                'File dipilih: ' + this.files[0].name;

            fileName.classList.remove('hidden');

        } else {

            fileName.textContent = '';
            fileName.classList.add('hidden');

        }

    });
</script>

@endsection