<footer class="border-t border-slate-200 bg-slate-950 text-white">

    {{-- =========================================================
         MAIN FOOTER
    ========================================================== --}}
    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div class="lg:col-span-1">

                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-3"
                >

                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                        <i class="bi bi-buildings-fill text-xl"></i>
                    </div>

                    <div>
                        <p class="text-base font-black tracking-tight">
                            Forum Juragan
                        </p>

                        <p class="text-[11px] font-medium text-slate-400">
                            Business Community
                        </p>
                    </div>

                </a>


                <p class="mt-5 max-w-sm text-sm leading-7 text-slate-400">
                    Komunitas bisnis untuk berbagi pengalaman, belajar,
                    membangun networking, mengikuti seminar, dan mendapatkan
                    solusi bisnis yang lebih terarah.
                </p>


                {{-- Social --}}
                <div class="mt-6 flex items-center gap-2">

                    <a
                        href="#"
                        aria-label="Instagram"
                        class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-800 bg-slate-900 text-slate-400 transition hover:border-blue-500/30 hover:bg-blue-600 hover:text-white"
                    >
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a
                        href="#"
                        aria-label="Facebook"
                        class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-800 bg-slate-900 text-slate-400 transition hover:border-blue-500/30 hover:bg-blue-600 hover:text-white"
                    >
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a
                        href="#"
                        aria-label="LinkedIn"
                        class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-800 bg-slate-900 text-slate-400 transition hover:border-blue-500/30 hover:bg-blue-600 hover:text-white"
                    >
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a
                        href="#"
                        aria-label="WhatsApp"
                        class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-800 bg-slate-900 text-slate-400 transition hover:border-emerald-500/30 hover:bg-emerald-600 hover:text-white"
                    >
                        <i class="bi bi-whatsapp"></i>
                    </a>

                </div>

            </div>


            {{-- Navigasi --}}
            <div>

                <h3 class="text-sm font-bold uppercase tracking-wider text-white">
                    Navigasi
                </h3>

                <div class="mt-5 space-y-3">

                    <a
                        href="{{ route('home') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-house-door text-xs"></i>
                        Home
                    </a>

                    <a
                        href="{{ route('forum.index') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-chat-square-text text-xs"></i>
                        Forum
                    </a>

                    <a
                        href="{{ route('seminar.index') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-easel2 text-xs"></i>
                        Seminar
                    </a>

                    <a
                        href="{{ route('consultation.create') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-briefcase text-xs"></i>
                        Konsultasi
                    </a>

                </div>

            </div>


            {{-- Komunitas --}}
            <div>

                <h3 class="text-sm font-bold uppercase tracking-wider text-white">
                    Komunitas
                </h3>

                <div class="mt-5 space-y-3">

                    <a
                        href="{{ route('forum.index') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-plus-circle text-xs"></i>
                        Mulai Diskusi
                    </a>

                    <a
                        href="{{ route('seminar.index') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-calendar-event text-xs"></i>
                        Event & Seminar
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-person-plus text-xs"></i>
                        Buat Akun
                    </a>

                    <a
                        href="{{ route('login') }}"
                        class="flex items-center gap-2 text-sm text-slate-400 transition hover:text-white"
                    >
                        <i class="bi bi-box-arrow-in-right text-xs"></i>
                        Masuk
                    </a>

                </div>

            </div>


            {{-- Kontak --}}
            <div>

                <h3 class="text-sm font-bold uppercase tracking-wider text-white">
                    Hubungi Kami
                </h3>

                <div class="mt-5 space-y-4">

                    <div class="flex items-start gap-3">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-slate-900 text-blue-400">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div>
                            <p class="text-xs text-slate-500">
                                Email
                            </p>

                            <p class="mt-1 text-sm font-medium text-slate-300">
                                info@forumjuragan.com
                            </p>
                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-slate-900 text-emerald-400">
                            <i class="bi bi-whatsapp"></i>
                        </div>

                        <div>
                            <p class="text-xs text-slate-500">
                                WhatsApp
                            </p>

                            <p class="mt-1 text-sm font-medium text-slate-300">
                                Hubungi tim Forum Juragan
                            </p>
                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-slate-900 text-violet-400">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div>
                            <p class="text-xs text-slate-500">
                                Jam Operasional
                            </p>

                            <p class="mt-1 text-sm font-medium text-slate-300">
                                Senin - Jumat
                            </p>

                            <p class="text-xs text-slate-500">
                                09.00 - 17.00 WIB
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         BOTTOM FOOTER
    ========================================================== --}}
    <div class="border-t border-slate-800">

        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-5 sm:px-6 md:flex-row md:items-center md:justify-between lg:px-8">

            <p class="text-center text-xs text-slate-500 md:text-left">
                © {{ date('Y') }} Forum Juragan. Semua hak dilindungi.
            </p>


            <div class="flex items-center justify-center gap-5">

                <a
                    href="#"
                    class="text-xs text-slate-500 transition hover:text-white"
                >
                    Privasi
                </a>

                <a
                    href="#"
                    class="text-xs text-slate-500 transition hover:text-white"
                >
                    Ketentuan
                </a>

            </div>

        </div>

    </div>

</footer>