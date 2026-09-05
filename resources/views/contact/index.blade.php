@extends('layouts.app')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}
<section class="relative overflow-hidden bg-white pt-32 pb-16">
    <div class="absolute inset-0">
        <div class="absolute left-0 top-10 h-72 w-72 rounded-full bg-blue-100/60 blur-3xl"></div>
        <div class="absolute right-0 top-20 h-72 w-72 rounded-full bg-emerald-100/50 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 text-center lg:px-8">

        <span class="inline-flex rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700">
            Hubungi Kami
        </span>

        <h1 class="mt-6 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
            Ada yang ingin kamu tanyakan?
        </h1>

        <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-slate-600">
            Jangan ragu untuk menghubungi tim Forum Juragan.
            Kami siap membantu menjawab pertanyaan dan kebutuhan kamu.
        </p>

    </div>
</section>


{{-- =========================================================
     CONTACT CONTENT
========================================================= --}}
<section class="bg-slate-50 py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-8 lg:grid-cols-3">

            {{-- Contact Info --}}
            <div class="space-y-5">

                <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-indigo-700 p-7 text-white shadow-xl shadow-blue-900/10">
                    <h2 class="text-xl font-bold">
                        Mari terhubung
                    </h2>

                    <p class="mt-3 text-sm leading-6 text-blue-100">
                        Tim kami siap membantu kamu terkait Forum,
                        Seminar, maupun layanan Konsultasi Bisnis.
                    </p>

                    <div class="mt-8 space-y-6">

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 8l9 6 9-6"/>
                                    <rect x="3" y="5" width="18" height="14" rx="2"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs text-blue-200">Email</p>
                                <p class="mt-1 font-medium">
                                    hello@forumjuragan.com
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.12.9.33 1.78.62 2.63a2 2 0 01-.45 2.11L8 9.73a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0122 16.92z"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs text-blue-200">WhatsApp</p>
                                <p class="mt-1 font-medium">
                                    +62 812-3456-7890
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 21s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
                                    <circle cx="12" cy="10" r="2.5"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs text-blue-200">Lokasi</p>
                                <p class="mt-1 font-medium">
                                    Indonesia
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="rounded-3xl bg-white p-7 shadow-sm ring-1 ring-slate-200/70">
                    <h3 class="font-bold text-slate-900">
                        Jam Operasional
                    </h3>

                    <div class="mt-5 space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-slate-500">Senin - Jumat</span>
                            <span class="font-medium text-slate-800">
                                08.00 - 17.00
                            </span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-slate-500">Sabtu</span>
                            <span class="font-medium text-slate-800">
                                09.00 - 15.00
                            </span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-slate-500">Minggu</span>
                            <span class="font-medium text-slate-400">
                                Tutup
                            </span>
                        </div>
                    </div>
                </div>

            </div>


            {{-- Form --}}
            <div class="lg:col-span-2">
                <div class="rounded-3xl bg-white p-7 shadow-sm ring-1 ring-slate-200/70 sm:p-9">

                    <div>
                        <h2 class="text-2xl font-bold text-slate-900">
                            Kirim Pesan
                        </h2>

                        <p class="mt-2 text-sm text-slate-500">
                            Isi formulir berikut dan tim kami akan menghubungi kamu.
                        </p>
                    </div>

                    <form class="mt-8 space-y-6">

                        <div class="grid gap-6 sm:grid-cols-2">

                            <div>
                                <label class="text-sm font-semibold text-slate-700">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    placeholder="Masukkan nama kamu"
                                    class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 text-sm outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                >
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-slate-700">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    placeholder="nama@email.com"
                                    class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 text-sm outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                >
                            </div>

                        </div>


                        <div>
                            <label class="text-sm font-semibold text-slate-700">
                                Subjek
                            </label>

                            <select
                                class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >
                                <option>Pilih subjek</option>
                                <option>Pertanyaan Umum</option>
                                <option>Forum</option>
                                <option>Seminar</option>
                                <option>Konsultasi Bisnis</option>
                                <option>Kerja Sama</option>
                                <option>Lainnya</option>
                            </select>
                        </div>


                        <div>
                            <label class="text-sm font-semibold text-slate-700">
                                Pesan
                            </label>

                            <textarea
                                rows="6"
                                placeholder="Tuliskan pesan atau pertanyaan kamu..."
                                class="mt-2 w-full resize-none rounded-xl border border-slate-200 px-4 py-3.5 text-sm outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            ></textarea>
                        </div>


                        <div class="flex items-start gap-3">
                            <input
                                type="checkbox"
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                            >

                            <p class="text-sm leading-6 text-slate-500">
                                Saya menyetujui informasi yang saya berikan digunakan
                                untuk keperluan menghubungi saya.
                            </p>
                        </div>


                        <button
                            type="button"
                            class="w-full rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700 hover:-translate-y-0.5 sm:w-auto"
                        >
                            Kirim Pesan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>


{{-- =========================================================
     FAQ MINI
========================================================= --}}
<section class="bg-white py-20">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">

        <div class="text-center">
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                Pertanyaan Umum
            </span>

            <h2 class="mt-3 text-3xl font-bold text-slate-900">
                Mungkin pertanyaanmu sudah terjawab
            </h2>
        </div>

        @php
            $faqs = [
                [
                    'question' => 'Apakah Forum Juragan gratis?',
                    'answer' => 'Ya. Kamu dapat bergabung dan mengikuti diskusi komunitas secara gratis.',
                ],
                [
                    'question' => 'Apakah semua seminar berbayar?',
                    'answer' => 'Tidak. Beberapa seminar dapat gratis dan sebagian lainnya berbayar sesuai program.',
                ],
                [
                    'question' => 'Bagaimana cara mendapatkan konsultasi bisnis?',
                    'answer' => 'Kamu dapat memilih layanan konsultasi dan mengajukan permintaan melalui halaman Konsultasi Bisnis.',
                ],
                [
                    'question' => 'Apakah saya bisa bekerja sama dengan Forum Juragan?',
                    'answer' => 'Tentu. Untuk kerja sama, silakan kirimkan pesan melalui formulir kontak.',
                ],
            ];
        @endphp

        <div class="mt-10 space-y-4">

            @foreach ($faqs as $faq)
                <details class="group rounded-2xl border border-slate-200 bg-white p-5">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5 font-semibold text-slate-900">
                        {{ $faq['question'] }}

                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-slate-100 text-slate-500 transition group-open:rotate-45">
                            +
                        </span>
                    </summary>

                    <p class="mt-4 max-w-3xl leading-7 text-slate-600">
                        {{ $faq['answer'] }}
                    </p>
                </details>
            @endforeach

        </div>

    </div>
</section>


{{-- =========================================================
     CTA CONSULTATION
========================================================= --}}
<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <div class="rounded-3xl bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-12 text-center shadow-xl shadow-blue-900/10 sm:px-12">

            <h2 class="text-3xl font-bold text-white">
                Punya masalah bisnis yang ingin dibahas?
            </h2>

            <p class="mx-auto mt-4 max-w-2xl leading-7 text-blue-100">
                Jika kamu membutuhkan pembahasan yang lebih personal,
                tim kami siap membantu melalui layanan konsultasi bisnis.
            </p>

            <a href="/konsultasi"
               class="mt-8 inline-flex rounded-xl bg-white px-6 py-3.5 text-sm font-semibold text-blue-700 transition hover:bg-blue-50">
                Konsultasi Bisnis
            </a>

        </div>

    </div>
</section>

@endsection