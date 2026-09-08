@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- =========================================================
        HEADER
    ========================================================== --}}
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

        <div>
            <div class="flex items-center gap-2 text-sm text-slate-400">
                <a
                    href="{{ route('home') }}"
                    class="transition hover:text-blue-600"
                >
                    Forum Juragan
                </a>

                <i class="bi bi-chevron-right text-xs"></i>

                <span>Konsultasi</span>
            </div>

            <h1 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Pengajuan Konsultasi
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola dan tindak lanjuti seluruh pengajuan konsultasi bisnis.
            </p>
        </div>

        <div class="flex items-center gap-2">
            <span class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-medium text-slate-600 shadow-sm">
                <i class="bi bi-clipboard-data text-blue-600"></i>
                {{ $consultations->total() }} Pengajuan
            </span>
        </div>

    </div>


    {{-- =========================================================
        SUCCESS MESSAGE
    ========================================================== --}}
    @if(session('success'))
        <div
            x-data="{ show: true }"
            x-show="show"
            x-transition
            class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-4"
        >
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
                <i class="bi bi-check-circle-fill"></i>
            </div>

            <div class="flex-1">
                <p class="text-sm font-semibold text-emerald-800">
                    Berhasil
                </p>

                <p class="mt-0.5 text-sm text-emerald-700">
                    {{ session('success') }}
                </p>
            </div>

            <button
                type="button"
                @click="show = false"
                class="text-emerald-500 transition hover:text-emerald-700"
            >
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    @endif


    {{-- =========================================================
        FILTER & SEARCH
    ========================================================== --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm sm:p-5">

        <form
            method="GET"
            action="{{ route('admin.consultation.index') }}"
            class="space-y-4"
        >

            <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">

                {{-- Search --}}
                <div class="lg:col-span-5">

                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        Cari pengajuan
                    </label>

                    <div class="relative">

                        <i class="bi bi-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Nama, email, WhatsApp, atau nama usaha..."
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                        >

                    </div>

                </div>


                {{-- Status --}}
                <div class="lg:col-span-3">

                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                    >
                        <option value="">Semua Status</option>

                        <option value="pending" @selected(request('status') === 'pending')>
                            Pending
                        </option>

                        <option value="contacted" @selected(request('status') === 'contacted')>
                            Contacted
                        </option>

                        <option value="scheduled" @selected(request('status') === 'scheduled')>
                            Scheduled
                        </option>

                        <option value="completed" @selected(request('status') === 'completed')>
                            Completed
                        </option>

                        <option value="cancelled" @selected(request('status') === 'cancelled')>
                            Cancelled
                        </option>
                    </select>

                </div>


                {{-- Layanan --}}
                <div class="lg:col-span-3">

                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        Layanan
                    </label>

                    <select
                        name="layanan"
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-700 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10"
                    >
                        <option value="">Semua Layanan</option>

                        <option
                            value="Konsultasi Manajemen Karyawan"
                            @selected(request('layanan') === 'Konsultasi Manajemen Karyawan')
                        >
                            Manajemen Karyawan
                        </option>

                        <option
                            value="Konsultasi Rekrutmen"
                            @selected(request('layanan') === 'Konsultasi Rekrutmen')
                        >
                            Rekrutmen
                        </option>

                        <option
                            value="Konsultasi Payroll & Gaji"
                            @selected(request('layanan') === 'Konsultasi Payroll & Gaji')
                        >
                            Payroll & Gaji
                        </option>

                        <option
                            value="Konsultasi SOP & Operasional"
                            @selected(request('layanan') === 'Konsultasi SOP & Operasional')
                        >
                            SOP & Operasional
                        </option>

                        <option
                            value="Konsultasi Kepemimpinan"
                            @selected(request('layanan') === 'Konsultasi Kepemimpinan')
                        >
                            Kepemimpinan
                        </option>

                        <option
                            value="Konsultasi Pengembangan Bisnis"
                            @selected(request('layanan') === 'Konsultasi Pengembangan Bisnis')
                        >
                            Pengembangan Bisnis
                        </option>
                    </select>

                </div>


                {{-- Button --}}
                <div class="flex items-end lg:col-span-1">

                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
                    >
                        <i class="bi bi-funnel"></i>

                        <span class="hidden xl:inline">
                            Filter
                        </span>
                    </button>

                </div>

            </div>


            {{-- Reset --}}
            @if(request()->hasAny(['search', 'status', 'layanan']))
                <div>
                    <a
                        href="{{ route('admin.consultation.index') }}"
                        class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-blue-600"
                    >
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Reset filter
                    </a>
                </div>
            @endif

        </form>

    </div>


    {{-- =========================================================
        TABLE
    ========================================================== --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- Desktop table --}}
        <div class="hidden overflow-x-auto lg:block">

            <table class="w-full min-w-[1100px] text-left">

                <thead class="border-b border-slate-200 bg-slate-50">

                    <tr>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Pemohon
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Layanan
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Masalah
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Budget
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Tanggal
                        </th>

                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    @forelse($consultations as $consultation)

                        <tr class="transition hover:bg-slate-50/70">

                            {{-- Pemohon --}}
                            <td class="px-6 py-5">

                                <div class="flex items-start gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 font-semibold text-blue-600">
                                        {{ strtoupper(substr($consultation->nama, 0, 1)) }}
                                    </div>

                                    <div class="min-w-0">

                                        <p class="font-semibold text-slate-900">
                                            {{ $consultation->nama }}
                                        </p>

                                        <p class="mt-0.5 truncate text-xs text-slate-500">
                                            {{ $consultation->email }}
                                        </p>

                                        <p class="mt-0.5 text-xs text-slate-500">
                                            {{ $consultation->whatsapp }}
                                        </p>

                                        @if($consultation->nama_usaha)
                                            <p class="mt-1 text-xs font-medium text-blue-600">
                                                {{ $consultation->nama_usaha }}
                                            </p>
                                        @endif

                                    </div>

                                </div>

                            </td>


                            {{-- Layanan --}}
                            <td class="px-6 py-5">

                                <span class="inline-flex max-w-[220px] rounded-lg bg-blue-50 px-3 py-1.5 text-xs font-semibold leading-relaxed text-blue-700">
                                    {{ $consultation->layanan }}
                                </span>

                            </td>


                            {{-- Masalah --}}
                            <td class="max-w-[280px] px-6 py-5">

                                <p
                                    class="line-clamp-3 text-sm leading-relaxed text-slate-600"
                                    title="{{ $consultation->masalah }}"
                                >
                                    {{ $consultation->masalah }}
                                </p>

                                @if($consultation->tujuan)
                                    <p class="mt-2 text-xs text-slate-400">
                                        <span class="font-semibold text-slate-500">
                                            Tujuan:
                                        </span>

                                        {{ \Illuminate\Support\Str::limit($consultation->tujuan, 80) }}
                                    </p>
                                @endif

                            </td>


                            {{-- Budget --}}
                            <td class="px-6 py-5">

                                @if($consultation->budget)
                                    <p class="whitespace-nowrap text-sm font-semibold text-slate-800">
                                        Rp {{ number_format($consultation->budget, 0, ',', '.') }}
                                    </p>
                                @else
                                    <span class="text-sm text-slate-400">
                                        Tidak diisi
                                    </span>
                                @endif

                            </td>


                            {{-- Tanggal --}}
                            <td class="px-6 py-5">

                                <p class="whitespace-nowrap text-sm font-medium text-slate-700">
                                    {{ $consultation->created_at->format('d M Y') }}
                                </p>

                                <p class="mt-1 text-xs text-slate-400">
                                    {{ $consultation->created_at->format('H:i') }}
                                </p>

                            </td>


                            {{-- Status --}}
                            <td class="px-6 py-5">

                                <form
                                    method="POST"
                                    action="{{ route('admin.consultation.status', $consultation) }}"
                                >

                                    @csrf
                                    @method('PATCH')

                                    <select
                                        name="status"
                                        onchange="this.form.submit()"
                                        class="rounded-lg border-0 px-3 py-2 text-xs font-semibold outline-none ring-1 ring-inset ring-slate-200 transition focus:ring-2 focus:ring-blue-500
                                        @if($consultation->status === 'pending')
                                            bg-amber-50 text-amber-700
                                        @elseif($consultation->status === 'contacted')
                                            bg-blue-50 text-blue-700
                                        @elseif($consultation->status === 'scheduled')
                                            bg-violet-50 text-violet-700
                                        @elseif($consultation->status === 'completed')
                                            bg-emerald-50 text-emerald-700
                                        @else
                                            bg-red-50 text-red-700
                                        @endif"
                                    >

                                        <option value="pending" @selected($consultation->status === 'pending')}>
                                            Pending
                                        </option>

                                        <option value="contacted" @selected($consultation->status === 'contacted')}>
                                            Contacted
                                        </option>

                                        <option value="scheduled" @selected($consultation->status === 'scheduled')}>
                                            Scheduled
                                        </option>

                                        <option value="completed" @selected($consultation->status === 'completed')}>
                                            Completed
                                        </option>

                                        <option value="cancelled" @selected($consultation->status === 'cancelled')}>
                                            Cancelled
                                        </option>

                                    </select>

                                </form>

                            </td>


                            {{-- Aksi --}}
                            <td class="px-6 py-5">

                                <div class="flex items-center justify-end gap-2">

                                    {{-- Detail --}}
                                    <button
                                        type="button"
                                        onclick="openConsultationModal(
                                            {{ \Illuminate\Support\Js::from([
                                                'nama' => $consultation->nama,
                                                'email' => $consultation->email,
                                                'whatsapp' => $consultation->whatsapp,
                                                'nama_usaha' => $consultation->nama_usaha,
                                                'jenis_usaha' => $consultation->jenis_usaha,
                                                'layanan' => $consultation->layanan,
                                                'masalah' => $consultation->masalah,
                                                'tujuan' => $consultation->tujuan,
                                                'preferensi_waktu' => $consultation->preferensi_waktu,
                                                'budget' => $consultation->budget
                                                    ? 'Rp ' . number_format($consultation->budget, 0, ',', '.')
                                                    : 'Tidak diisi',
                                                'status' => ucfirst($consultation->status),
                                                'tanggal' => $consultation->created_at->format('d M Y H:i'),
                                            ]) }}
                                        )"
                                        class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                                        title="Lihat detail"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </button>


                                    {{-- Delete --}}
                                    <form
                                        method="POST"
                                        action="{{ route('admin.consultation.destroy', $consultation) }}"
                                        onsubmit="return confirm('Yakin ingin menghapus pengajuan konsultasi ini?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                                            title="Hapus"
                                        >
                                            <i class="bi bi-trash3"></i>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="px-6 py-16 text-center">

                                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                                    <i class="bi bi-inbox text-2xl"></i>
                                </div>

                                <h3 class="mt-5 text-base font-semibold text-slate-900">
                                    Belum ada pengajuan konsultasi
                                </h3>

                                <p class="mx-auto mt-2 max-w-md text-sm text-slate-500">
                                    Pengajuan konsultasi dari pengguna akan muncul di halaman ini.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- =====================================================
            MOBILE / TABLET CARDS
        ====================================================== --}}
        <div class="divide-y divide-slate-100 lg:hidden">

            @forelse($consultations as $consultation)

                <div class="p-5">

                    <div class="flex items-start justify-between gap-4">

                        <div class="flex min-w-0 items-center gap-3">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 font-semibold text-blue-600">
                                {{ strtoupper(substr($consultation->nama, 0, 1)) }}
                            </div>

                            <div class="min-w-0">

                                <h3 class="truncate font-semibold text-slate-900">
                                    {{ $consultation->nama }}
                                </h3>

                                <p class="truncate text-xs text-slate-500">
                                    {{ $consultation->email }}
                                </p>

                            </div>

                        </div>

                        <span class="shrink-0 rounded-lg px-2.5 py-1 text-xs font-semibold
                            @if($consultation->status === 'pending')
                                bg-amber-50 text-amber-700
                            @elseif($consultation->status === 'contacted')
                                bg-blue-50 text-blue-700
                            @elseif($consultation->status === 'scheduled')
                                bg-violet-50 text-violet-700
                            @elseif($consultation->status === 'completed')
                                bg-emerald-50 text-emerald-700
                            @else
                                bg-red-50 text-red-700
                            @endif
                        ">
                            {{ ucfirst($consultation->status) }}
                        </span>

                    </div>


                    <div class="mt-4 grid grid-cols-2 gap-3">

                        <div class="rounded-xl bg-slate-50 p-3">
                            <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">
                                Layanan
                            </p>

                            <p class="mt-1 text-xs font-medium leading-relaxed text-slate-700">
                                {{ $consultation->layanan }}
                            </p>
                        </div>

                        <div class="rounded-xl bg-slate-50 p-3">
                            <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">
                                Tanggal
                            </p>

                            <p class="mt-1 text-xs font-medium text-slate-700">
                                {{ $consultation->created_at->format('d M Y') }}
                            </p>
                        </div>

                    </div>


                    <div class="mt-3">

                        <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-400">
                            Masalah
                        </p>

                        <p class="mt-1 line-clamp-3 text-sm leading-relaxed text-slate-600">
                            {{ $consultation->masalah }}
                        </p>

                    </div>


                    <div class="mt-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                        <form
                            method="POST"
                            action="{{ route('admin.consultation.status', $consultation) }}"
                            class="flex-1"
                        >

                            @csrf
                            @method('PATCH')

                            <select
                                name="status"
                                onchange="this.form.submit()"
                                class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-xs font-semibold text-slate-700 outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                            >
                                <option value="pending" @selected($consultation->status === 'pending')}>
                                    Pending
                                </option>

                                <option value="contacted" @selected($consultation->status === 'contacted')}>
                                    Contacted
                                </option>

                                <option value="scheduled" @selected($consultation->status === 'scheduled')}>
                                    Scheduled
                                </option>

                                <option value="completed" @selected($consultation->status === 'completed')}>
                                    Completed
                                </option>

                                <option value="cancelled" @selected($consultation->status === 'cancelled')}>
                                    Cancelled
                                </option>
                            </select>

                        </form>


                        <div class="flex gap-2">

                            <button
                                type="button"
                                onclick="openConsultationModal(
                                    {{ \Illuminate\Support\Js::from([
                                        'nama' => $consultation->nama,
                                        'email' => $consultation->email,
                                        'whatsapp' => $consultation->whatsapp,
                                        'nama_usaha' => $consultation->nama_usaha,
                                        'jenis_usaha' => $consultation->jenis_usaha,
                                        'layanan' => $consultation->layanan,
                                        'masalah' => $consultation->masalah,
                                        'tujuan' => $consultation->tujuan,
                                        'preferensi_waktu' => $consultation->preferensi_waktu,
                                        'budget' => $consultation->budget
                                            ? 'Rp ' . number_format($consultation->budget, 0, ',', '.')
                                            : 'Tidak diisi',
                                        'status' => ucfirst($consultation->status),
                                        'tanggal' => $consultation->created_at->format('d M Y H:i'),
                                    ]) }}
                                )"
                                class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-xs font-semibold text-slate-600 transition hover:bg-slate-50 sm:flex-none"
                            >
                                <i class="bi bi-eye"></i>
                                Detail
                            </button>


                            <form
                                method="POST"
                                action="{{ route('admin.consultation.destroy', $consultation) }}"
                                onsubmit="return confirm('Yakin ingin menghapus pengajuan konsultasi ini?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-500 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                                >
                                    <i class="bi bi-trash3"></i>
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @empty

                <div class="px-6 py-16 text-center">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                        <i class="bi bi-inbox text-2xl"></i>
                    </div>

                    <h3 class="mt-5 font-semibold text-slate-900">
                        Belum ada pengajuan konsultasi
                    </h3>

                    <p class="mt-2 text-sm text-slate-500">
                        Pengajuan konsultasi akan muncul di sini.
                    </p>

                </div>

            @endforelse

        </div>

    </div>


    {{-- =========================================================
        PAGINATION
    ========================================================== --}}
    @if($consultations->hasPages())

        <div class="rounded-2xl border border-slate-200 bg-white px-5 py-4 shadow-sm">
            {{ $consultations->links() }}
        </div>

    @endif

</div>


{{-- =============================================================
    DETAIL MODAL
============================================================= --}}
<div
    id="consultationModal"
    class="fixed inset-0 z-[100] hidden"
    aria-hidden="true"
>

    {{-- Overlay --}}
    <div
        class="absolute inset-0 bg-slate-950/50 backdrop-blur-sm"
        onclick="closeConsultationModal()"
    ></div>


    {{-- Modal --}}
    <div class="relative flex min-h-full items-center justify-center p-4">

        <div
            id="consultationModalContent"
            class="w-full max-w-2xl overflow-hidden rounded-3xl bg-white shadow-2xl"
        >

            {{-- Header --}}
            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-5">

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-blue-600">
                        Detail Pengajuan
                    </p>

                    <h2
                        id="modalNama"
                        class="mt-1 text-xl font-bold text-slate-900"
                    ></h2>
                </div>

                <button
                    type="button"
                    onclick="closeConsultationModal()"
                    class="flex h-10 w-10 items-center justify-center rounded-xl text-slate-400 transition hover:bg-slate-100 hover:text-slate-700"
                >
                    <i class="bi bi-x-lg"></i>
                </button>

            </div>


            {{-- Body --}}
            <div class="max-h-[75vh] overflow-y-auto px-6 py-6">

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Email
                        </p>

                        <p id="modalEmail" class="mt-2 break-all text-sm font-medium text-slate-800"></p>
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            WhatsApp
                        </p>

                        <p id="modalWhatsapp" class="mt-2 text-sm font-medium text-slate-800"></p>
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Nama Usaha
                        </p>

                        <p id="modalUsaha" class="mt-2 text-sm font-medium text-slate-800"></p>
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Jenis Usaha
                        </p>

                        <p id="modalJenisUsaha" class="mt-2 text-sm font-medium text-slate-800"></p>
                    </div>

                    <div class="sm:col-span-2 rounded-2xl bg-blue-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-blue-500">
                            Layanan
                        </p>

                        <p id="modalLayanan" class="mt-2 text-sm font-semibold text-blue-700"></p>
                    </div>

                    <div class="sm:col-span-2 rounded-2xl border border-slate-200 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Masalah Bisnis
                        </p>

                        <p id="modalMasalah" class="mt-2 whitespace-pre-line text-sm leading-relaxed text-slate-700"></p>
                    </div>

                    <div class="sm:col-span-2 rounded-2xl border border-slate-200 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Tujuan Konsultasi
                        </p>

                        <p id="modalTujuan" class="mt-2 whitespace-pre-line text-sm leading-relaxed text-slate-700"></p>
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Preferensi Waktu
                        </p>

                        <p id="modalWaktu" class="mt-2 text-sm font-medium text-slate-800"></p>
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Budget
                        </p>

                        <p id="modalBudget" class="mt-2 text-sm font-semibold text-slate-800"></p>
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Status
                        </p>

                        <p id="modalStatus" class="mt-2 text-sm font-semibold text-slate-800"></p>
                    </div>

                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Diajukan
                        </p>

                        <p id="modalTanggal" class="mt-2 text-sm font-medium text-slate-800"></p>
                    </div>

                </div>

            </div>


            {{-- Footer --}}
            <div class="border-t border-slate-100 bg-slate-50 px-6 py-4 text-right">

                <button
                    type="button"
                    onclick="closeConsultationModal()"
                    class="rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800"
                >
                    Tutup
                </button>

            </div>

        </div>

    </div>

</div>


{{-- =============================================================
    MODAL SCRIPT
============================================================= --}}
<script>
    function openConsultationModal(data) {
        document.getElementById('modalNama').textContent = data.nama || '-';
        document.getElementById('modalEmail').textContent = data.email || '-';
        document.getElementById('modalWhatsapp').textContent = data.whatsapp || '-';
        document.getElementById('modalUsaha').textContent = data.nama_usaha || 'Tidak diisi';
        document.getElementById('modalJenisUsaha').textContent = data.jenis_usaha || 'Tidak diisi';
        document.getElementById('modalLayanan').textContent = data.layanan || '-';
        document.getElementById('modalMasalah').textContent = data.masalah || '-';
        document.getElementById('modalTujuan').textContent = data.tujuan || 'Tidak diisi';
        document.getElementById('modalWaktu').textContent = data.preferensi_waktu || 'Tidak diisi';
        document.getElementById('modalBudget').textContent = data.budget || 'Tidak diisi';
        document.getElementById('modalStatus').textContent = data.status || '-';
        document.getElementById('modalTanggal').textContent = data.tanggal || '-';

        const modal = document.getElementById('consultationModal');

        modal.classList.remove('hidden');
        modal.setAttribute('aria-hidden', 'false');

        document.body.classList.add('overflow-hidden');
    }

    function closeConsultationModal() {
        const modal = document.getElementById('consultationModal');

        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', 'true');

        document.body.classList.remove('overflow-hidden');
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeConsultationModal();
        }
    });
</script>

@endsection