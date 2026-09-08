@extends('layouts.landing')

@section('content')

<div class="flex min-h-[calc(100vh-5rem)] items-center justify-center bg-slate-50 px-4 py-16 sm:px-6 lg:px-8">

    <div class="w-full max-w-xl text-center">

        {{-- Icon --}}
        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl bg-blue-50 text-blue-600 shadow-sm">
            <i class="bi bi-compass text-4xl"></i>
        </div>


        {{-- 404 --}}
        <p class="mt-8 text-7xl font-black tracking-tight text-blue-600 sm:text-8xl">
            404
        </p>


        {{-- Heading --}}
        <h1 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
            Halaman Tidak Ditemukan
        </h1>


        {{-- Description --}}
        <p class="mx-auto mt-4 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">
            Sepertinya halaman yang kamu cari tidak tersedia,
            sudah dipindahkan, atau alamat yang kamu masukkan tidak tepat.
        </p>


        {{-- Actions --}}
        <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

            <a
                href="{{ route('home') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
            >
                <i class="bi bi-house-door-fill"></i>
                Kembali ke Beranda
            </a>


            <a
                href="{{ route('forum.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-bold text-slate-700 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
            >
                <i class="bi bi-chat-square-text-fill"></i>
                Buka Forum
            </a>

        </div>


        {{-- Extra Help --}}
        <div class="mx-auto mt-10 max-w-md rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start gap-3 text-left">

                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="bi bi-lightbulb-fill"></i>
                </div>

                <div>

                    <p class="text-sm font-bold text-slate-900">
                        Sedang mencari sesuatu?
                    </p>

                    <p class="mt-1 text-xs leading-5 text-slate-500">
                        Coba kembali ke Forum untuk menemukan diskusi,
                        seminar, dan berbagai layanan yang tersedia.
                    </p>

                </div>

            </div>

        </div>


        {{-- Footer --}}
        <p class="mt-8 text-xs text-slate-400">
            Forum Juragan — Teman Bertumbuh untuk Pemilik Bisnis
        </p>

    </div>

</div>

@endsection