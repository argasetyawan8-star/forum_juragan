<footer id="kontak" class="border-t border-slate-200 bg-white">

    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div class="lg:col-span-2">

                <div class="flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white">
                        💬
                    </div>

                    <span class="text-xl font-bold">
                        Forum<span class="text-blue-600">Juragan</span>
                    </span>

                </div>

                <p class="mt-4 max-w-md text-sm leading-7 text-slate-500">
                    Komunitas untuk para pemilik usaha yang ingin belajar,
                    berbagi pengalaman, dan mengembangkan bisnis bersama.
                </p>

            </div>

            {{-- Navigation --}}
            <div>

                <h3 class="text-sm font-bold text-slate-900">
                    Platform
                </h3>

                <ul class="mt-4 space-y-3 text-sm text-slate-500">

                    <li>
                        <a href="/forum" class="transition hover:text-blue-600">
                            Forum
                        </a>
                    </li>

                    <li>
                        <a href="/seminar" class="transition hover:text-blue-600">
                            Seminar
                        </a>
                    </li>

                    <li>
                        <a href="/konsultasi" class="transition hover:text-blue-600">
                            Konsultasi Bisnis
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Company --}}
            <div>

                <h3 class="text-sm font-bold text-slate-900">
                    Perusahaan
                </h3>

                <ul class="mt-4 space-y-3 text-sm text-slate-500">

                    <li>
                        <a href="#tentang" class="transition hover:text-blue-600">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="#kontak" class="transition hover:text-blue-600">
                            Kontak
                        </a>
                    </li>

                    <li>
                        <a href="/login" class="transition hover:text-blue-600">
                            Login
                        </a>
                    </li>

                </ul>

            </div>

        </div>

        <div class="mt-12 border-t border-slate-100 pt-6">

            <p class="text-center text-sm text-slate-400">
                © {{ date('Y') }} Forum Juragan. Semua hak dilindungi.
            </p>

        </div>

    </div>

</footer>