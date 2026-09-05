@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50 pt-28 pb-16">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm text-slate-500 mb-8">
            <a href="/" class="hover:text-blue-600 transition">
                Forum Juragan
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <a href="#" class="hover:text-blue-600 transition">
                Manajemen Karyawan
            </a>

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <span class="text-slate-900 font-medium">
                Buat Diskusi
            </span>
        </div>


        {{-- Header --}}
        <div class="mb-10">

            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full
                        bg-blue-50 text-blue-700 text-sm font-semibold mb-4">

                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m-3-13a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z" />
                </svg>

                Forum Juragan
            </div>

            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                Buat Diskusi Baru
            </h1>

            <p class="mt-3 text-slate-600 max-w-2xl">
                Bagikan pertanyaan, pengalaman, atau insight bisnis kamu kepada
                komunitas juragan lainnya.
            </p>

        </div>


        <div class="grid lg:grid-cols-3 gap-8">

            {{-- Main Form --}}
            <div class="lg:col-span-2">

                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 sm:p-8">

                    <form>

                        {{-- Category --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Kategori Diskusi
                            </label>

                            <select
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5
                                       text-slate-700 outline-none transition
                                       focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10">

                                <option value="">
                                    Pilih kategori
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
                                    Motivasi & Pengembangan
                                </option>

                            </select>

                            <p class="mt-2 text-xs text-slate-500">
                                Pilih kategori yang paling sesuai dengan topik diskusi kamu.
                            </p>

                        </div>


                        {{-- Title --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Judul Diskusi
                            </label>

                            <input
                                type="text"
                                placeholder="Contoh: Bagaimana cara mengatasi karyawan yang sering terlambat?"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5
                                       text-slate-900 placeholder:text-slate-400 outline-none transition
                                       focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10">

                            <div class="flex justify-between mt-2">

                                <p class="text-xs text-slate-500">
                                    Buat judul yang jelas dan mudah dipahami.
                                </p>

                                <span class="text-xs text-slate-400">
                                    Maks. 120 karakter
                                </span>

                            </div>

                        </div>


                        {{-- Content --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Isi Diskusi
                            </label>

                            <textarea
                                rows="10"
                                placeholder="Ceritakan masalah, pengalaman, atau pertanyaan kamu secara detail..."
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5
                                       text-slate-900 placeholder:text-slate-400 outline-none transition
                                       resize-none
                                       focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"></textarea>

                            <p class="mt-2 text-xs text-slate-500">
                                Semakin detail konteks yang kamu berikan, semakin mudah anggota lain membantu.
                            </p>

                        </div>


                        {{-- Tags --}}
                        <div class="mb-8">

                            <label class="block text-sm font-semibold text-slate-900 mb-2">
                                Tag
                                <span class="font-normal text-slate-400">
                                    (Opsional)
                                </span>
                            </label>

                            <input
                                type="text"
                                placeholder="Contoh: karyawan, absensi, produktivitas"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5
                                       text-slate-900 placeholder:text-slate-400 outline-none transition
                                       focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10">

                            <p class="mt-2 text-xs text-slate-500">
                                Pisahkan beberapa tag dengan tanda koma.
                            </p>

                        </div>


                        {{-- Divider --}}
                        <div class="border-t border-slate-100 pt-6">

                            <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-4">

                                <a
                                    href="#"
                                    class="inline-flex items-center justify-center gap-2
                                           px-5 py-3 rounded-xl border border-slate-200
                                           text-slate-700 font-semibold
                                           hover:bg-slate-50 transition">

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18 18 6M6 6l12 12" />
                                    </svg>

                                    Batal
                                </a>


                                <button
                                    type="button"
                                    class="inline-flex items-center justify-center gap-2
                                           px-6 py-3 rounded-xl
                                           bg-blue-600 text-white font-semibold
                                           shadow-lg shadow-blue-600/20
                                           hover:bg-blue-700 hover:-translate-y-0.5
                                           transition duration-200">

                                    Publikasikan Diskusi

                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m9 5 7 7-7 7" />
                                    </svg>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>


            {{-- Sidebar --}}
            <div class="space-y-6">

                {{-- Tips --}}
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">

                    <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600
                                flex items-center justify-center mb-5">

                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.5 14.5 11 16l3.5-3.5M12 3a7 7 0 0 0-4 12.74V18h8v-2.26A7 7 0 0 0 12 3Z" />
                        </svg>

                    </div>

                    <h3 class="text-lg font-bold text-slate-900 mb-4">
                        Tips Membuat Diskusi
                    </h3>

                    <div class="space-y-4">

                        <div class="flex gap-3">

                            <div class="w-6 h-6 shrink-0 rounded-full bg-blue-50 text-blue-600
                                        flex items-center justify-center text-xs font-bold">
                                1
                            </div>

                            <p class="text-sm text-slate-600 leading-relaxed">
                                Gunakan judul yang spesifik dan langsung menjelaskan topik.
                            </p>

                        </div>


                        <div class="flex gap-3">

                            <div class="w-6 h-6 shrink-0 rounded-full bg-blue-50 text-blue-600
                                        flex items-center justify-center text-xs font-bold">
                                2
                            </div>

                            <p class="text-sm text-slate-600 leading-relaxed">
                                Berikan konteks yang cukup agar anggota lain memahami masalahmu.
                            </p>

                        </div>


                        <div class="flex gap-3">

                            <div class="w-6 h-6 shrink-0 rounded-full bg-blue-50 text-blue-600
                                        flex items-center justify-center text-xs font-bold">
                                3
                            </div>

                            <p class="text-sm text-slate-600 leading-relaxed">
                                Gunakan bahasa yang sopan dan mudah dipahami.
                            </p>

                        </div>


                        <div class="flex gap-3">

                            <div class="w-6 h-6 shrink-0 rounded-full bg-blue-50 text-blue-600
                                        flex items-center justify-center text-xs font-bold">
                                4
                            </div>

                            <p class="text-sm text-slate-600 leading-relaxed">
                                Hindari promosi berlebihan atau spam dalam diskusi.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Community Rules --}}
                <div class="rounded-3xl bg-slate-900 p-6 text-white">

                    <div class="flex items-center gap-3 mb-5">

                        <div class="w-10 h-10 rounded-xl bg-white/10
                                    flex items-center justify-center">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2Zm3-8V9a3 3 0 1 1 6 0v2" />
                            </svg>

                        </div>

                        <h3 class="font-bold text-lg">
                            Aturan Komunitas
                        </h3>

                    </div>

                    <ul class="space-y-3 text-sm text-slate-300">

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Saling menghargai sesama anggota.
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Bagikan informasi yang bermanfaat.
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Jangan menyebarkan spam atau informasi palsu.
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Fokus pada diskusi dan pengembangan bisnis.
                        </li>

                    </ul>

                </div>


                {{-- Help Card --}}
                <div class="bg-blue-50 rounded-3xl border border-blue-100 p-6">

                    <div class="flex items-start gap-3">

                        <div class="w-10 h-10 shrink-0 rounded-xl bg-blue-600 text-white
                                    flex items-center justify-center">

                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.228 9.247a4.75 4.75 0 1 1 7.544 0c-.69.844-1.772 1.503-2.515 2.188-.57.525-.757.938-.757 1.565m0 3h.01M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" />
                            </svg>

                        </div>

                        <div>

                            <h4 class="font-bold text-slate-900">
                                Butuh bantuan?
                            </h4>

                            <p class="mt-1 text-sm text-slate-600 leading-relaxed">
                                Kalau pertanyaanmu berkaitan dengan masalah bisnis yang lebih spesifik,
                                kamu juga bisa menggunakan layanan konsultasi bisnis.
                            </p>

                            <a
                                href="#"
                                class="inline-flex items-center gap-1.5 mt-4
                                       text-sm font-semibold text-blue-600 hover:text-blue-700 transition">

                                Lihat layanan konsultasi

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m9 5 7 7-7 7" />
                                </svg>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection