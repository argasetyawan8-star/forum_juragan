@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- BREADCRUMB --}}
        <div class="flex items-center gap-2 text-sm text-slate-500 mb-8">

            <a href="/" class="hover:text-blue-600 transition">
                Home
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <a href="#" class="hover:text-blue-600 transition">
                Seminar
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <span class="text-slate-900 font-medium">
                Pendaftaran
            </span>

        </div>


        {{-- PAGE HEADER --}}
        <div class="mb-10">

            <div class="inline-flex items-center gap-2 px-3.5 py-2 rounded-full
                        bg-blue-50 border border-blue-100 text-blue-700
                        text-sm font-semibold mb-4">

                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                </svg>

                Pendaftaran Seminar
            </div>

            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                Daftar Seminar
            </h1>

            <p class="mt-3 text-slate-600 max-w-2xl">
                Lengkapi data di bawah ini untuk mengikuti seminar
                <span class="font-semibold text-slate-900">
                    Leadership untuk Pemilik Bisnis
                </span>.
            </p>

        </div>


        {{-- MAIN CONTENT --}}
        <div class="grid lg:grid-cols-3 gap-8">

            {{-- FORM --}}
            <div class="lg:col-span-2">

                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6 sm:p-8">

                    <div class="flex items-center gap-4 pb-6 border-b border-slate-100">

                        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600
                                    flex items-center justify-center">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM4 21a8 8 0 0 1 16 0" />
                            </svg>

                        </div>

                        <div>

                            <h2 class="text-xl font-bold text-slate-900">
                                Data Peserta
                            </h2>

                            <p class="text-sm text-slate-500 mt-0.5">
                                Isi data sesuai informasi yang benar.
                            </p>

                        </div>

                    </div>


                    <form class="mt-8">

                        {{-- NAMA --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Nama Lengkap
                                <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                placeholder="Masukkan nama lengkap"
                                class="w-full rounded-xl border border-slate-200
                                       bg-white px-4 py-3.5 text-slate-900
                                       placeholder:text-slate-400 outline-none
                                       transition focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-500/10">

                        </div>


                        {{-- EMAIL + PHONE --}}
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">

                            <div>

                                <label class="block text-sm font-semibold text-slate-900 mb-2">
                                    Email
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="email"
                                    placeholder="nama@email.com"
                                    class="w-full rounded-xl border border-slate-200
                                           bg-white px-4 py-3.5 text-slate-900
                                           placeholder:text-slate-400 outline-none
                                           transition focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10">

                            </div>


                            <div>

                                <label class="block text-sm font-semibold text-slate-900 mb-2">
                                    Nomor WhatsApp
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="tel"
                                    placeholder="08xxxxxxxxxx"
                                    class="w-full rounded-xl border border-slate-200
                                           bg-white px-4 py-3.5 text-slate-900
                                           placeholder:text-slate-400 outline-none
                                           transition focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10">

                            </div>

                        </div>


                        {{-- BUSINESS NAME --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Nama Usaha
                                <span class="text-slate-400 font-normal">
                                    (Opsional)
                                </span>
                            </label>

                            <input
                                type="text"
                                placeholder="Contoh: Toko Maju Jaya"
                                class="w-full rounded-xl border border-slate-200
                                       bg-white px-4 py-3.5 text-slate-900
                                       placeholder:text-slate-400 outline-none
                                       transition focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-500/10">

                        </div>


                        {{-- BUSINESS TYPE --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Bidang Usaha
                            </label>

                            <select
                                class="w-full rounded-xl border border-slate-200
                                       bg-white px-4 py-3.5 text-slate-700
                                       outline-none transition
                                       focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-500/10">

                                <option value="">
                                    Pilih bidang usaha
                                </option>

                                <option>
                                    Kuliner / F&B
                                </option>

                                <option>
                                    Fashion
                                </option>

                                <option>
                                    Retail
                                </option>

                                <option>
                                    Jasa
                                </option>

                                <option>
                                    Teknologi
                                </option>

                                <option>
                                    Pendidikan
                                </option>

                                <option>
                                    Lainnya
                                </option>

                            </select>

                        </div>


                        {{-- EXPERIENCE --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Lama Menjalankan Bisnis
                            </label>

                            <select
                                class="w-full rounded-xl border border-slate-200
                                       bg-white px-4 py-3.5 text-slate-700
                                       outline-none transition
                                       focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-500/10">

                                <option value="">
                                    Pilih pengalaman
                                </option>

                                <option>
                                    Belum memulai bisnis
                                </option>

                                <option>
                                    Kurang dari 1 tahun
                                </option>

                                <option>
                                    1 - 3 tahun
                                </option>

                                <option>
                                    3 - 5 tahun
                                </option>

                                <option>
                                    Lebih dari 5 tahun
                                </option>

                            </select>

                        </div>


                        {{-- EXPECTATION --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Apa yang Ingin Kamu Dapatkan dari Seminar Ini?
                            </label>

                            <textarea
                                rows="5"
                                placeholder="Ceritakan secara singkat..."
                                class="w-full rounded-xl border border-slate-200
                                       bg-white px-4 py-3.5 text-slate-900
                                       placeholder:text-slate-400 outline-none
                                       resize-none transition
                                       focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-500/10"></textarea>

                        </div>


                        {{-- CHECKBOX --}}
                        <div class="p-4 rounded-2xl bg-slate-50
                                    border border-slate-200">

                            <label class="flex items-start gap-3 cursor-pointer">

                                <input
                                    type="checkbox"
                                    class="mt-1 w-4 h-4 rounded border-slate-300
                                           text-blue-600 focus:ring-blue-500">

                                <span class="text-sm text-slate-600 leading-relaxed">

                                    Saya menyetujui bahwa data yang saya berikan
                                    digunakan untuk keperluan pendaftaran seminar
                                    dan komunikasi terkait event.

                                </span>

                            </label>

                        </div>


                        {{-- BUTTON --}}
                        <div class="mt-8 pt-6 border-t border-slate-100">

                            <button
                                type="button"
                                class="w-full inline-flex items-center
                                       justify-center gap-2 px-6 py-3.5
                                       rounded-xl bg-blue-600 text-white
                                       font-bold shadow-lg shadow-blue-600/20
                                       hover:bg-blue-700 hover:-translate-y-0.5
                                       transition duration-200">

                                Lanjutkan Pendaftaran

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m9 5 7 7-7 7" />
                                </svg>

                            </button>

                        </div>

                    </form>

                </div>

            </div>


            {{-- SIDEBAR --}}
            <div>

                <div class="lg:sticky lg:top-28 space-y-6">


                    {{-- EVENT SUMMARY --}}
                    <div class="bg-white rounded-3xl border border-slate-200
                                shadow-sm overflow-hidden">

                        {{-- Header --}}
                        <div class="relative h-40 bg-gradient-to-br
                                    from-blue-600 to-indigo-800 p-6">

                            <div class="absolute -right-10 -top-10 w-32 h-32
                                        rounded-full border-[25px] border-white/10"></div>

                            <div class="relative h-full flex flex-col justify-between">

                                <span class="self-start px-3 py-1.5 rounded-lg
                                             bg-white/15 text-white text-xs
                                             font-semibold backdrop-blur-sm">

                                    ONLINE
                                </span>

                                <div>

                                    <p class="text-blue-100 text-xs">
                                        Sabtu, 20 September 2026
                                    </p>

                                    <h3 class="mt-1 text-lg font-bold text-white">
                                        Leadership untuk Pemilik Bisnis
                                    </h3>

                                </div>

                            </div>

                        </div>


                        {{-- Details --}}
                        <div class="p-6">

                            <h3 class="font-bold text-slate-900">
                                Ringkasan Pendaftaran
                            </h3>


                            <div class="mt-5 space-y-4">

                                <div class="flex items-start gap-3">

                                    <div class="w-9 h-9 shrink-0 rounded-lg
                                                bg-blue-50 text-blue-600
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 1-2-2V7a2 2 0 0 1-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-500">
                                            Tanggal
                                        </p>

                                        <p class="text-sm font-semibold text-slate-900 mt-0.5">
                                            20 September 2026
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-start gap-3">

                                    <div class="w-9 h-9 shrink-0 rounded-lg
                                                bg-blue-50 text-blue-600
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-500">
                                            Waktu
                                        </p>

                                        <p class="text-sm font-semibold text-slate-900 mt-0.5">
                                            09.00 - 12.00 WIB
                                        </p>
                                    </div>

                                </div>


                                <div class="flex items-start gap-3">

                                    <div class="w-9 h-9 shrink-0 rounded-lg
                                                bg-blue-50 text-blue-600
                                                flex items-center justify-center">

                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0Z" />
                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-xs text-slate-500">
                                            Lokasi
                                        </p>

                                        <p class="text-sm font-semibold text-slate-900 mt-0.5">
                                            Zoom Meeting
                                        </p>
                                    </div>

                                </div>

                            </div>


                            {{-- PRICE --}}
                            <div class="mt-6 pt-5 border-t border-slate-100">

                                <div class="flex items-center justify-between">

                                    <span class="text-sm text-slate-500">
                                        Biaya Pendaftaran
                                    </span>

                                    <span class="text-lg font-bold text-slate-900">
                                        Rp150.000
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- BENEFITS --}}
                    <div class="bg-white rounded-3xl border border-slate-200
                                shadow-sm p-6">

                        <h3 class="font-bold text-slate-900">
                            Yang Kamu Dapatkan
                        </h3>

                        <div class="mt-5 space-y-4">

                            <div class="flex gap-3">

                                <div class="w-8 h-8 shrink-0 rounded-lg
                                            bg-emerald-50 text-emerald-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <span class="text-sm text-slate-600">
                                    Materi seminar
                                </span>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-8 h-8 shrink-0 rounded-lg
                                            bg-emerald-50 text-emerald-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <span class="text-sm text-slate-600">
                                    Sertifikat peserta
                                </span>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-8 h-8 shrink-0 rounded-lg
                                            bg-emerald-50 text-emerald-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <span class="text-sm text-slate-600">
                                    Networking dengan peserta lain
                                </span>

                            </div>


                            <div class="flex gap-3">

                                <div class="w-8 h-8 shrink-0 rounded-lg
                                            bg-emerald-50 text-emerald-600
                                            flex items-center justify-center">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m5 12 5 5L20 7" />
                                    </svg>

                                </div>

                                <span class="text-sm text-slate-600">
                                    Akses komunitas Forum Juragan
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- SECURE INFO --}}
                    <div class="rounded-3xl bg-slate-900 p-6 text-white">

                        <div class="flex gap-3">

                            <div class="w-10 h-10 shrink-0 rounded-xl
                                        bg-white/10 flex items-center justify-center">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2Zm3-8V9a3 3 0 1 1 6 0v2" />
                                </svg>

                            </div>

                            <div>

                                <h4 class="font-bold">
                                    Data Kamu Aman
                                </h4>

                                <p class="mt-1 text-sm text-slate-300 leading-relaxed">
                                    Informasi yang kamu berikan hanya digunakan
                                    untuk keperluan pendaftaran dan komunikasi
                                    terkait seminar.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection