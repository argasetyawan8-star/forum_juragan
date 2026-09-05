@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50">

    {{-- =========================================================
        HERO FORUM
    ========================================================== --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-blue-600 to-blue-500">

        {{-- Background Decoration --}}
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-white"></div>
            <div class="absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-white"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8">

            <div class="max-w-3xl">

                {{-- Badge --}}
                <span class="inline-flex items-center rounded-full bg-white/15 px-4 py-2 text-sm font-medium text-white ring-1 ring-white/20">
                    💬 Forum Juragan
                </span>

                {{-- Title --}}
                <h1 class="mt-6 text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Tempat Juragan
                    <span class="text-emerald-300">
                        Berbagi & Bertumbuh
                    </span>
                </h1>

                {{-- Description --}}
                <p class="mt-6 max-w-2xl text-lg leading-8 text-blue-100">
                    Diskusikan pengalaman bisnis, cari solusi masalah usaha,
                    dan belajar bersama para pemilik bisnis lainnya.
                </p>

                {{-- Buttons --}}
                <div class="mt-8 flex flex-wrap gap-4">

                    <a
                        href="#kategori"
                        class="rounded-xl bg-white px-6 py-3.5 text-sm font-semibold text-blue-700 shadow-lg transition duration-300 hover:-translate-y-0.5 hover:bg-blue-50"
                    >
                        Jelajahi Forum
                    </a>

                    <a
                        href="#kategori"
                        class="rounded-xl border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur transition duration-300 hover:bg-white/20"
                    >
                        Lihat Kategori
                    </a>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
        CATEGORY SECTION
    ========================================================== --}}
    <section
        id="kategori"
        class="mx-auto max-w-7xl px-6 py-16 lg:px-8"
    >

        {{-- Section Heading --}}
        <div class="mb-10">

            <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                Jelajahi Topik
            </p>

            <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                Pilih kategori diskusi
            </h2>

            <p class="mt-3 max-w-2xl text-slate-600">
                Temukan pembahasan yang sesuai dengan kebutuhan bisnis kamu
                dan bertukar pengalaman bersama para juragan lainnya.
            </p>

        </div>


        {{-- =====================================================
            CATEGORY LIST
        ====================================================== --}}

        @if($categories->count())

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($categories as $category)

                    <a
                        href="#"
                        class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl"
                    >

                        {{-- Top --}}
                        <div class="flex items-start justify-between gap-4">

                            {{-- Icon --}}
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-xl transition duration-300 group-hover:bg-blue-600 group-hover:text-white">
                                💼
                            </div>

                            {{-- Thread Count --}}
                            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                                {{ $category->threads_count }}
                                {{ $category->threads_count == 1 ? 'Thread' : 'Thread' }}
                            </span>

                        </div>


                        {{-- Category Name --}}
                        <h3 class="mt-6 text-lg font-bold text-slate-900 transition group-hover:text-blue-600">
                            {{ $category->nama_kategori }}
                        </h3>


                        {{-- Description --}}
                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            {{ $category->deskripsi ?? 'Diskusikan berbagai hal seputar bisnis bersama komunitas.' }}
                        </p>


                        {{-- Link --}}
                        <div class="mt-5 flex items-center gap-2 text-sm font-semibold text-blue-600">

                            <span>
                                Lihat diskusi
                            </span>

                            <span class="transition-transform duration-300 group-hover:translate-x-1">
                                →
                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

        @else

            {{-- Empty State --}}
            <div class="rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-16 text-center">

                <div class="text-4xl">
                    💬
                </div>

                <h3 class="mt-4 text-lg font-bold text-slate-900">
                    Belum ada kategori
                </h3>

                <p class="mt-2 text-sm text-slate-500">
                    Kategori forum belum tersedia.
                </p>

            </div>

        @endif

    </section>


    {{-- =========================================================
        COMMUNITY CTA
    ========================================================== --}}
    <section class="border-t border-slate-200 bg-white">

        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl bg-blue-600 px-6 py-12 text-center shadow-xl sm:px-12">

                {{-- Decoration --}}
                <div class="absolute -right-16 -top-16 h-48 w-48 rounded-full bg-white/10"></div>
                <div class="absolute -bottom-20 -left-16 h-56 w-56 rounded-full bg-white/10"></div>

                <div class="relative mx-auto max-w-2xl">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-white/15 text-2xl">
                        💡
                    </div>

                    <h2 class="mt-6 text-3xl font-bold text-white sm:text-4xl">
                        Punya pengalaman atau pertanyaan?
                    </h2>

                    <p class="mt-4 text-blue-100">
                        Bagikan pengalaman bisnis kamu dan bantu juragan lainnya
                        menemukan solusi untuk masalah mereka.
                    </p>

                    <a
                        href="#kategori"
                        class="mt-8 inline-flex items-center rounded-xl bg-white px-6 py-3.5 text-sm font-semibold text-blue-700 shadow-lg transition duration-300 hover:-translate-y-0.5 hover:bg-blue-50"
                    >
                        Mulai Jelajahi Forum
                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection