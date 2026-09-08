@extends('layouts.landing')

@section('content')

<div class="min-h-screen bg-slate-50">

    {{-- =========================================================
         HEADER
    ========================================================== --}}
    <section class="border-b border-slate-200 bg-white">

        <div class="mx-auto max-w-4xl px-4 py-10 sm:px-6 sm:py-12 lg:px-8">

            {{-- Back --}}
            <a
                href="{{ route('forum.index') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 transition hover:text-blue-600"
            >
                <i class="bi bi-arrow-left"></i>
                Kembali ke Forum
            </a>


            {{-- Heading --}}
            <div class="mt-7">

                <div class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                    <i class="bi bi-chat-square-text-fill text-lg"></i>
                </div>

                <h1 class="mt-5 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                    Buat Diskusi Baru
                </h1>

                <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                    Bagikan pengalaman, pertanyaan, atau masalah bisnis kamu
                    kepada komunitas Forum Juragan.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
         FORM
    ========================================================== --}}
    <section class="py-8 sm:py-10">

        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

            <form
                action="{{ route('forum.store') }}"
                method="POST"
            >

                @csrf


                {{-- =================================================
                     MAIN FORM CARD
                ================================================== --}}
                <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                    {{-- Form Header --}}
                    <div class="border-b border-slate-100 px-5 py-6 sm:px-8">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                <i class="bi bi-pencil-square"></i>
                            </div>

                            <div>

                                <h2 class="font-bold text-slate-900">
                                    Detail Diskusi
                                </h2>

                                <p class="mt-1 text-sm text-slate-500">
                                    Isi informasi berikut sebelum mempublikasikan diskusi.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Form Body --}}
                    <div class="space-y-7 px-5 py-7 sm:px-8 sm:py-8">


                        {{-- =================================================
                             CATEGORY
                        ================================================== --}}
                        <div>

                            <label
                                for="category_id"
                                class="mb-2.5 block text-sm font-bold text-slate-700"
                            >
                                Kategori
                                <span class="text-red-500">*</span>
                            </label>


                            <div class="relative">

                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                    <i class="bi bi-folder2-open"></i>
                                </div>


                                <select
                                    id="category_id"
                                    name="category_id"
                                    class="w-full appearance-none rounded-2xl border border-slate-200 bg-white px-4 py-3.5 pl-11 pr-11 text-sm text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                >

                                    <option value="">
                                        Pilih kategori diskusi
                                    </option>

                                    @foreach ($categories as $category)

                                        <option
                                            value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                                        >
                                            {{ $category->nama_kategori }}
                                        </option>

                                    @endforeach

                                </select>


                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400">
                                    <i class="bi bi-chevron-down text-xs"></i>
                                </div>

                            </div>


                            @error('category_id')

                                <p class="mt-2 flex items-center gap-1.5 text-sm font-medium text-red-500">

                                    <i class="bi bi-exclamation-circle"></i>

                                    {{ $message }}

                                </p>

                            @else

                                <p class="mt-2 text-xs leading-5 text-slate-400">
                                    Pilih kategori yang paling sesuai dengan topik diskusi kamu.
                                </p>

                            @enderror

                        </div>


                        {{-- =================================================
                             TITLE
                        ================================================== --}}
                        <div>

                            <label
                                for="judul"
                                class="mb-2.5 block text-sm font-bold text-slate-700"
                            >
                                Judul Diskusi
                                <span class="text-red-500">*</span>
                            </label>


                            <div class="relative">

                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                    <i class="bi bi-type"></i>
                                </div>


                                <input
                                    type="text"
                                    id="judul"
                                    name="judul"
                                    value="{{ old('judul') }}"
                                    maxlength="255"
                                    placeholder="Contoh: Bagaimana cara mengelola karyawan yang kurang produktif?"
                                    class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3.5 pl-11 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                >

                            </div>


                            @error('judul')

                                <p class="mt-2 flex items-center gap-1.5 text-sm font-medium text-red-500">

                                    <i class="bi bi-exclamation-circle"></i>

                                    {{ $message }}

                                </p>

                            @else

                                <p class="mt-2 text-xs leading-5 text-slate-400">
                                    Buat judul yang singkat, jelas, dan menggambarkan inti masalah.
                                </p>

                            @enderror

                        </div>


                        {{-- =================================================
                             CONTENT
                        ================================================== --}}
                        <div>

                            <label
                                for="isi"
                                class="mb-2.5 block text-sm font-bold text-slate-700"
                            >
                                Isi Diskusi
                                <span class="text-red-500">*</span>
                            </label>


                            <div class="relative">

                                <div class="pointer-events-none absolute left-4 top-4 text-slate-400">
                                    <i class="bi bi-text-paragraph"></i>
                                </div>


                                <textarea
                                    id="isi"
                                    name="isi"
                                    rows="10"
                                    required
                                    placeholder="Ceritakan masalah, pengalaman, pertanyaan, atau situasi bisnis kamu secara detail..."
                                    class="w-full resize-y rounded-2xl border border-slate-200 bg-white px-4 py-4 pl-11 text-sm leading-7 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                >{{ old('isi') }}</textarea>

                            </div>


                            @error('isi')

                                <p class="mt-2 flex items-center gap-1.5 text-sm font-medium text-red-500">

                                    <i class="bi bi-exclamation-circle"></i>

                                    {{ $message }}

                                </p>

                            @else

                                <div class="mt-3 flex flex-col gap-2 text-xs leading-5 text-slate-400 sm:flex-row sm:items-center sm:justify-between">

                                    <span class="inline-flex items-center gap-1.5">
                                        <i class="bi bi-info-circle"></i>
                                        Ceritakan konteksnya agar juragan lain lebih mudah membantu.
                                    </span>

                                    <span>
                                        Gunakan bahasa yang jelas dan mudah dipahami.
                                    </span>

                                </div>

                            @enderror

                        </div>


                    </div>


                    {{-- =================================================
                         FORM FOOTER
                    ================================================== --}}
                    <div class="border-t border-slate-100 bg-slate-50 px-5 py-5 sm:px-8">

                        <div class="flex flex-col-reverse gap-3 sm:flex-row sm:items-center sm:justify-between">

                            <p class="flex items-start gap-2 text-xs leading-5 text-slate-400">

                                <i class="bi bi-shield-check mt-0.5 shrink-0"></i>

                                Pastikan diskusi tetap relevan,
                                sopan, dan membantu sesama anggota.

                            </p>


                            <div class="flex flex-col gap-3 sm:flex-row">

                                <a
                                    href="{{ route('forum.index') }}"
                                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-bold text-slate-700 transition hover:bg-slate-100"
                                >
                                    <i class="bi bi-x-lg"></i>
                                    Batal
                                </a>


                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
                                >
                                    <i class="bi bi-send-fill"></i>
                                    Publikasikan Diskusi
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     WRITING TIPS
                ================================================== --}}
                <div class="mt-6 rounded-3xl border border-blue-100 bg-blue-50/70 p-5 sm:p-6">

                    <div class="flex items-start gap-4">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>


                        <div>

                            <h3 class="text-sm font-bold text-slate-900">
                                Tips membuat diskusi yang menarik
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-600">
                                Jelaskan konteks masalah, ceritakan apa yang sudah
                                kamu coba, lalu tuliskan pertanyaan atau solusi
                                yang ingin kamu diskusikan bersama komunitas.
                            </p>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </section>

</div>

@endsection