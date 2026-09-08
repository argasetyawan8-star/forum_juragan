@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                Tambah Testimonial
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Tambahkan testimonial pelanggan atau peserta ke website.
            </p>
        </div>

        <a
            href="{{ route('admin.testimonials.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-slate-300 hover:bg-slate-50"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 19l-7-7m0 0l7-7m-7 7h18"
                />
            </svg>

            Kembali
        </a>
    </div>


    {{-- Form --}}
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">

        <form
            action="{{ route('admin.testimonials.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <div class="p-6 sm:p-8">

                <div class="grid gap-6 lg:grid-cols-2">

                    {{-- Nama --}}
                    <div>
                        <label
                            for="nama"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Nama
                            <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            value="{{ old('nama') }}"
                            placeholder="Contoh: Budi Santoso"
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        >

                        @error('nama')
                            <p class="mt-2 text-xs font-medium text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Jabatan --}}
                    <div>
                        <label
                            for="jabatan"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Jabatan
                        </label>

                        <input
                            type="text"
                            id="jabatan"
                            name="jabatan"
                            value="{{ old('jabatan') }}"
                            placeholder="Contoh: Owner / Founder"
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        >

                        @error('jabatan')
                            <p class="mt-2 text-xs font-medium text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Perusahaan --}}
                    <div>
                        <label
                            for="perusahaan"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Perusahaan
                        </label>

                        <input
                            type="text"
                            id="perusahaan"
                            name="perusahaan"
                            value="{{ old('perusahaan') }}"
                            placeholder="Contoh: PT Juragan Sejahtera"
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        >

                        @error('perusahaan')
                            <p class="mt-2 text-xs font-medium text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Urutan --}}
                    <div>
                        <label
                            for="urutan"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Urutan
                            <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="number"
                            id="urutan"
                            name="urutan"
                            value="{{ old('urutan', 0) }}"
                            min="0"
                            placeholder="0"
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        >

                        <p class="mt-2 text-xs text-slate-400">
                            Semakin kecil angkanya, semakin awal testimonial ditampilkan.
                        </p>

                        @error('urutan')
                            <p class="mt-2 text-xs font-medium text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Isi Testimonial --}}
                    <div class="lg:col-span-2">
                        <label
                            for="isi"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Isi Testimonial
                            <span class="text-red-500">*</span>
                        </label>

                        <textarea
                            id="isi"
                            name="isi"
                            rows="6"
                            placeholder="Tulis testimonial pelanggan atau peserta..."
                            class="w-full resize-y rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm leading-7 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                        >{{ old('isi') }}</textarea>

                        @error('isi')
                            <p class="mt-2 text-xs font-medium text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Foto --}}
                    <div class="lg:col-span-2">
                        <label
                            for="foto"
                            class="mb-2 block text-sm font-semibold text-slate-700"
                        >
                            Foto
                        </label>

                        <div class="rounded-xl border-2 border-dashed border-slate-200 bg-slate-50 p-6 transition hover:border-blue-300 hover:bg-blue-50/30">

                            <input
                                type="file"
                                id="foto"
                                name="foto"
                                accept=".jpg,.jpeg,.png,.webp"
                                class="block w-full text-sm text-slate-500 file:mr-4 file:rounded-lg file:border-0 file:bg-blue-600 file:px-4 file:py-2.5 file:text-sm file:font-semibold file:text-white hover:file:bg-blue-700"
                            >

                            <p class="mt-3 text-xs text-slate-400">
                                Format: JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            </p>
                        </div>

                        @error('foto')
                            <p class="mt-2 text-xs font-medium text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Status --}}
                    <div class="lg:col-span-2">
                        <label class="inline-flex cursor-pointer items-center gap-3">

                            <input
                                type="checkbox"
                                name="status"
                                value="1"
                                {{ old('status', true) ? 'checked' : '' }}
                                class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                            >

                            <span>
                                <span class="block text-sm font-semibold text-slate-700">
                                    Aktifkan testimonial
                                </span>

                                <span class="block text-xs text-slate-400">
                                    Testimonial aktif dapat ditampilkan di website.
                                </span>
                            </span>

                        </label>
                    </div>

                </div>

            </div>


            {{-- Footer Form --}}
            <div class="flex flex-col-reverse gap-3 border-t border-slate-100 bg-slate-50 px-6 py-5 sm:flex-row sm:justify-end sm:px-8">

                <a
                    href="{{ route('admin.testimonials.index') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4v16m8-8H4"
                        />
                    </svg>

                    Simpan Testimonial
                </button>

            </div>

        </form>

    </div>

</div>

@endsection