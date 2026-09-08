@extends('layouts.auth')

@section('content')

<div class="min-h-screen bg-slate-50">

    <div class="grid min-h-screen lg:grid-cols-2">

        {{-- =====================================================
             LEFT BRANDING
        ====================================================== --}}
        <div class="relative hidden overflow-hidden bg-slate-950 lg:flex">

            {{-- Decoration --}}
            <div class="pointer-events-none absolute inset-0">
                <div class="absolute -left-24 -top-24 h-80 w-80 rounded-full bg-blue-600/20 blur-3xl"></div>
                <div class="absolute -bottom-24 -right-24 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>
            </div>


            <div class="relative flex w-full flex-col justify-between p-10 xl:p-14">

                {{-- Logo --}}
                <a
                    href="{{ route('home') }}"
                    class="inline-flex w-fit items-center gap-3"
                >

                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                        <i class="bi bi-buildings-fill text-xl"></i>
                    </div>

                    <div>

                        <p class="text-base font-black tracking-tight text-white">
                            Forum Juragan
                        </p>

                        <p class="text-[11px] font-medium text-slate-400">
                            Business Community
                        </p>

                    </div>

                </a>


                {{-- Main --}}
                <div class="max-w-lg">

                    <div class="inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-500/10 px-4 py-2 text-sm font-semibold text-blue-300">
                        <i class="bi bi-people-fill"></i>
                        Komunitas Bisnis
                    </div>

                    <h1 class="mt-6 text-4xl font-black leading-tight tracking-tight text-white xl:text-5xl">
                        Tempat juragan
                        <span class="text-blue-400">
                            berbagi & bertumbuh.
                        </span>
                    </h1>

                    <p class="mt-5 text-base leading-8 text-slate-400">
                        Bergabung dengan komunitas bisnis, ikuti diskusi,
                        temukan insight baru, dan kembangkan bisnis bersama
                        juragan lainnya.
                    </p>


                    <div class="mt-8 grid grid-cols-2 gap-3">

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <i class="bi bi-chat-square-text-fill text-blue-400"></i>

                            <p class="mt-3 text-sm font-bold text-white">
                                Forum Diskusi
                            </p>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Berbagi pengalaman bisnis.
                            </p>
                        </div>


                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <i class="bi bi-easel2-fill text-emerald-400"></i>

                            <p class="mt-3 text-sm font-bold text-white">
                                Seminar Bisnis
                            </p>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Belajar dari para praktisi.
                            </p>
                        </div>

                    </div>

                </div>


                {{-- Footer --}}
                <p class="text-xs text-slate-500">
                    Forum Juragan — Teman Bertumbuh untuk Pemilik Bisnis
                </p>

            </div>

        </div>


        {{-- =====================================================
             RIGHT FORM
        ====================================================== --}}
        <div class="flex items-center justify-center px-4 py-10 sm:px-6 lg:px-12">

            <div class="w-full max-w-md">

                {{-- Mobile Logo --}}
                <div class="mb-8 lg:hidden">

                    <a
                        href="{{ route('home') }}"
                        class="inline-flex items-center gap-3"
                    >

                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                            <i class="bi bi-buildings-fill text-xl"></i>
                        </div>

                        <div>

                            <p class="text-base font-black tracking-tight text-slate-900">
                                Forum Juragan
                            </p>

                            <p class="text-[11px] font-medium text-slate-400">
                                Business Community
                            </p>

                        </div>

                    </a>

                </div>


                {{-- Heading --}}
                <div>

                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                        <i class="bi bi-box-arrow-in-right text-xl"></i>
                    </div>

                    <h1 class="mt-6 text-3xl font-black tracking-tight text-slate-900">
                        Selamat datang kembali
                    </h1>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Masuk ke akun Forum Juragan untuk melanjutkan aktivitasmu.
                    </p>

                </div>


                {{-- Session Status --}}
                <x-auth-session-status
                    class="mt-5"
                    :status="session('status')"
                />


                {{-- Validation --}}
                @if ($errors->any())

                    <div class="mt-5 rounded-2xl border border-red-200 bg-red-50 p-4">

                        <div class="flex items-start gap-3">

                            <i class="bi bi-exclamation-circle-fill mt-0.5 text-red-500"></i>

                            <div>

                                <p class="text-sm font-bold text-red-800">
                                    Login belum berhasil
                                </p>

                                <p class="mt-1 text-xs leading-5 text-red-600">
                                    {{ $errors->first() }}
                                </p>

                            </div>

                        </div>

                    </div>

                @endif


                {{-- Form --}}
                <form
                    method="POST"
                    action="{{ route('login') }}"
                    class="mt-8 space-y-5"
                >

                    @csrf


                    {{-- Email --}}
                    <div>

                        <label
                            for="email"
                            class="mb-2.5 block text-sm font-bold text-slate-700"
                        >
                            Email
                        </label>

                        <div class="relative">

                            <i class="bi bi-envelope-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="nama@email.com"
                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >

                        </div>

                        @error('email')

                            <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">
                                <i class="bi bi-exclamation-circle"></i>
                                {{ $message }}
                            </p>

                        @enderror

                    </div>


                    {{-- Password --}}
                    <div>

                        <div class="mb-2.5 flex items-center justify-between gap-3">

                            <label
                                for="password"
                                class="text-sm font-bold text-slate-700"
                            >
                                Password
                            </label>


                            @if (Route::has('password.request'))

                                <a
                                    href="{{ route('password.request') }}"
                                    class="text-xs font-semibold text-blue-600 transition hover:text-blue-700"
                                >
                                    Lupa password?
                                </a>

                            @endif

                        </div>


                        <div class="relative">

                            <i class="bi bi-lock-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Masukkan password"
                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >

                        </div>

                        @error('password')

                            <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">
                                <i class="bi bi-exclamation-circle"></i>
                                {{ $message }}
                            </p>

                        @enderror

                    </div>


                    {{-- Remember --}}
                    <label class="flex cursor-pointer items-center gap-3">

                        <input
                            id="remember"
                            type="checkbox"
                            name="remember"
                            class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                        >

                        <span class="text-sm text-slate-500">
                            Ingat saya
                        </span>

                    </label>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="flex w-full items-center justify-center gap-2 rounded-2xl bg-blue-600 px-6 py-4 text-sm font-black text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl"
                    >

                        <i class="bi bi-box-arrow-in-right"></i>

                        Masuk ke Forum

                    </button>

                </form>


                {{-- Register --}}
                <div class="mt-8 border-t border-slate-100 pt-6 text-center">

                    <p class="text-sm text-slate-500">

                        Belum punya akun?

                        <a
                            href="{{ route('register') }}"
                            class="font-bold text-blue-600 transition hover:text-blue-700"
                        >
                            Daftar sekarang
                        </a>

                    </p>

                </div>


                {{-- Back --}}
                <a
                    href="{{ route('home') }}"
                    class="mx-auto mt-5 inline-flex items-center justify-center gap-2 text-xs font-semibold text-slate-400 transition hover:text-slate-600"
                >

                    <i class="bi bi-arrow-left"></i>

                    Kembali ke beranda

                </a>

            </div>

        </div>

    </div>

</div>

@endsection