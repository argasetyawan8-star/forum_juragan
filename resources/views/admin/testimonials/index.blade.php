@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <h1 class="text-2xl font-bold text-slate-900">
                Testimonials
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola testimonial pelanggan atau pengguna Forum Juragan.
            </p>
        </div>

        <a
            href="{{ route('admin.testimonials.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700"
        >
            <i class="bi bi-plus-lg"></i>
            Tambah Testimonial
        </a>

    </div>


    {{-- Alert Success --}}
    @if(session('success'))
        <div
            class="rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700"
        >
            <div class="flex items-center gap-2">
                <i class="bi bi-check-circle-fill"></i>

                <span>
                    {{ session('success') }}
                </span>
            </div>
        </div>
    @endif


    {{-- Validation Error --}}
    @if($errors->any())
        <div
            class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"
        >
            <div class="font-semibold">
                Terdapat beberapa kesalahan:
            </div>

            <ul class="mt-2 list-disc space-y-1 pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{-- Table --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        <div class="overflow-x-auto">

            <table class="min-w-full divide-y divide-slate-200">

                <thead class="bg-slate-50">

                    <tr>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            #
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Testimonial
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Perusahaan
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Urutan
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-slate-100">

                    @forelse($testimonials as $testimonial)

                        <tr class="transition hover:bg-slate-50">

                            {{-- Number --}}
                            <td class="whitespace-nowrap px-6 py-4 text-sm text-slate-500">
                                {{ $testimonials->firstItem() + $loop->index }}
                            </td>


                            {{-- Profile --}}
                            <td class="min-w-[320px] px-6 py-4">

                                <div class="flex items-start gap-4">

                                    {{-- Foto --}}
                                    @if($testimonial->foto)

                                        <img
                                            src="{{ asset('storage/' . $testimonial->foto) }}"
                                            alt="{{ $testimonial->nama }}"
                                            class="h-12 w-12 shrink-0 rounded-full object-cover ring-2 ring-slate-100"
                                        >

                                    @else

                                        <div
                                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600"
                                        >
                                            <i class="bi bi-person text-xl"></i>
                                        </div>

                                    @endif


                                    {{-- Info --}}
                                    <div class="min-w-0">

                                        <p class="font-semibold text-slate-900">
                                            {{ $testimonial->nama }}
                                        </p>

                                        @if($testimonial->jabatan)

                                            <p class="mt-0.5 text-sm text-slate-500">
                                                {{ $testimonial->jabatan }}
                                            </p>

                                        @endif

                                        <p class="mt-2 line-clamp-2 max-w-xl text-sm leading-relaxed text-slate-600">
                                            "{{ $testimonial->isi }}"
                                        </p>

                                    </div>

                                </div>

                            </td>


                            {{-- Company --}}
                            <td class="whitespace-nowrap px-6 py-4 text-sm text-slate-600">

                                @if($testimonial->perusahaan)

                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-building text-slate-400"></i>
                                        {{ $testimonial->perusahaan }}
                                    </div>

                                @else

                                    <span class="text-slate-400">
                                        —
                                    </span>

                                @endif

                            </td>


                            {{-- Order --}}
                            <td class="whitespace-nowrap px-6 py-4 text-center">

                                <span class="inline-flex min-w-8 items-center justify-center rounded-lg bg-slate-100 px-2 py-1 text-sm font-semibold text-slate-700">
                                    {{ $testimonial->urutan }}
                                </span>

                            </td>


                            {{-- Status --}}
                            <td class="whitespace-nowrap px-6 py-4 text-center">

                                <form
                                    action="{{ route('admin.testimonials.status', $testimonial) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 text-xs font-semibold transition
                                            {{ $testimonial->status
                                                ? 'bg-emerald-100 text-emerald-700 hover:bg-emerald-200'
                                                : 'bg-slate-100 text-slate-500 hover:bg-slate-200'
                                            }}"
                                    >

                                        <span
                                            class="h-1.5 w-1.5 rounded-full
                                                {{ $testimonial->status
                                                    ? 'bg-emerald-500'
                                                    : 'bg-slate-400'
                                                }}"
                                        ></span>

                                        {{ $testimonial->status ? 'Aktif' : 'Nonaktif' }}

                                    </button>

                                </form>

                            </td>


                            {{-- Actions --}}
                            <td class="whitespace-nowrap px-6 py-4 text-right">

                                <div class="flex items-center justify-end gap-2">

                                    {{-- Edit --}}
                                    <a
                                        href="{{ route('admin.testimonials.edit', $testimonial) }}"
                                        class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-blue-200 hover:bg-blue-50 hover:text-blue-600"
                                        title="Edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>


                                    {{-- Delete --}}
                                    <form
                                        action="{{ route('admin.testimonials.destroy', $testimonial) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus testimonial ini?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                                            title="Hapus"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="px-6 py-16 text-center"
                            >

                                <div class="mx-auto flex max-w-sm flex-col items-center">

                                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 text-slate-400">
                                        <i class="bi bi-chat-quote text-2xl"></i>
                                    </div>

                                    <h3 class="mt-4 font-semibold text-slate-900">
                                        Belum ada testimonial
                                    </h3>

                                    <p class="mt-1 text-sm text-slate-500">
                                        Tambahkan testimonial pertama untuk ditampilkan di website.
                                    </p>

                                    <a
                                        href="{{ route('admin.testimonials.create') }}"
                                        class="mt-5 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700"
                                    >
                                        <i class="bi bi-plus-lg"></i>
                                        Tambah Testimonial
                                    </a>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- Pagination --}}
        @if($testimonials->hasPages())

            <div class="border-t border-slate-200 px-6 py-4">
                {{ $testimonials->links() }}
            </div>

        @endif

    </div>

</div>

@endsection