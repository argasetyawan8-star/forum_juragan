@extends('layouts.user')

@section('content')

<div class="min-h-screen bg-slate-50 pt-24 pb-16">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- =====================================================
             HEADER
        ====================================================== --}}
        <div class="mb-8">

            <div class="mb-6 flex items-center gap-2 text-sm text-slate-500">

                <a
                    href="{{ route('home') }}"
                    class="transition hover:text-blue-600"
                >
                    Home
                </a>

                <i class="bi bi-chevron-right text-xs text-slate-300"></i>

                <span class="font-medium text-slate-900">
                    Profil Saya
                </span>

            </div>

            <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                Profil Saya
            </h1>

            <p class="mt-2 max-w-2xl text-slate-600">
                Lengkapi profilmu agar anggota lain lebih mudah mengenal kamu
                dan bisnis yang kamu jalankan.
            </p>

        </div>


        {{-- =====================================================
             STATUS
        ====================================================== --}}
        @if (session('status'))

            @php
                $statusMessages = [
                    'profile-updated' => 'Informasi profil berhasil diperbarui.',
                    'avatar-updated' => 'Foto profil berhasil diperbarui.',
                    'avatar-deleted' => 'Foto profil berhasil dihapus.',
                    'password-updated' => 'Password berhasil diperbarui.',
                ];
            @endphp

            @if (isset($statusMessages[session('status')]))

                <div class="mb-6 flex items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-700">
                    <i class="bi bi-check-circle-fill"></i>

                    {{ $statusMessages[session('status')] }}
                </div>

            @endif

        @endif


        {{-- =====================================================
             VALIDATION ERROR
        ====================================================== --}}
        @if ($errors->any())

            <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4">

                <div class="flex items-start gap-3">

                    <i class="bi bi-exclamation-circle-fill mt-0.5 text-red-500"></i>

                    <div>

                        <p class="text-sm font-bold text-red-700">
                            Ada beberapa hal yang perlu diperbaiki.
                        </p>

                        <ul class="mt-2 space-y-1 text-sm text-red-600">

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

            </div>

        @endif


        {{-- =====================================================
             PROFILE HEADER
        ====================================================== --}}
        <section class="mb-8 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            {{-- Cover --}}
            <div class="relative h-40 overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 sm:h-52">

                <div class="absolute -right-10 -top-24 h-72 w-72 rounded-full border-[50px] border-white/5"></div>

                <div class="absolute -bottom-32 left-20 h-80 w-80 rounded-full border-[60px] border-emerald-400/10"></div>

            </div>


            {{-- User information --}}
            <div
                x-data="{ preview: null }"
                class="relative px-6 pb-7 sm:px-8"
            >

                <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">

                    {{-- Avatar --}}
                    <div class="-mt-14 sm:-mt-16">

                        <div class="relative">

                            <div class="h-28 w-28 overflow-hidden rounded-3xl bg-white p-1.5 shadow-lg sm:h-32 sm:w-32">

                                <div class="h-full w-full overflow-hidden rounded-[1.3rem] bg-blue-100">

                                    {{-- Preview --}}
                                    <template x-if="preview">

                                        <img
                                            :src="preview"
                                            alt="Preview foto profil"
                                            class="h-full w-full object-cover"
                                        >

                                    </template>


                                    {{-- Existing avatar --}}
                                    @if (auth()->user()->avatar)

                                        <img
                                            x-show="!preview"
                                            src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                            alt="Foto profil {{ auth()->user()->name }}"
                                            class="h-full w-full object-cover"
                                        >

                                    @else

                                        <div
                                            x-show="!preview"
                                            class="flex h-full w-full items-center justify-center bg-blue-100 text-4xl font-bold text-blue-700 sm:text-5xl"
                                        >
                                            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                                        </div>

                                    @endif

                                </div>

                            </div>


                            {{-- Camera --}}
                            <label
                                for="profile-avatar"
                                class="absolute -bottom-2 -right-2 flex h-10 w-10 cursor-pointer items-center justify-center rounded-xl border-4 border-white bg-blue-600 text-white shadow-lg transition hover:scale-105 hover:bg-blue-700"
                                title="Ubah foto profil"
                            >
                                <i class="bi bi-camera-fill"></i>
                            </label>


                            {{-- Upload form --}}
                            <form
                                id="avatar-upload-form"
                                method="POST"
                                action="{{ route('profile.avatar.update') }}"
                                enctype="multipart/form-data"
                                class="hidden"
                            >
                                @csrf

                                <input
                                    id="profile-avatar"
                                    name="avatar"
                                    type="file"
                                    accept="image/jpeg,image/png,image/webp"
                                    @change="
                                        const file = $event.target.files[0];

                                        if (!file) return;

                                        if (file.size > 2 * 1024 * 1024) {
                                            alert('Ukuran foto maksimal 2 MB.');
                                            $event.target.value = '';
                                            return;
                                        }

                                        preview = URL.createObjectURL(file);

                                        document.getElementById('avatar-upload-form').submit();
                                    "
                                >
                            </form>

                        </div>


                        {{-- Delete avatar --}}
                        @if (auth()->user()->avatar)

                            <form
                                method="POST"
                                action="{{ route('profile.avatar.delete') }}"
                                class="mt-3"
                                onsubmit="return confirm('Yakin ingin menghapus foto profil?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="inline-flex items-center gap-2 rounded-xl px-2 text-xs font-semibold text-red-500 transition hover:bg-red-50"
                                >
                                    <i class="bi bi-trash3"></i>
                                    Hapus foto
                                </button>

                            </form>

                        @endif

                    </div>


                    {{-- Role --}}
                    <div class="sm:pb-1">

                        @if (auth()->user()->isAdmin())

                            <span class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-3 py-2 text-xs font-bold text-blue-600">
                                <i class="bi bi-shield-check"></i>
                                Administrator
                            </span>

                        @else

                            <span class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-3 py-2 text-xs font-bold text-slate-600">
                                <i class="bi bi-person-check"></i>
                                Member
                            </span>

                        @endif

                    </div>

                </div>


                {{-- User info --}}
                <div class="mt-5">

                    <h2 class="text-2xl font-black tracking-tight text-slate-900">
                        {{ auth()->user()->name }}
                    </h2>

                    <p class="mt-1 text-slate-500">
                        {{ auth()->user()->jabatan ?: 'Anggota Forum Juragan' }}
                    </p>


                    <div class="mt-4 flex flex-wrap gap-x-6 gap-y-2 text-sm text-slate-500">

                        <span class="inline-flex items-center gap-2">
                            <i class="bi bi-envelope"></i>
                            {{ auth()->user()->email }}
                        </span>


                        @if (auth()->user()->nama_usaha)

                            <span class="inline-flex items-center gap-2">
                                <i class="bi bi-building"></i>
                                {{ auth()->user()->nama_usaha }}
                            </span>

                        @endif


                        @if (auth()->user()->lokasi)

                            <span class="inline-flex items-center gap-2">
                                <i class="bi bi-geo-alt"></i>
                                {{ auth()->user()->lokasi }}
                            </span>

                        @endif

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
             MAIN GRID
        ====================================================== --}}
        <div class="grid gap-8 lg:grid-cols-3">

            {{-- =================================================
                 LEFT
            ================================================== --}}
            <div class="space-y-8 lg:col-span-2">


                {{-- =================================================
                     INFORMASI DASAR
                ================================================== --}}
                <section class="rounded-3xl border border-slate-200 bg-white shadow-sm">

                    <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>

                            <div>

                                <h2 class="font-bold text-slate-900">
                                    Informasi Dasar
                                </h2>

                                <p class="mt-1 text-sm text-slate-500">
                                    Informasi yang digunakan untuk identitas akunmu.
                                </p>

                            </div>

                        </div>

                    </div>


                    <form
                        method="POST"
                        action="{{ route('profile.update') }}"
                        class="p-6 sm:p-8"
                    >

                        @csrf
                        @method('PATCH')


                        <div class="grid gap-5 sm:grid-cols-2">

                            {{-- Name --}}
                            <div>

                                <label
                                    for="name"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Nama Lengkap
                                </label>

                                <div class="relative">

                                    <i class="bi bi-person absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        value="{{ old('name', auth()->user()->name) }}"
                                        required
                                        autocomplete="name"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-blue-300 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    >

                                </div>

                                @error('name')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- Email --}}
                            <div>

                                <label
                                    for="email"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Email
                                </label>

                                <div class="relative">

                                    <i class="bi bi-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        value="{{ old('email', auth()->user()->email) }}"
                                        required
                                        autocomplete="email"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-blue-300 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    >

                                </div>

                                @error('email')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- Bio --}}
                            <div class="sm:col-span-2">

                                <label
                                    for="bio"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Bio Singkat
                                </label>

                                <textarea
                                    id="bio"
                                    name="bio"
                                    rows="3"
                                    maxlength="500"
                                    placeholder="Ceritakan secara singkat tentang dirimu..."
                                    class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm leading-6 text-slate-800 outline-none transition focus:border-blue-300 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                >{{ old('bio', auth()->user()->bio) }}</textarea>

                                <p class="mt-2 text-xs text-slate-400">
                                    Maksimal 500 karakter.
                                </p>

                                @error('bio')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>

                        </div>


                        <div class="mt-6 flex justify-end border-t border-slate-100 pt-5">

                            <button
                                type="submit"
                                class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700"
                            >
                                <i class="bi bi-check2-circle"></i>
                                Simpan Informasi
                            </button>

                        </div>

                    </form>

                </section>


                {{-- =================================================
                     PROFIL BISNIS
                ================================================== --}}
                <section class="rounded-3xl border border-slate-200 bg-white shadow-sm">

                    <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                <i class="bi bi-building-fill"></i>
                            </div>

                            <div>

                                <h2 class="font-bold text-slate-900">
                                    Profil Bisnis
                                </h2>

                                <p class="mt-1 text-sm text-slate-500">
                                    Tambahkan informasi mengenai usaha atau perusahaanmu.
                                </p>

                            </div>

                        </div>

                    </div>


                    <form
                        method="POST"
                        action="{{ route('profile.update') }}"
                        class="p-6 sm:p-8"
                    >

                        @csrf
                        @method('PATCH')


                        {{-- Karena form ini juga menyimpan nama/email --}}
                        <input
                            type="hidden"
                            name="name"
                            value="{{ old('name', auth()->user()->name) }}"
                        >

                        <input
                            type="hidden"
                            name="email"
                            value="{{ old('email', auth()->user()->email) }}"
                        >


                        <div class="grid gap-5 sm:grid-cols-2">

                            {{-- Company --}}
                            <div class="sm:col-span-2">

                                <label
                                    for="nama_usaha"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Nama Usaha / Perusahaan
                                </label>

                                <div class="relative">

                                    <i class="bi bi-building absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="nama_usaha"
                                        name="nama_usaha"
                                        type="text"
                                        value="{{ old('nama_usaha', auth()->user()->nama_usaha) }}"
                                        placeholder="Contoh: Maju Jaya Group"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-emerald-300 focus:bg-white focus:ring-4 focus:ring-emerald-100"
                                    >

                                </div>

                                @error('nama_usaha')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- Position --}}
                            <div>

                                <label
                                    for="jabatan"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Jabatan / Peran
                                </label>

                                <div class="relative">

                                    <i class="bi bi-person-badge absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="jabatan"
                                        name="jabatan"
                                        type="text"
                                        value="{{ old('jabatan', auth()->user()->jabatan) }}"
                                        placeholder="Contoh: Founder / Owner"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-emerald-300 focus:bg-white focus:ring-4 focus:ring-emerald-100"
                                    >

                                </div>

                                @error('jabatan')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- Business Type --}}
                            <div>

                                <label
                                    for="bidang_usaha"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Bidang Usaha
                                </label>

                                <div class="relative">

                                    <i class="bi bi-briefcase absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="bidang_usaha"
                                        name="bidang_usaha"
                                        type="text"
                                        value="{{ old('bidang_usaha', auth()->user()->bidang_usaha) }}"
                                        placeholder="Contoh: Teknologi & Jasa"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-emerald-300 focus:bg-white focus:ring-4 focus:ring-emerald-100"
                                    >

                                </div>

                                @error('bidang_usaha')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- Location --}}
                            <div>

                                <label
                                    for="lokasi"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Lokasi
                                </label>

                                <div class="relative">

                                    <i class="bi bi-geo-alt absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="lokasi"
                                        name="lokasi"
                                        type="text"
                                        value="{{ old('lokasi', auth()->user()->lokasi) }}"
                                        placeholder="Contoh: Yogyakarta, Indonesia"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-emerald-300 focus:bg-white focus:ring-4 focus:ring-emerald-100"
                                    >

                                </div>

                                @error('lokasi')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- Website --}}
                            <div>

                                <label
                                    for="website"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Website
                                </label>

                                <div class="relative">

                                    <i class="bi bi-globe2 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="website"
                                        name="website"
                                        type="url"
                                        value="{{ old('website', auth()->user()->website) }}"
                                        placeholder="https://contoh.com"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-emerald-300 focus:bg-white focus:ring-4 focus:ring-emerald-100"
                                    >

                                </div>

                                @error('website')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- WhatsApp --}}
                            <div>

                                <label
                                    for="whatsapp"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    WhatsApp
                                </label>

                                <div class="relative">

                                    <i class="bi bi-whatsapp absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                    <input
                                        id="whatsapp"
                                        name="whatsapp"
                                        type="text"
                                        value="{{ old('whatsapp', auth()->user()->whatsapp) }}"
                                        placeholder="08xxxxxxxxxx"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition focus:border-emerald-300 focus:bg-white focus:ring-4 focus:ring-emerald-100"
                                    >

                                </div>

                                @error('whatsapp')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            {{-- About --}}
                            <div class="sm:col-span-2">

                                <label
                                    for="about"
                                    class="mb-2 block text-sm font-semibold text-slate-700"
                                >
                                    Tentang Saya / Bisnis
                                </label>

                                <textarea
                                    id="about"
                                    name="about"
                                    rows="6"
                                    maxlength="3000"
                                    placeholder="Ceritakan tentang dirimu, bisnis, pengalaman, atau fokus yang sedang kamu jalankan..."
                                    class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm leading-7 text-slate-800 outline-none transition focus:border-emerald-300 focus:bg-white focus:ring-4 focus:ring-emerald-100"
                                >{{ old('about', auth()->user()->about) }}</textarea>

                                <p class="mt-2 text-xs text-slate-400">
                                    Maksimal 3000 karakter.
                                </p>

                                @error('about')

                                    <p class="mt-2 text-xs font-medium text-red-500">
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>

                        </div>


                        <div class="mt-6 flex justify-end border-t border-slate-100 pt-5">

                            <button
                                type="submit"
                                class="inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-600"
                            >
                                <i class="bi bi-check2-circle"></i>
                                Simpan Profil Bisnis
                            </button>

                        </div>

                    </form>

                </section>

                {{-- =====================================================
     SOCIAL LINKS
====================================================== --}}
<section class="rounded-3xl border border-slate-200 bg-white shadow-sm">

    <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

        <div class="flex items-start gap-3">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                <i class="bi bi-link-45deg"></i>
            </div>

            <div>
                <h2 class="font-bold text-slate-900">
                    Tautan Saya
                </h2>

                <p class="mt-1 text-sm text-slate-500">
                    Tambahkan website atau akun media sosial yang ingin ditampilkan di profil publik.
                </p>
            </div>

        </div>

    </div>


    <div class="p-6 sm:p-8">

        {{-- Add Link --}}
        <form
            method="POST"
            action="{{ route('profile.links.store') }}"
            class="rounded-2xl border border-slate-200 bg-slate-50 p-4"
        >
            @csrf

            <div class="grid gap-4 sm:grid-cols-[180px_minmax(0,1fr)_auto] sm:items-end">

                <div>
                    <label
                        for="link-label"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Jenis Link
                    </label>

                    <select
                        id="link-label"
                        name="label"
                        class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none focus:border-blue-300 focus:ring-4 focus:ring-blue-100"
                    >
                        <option value="Website">Website</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Facebook">Facebook</option>
                        <option value="LinkedIn">LinkedIn</option>
                        <option value="TikTok">TikTok</option>
                        <option value="YouTube">YouTube</option>
                        <option value="Shopee">Shopee</option>
                        <option value="Tokopedia">Tokopedia</option>
                        <option value="WhatsApp">WhatsApp</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>


                <div>
                    <label
                        for="link-url"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        URL
                    </label>

                    <input
                        id="link-url"
                        name="url"
                        type="url"
                        required
                        placeholder="https://contoh.com"
                        class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none focus:border-blue-300 focus:ring-4 focus:ring-blue-100"
                    >
                </div>


                <input
                    type="hidden"
                    name="icon"
                    value=""
                >

                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-blue-700"
                >
                    <i class="bi bi-plus-lg"></i>
                    Tambah
                </button>

            </div>

        </form>


        {{-- Existing Links --}}
        <div class="mt-5 space-y-3">

            @forelse (auth()->user()->links as $link)

                <div
                    x-data="{ editing: false }"
                    class="rounded-2xl border border-slate-200 bg-white p-4"
                >

                    {{-- View --}}
                    <div
                        x-show="!editing"
                        class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between"
                    >

                        <a
                            href="{{ $link->url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex min-w-0 items-center gap-3"
                        >

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-500">
                                @switch($link->label)

                                    @case('Instagram')
                                        <i class="bi bi-instagram"></i>
                                        @break

                                    @case('Facebook')
                                        <i class="bi bi-facebook"></i>
                                        @break

                                    @case('LinkedIn')
                                        <i class="bi bi-linkedin"></i>
                                        @break

                                    @case('TikTok')
                                        <i class="bi bi-tiktok"></i>
                                        @break

                                    @case('YouTube')
                                        <i class="bi bi-youtube"></i>
                                        @break

                                    @case('WhatsApp')
                                        <i class="bi bi-whatsapp"></i>
                                        @break

                                    @case('Shopee')
                                    @case('Tokopedia')
                                        <i class="bi bi-shop"></i>
                                        @break

                                    @default
                                        <i class="bi bi-globe2"></i>

                                @endswitch
                            </div>


                            <div class="min-w-0">

                                <p class="text-sm font-bold text-slate-900">
                                    {{ $link->label }}
                                </p>

                                <p class="truncate text-xs text-slate-400">
                                    {{ $link->url }}
                                </p>

                            </div>

                        </a>


                        <div class="flex shrink-0 items-center gap-2">

                            <button
                                type="button"
                                @click="editing = true"
                                class="rounded-xl px-3 py-2 text-xs font-bold text-slate-500 transition hover:bg-slate-100 hover:text-blue-600"
                            >
                                <i class="bi bi-pencil mr-1"></i>
                                Edit
                            </button>


                            <form
                                method="POST"
                                action="{{ route('profile.links.destroy', $link) }}"
                                onsubmit="return confirm('Hapus link ini?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="rounded-xl px-3 py-2 text-xs font-bold text-slate-500 transition hover:bg-red-50 hover:text-red-500"
                                >
                                    <i class="bi bi-trash3 mr-1"></i>
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>


                    {{-- Edit --}}
                    <form
                        x-show="editing"
                        x-cloak
                        method="POST"
                        action="{{ route('profile.links.update', $link) }}"
                        class="grid gap-4 sm:grid-cols-[180px_minmax(0,1fr)_auto]"
                    >
                        @csrf
                        @method('PATCH')

                        <div>
                            <label class="mb-2 block text-sm font-semibold text-slate-700">
                                Jenis Link
                            </label>

                            <input
                                name="label"
                                type="text"
                                value="{{ $link->label }}"
                                required
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none focus:border-blue-300 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>


                        <div>
                            <label class="mb-2 block text-sm font-semibold text-slate-700">
                                URL
                            </label>

                            <input
                                name="url"
                                type="url"
                                value="{{ $link->url }}"
                                required
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-700 outline-none focus:border-blue-300 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>


                        <div class="flex items-end gap-2">

                            <button
                                type="submit"
                                class="rounded-xl bg-blue-600 px-4 py-3 text-xs font-bold text-white hover:bg-blue-700"
                            >
                                Simpan
                            </button>

                            <button
                                type="button"
                                @click="editing = false"
                                class="rounded-xl border border-slate-200 px-4 py-3 text-xs font-bold text-slate-500 hover:bg-slate-50"
                            >
                                Batal
                            </button>

                        </div>

                    </form>

                </div>

            @empty

                <div class="rounded-2xl border border-dashed border-slate-200 px-5 py-8 text-center">

                    <i class="bi bi-link-45deg text-3xl text-slate-300"></i>

                    <p class="mt-3 text-sm font-semibold text-slate-700">
                        Belum ada tautan
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Tambahkan website atau media sosial kamu.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>


                {{-- =================================================
                     SECURITY
                ================================================== --}}
                <section
                    id="security"
                    x-data="{
                        currentVisible: false,
                        newVisible: false,
                        confirmVisible: false
                    }"
                    class="rounded-3xl border border-slate-200 bg-white shadow-sm"
                >

                    <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>

                            <div>

                                <h2 class="font-bold text-slate-900">
                                    Keamanan Akun
                                </h2>

                                <p class="mt-1 text-sm text-slate-500">
                                    Perbarui password akun kamu.
                                </p>

                            </div>

                        </div>

                    </div>


                    <form
                        method="POST"
                        action="{{ route('password.update') }}"
                        class="space-y-5 p-6 sm:p-8"
                    >
                        @csrf
                        @method('PUT')


                        {{-- Current --}}
                        <div>

                            <label
                                for="current_password"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Password Saat Ini
                            </label>

                            <div class="relative">

                                <i class="bi bi-lock absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                <input
                                    id="current_password"
                                    name="current_password"
                                    x-bind:type="currentVisible ? 'text' : 'password'"
                                    autocomplete="current-password"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-12 text-sm text-slate-800 outline-none transition focus:border-violet-300 focus:bg-white focus:ring-4 focus:ring-violet-100"
                                >

                                <button
                                    type="button"
                                    @click="currentVisible = !currentVisible"
                                    class="absolute right-3 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-700"
                                >
                                    <i
                                        class="bi"
                                        :class="currentVisible ? 'bi-eye-slash' : 'bi-eye'"
                                    ></i>
                                </button>

                            </div>

                            @error('current_password', 'updatePassword')

                                <p class="mt-2 text-xs font-medium text-red-500">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        {{-- New --}}
                        <div>

                            <label
                                for="password"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Password Baru
                            </label>

                            <div class="relative">

                                <i class="bi bi-key absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                <input
                                    id="password"
                                    name="password"
                                    x-bind:type="newVisible ? 'text' : 'password'"
                                    autocomplete="new-password"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-12 text-sm text-slate-800 outline-none transition focus:border-violet-300 focus:bg-white focus:ring-4 focus:ring-violet-100"
                                >

                                <button
                                    type="button"
                                    @click="newVisible = !newVisible"
                                    class="absolute right-3 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-700"
                                >
                                    <i
                                        class="bi"
                                        :class="newVisible ? 'bi-eye-slash' : 'bi-eye'"
                                    ></i>
                                </button>

                            </div>

                            @error('password', 'updatePassword')

                                <p class="mt-2 text-xs font-medium text-red-500">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        {{-- Confirm --}}
                        <div>

                            <label
                                for="password_confirmation"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Konfirmasi Password Baru
                            </label>

                            <div class="relative">

                                <i class="bi bi-lock-fill absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                                <input
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    x-bind:type="confirmVisible ? 'text' : 'password'"
                                    autocomplete="new-password"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-12 text-sm text-slate-800 outline-none transition focus:border-violet-300 focus:bg-white focus:ring-4 focus:ring-violet-100"
                                >

                                <button
                                    type="button"
                                    @click="confirmVisible = !confirmVisible"
                                    class="absolute right-3 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-700"
                                >
                                    <i
                                        class="bi"
                                        :class="confirmVisible ? 'bi-eye-slash' : 'bi-eye'"
                                    ></i>
                                </button>

                            </div>

                            @error('password_confirmation', 'updatePassword')

                                <p class="mt-2 text-xs font-medium text-red-500">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <div class="flex justify-end border-t border-slate-100 pt-5">

                            <button
                                type="submit"
                                class="inline-flex items-center gap-2 rounded-xl bg-slate-900 px-5 py-3 text-sm font-bold text-white transition hover:bg-violet-600"
                            >
                                <i class="bi bi-shield-check"></i>
                                Perbarui Password
                            </button>

                        </div>

                    </form>

                </section>


                {{-- =================================================
                     DELETE ACCOUNT
                ================================================== --}}
                <section
                    id="danger-zone"
                    class="rounded-3xl border border-red-200 bg-white shadow-sm"
                >

                    <div class="border-b border-red-100 px-6 py-5 sm:px-8">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-50 text-red-500">
                                <i class="bi bi-trash3-fill"></i>
                            </div>

                            <div>

                                <h2 class="font-bold text-slate-900">
                                    Hapus Akun
                                </h2>

                                <p class="mt-1 text-sm text-slate-500">
                                    Tindakan ini bersifat permanen.
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="p-6 sm:p-8">

                        @include('profile.partials.delete-user-form')

                    </div>

                </section>

            </div>


            {{-- =================================================
                 RIGHT SIDEBAR
            ================================================== --}}
            <aside class="space-y-6 lg:sticky lg:top-28 lg:self-start">


                {{-- Account Summary --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                        Ringkasan Profil
                    </p>


                    <div class="mt-5 space-y-4">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                <i class="bi bi-person"></i>
                            </div>

                            <div>

                                <p class="text-xs text-slate-400">
                                    Nama
                                </p>

                                <p class="mt-0.5 text-sm font-bold text-slate-900">
                                    {{ auth()->user()->name }}
                                </p>

                            </div>

                        </div>


                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                <i class="bi bi-building"></i>
                            </div>

                            <div class="min-w-0">

                                <p class="text-xs text-slate-400">
                                    Usaha
                                </p>

                                <p class="mt-0.5 truncate text-sm font-bold text-slate-900">
                                    {{ auth()->user()->nama_usaha ?: 'Belum diisi' }}
                                </p>

                            </div>

                        </div>


                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                                <i class="bi bi-briefcase"></i>
                            </div>

                            <div>

                                <p class="text-xs text-slate-400">
                                    Bidang
                                </p>

                                <p class="mt-0.5 text-sm font-bold text-slate-900">
                                    {{ auth()->user()->bidang_usaha ?: 'Belum diisi' }}
                                </p>

                            </div>

                        </div>


                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div>

                                <p class="text-xs text-slate-400">
                                    Lokasi
                                </p>

                                <p class="mt-0.5 text-sm font-bold text-slate-900">
                                    {{ auth()->user()->lokasi ?: 'Belum diisi' }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Quick Links --}}
                <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="px-2 text-xs font-bold uppercase tracking-widest text-slate-400">
                        Akses Cepat
                    </p>


                    <div class="mt-3 space-y-1">

                        <a
                            href="{{ route('dashboard') }}"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-semibold text-slate-600 transition hover:bg-blue-50 hover:text-blue-600"
                        >
                            <i class="bi bi-grid-1x2"></i>
                            Dashboard
                        </a>


                        <a
                            href="{{ route('forum.index') }}"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-semibold text-slate-600 transition hover:bg-blue-50 hover:text-blue-600"
                        >
                            <i class="bi bi-chat-square-text"></i>
                            Forum Diskusi
                        </a>


                        <a
                            href="#security"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-semibold text-slate-600 transition hover:bg-violet-50 hover:text-violet-600"
                        >
                            <i class="bi bi-shield-lock"></i>
                            Keamanan Akun
                        </a>

                    </div>

                </div>


                {{-- Community CTA --}}
                <div class="overflow-hidden rounded-3xl bg-slate-900 p-6 text-white shadow-xl">

                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/10">
                        <i class="bi bi-people-fill text-blue-400"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-bold">
                        Bangun profilmu.
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-300">
                        Profil yang lengkap membantu anggota lain
                        mengenal pengalaman dan bisnis kamu.
                    </p>

                    <a
                        href="{{ route('forum.index') }}"
                        class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-white transition hover:text-blue-300"
                    >
                        Kembali ke Forum
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </aside>

        </div>

    </div>

</div>

@endsection