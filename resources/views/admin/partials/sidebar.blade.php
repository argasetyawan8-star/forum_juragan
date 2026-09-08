<aside
    class="fixed inset-y-0 left-0 z-40 hidden w-72 flex-col border-r border-slate-200 bg-white lg:flex"
>
    {{-- Logo / Brand --}}
    <div class="flex h-20 shrink-0 items-center border-b border-slate-100 px-6">
        <a
            href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3"
        >
            <div
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-sm font-bold text-white shadow-lg shadow-blue-600/20"
            >
                FJ
            </div>

            <div>
                <p class="text-sm font-bold text-slate-900">
                    Forum Juragan
                </p>

                <p class="text-xs text-slate-400">
                    Admin Panel
                </p>
            </div>
        </a>
    </div>


    {{-- Navigation --}}
    <div class="flex-1 overflow-y-auto px-4 py-6">

        {{-- Main --}}
        <div class="mb-3 px-3">
            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-400">
                Main Menu
            </p>
        </div>


        <nav class="space-y-1">

            {{-- Dashboard --}}
            <a
                href="{{ route('admin.dashboard') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.dashboard')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 13.125h5.25v7.125H3v-7.125zm0-9.375h5.25v6.375H3V3.75zm12.75 0H21v10.5h-5.25V3.75zM15.75 16.125H21v4.125h-5.25v-4.125z"
                        />
                    </svg>
                </div>

                <span>
                    Dashboard
                </span>
            </a>


            {{-- Users --}}
            <a
                href="{{ route('admin.users') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.users*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.users*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 01-6 0M18.75 10.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM6.75 15.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0z"
                        />
                    </svg>
                </div>

                <span>
                    Users
                </span>
            </a>

        </nav>


        {{-- Forum --}}
        <div class="mb-3 mt-8 px-3">
            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-400">
                Forum
            </p>
        </div>


        <nav class="space-y-1">

            {{-- Categories --}}
            <a
                href="{{ route('admin.forum.categories') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.forum.categories*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.forum.categories*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.5 6.75h15m-15 5.25h15m-15 5.25h9"
                        />
                    </svg>
                </div>

                <span>
                    Categories
                </span>
            </a>


            {{-- Threads --}}
            <a
                href="{{ route('admin.forum.threads') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.forum.threads*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.forum.threads*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.625 9.75h6.75m-6.75 3h4.5M21 12c0 4.142-4.03 7.5-9 7.5a9.72 9.72 0 01-4.11-.885L3 20l1.62-4.86A7.11 7.11 0 013 12c0-4.142 4.03-7.5 9-7.5s9 3.358 9 7.5z"
                        />
                    </svg>
                </div>

                <span>
                    Threads
                </span>
            </a>


            {{-- Replies --}}
            <a
                href="{{ route('admin.forum.replies') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.forum.replies*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.forum.replies*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3.75h5.25M4.5 19.5v-15a2.25 2.25 0 012.25-2.25h10.5a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25H9l-4.5 3.75z"
                        />
                    </svg>
                </div>

                <span>
                    Replies
                </span>
            </a>

        </nav>


        {{-- Seminar --}}
        <div class="mb-3 mt-8 px-3">
            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-400">
                Seminar
            </p>
        </div>


        <nav class="space-y-1">

            {{-- Seminars --}}
            <a
                href="{{ route('admin.seminar.seminars') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.seminar.seminars*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.seminar.seminars*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6.75v10.5M6.75 10.5h10.5M5.25 3.75h13.5A2.25 2.25 0 0121 6v12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18V6a2.25 2.25 0 012.25-2.25z"
                        />
                    </svg>
                </div>

                <span>
                    Seminars
                </span>
            </a>


            {{-- Registrations --}}
            <a
                href="{{ route('admin.seminar.registrations') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.seminar.registrations*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.seminar.registrations*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 5.25h6M9 8.25h6M7.5 3h9A1.5 1.5 0 0118 4.5v15A1.5 1.5 0 0116.5 21h-9A1.5 1.5 0 016 19.5v-15A1.5 1.5 0 017.5 3z"
                        />
                    </svg>
                </div>

                <span>
                    Registrations
                </span>
            </a>

        </nav>


        {{-- Business --}}
        <div class="mb-3 mt-8 px-3">
            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-400">
                Business
            </p>
        </div>


        <nav class="space-y-1">

            {{-- Konsultasi --}}
            <a
                href="{{ route('admin.consultation.index') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.consultation*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.consultation*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 13.125h3.375a1.125 1.125 0 011.125 1.125v.75a1.125 1.125 0 001.125 1.125h6.75a1.125 1.125 0 001.125-1.125v-.75a1.125 1.125 0 011.125-1.125H21M5.25 13.125V6.75a2.25 2.25 0 012.25-2.25h9a2.25 2.25 0 012.25 2.25v6.375M9 8.625h6"
                        />
                    </svg>
                </div>

                <span>
                    Konsultasi
                </span>
            </a>

        </nav>


        {{-- CMS --}}
        <div class="mb-3 mt-8 px-3">
            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-400">
                Website CMS
            </p>
        </div>


        <nav class="space-y-1">

            {{-- Banners --}}
            <a
                href="{{ route('admin.banners.index') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.banners*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.banners*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5v10.5H3.75V6.75zm3 2.25h3m-3 3h7.5"
                        />
                    </svg>
                </div>

                <span>
                    Banners
                </span>
            </a>


            {{-- Testimonials --}}
            <a
                href="{{ route('admin.testimonials.index') }}"
                class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition
                {{ request()->routeIs('admin.testimonials*')
                    ? 'bg-blue-50 text-blue-600'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}"
            >
                <div
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg
                    {{ request()->routeIs('admin.testimonials*')
                        ? 'bg-blue-100 text-blue-600'
                        : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200 group-hover:text-slate-700' }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.625 8.25h6.75M8.625 12h4.5m-7.875 7.5h10.5a4.5 4.5 0 004.5-4.5V9a4.5 4.5 0 00-4.5-4.5H8.25A4.5 4.5 0 003.75 9v6a4.5 4.5 0 001.5 3.375V21l3.375-1.5z"
                        />
                    </svg>
                </div>

                <span>
                    Testimonials
                </span>
            </a>


            {{-- Settings --}}
            <div
                class="flex cursor-not-allowed items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-slate-400"
            >
                <div class="flex items-center gap-3">

                    <div
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-slate-100 text-slate-400"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.5 6.75a1.5 1.5 0 013 0v.09a1.5 1.5 0 001.02 1.42l.09.03a1.5 1.5 0 001.77-.63l.045-.078a1.5 1.5 0 012.598 1.5l-.045.078a1.5 1.5 0 00.75 2.04l.083.035a1.5 1.5 0 01-.005 2.77l-.083.034a1.5 1.5 0 00-.75 2.04l.045.078a1.5 1.5 0 01-2.598 1.5l-.045-.078a1.5 1.5 0 00-1.77-.63l-.09.03a1.5 1.5 0 00-1.02 1.42v.09a1.5 1.5 0 01-3 0v-.09a1.5 1.5 0 00-1.02-1.42l-.09-.03a1.5 1.5 0 00-1.77.63l-.045.078a1.5 1.5 0 01-2.598-1.5l.045-.078a1.5 1.5 0 00-.75-2.04l-.083-.034a1.5 1.5 0 01.005-2.77l.083-.035a1.5 1.5 0 00.75-2.04l-.045-.078a1.5 1.5 0 012.598-1.5l.045.078a1.5 1.5 0 001.77.63l.09-.03a1.5 1.5 0 001.02-1.42v-.09z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 14.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                            />
                        </svg>
                    </div>

                    <span>
                        Settings
                    </span>
                </div>

                <span class="rounded-full bg-slate-100 px-2 py-0.5 text-[9px] font-bold uppercase tracking-wide text-slate-400">
                    Soon
                </span>
            </div>

        </nav>

    </div>


    {{-- Admin Profile --}}
    <div class="shrink-0 border-t border-slate-100 p-4">

        <div class="flex items-center gap-3 rounded-xl bg-slate-50 p-3">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-bold text-white">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>

            <div class="min-w-0 flex-1">

                <p class="truncate text-sm font-semibold text-slate-800">
                    {{ auth()->user()->name ?? 'Admin' }}
                </p>

                <p class="truncate text-xs text-slate-400">
                    {{ auth()->user()->email ?? '' }}
                </p>

            </div>

        </div>

    </div>

</aside>