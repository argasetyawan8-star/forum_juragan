@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

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
                Konsultasi Bisnis
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m9 5 7 7-7 7" />
            </svg>

            <span class="text-slate-900 font-medium">
                Booking Konsultasi
            </span>

        </div>


        {{-- HEADER --}}
        <div class="max-w-3xl mb-10">

            <div class="inline-flex items-center gap-2 px-3.5 py-2 rounded-full
                        bg-blue-50 border border-blue-100
                        text-blue-700 text-sm font-semibold mb-4">

                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 1-2-2V7a2 2 0 0 1-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                </svg>

                Booking Konsultasi

            </div>

            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                Ceritakan Kebutuhan Bisnis Kamu
            </h1>

            <p class="mt-3 text-slate-600 leading-relaxed">
                Isi formulir berikut agar kami dapat memahami kondisi
                bisnis dan mempersiapkan sesi konsultasi yang sesuai.
            </p>

        </div>


        {{-- MAIN GRID --}}
        <div class="grid lg:grid-cols-3 gap-8">


            {{-- FORM --}}
            <div class="lg:col-span-2">

                <div class="bg-white rounded-3xl border border-slate-200
                            shadow-sm p-6 sm:p-8">

                    {{-- SECTION TITLE --}}
                    <div class="flex items-center gap-4 pb-6
                                border-b border-slate-100">

                        <div class="w-11 h-11 rounded-xl bg-blue-50
                                    text-blue-600 flex items-center justify-center">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM4 21a8 8 0 0 1 16 0" />
                            </svg>

                        </div>

                        <div>

                            <h2 class="text-xl font-bold text-slate-900">
                                Informasi Kontak
                            </h2>

                            <p class="text-sm text-slate-500 mt-0.5">
                                Data ini digunakan untuk menghubungi kamu.
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
                                       bg-white px-4 py-3.5
                                       text-slate-900
                                       placeholder:text-slate-400
                                       outline-none transition
                                       focus:border-blue-500
                                       focus:ring-4 focus:ring-blue-500/10">

                        </div>


                        {{-- EMAIL + WHATSAPP --}}
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
                                           bg-white px-4 py-3.5
                                           text-slate-900
                                           placeholder:text-slate-400
                                           outline-none transition
                                           focus:border-blue-500
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
                                           bg-white px-4 py-3.5
                                           text-slate-900
                                           placeholder:text-slate-400
                                           outline-none transition
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10">

                            </div>

                        </div>


                        {{-- BUSINESS --}}
                        <div class="pt-6 border-t border-slate-100">

                            <div class="flex items-center gap-4 mb-7">

                                <div class="w-11 h-11 rounded-xl bg-emerald-50
                                            text-emerald-600 flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M9 9h.01M15 9h.01M9 12h.01M15 12h.01" />
                                    </svg>

                                </div>

                                <div>

                                    <h2 class="text-xl font-bold text-slate-900">
                                        Informasi Bisnis
                                    </h2>

                                    <p class="text-sm text-slate-500 mt-0.5">
                                        Bantu kami memahami bisnis kamu.
                                    </p>

                                </div>

                            </div>


                            {{-- BUSINESS NAME --}}
                            <div class="mb-6">

                                <label class="block text-sm font-semibold text-slate-900 mb-2">

                                    Nama Usaha

                                    <span class="text-red-500">*</span>

                                </label>

                                <input
                                    type="text"
                                    placeholder="Contoh: Toko Maju Jaya"
                                    class="w-full rounded-xl border border-slate-200
                                           bg-white px-4 py-3.5
                                           text-slate-900
                                           placeholder:text-slate-400
                                           outline-none transition
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10">

                            </div>


                            {{-- BUSINESS TYPE + DURATION --}}
                            <div class="grid sm:grid-cols-2 gap-6 mb-6">

                                <div>

                                    <label class="block text-sm font-semibold text-slate-900 mb-2">
                                        Bidang Usaha
                                    </label>

                                    <select
                                        class="w-full rounded-xl border border-slate-200
                                               bg-white px-4 py-3.5
                                               text-slate-700
                                               outline-none transition
                                               focus:border-blue-500
                                               focus:ring-4 focus:ring-blue-500/10">

                                        <option value="">
                                            Pilih bidang usaha
                                        </option>

                                        <option>Kuliner / F&B</option>
                                        <option>Fashion</option>
                                        <option>Retail</option>
                                        <option>Jasa</option>
                                        <option>Teknologi</option>
                                        <option>Pendidikan</option>
                                        <option>Manufaktur</option>
                                        <option>Lainnya</option>

                                    </select>

                                </div>


                                <div>

                                    <label class="block text-sm font-semibold text-slate-900 mb-2">
                                        Lama Bisnis Berjalan
                                    </label>

                                    <select
                                        class="w-full rounded-xl border border-slate-200
                                               bg-white px-4 py-3.5
                                               text-slate-700
                                               outline-none transition
                                               focus:border-blue-500
                                               focus:ring-4 focus:ring-blue-500/10">

                                        <option value="">
                                            Pilih durasi
                                        </option>

                                        <option>Belum memulai</option>
                                        <option>Kurang dari 1 tahun</option>
                                        <option>1 - 3 tahun</option>
                                        <option>3 - 5 tahun</option>
                                        <option>Lebih dari 5 tahun</option>

                                    </select>

                                </div>

                            </div>


                            {{-- TEAM SIZE --}}
                            <div class="mb-6">

                                <label class="block text-sm font-semibold text-slate-900 mb-2">
                                    Jumlah Karyawan
                                </label>

                                <select
                                    class="w-full rounded-xl border border-slate-200
                                           bg-white px-4 py-3.5
                                           text-slate-700
                                           outline-none transition
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10">

                                    <option value="">
                                        Pilih jumlah karyawan
                                    </option>

                                    <option>Belum memiliki karyawan</option>
                                    <option>1 - 5 orang</option>
                                    <option>6 - 10 orang</option>
                                    <option>11 - 25 orang</option>
                                    <option>26 - 50 orang</option>
                                    <option>Lebih dari 50 orang</option>

                                </select>

                            </div>

                        </div>


                        {{-- PROBLEM --}}
                        <div class="pt-6 border-t border-slate-100">

                            <div class="flex items-center gap-4 mb-7">

                                <div class="w-11 h-11 rounded-xl bg-indigo-50
                                            text-indigo-600 flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                    </svg>

                                </div>

                                <div>

                                    <h2 class="text-xl font-bold text-slate-900">
                                        Masalah Bisnis
                                    </h2>

                                    <p class="text-sm text-slate-500 mt-0.5">
                                        Ceritakan hal yang ingin kamu diskusikan.
                                    </p>

                                </div>

                            </div>


                            {{-- TOPIC --}}
                            <div class="mb-6">

                                <label class="block text-sm font-semibold text-slate-900 mb-2">

                                    Topik Utama Konsultasi

                                    <span class="text-red-500">*</span>

                                </label>

                                <select
                                    class="w-full rounded-xl border border-slate-200
                                           bg-white px-4 py-3.5
                                           text-slate-700
                                           outline-none transition
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10">

                                    <option value="">
                                        Pilih topik konsultasi
                                    </option>

                                    <option>
                                        Manajemen Karyawan
                                    </option>

                                    <option>
                                        Rekrutmen
                                    </option>

                                    <option>
                                        Payroll & Gaji
                                    </option>

                                    <option>
                                        SOP & Operasional
                                    </option>

                                    <option>
                                        Kepemimpinan
                                    </option>

                                    <option>
                                        Produktivitas Bisnis
                                    </option>

                                    <option>
                                        Strategi & Pertumbuhan
                                    </option>

                                    <option>
                                        Masalah Lainnya
                                    </option>

                                </select>

                            </div>


                            {{-- DESCRIPTION --}}
                            <div class="mb-6">

                                <label class="block text-sm font-semibold text-slate-900 mb-2">

                                    Ceritakan Masalah Bisnis Kamu

                                    <span class="text-red-500">*</span>

                                </label>

                                <textarea
                                    rows="6"
                                    placeholder="Contoh: Saya memiliki 8 karyawan, tetapi produktivitas tim menurun dalam beberapa bulan terakhir. Saya ingin mengetahui bagaimana cara meningkatkan kedisiplinan dan produktivitas mereka..."
                                    class="w-full rounded-xl border border-slate-200
                                           bg-white px-4 py-3.5
                                           text-slate-900
                                           placeholder:text-slate-400
                                           outline-none resize-none transition
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10"></textarea>

                                <p class="mt-2 text-xs text-slate-400">
                                    Semakin detail informasi yang kamu berikan,
                                    semakin mudah konsultan memahami kondisi bisnis kamu.
                                </p>

                            </div>


                            {{-- GOAL --}}
                            <div>

                                <label class="block text-sm font-semibold text-slate-900 mb-2">

                                    Apa yang Ingin Kamu Capai?

                                </label>

                                <textarea
                                    rows="4"
                                    placeholder="Ceritakan hasil yang ingin kamu capai setelah konsultasi..."
                                    class="w-full rounded-xl border border-slate-200
                                           bg-white px-4 py-3.5
                                           text-slate-900
                                           placeholder:text-slate-400
                                           outline-none resize-none transition
                                           focus:border-blue-500
                                           focus:ring-4 focus:ring-blue-500/10"></textarea>

                            </div>

                        </div>


                        {{-- SCHEDULE --}}
                        <div class="pt-6 mt-6 border-t border-slate-100">

                            <div class="flex items-center gap-4 mb-7">

                                <div class="w-11 h-11 rounded-xl bg-blue-50
                                            text-blue-600 flex items-center justify-center">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" />
                                    </svg>

                                </div>

                                <div>

                                    <h2 class="text-xl font-bold text-slate-900">
                                        Jadwal Konsultasi
                                    </h2>

                                    <p class="text-sm text-slate-500 mt-0.5">
                                        Pilih waktu yang paling nyaman untuk kamu.
                                    </p>

                                </div>

                            </div>


                            <div class="grid sm:grid-cols-2 gap-6">

                                <div>

                                    <label class="block text-sm font-semibold text-slate-900 mb-2">
                                        Tanggal Pilihan
                                    </label>

                                    <input
                                        type="date"
                                        class="w-full rounded-xl border border-slate-200
                                               bg-white px-4 py-3.5
                                               text-slate-700
                                               outline-none transition
                                               focus:border-blue-500
                                               focus:ring-4 focus:ring-blue-500/10">

                                </div>


                                <div>

                                    <label class="block text-sm font-semibold text-slate-900 mb-2">
                                        Waktu Pilihan
                                    </label>

                                    <select
                                        class="w-full rounded-xl border border-slate-200
                                               bg-white px-4 py-3.5
                                               text-slate-700
                                               outline-none transition
                                               focus:border-blue-500
                                               focus:ring-4 focus:ring-blue-500/10">

                                        <option value="">
                                            Pilih waktu
                                        </option>

                                        <option>09.00 - 10.00 WIB</option>
                                        <option>10.00 - 11.00 WIB</option>
                                        <option>13.00 - 14.00 WIB</option>
                                        <option>14.00 - 15.00 WIB</option>
                                        <option>16.00 - 17.00 WIB</option>
                                        <option>19.00 - 20.00 WIB</option>

                                    </select>

                                </div>

                            </div>


                            <div class="mt-6 p-4 rounded-2xl bg-amber-50
                                        border border-amber-100">

                                <div class="flex items-start gap-3">

                                    <svg class="w-5 h-5 shrink-0 text-amber-600 mt-0.5"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 9v4m0 4h.01M10.3 3.8 2.7 17a2 2 0 0 0 1.7 3h15.2a2 2 0 0 0 1.7-3L13.7 3.8a2 2 0 0 0-3.4 0Z" />

                                    </svg>

                                    <p class="text-sm text-amber-800 leading-relaxed">
                                        Jadwal yang kamu pilih merupakan preferensi.
                                        Tim kami akan menghubungi kamu untuk
                                        mengonfirmasi ketersediaan jadwal.
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- AGREEMENT --}}
                        <div class="mt-8 p-4 rounded-2xl bg-slate-50
                                    border border-slate-200">

                            <label class="flex items-start gap-3 cursor-pointer">

                                <input
                                    type="checkbox"
                                    class="mt-1 w-4 h-4 rounded border-slate-300
                                           text-blue-600 focus:ring-blue-500">

                                <span class="text-sm text-slate-600 leading-relaxed">

                                    Saya menyetujui bahwa data yang saya berikan
                                    dapat digunakan untuk keperluan konsultasi,
                                    komunikasi, dan proses pemesanan layanan
                                    Forum Juragan.

                                </span>

                            </label>

                        </div>


                        {{-- BUTTON --}}
                        <div class="mt-8 pt-6 border-t border-slate-100">

                            <button
                                type="button"
                                class="w-full inline-flex items-center justify-center
                                       gap-2 px-6 py-3.5 rounded-xl
                                       bg-blue-600 text-white font-bold
                                       shadow-lg shadow-blue-600/20
                                       hover:bg-blue-700
                                       hover:-translate-y-0.5
                                       transition duration-200">

                                Ajukan Konsultasi

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="m9 5 7 7-7 7" />
                                </svg>

                            </button>

                            <p class="text-center text-xs text-slate-400 mt-3">
                                Tim kami akan menghubungi kamu setelah permintaan diterima.
                            </p>

                        </div>

                    </form>

                </div>

            </div>


            {{-- SIDEBAR --}}
            <div>

                <div class="lg:sticky lg:top-28 space-y-6">


                    {{-- PACKAGE --}}
                    <div class="bg-white rounded-3xl border border-slate-200
                                shadow-sm overflow-hidden">

                        <div class="bg-gradient-to-br from-blue-600 to-indigo-700
                                    p-6 text-white">

                            <div class="flex items-center justify-between">

                                <span class="px-3 py-1.5 rounded-lg
                                             bg-white/15 text-xs font-bold">

                                    PAKET DIPILIH

                                </span>

                                <svg class="w-6 h-6 text-blue-100"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7Z" />

                                </svg>

                            </div>

                            <h3 class="mt-5 text-xl font-bold">
                                Konsultasi Professional
                            </h3>

                            <p class="mt-2 text-sm text-blue-100">
                                Pendampingan lebih mendalam untuk masalah bisnis kamu.
                            </p>

                        </div>


                        <div class="p-6">

                            <div class="flex items-end gap-2">

                                <span class="text-3xl font-bold text-slate-900">
                                    Rp350.000
                                </span>

                                <span class="text-sm text-slate-500 pb-1">
                                    / sesi
                                </span>

                            </div>


                            <div class="mt-6 space-y-4">

                                <div class="flex items-center gap-3">

                                    <div class="w-8 h-8 rounded-lg bg-emerald-50
                                                text-emerald-600 flex items-center justify-center">

                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="m5 12 5 5L20 7" />
                                        </svg>

                                    </div>

                                    <span class="text-sm text-slate-600">
                                        Sesi konsultasi 120 menit
                                    </span>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-8 h-8 rounded-lg bg-emerald-50
                                                text-emerald-600 flex items-center justify-center">

                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="m5 12 5 5L20 7" />
                                        </svg>

                                    </div>

                                    <span class="text-sm text-slate-600">
                                        Analisis masalah bisnis
                                    </span>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-8 h-8 rounded-lg bg-emerald-50
                                                text-emerald-600 flex items-center justify-center">

                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="m5 12 5 5L20 7" />
                                        </svg>

                                    </div>

                                    <span class="text-sm text-slate-600">
                                        Rekomendasi strategi
                                    </span>

                                </div>


                                <div class="flex items-center gap-3">

                                    <div class="w-8 h-8 rounded-lg bg-emerald-50
                                                text-emerald-600 flex items-center justify-center">

                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="m5 12 5 5L20 7" />
                                        </svg>

                                    </div>

                                    <span class="text-sm text-slate-600">
                                        Action plan
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- HELP --}}
                    <div class="bg-slate-900 rounded-3xl p-6 text-white">

                        <div class="w-11 h-11 rounded-xl bg-white/10
                                    flex items-center justify-center">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 10h8M8 14h5m7-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                            </svg>

                        </div>

                        <h3 class="mt-5 text-lg font-bold">
                            Masih Bingung?
                        </h3>

                        <p class="mt-2 text-sm text-slate-300 leading-relaxed">
                            Tidak yakin paket mana yang cocok?
                            Tidak masalah. Ceritakan kebutuhan bisnis kamu
                            dan tim kami akan membantu mengarahkan.
                        </p>

                        <a href="#"
                           class="mt-5 inline-flex items-center gap-2
                                  text-sm font-semibold text-emerald-300
                                  hover:text-emerald-200 transition">

                            Hubungi Tim Kami

                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="m9 5 7 7-7 7" />
                            </svg>

                        </a>

                    </div>


                    {{-- SECURITY --}}
                    <div class="flex items-start gap-3 px-2">

                        <svg class="w-5 h-5 shrink-0 text-emerald-500 mt-0.5"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12.75 11.25 15 15 9.75M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9Z" />

                        </svg>

                        <p class="text-xs text-slate-500 leading-relaxed">
                            Data kamu akan dijaga dan hanya digunakan
                            untuk kebutuhan layanan konsultasi.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection