@php
    $isHome = request()->routeIs('home');
    $isForum = request()->routeIs('forum.*');
    $isSeminar = request()->routeIs('seminar.*');
    $isConsultation = request()->routeIs('consultation.*');

    $unreadNotifications = collect();

    if (auth()->check()) {
        $unreadNotifications = auth()->user()
            ->unreadNotifications()
            ->latest()
            ->take(10)
            ->get();
    }
@endphp

<nav
    x-data="{
        open: false,
        profileOpen: false,
        notificationsOpen: false,
        scrolled: false
    }"
    x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 10;
        });
    "
    :class="
        scrolled
            ? 'bg-white/95 shadow-sm backdrop-blur-xl border-b border-slate-200/80'
            : 'bg-white/90 backdrop-blur-md'
    "
    class="fixed inset-x-0 top-0 z-50 border-b border-transparent transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- =====================================================
             MAIN NAVBAR
        ====================================================== --}}
        <div class="flex h-20 items-center justify-between">

            {{-- =================================================
                 LOGO
            ================================================== --}}
            <a
                href="{{ route('home') }}"
                class="group flex shrink-0 items-center gap-3"
            >
                <img
                    src="{{ asset('asset/image/logo.png') }}"
                    alt="Rembug Bos"
                    class="h-20 w-30 rounded-2xl object-cover transition duration-300 group-hover:scale-105"
                >
            </a>


            {{-- =================================================
                 DESKTOP MENU
            ================================================== --}}
            <div class="hidden items-center gap-1 lg:flex">

                {{-- HOME --}}
                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-semibold transition
                        {{ $isHome
                            ? 'bg-blue-50 text-blue-600'
                            : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}"
                >
                    <i class="bi bi-house-door-fill"></i>
                    Home
                </a>


                {{-- FORUM --}}
                <a
                    href="{{ route('forum.index') }}"
                    class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-semibold transition
                        {{ $isForum
                            ? 'bg-blue-50 text-blue-600'
                            : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}"
                >
                    <i class="bi bi-chat-square-text-fill"></i>
                    Forum
                </a>


                {{-- SEMINAR --}}
                <a
                    href="{{ route('seminar.index') }}"
                    class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-semibold transition
                        {{ $isSeminar
                            ? 'bg-emerald-50 text-emerald-600'
                            : 'text-slate-600 hover:bg-slate-50 hover:text-emerald-600' }}"
                >
                    <i class="bi bi-easel2-fill"></i>
                    Seminar
                </a>


                {{-- KONSULTASI --}}
                <a
                    href="{{ route('consultation.create') }}"
                    class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-semibold transition
                        {{ $isConsultation
                            ? 'bg-violet-50 text-violet-600'
                            : 'text-slate-600 hover:bg-slate-50 hover:text-violet-600' }}"
                >
                    <i class="bi bi-briefcase-fill"></i>
                    Konsultasi
                </a>

            </div>


            {{-- =================================================
                 RIGHT DESKTOP
            ================================================== --}}
            <div class="hidden items-center gap-3 lg:flex">

                @auth

                    {{-- =================================================
                         NOTIFICATION
                    ================================================== --}}
                    <div class="relative">

                        <button
                            type="button"
                            @click="
                                notificationsOpen = !notificationsOpen;
                                profileOpen = false;
                            "
                            class="relative flex h-10 w-10 items-center justify-center rounded-xl text-slate-600 transition hover:bg-slate-100"
                            aria-label="Notifikasi"
                            :aria-expanded="notificationsOpen.toString()"
                        >

                            <i class="bi bi-bell text-lg"></i>

                            @if ($unreadNotifications->count() > 0)

                                <span
                                    class="absolute right-1 top-1 flex h-4 min-w-4 items-center justify-center rounded-full bg-red-500 px-1 text-[9px] font-bold text-white"
                                >
                                    {{ $unreadNotifications->count() > 9 ? '9+' : $unreadNotifications->count() }}
                                </span>

                            @endif

                        </button>


                        {{-- Notification Dropdown --}}
                        <div
                            x-cloak
                            x-show="notificationsOpen"
                            @click.outside="notificationsOpen = false"
                            x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 translate-y-1 scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                            x-transition:leave-end="opacity-0 translate-y-1 scale-95"
                            class="absolute right-0 z-50 mt-3 w-80 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl"
                        >

                            {{-- Header --}}
                            <div class="flex items-center justify-between border-b border-slate-100 px-4 py-3">

                                <div>
                                    <h3 class="text-sm font-bold text-slate-900">
                                        Notifikasi
                                    </h3>

                                    <p class="text-xs text-slate-400">
                                        Aktivitas terbaru kamu
                                    </p>
                                </div>

                                @if ($unreadNotifications->count() > 0)

                                    <span
                                        class="rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-600"
                                    >
                                        {{ $unreadNotifications->count() }} baru
                                    </span>

                                @endif

                            </div>


                            {{-- List --}}
                            <div class="max-h-96 overflow-y-auto">

                                @forelse ($unreadNotifications as $notification)

                                    <form
                                        method="POST"
                                        action="{{ route('notifications.read', $notification->id) }}"
                                    >
                                        @csrf

                                        <button
                                            type="submit"
                                            class="flex w-full gap-3 border-b border-slate-100 px-4 py-4 text-left transition hover:bg-slate-50"
                                        >

                                            <div
                                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600"
                                            >
                                                <i class="bi bi-reply-fill"></i>
                                            </div>


                                            <div class="min-w-0 flex-1">

                                                <p class="text-sm leading-5 text-slate-700">

                                                    <span class="font-semibold text-slate-900">
                                                        {{ $notification->data['actor_name'] ?? 'Seseorang' }}
                                                    </span>

                                                    {{ $notification->data['message'] ?? 'melakukan aktivitas pada diskusi kamu.' }}

                                                </p>


                                                <p class="mt-1 truncate text-xs font-medium text-blue-600">
                                                    {{ $notification->data['thread_title'] ?? 'Diskusi Forum' }}
                                                </p>


                                                <p class="mt-1 text-xs text-slate-400">
                                                    {{ $notification->created_at->diffForHumans() }}
                                                </p>

                                            </div>


                                            <span
                                                class="mt-2 h-2 w-2 shrink-0 rounded-full bg-blue-600"
                                            ></span>

                                        </button>

                                    </form>

                                @empty

                                    <div class="px-5 py-10 text-center">

                                        <div
                                            class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-400"
                                        >
                                            <i class="bi bi-bell-slash"></i>
                                        </div>

                                        <p class="mt-3 text-sm font-medium text-slate-700">
                                            Belum ada notifikasi
                                        </p>

                                        <p class="mt-1 text-xs text-slate-400">
                                            Notifikasi aktivitas forum akan muncul di sini.
                                        </p>

                                    </div>

                                @endforelse

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         PROFILE DESKTOP
                    ================================================== --}}
                    <div class="relative">

                        <button
                            type="button"
                            @click="
                                profileOpen = !profileOpen;
                                notificationsOpen = false;
                            "
                            class="inline-flex items-center gap-3 rounded-xl border border-slate-200 bg-white px-3 py-2 transition hover:border-blue-200 hover:bg-slate-50"
                            :aria-expanded="profileOpen.toString()"
                            aria-label="Menu profil"
                        >

                            {{-- Avatar --}}
                            @if (auth()->user()->avatar)

                                <div class="h-9 w-9 overflow-hidden rounded-xl">

                                    <img
                                        src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                        alt="Foto profil {{ auth()->user()->name }}"
                                        class="h-full w-full object-cover"
                                    >

                                </div>

                            @else

                                <div
                                    class="flex h-9 w-9 items-center justify-center rounded-xl bg-blue-100 text-sm font-black text-blue-700"
                                >
                                    {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                                </div>

                            @endif


                            {{-- Name --}}
                            <div class="hidden text-left xl:block">

                                <p class="max-w-[120px] truncate text-xs font-bold text-slate-900">
                                    {{ auth()->user()->name }}
                                </p>

                                <p class="text-[11px] text-slate-400">
                                    {{ auth()->user()->isAdmin() ? 'Administrator' : 'Member' }}
                                </p>

                            </div>


                            {{-- Arrow --}}
                            <i
                                class="bi bi-chevron-down text-xs text-slate-400 transition"
                                :class="profileOpen ? 'rotate-180' : ''"
                            ></i>

                        </button>


                        {{-- Profile Dropdown --}}
                        <div
                            x-cloak
                            x-show="profileOpen"
                            @click.outside="profileOpen = false"
                            x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 translate-y-1 scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                            x-transition:leave-end="opacity-0 translate-y-1 scale-95"
                            class="absolute right-0 mt-2 w-64 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl"
                        >

                            {{-- User Header --}}
                            <div class="border-b border-slate-100 bg-slate-50 px-4 py-4">

                                <p class="truncate text-sm font-bold text-slate-900">
                                    {{ auth()->user()->name }}
                                </p>

                                <p class="mt-1 truncate text-xs text-slate-500">
                                    {{ auth()->user()->email }}
                                </p>


                                @if (auth()->user()->isAdmin())

                                    <span
                                        class="mt-2 inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-600"
                                    >
                                        <i class="bi bi-shield-check"></i>
                                        Administrator
                                    </span>

                                @else

                                    <span
                                        class="mt-2 inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-bold text-slate-500"
                                    >
                                        <i class="bi bi-person"></i>
                                        Member
                                    </span>

                                @endif

                            </div>


                            {{-- Menu --}}
                            <div class="p-2">

                                {{-- Profile --}}
                                <a
                                    href="{{ route('profile.edit') }}"
                                    @click="profileOpen = false"
                                    class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-blue-50 hover:text-blue-600"
                                >
                                    <i class="bi bi-person-circle"></i>
                                    Profil
                                </a>


                                {{-- User Dashboard --}}
                                @if (!auth()->user()->isAdmin())

                                    <a
                                        href="{{ route('dashboard') }}"
                                        @click="profileOpen = false"
                                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-blue-50 hover:text-blue-600"
                                    >
                                        <i class="bi bi-grid-1x2-fill"></i>
                                        Dashboard
                                    </a>

                                @endif


                                {{-- Admin Dashboard --}}
                                @if (auth()->user()->isAdmin())

                                    <a
                                        href="{{ route('admin.dashboard') }}"
                                        @click="profileOpen = false"
                                        class="mt-1 flex items-center gap-3 rounded-xl bg-blue-50 px-3 py-2.5 text-sm font-bold text-blue-700 transition hover:bg-blue-100"
                                    >
                                        <i class="bi bi-speedometer2"></i>
                                        Admin Dashboard
                                        <i class="bi bi-arrow-up-right ml-auto text-xs"></i>
                                    </a>

                                @endif


                                {{-- Logout --}}
                                <form
                                    method="POST"
                                    action="{{ route('logout') }}"
                                    class="mt-1"
                                >
                                    @csrf

                                    <button
                                        type="submit"
                                        class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-red-500 transition hover:bg-red-50"
                                    >
                                        <i class="bi bi-box-arrow-right"></i>
                                        Keluar
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @else

                    {{-- Guest Login --}}
                    <a
                        href="{{ route('login') }}"
                        class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <i class="bi bi-box-arrow-in-right"></i>
                        Masuk
                    </a>


                    {{-- Guest Register --}}
                    <a
                        href="{{ route('register') }}"
                        class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700"
                    >
                        <i class="bi bi-person-plus-fill"></i>
                        Daftar
                    </a>

                @endauth

            </div>


            {{-- =================================================
                 MOBILE RIGHT ACTIONS
            ================================================== --}}
            <div class="flex items-center gap-2 lg:hidden">

                @auth

                    {{-- =================================================
                         MOBILE NOTIFICATION
                    ================================================== --}}
                    <div class="relative">

                        <button
                            type="button"
                            @click="
                                notificationsOpen = !notificationsOpen;
                                profileOpen = false;
                                open = false;
                            "
                            class="relative flex h-10 w-10 items-center justify-center rounded-xl text-slate-600 transition hover:bg-slate-100 active:bg-slate-100"
                            aria-label="Notifikasi"
                            :aria-expanded="notificationsOpen.toString()"
                        >

                            <i class="bi bi-bell text-lg"></i>

                            @if ($unreadNotifications->count() > 0)

                                <span
                                    class="absolute right-1 top-1 flex h-4 min-w-4 items-center justify-center rounded-full bg-red-500 px-1 text-[9px] font-bold text-white"
                                >
                                    {{ $unreadNotifications->count() > 9 ? '9+' : $unreadNotifications->count() }}
                                </span>

                            @endif

                        </button>


                        {{-- Mobile Notification Dropdown --}}
                        <div
                            x-cloak
                            x-show="notificationsOpen"
                            @click.outside="notificationsOpen = false"
                            x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 translate-y-1 scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                            x-transition:leave-end="opacity-0 translate-y-1 scale-95"
                            class="fixed left-3 right-3 top-[76px] z-[60] overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl sm:absolute sm:left-auto sm:right-0 sm:top-auto sm:mt-3 sm:w-80"
                        >

                            {{-- Header --}}
                            <div class="flex items-center justify-between border-b border-slate-100 px-4 py-3">

                                <div>
                                    <h3 class="text-sm font-bold text-slate-900">
                                        Notifikasi
                                    </h3>

                                    <p class="text-xs text-slate-400">
                                        Aktivitas terbaru kamu
                                    </p>
                                </div>


                                @if ($unreadNotifications->count() > 0)

                                    <span
                                        class="rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-600"
                                    >
                                        {{ $unreadNotifications->count() }} baru
                                    </span>

                                @endif

                            </div>


                            {{-- List --}}
                            <div class="max-h-[70vh] overflow-y-auto">

                                @forelse ($unreadNotifications as $notification)

                                    <form
                                        method="POST"
                                        action="{{ route('notifications.read', $notification->id) }}"
                                    >
                                        @csrf

                                        <button
                                            type="submit"
                                            class="flex w-full gap-3 border-b border-slate-100 px-4 py-4 text-left transition hover:bg-slate-50"
                                        >

                                            <div
                                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600"
                                            >
                                                <i class="bi bi-reply-fill"></i>
                                            </div>


                                            <div class="min-w-0 flex-1">

                                                <p class="text-sm leading-5 text-slate-700">

                                                    <span class="font-semibold text-slate-900">
                                                        {{ $notification->data['actor_name'] ?? 'Seseorang' }}
                                                    </span>

                                                    {{ $notification->data['message'] ?? 'melakukan aktivitas pada diskusi kamu.' }}

                                                </p>


                                                <p class="mt-1 truncate text-xs font-medium text-blue-600">
                                                    {{ $notification->data['thread_title'] ?? 'Diskusi Forum' }}
                                                </p>


                                                <p class="mt-1 text-xs text-slate-400">
                                                    {{ $notification->created_at->diffForHumans() }}
                                                </p>

                                            </div>


                                            <span
                                                class="mt-2 h-2 w-2 shrink-0 rounded-full bg-blue-600"
                                            ></span>

                                        </button>

                                    </form>

                                @empty

                                    <div class="px-5 py-10 text-center">

                                        <div
                                            class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-400"
                                        >
                                            <i class="bi bi-bell-slash"></i>
                                        </div>

                                        <p class="mt-3 text-sm font-medium text-slate-700">
                                            Belum ada notifikasi
                                        </p>

                                        <p class="mt-1 text-xs text-slate-400">
                                            Notifikasi aktivitas forum akan muncul di sini.
                                        </p>

                                    </div>

                                @endforelse

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         MOBILE PROFILE
                         LANGSUNG KE /profile
                    ================================================== --}}
                    <a
                        href="{{ route('profile.edit') }}"
                        class="flex h-10 w-10 items-center justify-center overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:border-blue-200 hover:bg-slate-50 active:bg-slate-100"
                        aria-label="Profile"
                    >

                        @if (auth()->user()->avatar)

                            <img
                                src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                alt="Foto profil {{ auth()->user()->name }}"
                                class="h-full w-full object-cover"
                            >

                        @else

                            <div class="flex h-full w-full items-center justify-center bg-blue-100 text-sm font-black text-blue-700">
                                {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                            </div>

                        @endif

                    </a>

                @else

                    {{-- Guest Login --}}
                    <a
                        href="{{ route('login') }}"
                        class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:bg-slate-50"
                        aria-label="Masuk"
                    >
                        <i class="bi bi-box-arrow-in-right text-lg"></i>
                    </a>

                @endauth


                {{-- =================================================
                     MOBILE MENU BUTTON
                ================================================== --}}
                <button
                    type="button"
                    @click="
                        open = !open;
                        profileOpen = false;
                        notificationsOpen = false;
                    "
                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:bg-slate-50"
                    :aria-expanded="open.toString()"
                    aria-controls="mobile-navigation"
                    aria-label="Toggle menu navigasi"
                >

                    <i
                        class="bi text-xl"
                        :class="open ? 'bi-x-lg' : 'bi-list'"
                    ></i>

                </button>

            </div>

        </div>


        {{-- =====================================================
             MOBILE MENU
        ====================================================== --}}
        <div
            id="mobile-navigation"
            x-cloak
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="border-t border-slate-100 bg-white py-4 lg:hidden"
        >

            <div class="space-y-2">

                {{-- HOME --}}
                <a
                    href="{{ route('home') }}"
                    @click="open = false"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                        {{ $isHome
                            ? 'bg-blue-50 text-blue-600'
                            : 'text-slate-700 hover:bg-slate-50 hover:text-blue-600' }}"
                >
                    <i class="bi bi-house-door-fill"></i>
                    Home
                </a>


                {{-- FORUM --}}
                <a
                    href="{{ route('forum.index') }}"
                    @click="open = false"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                        {{ $isForum
                            ? 'bg-blue-50 text-blue-600'
                            : 'text-slate-700 hover:bg-slate-50 hover:text-blue-600' }}"
                >
                    <i class="bi bi-chat-square-text-fill"></i>
                    Forum
                </a>


                {{-- SEMINAR --}}
                <a
                    href="{{ route('seminar.index') }}"
                    @click="open = false"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                        {{ $isSeminar
                            ? 'bg-emerald-50 text-emerald-600'
                            : 'text-slate-700 hover:bg-slate-50 hover:text-emerald-600' }}"
                >
                    <i class="bi bi-easel2-fill"></i>
                    Seminar
                </a>


                {{-- KONSULTASI --}}
                <a
                    href="{{ route('consultation.create') }}"
                    @click="open = false"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                        {{ $isConsultation
                            ? 'bg-violet-50 text-violet-600'
                            : 'text-slate-700 hover:bg-slate-50 hover:text-violet-600' }}"
                >
                    <i class="bi bi-briefcase-fill"></i>
                    Konsultasi
                </a>


                {{-- Separator --}}
                <div class="my-3 border-t border-slate-100"></div>


                @auth

                    {{-- =================================================
                         MOBILE USER INFO
                    ================================================== --}}
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">

                        <div class="flex items-center gap-3">

                            <div class="h-11 w-11 shrink-0 overflow-hidden rounded-xl bg-blue-100">

                                @if (auth()->user()->avatar)

                                    <img
                                        src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                        alt="Foto profil {{ auth()->user()->name }}"
                                        class="h-full w-full object-cover"
                                    >

                                @else

                                    <div class="flex h-full w-full items-center justify-center font-black text-blue-700">
                                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                                    </div>

                                @endif

                            </div>


                            <div class="min-w-0">

                                <p class="truncate text-sm font-bold text-slate-900">
                                    {{ auth()->user()->name }}
                                </p>

                                <p class="truncate text-xs text-slate-500">
                                    {{ auth()->user()->isAdmin() ? 'Administrator' : 'Member' }}
                                </p>

                            </div>

                        </div>


                        <div class="mt-3 space-y-2">

                            {{-- Profile --}}
                            <a
                                href="{{ route('profile.edit') }}"
                                @click="open = false"
                                class="flex items-center gap-3 rounded-xl bg-white px-3 py-3 text-sm font-semibold text-slate-700 transition hover:bg-blue-50 hover:text-blue-600"
                            >
                                <i class="bi bi-person-circle"></i>
                                Profil
                            </a>


                            {{-- User Dashboard --}}
                            @if (!auth()->user()->isAdmin())

                                <a
                                    href="{{ route('dashboard') }}"
                                    @click="open = false"
                                    class="flex items-center gap-3 rounded-xl bg-white px-3 py-3 text-sm font-semibold text-slate-700 transition hover:bg-blue-50 hover:text-blue-600"
                                >
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    Dashboard
                                </a>

                            @endif


                            {{-- Admin Dashboard --}}
                            @if (auth()->user()->isAdmin())

                                <a
                                    href="{{ route('admin.dashboard') }}"
                                    @click="open = false"
                                    class="flex items-center gap-3 rounded-xl bg-blue-600 px-3 py-3 text-sm font-bold text-white transition hover:bg-blue-700"
                                >
                                    <i class="bi bi-speedometer2"></i>
                                    Admin Dashboard
                                </a>

                            @endif


                            {{-- Logout --}}
                            <form
                                method="POST"
                                action="{{ route('logout') }}"
                            >
                                @csrf

                                <button
                                    type="submit"
                                    class="flex w-full items-center gap-3 rounded-xl bg-white px-3 py-3 text-sm font-semibold text-red-500 transition hover:bg-red-50"
                                >
                                    <i class="bi bi-box-arrow-right"></i>
                                    Keluar
                                </button>

                            </form>

                        </div>

                    </div>

                @else

                    {{-- Mobile Login --}}
                    <a
                        href="{{ route('login') }}"
                        @click="open = false"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <i class="bi bi-box-arrow-in-right"></i>
                        Masuk
                    </a>


                    {{-- Mobile Register --}}
                    <a
                        href="{{ route('register') }}"
                        @click="open = false"
                        class="flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3 text-sm font-bold text-white transition hover:bg-blue-700"
                    >
                        <i class="bi bi-person-plus-fill"></i>
                        Daftar
                    </a>

                @endauth

            </div>

        </div>

    </div>
</nav>