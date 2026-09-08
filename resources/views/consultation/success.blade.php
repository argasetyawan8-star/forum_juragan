@extends('layouts.landing')

@section('content')

<div class="min-h-screen bg-slate-50 px-4 py-12 sm:py-16">

    <div class="mx-auto w-full max-w-2xl">

        {{-- =================================================
             SUCCESS CARD
        ================================================== --}}
        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl">


            {{-- =================================================
                 HEADER
            ================================================== --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-blue-700 px-6 py-12 text-center text-white sm:px-10">

                {{-- Decoration --}}
                <div class="pointer-events-none absolute -right-20 -top-20 h-48 w-48 rounded-full bg-white/10 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-24 -left-20 h-56 w-56 rounded-full bg-emerald-400/10 blur-3xl"></div>


                <div class="relative">

                    {{-- Success Icon --}}
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-white/10 ring-8 ring-white/10">

                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white text-blue-600">

                            <i class="bi bi-check-lg text-3xl"></i>

                        </div>

                    </div>


                    {{-- Badge --}}
                    <div class="mt-7 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-sm font-semibold backdrop-blur-sm">

                        <i class="bi bi-check-circle-fill text-emerald-300"></i>

                        Pengajuan Berhasil

                    </div>


                    {{-- Heading --}}
                    <h1 class="mt-5 text-3xl font-black tracking-tight sm:text-4xl">
                        Konsultasi Berhasil Diajukan!
                    </h1>


                    <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-blue-100 sm:text-base">
                        Terima kasih sudah menghubungi Forum Juragan.
                        Data konsultasi kamu sudah kami terima dan akan segera
                        ditindaklanjuti oleh tim kami.
                    </p>

                </div>

            </div>


            {{-- =================================================
                 CONTENT
            ================================================== --}}
            <div class="px-5 py-7 sm:px-10 sm:py-10">


                {{-- Status --}}
                <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-5">

                    <div class="flex items-start gap-4">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">

                            <i class="bi bi-check-circle-fill"></i>

                        </div>


                        <div>

                            <h2 class="font-black text-slate-900">
                                Pengajuan sedang diproses
                            </h2>

                            <p class="mt-1.5 text-sm leading-6 text-slate-600">
                                Tim kami akan menghubungi kamu melalui WhatsApp
                                atau email untuk membahas kebutuhan konsultasi
                                dan menentukan jadwal yang sesuai.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     NEXT STEPS
                ================================================== --}}
                <div class="mt-9">

                    <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                        Langkah Selanjutnya
                    </p>

                    <h3 class="mt-1 text-xl font-black text-slate-900">
                        Apa yang terjadi setelah ini?
                    </h3>


                    <div class="mt-6">

                        {{-- Step 1 --}}
                        <div class="relative flex gap-4">

                            <div class="relative">

                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-black text-white">
                                    1
                                </div>

                                <div class="absolute left-1/2 top-9 h-14 w-px -translate-x-1/2 bg-slate-200"></div>

                            </div>


                            <div class="pb-7">

                                <h4 class="font-bold text-slate-900">
                                    Tim menerima pengajuan
                                </h4>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Data kebutuhan konsultasi kamu akan kami review
                                    terlebih dahulu.
                                </p>

                            </div>

                        </div>


                        {{-- Step 2 --}}
                        <div class="relative flex gap-4">

                            <div class="relative">

                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-black text-white">
                                    2
                                </div>

                                <div class="absolute left-1/2 top-9 h-14 w-px -translate-x-1/2 bg-slate-200"></div>

                            </div>


                            <div class="pb-7">

                                <h4 class="font-bold text-slate-900">
                                    Tim menghubungi kamu
                                </h4>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Kami akan menghubungi melalui kontak yang
                                    kamu cantumkan pada formulir.
                                </p>

                            </div>

                        </div>


                        {{-- Step 3 --}}
                        <div class="flex gap-4">

                            <div>

                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-black text-white">
                                    <i class="bi bi-check-lg"></i>
                                </div>

                            </div>


                            <div>

                                <h4 class="font-bold text-slate-900">
                                    Jadwal konsultasi ditentukan
                                </h4>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Setelah kebutuhan dan waktu disepakati,
                                    konsultasi dapat dijadwalkan.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     CONTACT NOTE
                ================================================== --}}
                <div class="mt-9 rounded-2xl border border-slate-200 bg-slate-50 p-5">

                    <div class="flex items-start gap-4">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-blue-600 shadow-sm">

                            <i class="bi bi-info-circle-fill"></i>

                        </div>


                        <div>

                            <h3 class="font-bold text-slate-900">
                                Pastikan kontak kamu aktif
                            </h3>

                            <p class="mt-1.5 text-sm leading-6 text-slate-500">
                                Pastikan nomor WhatsApp dan email yang kamu
                                masukkan masih aktif agar tim kami dapat
                                menghubungi kamu dengan mudah.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     ACTIONS
                ================================================== --}}
                <div class="mt-9 grid gap-3 sm:grid-cols-2">

                    <a
                        href="{{ route('home') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
                    >

                        <i class="bi bi-house-door-fill"></i>

                        Kembali ke Beranda

                    </a>


                    <a
                        href="{{ route('consultation.create') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3.5 text-sm font-bold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                    >

                        <i class="bi bi-plus-lg"></i>

                        Ajukan Konsultasi Lain

                    </a>

                </div>

            </div>

        </div>


        {{-- Footer --}}
        <p class="mt-6 text-center text-xs text-slate-400">
            Forum Juragan — Teman Bertumbuh untuk Pemilik Bisnis
        </p>

    </div>

</div>

@endsection