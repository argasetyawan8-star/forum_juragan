@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50">

    {{-- =========================================================
        HEADER / BREADCRUMB
    ========================================================== --}}
    <section class="border-b border-slate-200 bg-white">

        <div class="mx-auto max-w-7xl px-6 py-6 lg:px-8">

            <div class="flex flex-wrap items-center gap-2 text-sm text-slate-500">

                <a
                    href="/forum"
                    class="transition hover:text-blue-600"
                >
                    Forum Juragan
                </a>

                <span>›</span>

                <a
                    href="#"
                    class="transition hover:text-blue-600"
                >
                    Manajemen Karyawan
                </a>

                <span>›</span>

                <span class="font-medium text-slate-900">
                    Detail Diskusi
                </span>

            </div>

        </div>

    </section>


    {{-- =========================================================
        MAIN CONTENT
    ========================================================== --}}
    <main class="mx-auto max-w-7xl px-6 py-10 lg:px-8">

        <div class="grid gap-8 lg:grid-cols-[1fr_320px]">

            {{-- =================================================
                THREAD CONTENT
            ================================================== --}}
            <div class="min-w-0">

                {{-- Thread --}}
                <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                    {{-- Thread Header --}}
                    <div class="border-b border-slate-100 p-6 sm:p-8">

                        {{-- Category --}}
                        <div class="flex flex-wrap items-center gap-3">

                            <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1.5 text-xs font-semibold text-blue-700">
                                Manajemen Karyawan
                            </span>

                            <span class="inline-flex items-center rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-semibold text-emerald-700">
                                Diskusi
                            </span>

                        </div>


                        {{-- Title --}}
                        <h1 class="mt-5 text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">
                            Bagaimana cara menghadapi karyawan yang performanya menurun?
                        </h1>


                        {{-- Author --}}
                        <div class="mt-6 flex flex-wrap items-center gap-4">

                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-700">
                                AR
                            </div>

                            <div>

                                <p class="font-semibold text-slate-900">
                                    Arga Setyawan
                                </p>

                                <div class="mt-0.5 flex flex-wrap items-center gap-2 text-xs text-slate-500">
                                    <span>Pemilik Usaha</span>
                                    <span>•</span>
                                    <span>2 September 2026, 14:32</span>
                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Thread Body --}}
                    <div class="p-6 sm:p-8">

                        <div class="prose prose-slate max-w-none">

                            <p class="text-base leading-8 text-slate-700">
                                Halo juragan, saya ingin meminta pendapat dari teman-teman
                                yang mungkin pernah mengalami kondisi seperti ini.
                            </p>

                            <p class="mt-5 text-base leading-8 text-slate-700">
                                Saat ini salah satu karyawan saya mengalami penurunan performa
                                dalam beberapa bulan terakhir. Pekerjaan yang sebelumnya bisa
                                diselesaikan dengan baik sekarang mulai sering terlambat dan
                                beberapa target juga tidak tercapai.
                            </p>

                            <p class="mt-5 text-base leading-8 text-slate-700">
                                Saya belum ingin langsung memberikan teguran karena saya juga
                                belum mengetahui apakah ada masalah tertentu yang sedang
                                dihadapi oleh karyawan tersebut.
                            </p>

                            <p class="mt-5 text-base leading-8 text-slate-700">
                                Menurut pengalaman juragan di sini, pendekatan seperti apa
                                yang paling baik dilakukan? Apakah sebaiknya langsung diajak
                                berbicara secara personal atau ada cara lain yang lebih efektif?
                            </p>

                        </div>


                        {{-- Tags --}}
                        <div class="mt-8 flex flex-wrap gap-2">

                            <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                #karyawan
                            </span>

                            <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                #manajemen
                            </span>

                            <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                #leadership
                            </span>

                            <span class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600">
                                #bisnis
                            </span>

                        </div>

                    </div>


                    {{-- Thread Actions --}}
                    <div class="flex flex-wrap items-center justify-between gap-4 border-t border-slate-100 bg-slate-50 px-6 py-4 sm:px-8">

                        <div class="flex flex-wrap items-center gap-5 text-sm text-slate-500">

                            <span class="flex items-center gap-2">
                                💬
                                <span>12 Balasan</span>
                            </span>

                            <span class="flex items-center gap-2">
                                👁
                                <span>245 Dilihat</span>
                            </span>

                        </div>


                        <div class="flex items-center gap-2">

                            <button
                                type="button"
                                class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-slate-500 transition hover:bg-white hover:text-red-500"
                            >
                                ♡
                                <span>Suka</span>
                            </button>

                            <button
                                type="button"
                                class="rounded-lg px-3 py-2 text-sm font-medium text-slate-500 transition hover:bg-white hover:text-blue-600"
                            >
                                ↗ Bagikan
                            </button>

                        </div>

                    </div>

                </article>


                {{-- =================================================
                    REPLIES
                ================================================== --}}
                <section class="mt-8">

                    <div class="mb-5 flex items-end justify-between gap-4">

                        <div>

                            <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                                Diskusi
                            </p>

                            <h2 class="mt-1 text-2xl font-bold text-slate-900">
                                12 Balasan
                            </h2>

                        </div>

                        <button
                            type="button"
                            class="hidden rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-medium text-slate-600 sm:block"
                        >
                            Terbaru ▾
                        </button>

                    </div>


                    <div class="space-y-4">

                        {{-- Reply 1 --}}
                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

                            <div class="flex gap-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-700">
                                    BS
                                </div>

                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <span class="font-semibold text-slate-900">
                                            Budi Santoso
                                        </span>

                                        <span class="text-xs text-slate-400">
                                            •
                                        </span>

                                        <span class="text-xs text-slate-500">
                                            1 jam yang lalu
                                        </span>

                                    </div>

                                    <p class="mt-4 text-sm leading-7 text-slate-600">
                                        Menurut pengalaman saya, sebaiknya jangan langsung
                                        mengambil kesimpulan bahwa masalahnya ada pada
                                        karyawan tersebut.
                                    </p>

                                    <p class="mt-3 text-sm leading-7 text-slate-600">
                                        Saya biasanya mengajak ngobrol secara personal terlebih
                                        dahulu. Cari tahu apakah ada kendala pekerjaan,
                                        masalah komunikasi, atau hal lain yang membuat
                                        performanya berubah.
                                    </p>

                                    <div class="mt-5 flex items-center gap-4">

                                        <button
                                            type="button"
                                            class="text-xs font-semibold text-slate-500 transition hover:text-blue-600"
                                        >
                                            ♡ Suka
                                        </button>

                                        <button
                                            type="button"
                                            class="text-xs font-semibold text-slate-500 transition hover:text-blue-600"
                                        >
                                            Balas
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </article>


                        {{-- Reply 2 --}}
                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

                            <div class="flex gap-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-violet-100 text-sm font-bold text-violet-700">
                                    DN
                                </div>

                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <span class="font-semibold text-slate-900">
                                            Deni Nugraha
                                        </span>

                                        <span class="text-xs text-slate-400">
                                            •
                                        </span>

                                        <span class="text-xs text-slate-500">
                                            45 menit yang lalu
                                        </span>

                                    </div>

                                    <p class="mt-4 text-sm leading-7 text-slate-600">
                                        Saya setuju dengan pendekatan personal. Selain itu,
                                        coba lihat kembali apakah target yang diberikan masih
                                        realistis dengan kondisi pekerjaan sekarang.
                                    </p>

                                    <div class="mt-5 flex items-center gap-4">

                                        <button
                                            type="button"
                                            class="text-xs font-semibold text-slate-500 transition hover:text-blue-600"
                                        >
                                            ♡ Suka
                                        </button>

                                        <button
                                            type="button"
                                            class="text-xs font-semibold text-slate-500 transition hover:text-blue-600"
                                        >
                                            Balas
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </article>


                        {{-- Reply 3 --}}
                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">

                            <div class="flex gap-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-100 text-sm font-bold text-amber-700">
                                    RS
                                </div>

                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <span class="font-semibold text-slate-900">
                                            Rina Sari
                                        </span>

                                        <span class="text-xs text-slate-400">
                                            •
                                        </span>

                                        <span class="text-xs text-slate-500">
                                            20 menit yang lalu
                                        </span>

                                    </div>

                                    <p class="mt-4 text-sm leading-7 text-slate-600">
                                        Kalau memungkinkan, coba lakukan evaluasi bersama
                                        secara rutin. Dengan begitu karyawan juga tahu
                                        bagian mana yang perlu diperbaiki tanpa merasa
                                        langsung disalahkan.
                                    </p>

                                    <div class="mt-5 flex items-center gap-4">

                                        <button
                                            type="button"
                                            class="text-xs font-semibold text-slate-500 transition hover:text-blue-600"
                                        >
                                            ♡ Suka
                                        </button>

                                        <button
                                            type="button"
                                            class="text-xs font-semibold text-slate-500 transition hover:text-blue-600"
                                        >
                                            Balas
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </article>


                        {{-- More Replies --}}
                        <div class="rounded-2xl border border-dashed border-slate-300 bg-white p-6 text-center">

                            <p class="text-sm text-slate-500">
                                Menampilkan 3 dari 12 balasan
                            </p>

                            <button
                                type="button"
                                class="mt-3 text-sm font-semibold text-blue-600 hover:text-blue-700"
                            >
                                Tampilkan lebih banyak balasan →
                            </button>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    REPLY FORM
                ================================================== --}}
                <section class="mt-8">

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

                        <div class="flex items-start gap-4">

                            <div class="hidden h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-700 sm:flex">
                                AR
                            </div>

                            <div class="min-w-0 flex-1">

                                <h3 class="text-lg font-bold text-slate-900">
                                    Ikut berdiskusi
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    Bagikan pendapat atau pengalaman kamu dengan juragan lainnya.
                                </p>

                            </div>

                        </div>


                        <div class="mt-6">

                            <textarea
                                rows="5"
                                placeholder="Tulis balasan kamu di sini..."
                                class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm leading-6 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                            ></textarea>

                            <div class="mt-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                                <p class="text-xs text-slate-400">
                                    Tetap sopan dan bantu sesama juragan.
                                </p>

                                <button
                                    type="button"
                                    class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700"
                                >
                                    Kirim Balasan
                                </button>

                            </div>

                        </div>

                    </div>

                </section>

            </div>


            {{-- =================================================
                SIDEBAR
            ================================================== --}}
            <aside class="space-y-6">


                {{-- Author Card --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                    <p class="text-xs font-semibold uppercase tracking-wider text-blue-600">
                        Tentang Penulis
                    </p>

                    <div class="mt-5 flex items-center gap-4">

                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-700">
                            AR
                        </div>

                        <div>

                            <h3 class="font-bold text-slate-900">
                                Arga Setyawan
                            </h3>

                            <p class="mt-1 text-xs text-slate-500">
                                Pemilik Usaha
                            </p>

                        </div>

                    </div>

                    <div class="mt-5 grid grid-cols-2 gap-3">

                        <div class="rounded-xl bg-slate-50 p-3 text-center">
                            <p class="text-lg font-bold text-slate-900">
                                18
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Thread
                            </p>
                        </div>

                        <div class="rounded-xl bg-slate-50 p-3 text-center">
                            <p class="text-lg font-bold text-slate-900">
                                124
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Balasan
                            </p>
                        </div>

                    </div>

                    <a
                        href="#"
                        class="mt-5 inline-flex w-full items-center justify-center rounded-xl border border-slate-200 px-4 py-3 text-sm font-semibold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                    >
                        Lihat Profil
                    </a>

                </div>


                {{-- Popular Discussions --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                    <div class="flex items-center justify-between">

                        <h3 class="font-bold text-slate-900">
                            Diskusi Populer
                        </h3>

                        <span class="text-lg">
                            🔥
                        </span>

                    </div>


                    <div class="mt-5 space-y-5">

                        <a
                            href="#"
                            class="group block"
                        >

                            <h4 class="text-sm font-semibold leading-6 text-slate-800 transition group-hover:text-blue-600">
                                Tips meningkatkan produktivitas karyawan
                            </h4>

                            <p class="mt-1 text-xs text-slate-400">
                                34 balasan • 582 dilihat
                            </p>

                        </a>


                        <a
                            href="#"
                            class="group block border-t border-slate-100 pt-5"
                        >

                            <h4 class="text-sm font-semibold leading-6 text-slate-800 transition group-hover:text-blue-600">
                                Cara membuat SOP yang mudah dipahami
                            </h4>

                            <p class="mt-1 text-xs text-slate-400">
                                27 balasan • 421 dilihat
                            </p>

                        </a>


                        <a
                            href="#"
                            class="group block border-t border-slate-100 pt-5"
                        >

                            <h4 class="text-sm font-semibold leading-6 text-slate-800 transition group-hover:text-blue-600">
                                Bagaimana cara menentukan gaji karyawan?
                            </h4>

                            <p class="mt-1 text-xs text-slate-400">
                                19 balasan • 367 dilihat
                            </p>

                        </a>

                    </div>

                </div>


                {{-- Consultation CTA --}}
                <div class="overflow-hidden rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700 p-6 text-white shadow-lg">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/15 text-xl">
                        💡
                    </div>

                    <h3 class="mt-5 text-lg font-bold">
                        Butuh solusi lebih spesifik?
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-blue-100">
                        Konsultasikan masalah bisnis kamu dengan tenaga profesional
                        dan dapatkan solusi yang lebih terarah.
                    </p>

                    <a
                        href="#"
                        class="mt-5 inline-flex w-full items-center justify-center rounded-xl bg-white px-4 py-3 text-sm font-semibold text-blue-700 transition hover:bg-blue-50"
                    >
                        Konsultasi Bisnis
                    </a>

                </div>

            </aside>

        </div>

    </main>

</div>

@endsection