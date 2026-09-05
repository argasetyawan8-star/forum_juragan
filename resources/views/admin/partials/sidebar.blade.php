<aside
    class="fixed inset-y-0 left-0 z-50 hidden w-72 flex-col border-r border-slate-200 bg-white lg:flex"
>

    {{-- Logo --}}
    <div class="flex h-20 shrink-0 items-center border-b border-slate-100 px-6">

        <a href="#" class="flex items-center gap-3">

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">

                <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 11.5a8.38 8.38 0 01-1.9 5.4 8.5 8.5 0 01-6.6 3.1 8.38 8.38 0 01-5.4-1.9L3 19l1.9-4.1A8.38 8.38 0 013 9.5 8.5 8.5 0 0111.5 1 8.38 8.38 0 0116.9 2.9 8.5 8.5 0 0121 9.5v2z"
                    />
                </svg>

            </div>

            <div>
                <p class="text-base font-bold text-slate-900">
                    Forum Juragan
                </p>

                <p class="text-xs font-medium text-slate-400">
                    Admin Panel
                </p>
            </div>

        </a>

    </div>


    {{-- Navigation --}}
    <div class="flex-1 overflow-y-auto px-4 py-6">

        <nav class="space-y-7">

            {{-- MAIN --}}
            <div>

                <p class="mb-3 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    Main
                </p>

                <div class="space-y-1">

                    {{-- Dashboard --}}
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-xl bg-blue-50 px-3 py-2.5 text-sm font-semibold text-blue-700"
                    >

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                        </svg>

                        Dashboard

                    </a>


                    {{-- Users --}}
                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >

                        <svg
                            class="h-5 w-5 text-slate-400 group-hover:text-blue-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"
                            />

                            <circle cx="9" cy="7" r="4"/>

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M23 21v-2a4 4 0 00-3-3.87"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16 3.13a4 4 0 010 7.75"
                            />
                        </svg>

                        Users

                    </a>

                </div>

            </div>


            {{-- FORUM --}}
            <div>

                <p class="mb-3 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    Forum
                </p>

                <div class="space-y-1">

                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <span class="flex h-5 w-5 items-center justify-center">
                            #
                        </span>

                        Categories
                    </a>


                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >

                        <svg
                            class="h-5 w-5 text-slate-400 group-hover:text-blue-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 10h8M8 14h5"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 11.5a8.38 8.38 0 01-1.9 5.4A8.5 8.5 0 0112.5 20a8.38 8.38 0 01-5.4-1.9L3 20l1.9-4.1A8.38 8.38 0 013 9.5 8.5 8.5 0 0111.5 1 8.5 8.5 0 0121 9.5v2z"
                            />
                        </svg>

                        Threads
                    </a>


                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >

                        <svg
                            class="h-5 w-5 text-slate-400 group-hover:text-blue-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M20 11.5a8 8 0 01-8 8H7l-4 2 1.5-4A8 8 0 1112 3.5a8 8 0 018 8z"
                            />
                        </svg>

                        Replies
                    </a>

                </div>

            </div>


            {{-- SEMINAR --}}
            <div>

                <p class="mb-3 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    Seminar
                </p>

                <div class="space-y-1">

                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <span class="text-lg">▣</span>
                        Seminars
                    </a>

                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <span class="text-lg">✓</span>
                        Registrations
                    </a>

                </div>

            </div>


            {{-- BUSINESS --}}
            <div>

                <p class="mb-3 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    Business
                </p>

                <div class="space-y-1">

                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <svg
                            class="h-5 w-5 text-slate-400 group-hover:text-blue-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"
                            />
                        </svg>

                        Konsultasi

                    </a>


                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <svg
                            class="h-5 w-5 text-slate-400 group-hover:text-blue-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 7h18M5 7v12h14V7M8 4h8l2 3H6l2-3z"
                            />
                        </svg>

                        Banners

                    </a>


                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <svg
                            class="h-5 w-5 text-slate-400 group-hover:text-blue-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3l2.09 4.26L19 8l-3.5 3.41L16.18 16 12 13.77 7.82 16l.68-4.59L5 8l4.91-.74L12 3z"
                            />
                        </svg>

                        Testimonials

                    </a>

                </div>

            </div>


            {{-- SYSTEM --}}
            <div>

                <p class="mb-3 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    System
                </p>

                <div class="space-y-1">

                    <a
                        href="#"
                        class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-blue-600"
                    >
                        <svg
                            class="h-5 w-5 text-slate-400 group-hover:text-blue-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.4 15a1.7 1.7 0 00.34 1.88l.06.06-1.8 1.8-.06-.06a1.7 1.7 0 00-1.88-.34 1.7 1.7 0 00-1.03 1.56V20h-2.55v-.1a1.7 1.7 0 00-1.03-1.56 1.7 1.7 0 00-1.88.34l-.06.06-1.8-1.8.06-.06A1.7 1.7 0 009.1 15a1.7 1.7 0 00-1.56-1.03H7v-2.55h.1A1.7 1.7 0 008.66 10a1.7 1.7 0 00-.34-1.88l-.06-.06 1.8-1.8.06.06A1.7 1.7 0 0012 6.1V6h2.55v.1a1.7 1.7 0 001.03 1.56 1.7 1.7 0 001.88-.34l.06-.06 1.8 1.8-.06.06A1.7 1.7 0 0019.4 11c.2.62.78 1.03 1.43 1.03H21v2.55h-.17c-.65 0-1.23.41-1.43 1.03z"
                            />
                        </svg>

                        Settings
                    </a>

                </div>

            </div>

        </nav>

    </div>


    {{-- Admin Profile --}}
    <div class="shrink-0 border-t border-slate-100 p-4">

        <div class="flex items-center gap-3 rounded-2xl bg-slate-50 p-3">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-bold text-white">
                AD
            </div>

            <div class="min-w-0 flex-1">
                <p class="truncate text-sm font-semibold text-slate-900">
                    Administrator
                </p>

                <p class="truncate text-xs text-slate-500">
                    Admin Forum Juragan
                </p>
            </div>

            <button
                type="button"
                class="text-slate-400 transition hover:text-slate-700"
            >
                ⋮
            </button>

        </div>

    </div>

</aside>