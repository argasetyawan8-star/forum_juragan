@extends('layouts.auth')

@section('content')

<div class="min-h-screen bg-slate-50">

    <div class="grid min-h-screen lg:grid-cols-2">


        {{-- =====================================================
             LEFT BRANDING
        ====================================================== --}}
        <div class="relative hidden overflow-hidden bg-slate-950 lg:flex">

            <div class="pointer-events-none absolute inset-0">

                <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full bg-blue-600/20 blur-3xl"></div>

                <div class="absolute -bottom-24 -left-24 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>

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

                    <div class="inline-flex items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-2 text-sm font-semibold text-emerald-300">

                        <i class="bi bi-person-plus-fill"></i>

                        Bergabung dengan Komunitas

                    </div>


                    <h1 class="mt-6 text-4xl font-black leading-tight tracking-tight text-white xl:text-5xl">

                        Mulai perjalanan bisnis
                        <span class="text-emerald-400">
                            bersama juragan lainnya.
                        </span>

                    </h1>


                    <p class="mt-5 text-base leading-8 text-slate-400">
                        Buat akun gratis dan mulai ikut berdiskusi,
                        berbagi pengalaman, serta menemukan wawasan baru
                        untuk bisnis kamu.
                    </p>


                    <div class="mt-8 space-y-4">

                        <div class="flex items-start gap-3">

                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">
                                <i class="bi bi-chat-square-text-fill"></i>
                            </div>

                            <div>

                                <p class="text-sm font-bold text-white">
                                    Ikut forum diskusi
                                </p>

                                <p class="mt-1 text-xs leading-5 text-slate-500">
                                    Tanyakan masalah dan bagikan pengalaman bisnis.
                                </p>

                            </div>

                        </div>


                        <div class="flex items-start gap-3">

                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400">
                                <i class="bi bi-easel2-fill"></i>
                            </div>

                            <div>

                                <p class="text-sm font-bold text-white">
                                    Ikuti seminar
                                </p>

                                <p class="mt-1 text-xs leading-5 text-slate-500">
                                    Temukan event dan pembelajaran bisnis.
                                </p>

                            </div>

                        </div>


                        <div class="flex items-start gap-3">

                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-violet-500/10 text-violet-400">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>

                            <div>

                                <p class="text-sm font-bold text-white">
                                    Dapatkan perspektif baru
                                </p>

                                <p class="mt-1 text-xs leading-5 text-slate-500">
                                    Bertumbuh bersama komunitas pemilik bisnis.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


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

                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                        <i class="bi bi-person-plus-fill text-xl"></i>
                    </div>


                    <h1 class="mt-6 text-3xl font-black tracking-tight text-slate-900">
                        Buat akun baru
                    </h1>


                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Bergabung dengan Forum Juragan dan mulai terhubung
                        dengan komunitas bisnis.
                    </p>

                </div>


                {{-- Form --}}
                <form
                    method="POST"
                    action="{{ route('register') }}"
                    class="mt-8 space-y-5"
                >

                    @csrf


                    {{-- Name --}}
                    <div>

                        <label
                            for="name"
                            class="mb-2.5 block text-sm font-bold text-slate-700"
                        >
                            Nama Lengkap
                        </label>


                        <div class="relative">

                            <i class="bi bi-person-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Masukkan nama lengkap"
                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >

                        </div>


                        @error('name')

                            <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">
                                <i class="bi bi-exclamation-circle"></i>
                                {{ $message }}
                            </p>

                        @enderror

                    </div>


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

                        <label
                            for="password"
                            class="mb-2.5 block text-sm font-bold text-slate-700"
                        >
                            Password
                        </label>


                        <div class="relative">

                            <i class="bi bi-lock-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Buat password"
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


                    {{-- Confirm Password --}}
                    <div>

                        <label
                            for="password_confirmation"
                            class="mb-2.5 block text-sm font-bold text-slate-700"
                        >
                            Konfirmasi Password
                        </label>


                        <div class="relative">

                            <i class="bi bi-shield-lock-fill pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Ulangi password"
                                class="w-full rounded-2xl border border-slate-200 bg-white py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >

                        </div>


                        @error('password_confirmation')

                            <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-red-600">
                                <i class="bi bi-exclamation-circle"></i>
                                {{ $message }}
                            </p>

                        @enderror

                    </div>


                    {{-- Agreement --}}
                    <label class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-slate-50 p-4">

                        <input
                            type="checkbox"
                            name="terms"
                            required
                            class="mt-1 h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                        >

                        <span class="text-xs leading-5 text-slate-500">
                            Saya menyetujui penggunaan akun saya untuk
                            menggunakan fitur dan layanan Forum Juragan.
                        </span>

                    </label>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="flex w-full items-center justify-center gap-2 rounded-2xl bg-blue-600 px-6 py-4 text-sm font-black text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl"
                    >

                        <i class="bi bi-person-plus-fill"></i>

                        Buat Akun

                    </button>

                </form>


                {{-- Login --}}
                <div class="mt-8 border-t border-slate-100 pt-6 text-center">

                    <p class="text-sm text-slate-500">

                        Sudah punya akun?

                        <a
                            href="{{ route('login') }}"
                            class="font-bold text-blue-600 transition hover:text-blue-700"
                        >
                            Masuk di sini
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