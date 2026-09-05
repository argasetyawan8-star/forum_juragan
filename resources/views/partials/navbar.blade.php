<nav
    id="navbar"
    class="fixed inset-x-0 top-0 z-50 border-b border-transparent bg-white/80 backdrop-blur-xl transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex h-20 items-center justify-between">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="group flex items-center gap-3">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20 transition duration-300 group-hover:scale-105">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 10h8M8 14h5m-9 6 3.5-3.5A8.96 8.96 0 0 1 5 10a7 7 0 1 1 14 0c0 3.866-3.134 7-7 7H9l-5 3Z"
                        />
                    </svg>

                </div>

                <div>
                    <span class="block text-lg font-bold tracking-tight text-slate-900">
                        Forum<span class="text-blue-600">Juragan</span>
                    </span>

                    <span class="hidden text-[10px] font-medium uppercase tracking-[0.18em] text-slate-400 sm:block">
                        Komunitas Bisnis
                    </span>
                </div>

            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden items-center gap-1 lg:flex">

                <a href="{{ route('home') }}"
                   class="rounded-lg px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                    Home
                </a>

                <a href="{{ url('/forum') }}"
                   class="rounded-lg px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                    Forum
                </a>

                <a href="{{ url('/seminar') }}"
                   class="rounded-lg px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                    Seminar
                </a>

                <a href="{{ url('/konsultasi') }}"
                   class="rounded-lg px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                    Konsultasi Bisnis
                </a>

                <a href="#tentang"
                   class="rounded-lg px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                    Tentang
                </a>

                <a href="#kontak"
                   class="rounded-lg px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                    Kontak
                </a>

            </div>

            {{-- Desktop Button --}}
            <div class="hidden items-center gap-3 lg:flex">

                <a
                    href="/login"
                    class="px-4 py-2 text-sm font-semibold text-slate-700 transition hover:text-blue-600"
                >
                    Masuk
                </a>

                <a
                    href="/register"
                    class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700"
                >
                    Gabung Gratis

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13 7l5 5m0 0-5 5m5-5H6"
                        />
                    </svg>

                </a>

            </div>

            {{-- Mobile Button --}}
            <button
                id="mobileMenuButton"
                type="button"
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 lg:hidden"
            >
                <svg
                    id="menuIcon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg
                    id="closeIcon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="hidden h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </button>

        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="hidden border-t border-slate-100 py-4 lg:hidden">

            <div class="space-y-1">

                <a href="{{ route('home') }}"
                   class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Home
                </a>

                <a href="{{ url('/forum') }}"
                   class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Forum
                </a>

                <a href="{{ url('/seminar') }}"
                   class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Seminar
                </a>

                <a href="{{ url('/konsultasi') }}"
                   class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Konsultasi Bisnis
                </a>

                <a href="#tentang"
                   class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Tentang
                </a>

                <a href="#kontak"
                   class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Kontak
                </a>

            </div>

            <div class="mt-4 border-t border-slate-100 pt-4">

                <div class="flex flex-col gap-2">

                    <a
                        href="/login"
                        class="rounded-xl px-4 py-3 text-center text-sm font-semibold text-slate-700 hover:bg-slate-50"
                    >
                        Masuk
                    </a>

                    <a
                        href="/register"
                        class="rounded-xl bg-blue-600 px-4 py-3 text-center text-sm font-semibold text-white hover:bg-blue-700"
                    >
                        Gabung Gratis
                    </a>

                </div>

            </div>

        </div>

    </div>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    const mobileButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar.classList.add('border-slate-200', 'bg-white/95', 'shadow-sm');
            navbar.classList.remove('border-transparent');
        } else {
            navbar.classList.remove('border-slate-200', 'bg-white/95', 'shadow-sm');
            navbar.classList.add('border-transparent');
        }
    });

    mobileButton?.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>