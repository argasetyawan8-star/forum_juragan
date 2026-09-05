<header class="sticky top-0 z-40 border-b border-slate-200 bg-white/90 backdrop-blur">

    <div class="flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">

        {{-- Left --}}
        <div class="flex items-center gap-4">

            {{-- Mobile menu --}}
            <button
                type="button"
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-600 transition hover:bg-slate-50 lg:hidden"
            >
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
            </button>

            <div>
                <p class="text-sm font-medium text-slate-400">
                    Admin Panel
                </p>

                <h1 class="text-lg font-bold text-slate-900">
                    Dashboard
                </h1>
            </div>

        </div>


        {{-- Right --}}
        <div class="flex items-center gap-2 sm:gap-4">

            {{-- Search --}}
            <button
                type="button"
                class="hidden h-10 items-center gap-2 rounded-xl border border-slate-200 px-3 text-sm text-slate-500 transition hover:bg-slate-50 sm:flex"
            >
                <svg
                    class="h-4 w-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <circle cx="11" cy="11" r="7"/>
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M20 20l-4-4"
                    />
                </svg>

                Search
            </button>


            {{-- Notification --}}
            <button
                type="button"
                class="relative flex h-10 w-10 items-center justify-center rounded-xl text-slate-500 transition hover:bg-slate-50 hover:text-blue-600"
            >

                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M18 8a6 6 0 00-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.73 21a2 2 0 01-3.46 0"
                    />
                </svg>

                <span class="absolute right-2 top-2 h-2 w-2 rounded-full bg-red-500"></span>

            </button>


            {{-- Divider --}}
            <div class="hidden h-8 w-px bg-slate-200 sm:block"></div>


            {{-- Profile --}}
            <button
                type="button"
                class="flex items-center gap-3 rounded-xl p-1.5 transition hover:bg-slate-50"
            >

                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">
                    AD
                </div>

                <div class="hidden text-left sm:block">
                    <p class="text-sm font-semibold text-slate-900">
                        Administrator
                    </p>

                    <p class="text-xs text-slate-500">
                        Super Admin
                    </p>
                </div>

                <svg
                    class="hidden h-4 w-4 text-slate-400 sm:block"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 9l6 6 6-6"
                    />
                </svg>

            </button>

        </div>

    </div>

</header>