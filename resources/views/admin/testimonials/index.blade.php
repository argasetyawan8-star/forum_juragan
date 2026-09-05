@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <div class="mb-2 flex items-center gap-2 text-sm text-slate-500">
                <span>Admin</span>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 18 6-6-6-6" />
                </svg>
                <span class="text-slate-700">Testimonials</span>
            </div>

            <h1 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Kelola Testimonials
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola testimoni pelanggan yang ditampilkan di website.
            </p>
        </div>

        <button
            type="button"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4v16m8-8H4" />
            </svg>
            Tambah Testimonial
        </button>
    </div>


    {{-- Stats --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Total --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Total Testimonials</p>
                    <p class="mt-2 text-3xl font-bold text-slate-900">48</p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50">
                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h6m-9 8 3-3h8a4 4 0 0 0 4-4V7a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4v3Z" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Published --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Published</p>
                    <p class="mt-2 text-3xl font-bold text-slate-900">36</p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50">
                    <svg class="h-6 w-6 text-emerald-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Draft --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Draft</p>
                    <p class="mt-2 text-3xl font-bold text-slate-900">8</p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50">
                    <svg class="h-6 w-6 text-amber-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6l4 2" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Featured --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Featured</p>
                    <p class="mt-2 text-3xl font-bold text-slate-900">4</p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-50">
                    <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m12 3 2.9 5.88 6.1.89-4.4 4.29 1.04 6.06L12 17.25l-5.64 2.97 1.04-6.06L3 9.77l6.1-.89L12 3Z" />
                    </svg>
                </div>
            </div>
        </div>

    </div>


    {{-- Filter --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            <div class="relative w-full lg:max-w-md">
                <svg
                    class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2"
                        d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>

                <input
                    type="text"
                    placeholder="Cari nama atau isi testimonial..."
                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-10 pr-4 text-sm outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100">
            </div>

            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:flex">

                <select
                    class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                    <option>Semua Status</option>
                    <option>Published</option>
                    <option>Draft</option>
                </select>

                <select
                    class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-600 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                    <option>Semua Tampilan</option>
                    <option>Featured</option>
                    <option>Normal</option>
                </select>

            </div>
        </div>
    </div>


    {{-- Testimonials --}}
    <div class="grid grid-cols-1 gap-5 xl:grid-cols-2">

        @php
            $testimonials = [
                [
                    'name' => 'Andi Pratama',
                    'business' => 'Digital Store Indonesia',
                    'role' => 'Owner',
                    'rating' => 5,
                    'status' => 'Published',
                    'featured' => true,
                    'text' => 'Forum Juragan membantu saya mendapatkan banyak insight baru tentang bagaimana mengelola tim dan mengembangkan bisnis dengan lebih terstruktur.',
                    'date' => '02 Sep 2026',
                ],
                [
                    'name' => 'Rina Maharani',
                    'business' => 'Rina Fashion',
                    'role' => 'Founder',
                    'rating' => 5,
                    'status' => 'Published',
                    'featured' => false,
                    'text' => 'Konsultasinya sangat membantu. Saya jadi lebih paham masalah utama bisnis dan langkah apa yang harus dilakukan selanjutnya.',
                    'date' => '29 Agu 2026',
                ],
                [
                    'name' => 'Budi Santoso',
                    'business' => 'Santoso Furniture',
                    'role' => 'Owner',
                    'rating' => 5,
                    'status' => 'Published',
                    'featured' => true,
                    'text' => 'Seminarnya praktis dan materinya benar-benar bisa diterapkan. Saya mendapatkan banyak perspektif baru sebagai pemilik bisnis.',
                    'date' => '25 Agu 2026',
                ],
                [
                    'name' => 'Dewi Lestari',
                    'business' => 'Dewi Bakery',
                    'role' => 'Founder',
                    'rating' => 4,
                    'status' => 'Draft',
                    'featured' => false,
                    'text' => 'Materi dan diskusi yang diberikan cukup relevan dengan kondisi bisnis saya. Banyak hal baru yang bisa dipelajari.',
                    'date' => '21 Agu 2026',
                ],
            ];
        @endphp


        @foreach ($testimonials as $testimonial)

            <div class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">

                {{-- Top --}}
                <div class="flex items-start justify-between gap-4">

                    <div class="flex min-w-0 items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-700">
                            {{ strtoupper(substr($testimonial['name'], 0, 1)) }}
                        </div>

                        <div class="min-w-0">
                            <h3 class="truncate font-semibold text-slate-900">
                                {{ $testimonial['name'] }}
                            </h3>

                            <p class="truncate text-sm text-slate-500">
                                {{ $testimonial['role'] }} · {{ $testimonial['business'] }}
                            </p>
                        </div>

                    </div>

                    <div class="flex items-center gap-1">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg
                                class="h-4 w-4 {{ $i <= $testimonial['rating'] ? 'text-amber-400' : 'text-slate-200' }}"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path d="m10 1.5 2.63 5.33 5.87.85-4.25 4.14 1 5.85L10 14.91l-5.25 2.76 1-5.85L1.5 7.68l5.87-.85L10 1.5Z" />
                            </svg>
                        @endfor
                    </div>

                </div>


                {{-- Quote --}}
                <div class="mt-5 rounded-xl bg-slate-50 p-4">
                    <div class="mb-2 text-2xl font-bold text-blue-200">“</div>

                    <p class="text-sm leading-6 text-slate-600">
                        {{ $testimonial['text'] }}
                    </p>
                </div>


                {{-- Bottom --}}
                <div class="mt-5 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex flex-wrap items-center gap-2">

                        @if ($testimonial['status'] === 'Published')
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Published
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                Draft
                            </span>
                        @endif

                        @if ($testimonial['featured'])
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-purple-50 px-3 py-1 text-xs font-semibold text-purple-700">
                                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m10 1.5 2.63 5.33 5.87.85-4.25 4.14-1 5.85L10 14.91l-5.25 2.76 1-5.85L1.5 7.68l5.87-.85L10 1.5Z" />
                                </svg>
                                Featured
                            </span>
                        @endif

                        <span class="text-xs text-slate-400">
                            {{ $testimonial['date'] }}
                        </span>

                    </div>


                    {{-- Actions --}}
                    <div class="flex items-center gap-1">

                        <button
                            type="button"
                            title="Preview"
                            class="rounded-lg p-2 text-slate-400 transition hover:bg-slate-100 hover:text-slate-700">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z" />
                                <circle cx="12" cy="12" r="2.5" />
                            </svg>
                        </button>

                        <button
                            type="button"
                            title="Edit"
                            class="rounded-lg p-2 text-slate-400 transition hover:bg-blue-50 hover:text-blue-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m16.86 3.49 3.65 3.65M5 20l3.9-.75L19.75 8.4a2.58 2.58 0 0 0 0-3.65l-.5-.5a2.58 2.58 0 0 0-3.65 0L4.75 14.9 4 19.5l1 0.5Z" />
                            </svg>
                        </button>

                        <button
                            type="button"
                            title="Hapus"
                            class="rounded-lg p-2 text-slate-400 transition hover:bg-red-50 hover:text-red-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m6 6 12 12M6 18 18 6" />
                            </svg>
                        </button>

                    </div>

                </div>

            </div>

        @endforeach

    </div>


    {{-- Pagination --}}
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

        <p class="text-sm text-slate-500">
            Menampilkan <span class="font-semibold text-slate-700">1–4</span>
            dari <span class="font-semibold text-slate-700">48</span> testimonials
        </p>

        <div class="flex items-center gap-1">

            <button
                class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-400">
                ‹
            </button>

            <button
                class="rounded-lg bg-blue-600 px-3 py-2 text-sm font-semibold text-white">
                1
            </button>

            <button
                class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                2
            </button>

            <button
                class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                3
            </button>

            <span class="px-2 text-slate-400">...</span>

            <button
                class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                12
            </button>

            <button
                class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                ›
            </button>

        </div>

    </div>


    {{-- Info --}}
    <div class="rounded-2xl border border-blue-100 bg-blue-50 p-5">
        <div class="flex gap-4">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100">
                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 16v-4m0-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>

            <div>
                <h3 class="font-semibold text-blue-900">
                    Tentang Testimonials
                </h3>

                <p class="mt-1 text-sm leading-6 text-blue-800">
                    Testimonial yang berstatus <strong>Published</strong> dapat
                    ditampilkan di landing page. Gunakan status
                    <strong>Featured</strong> untuk menampilkan testimonial
                    pilihan pada bagian utama website.
                </p>
            </div>

        </div>
    </div>

</div>

@endsection