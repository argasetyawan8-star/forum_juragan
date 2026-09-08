<div
    id="reply-{{ $reply->id }}"
    class="group"
>
    <div class="flex gap-3">

        {{-- =====================================================
             AVATAR
        ====================================================== --}}
        <div class="relative shrink-0">

            <a
                href="{{ route('profile.public', $reply->user) }}"
                class="block h-10 w-10 overflow-hidden rounded-full sm:h-11 sm:w-11"
                title="Lihat profil {{ $reply->user->name ?? 'User' }}"
            >

                @if ($reply->user?->avatar)

                    <img
                        src="{{ asset('storage/' . $reply->user->avatar) }}"
                        alt="Foto profil {{ $reply->user->name ?? 'User' }}"
                        class="h-full w-full object-cover transition duration-300 hover:scale-105"
                    >

                @else

                    <div
                        class="flex h-full w-full items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 text-sm font-black text-white shadow-sm"
                    >
                        {{ strtoupper(substr($reply->user->name ?? 'U', 0, 1)) }}
                    </div>

                @endif

            </a>

        </div>


        {{-- =====================================================
             CONTENT
        ====================================================== --}}
        <div class="min-w-0 flex-1">

            {{-- =================================================
                 COMMENT BUBBLE
            ================================================== --}}
            <div
                class="rounded-2xl rounded-tl-md bg-slate-100 px-4 py-3 transition group-hover:bg-slate-50"
            >

                <div class="flex flex-wrap items-center gap-x-2 gap-y-1">

                    {{-- Username --}}
                    <a
                        href="{{ route('profile.public', $reply->user) }}"
                        class="text-sm font-black text-slate-900 transition hover:text-blue-600"
                    >
                        {{ $reply->user->name ?? 'User' }}
                    </a>


                    {{-- Thread Owner Badge --}}
                    @if ($reply->user_id === $thread->user_id)

                        <span
                            class="rounded-full bg-blue-50 px-2 py-0.5 text-[10px] font-bold text-blue-600"
                        >
                            <i class="bi bi-patch-check-fill mr-0.5"></i>
                            Pemilik Diskusi
                        </span>

                    @endif

                </div>


                {{-- Comment Text --}}
                <p class="mt-1.5 whitespace-pre-line break-words text-sm leading-6 text-slate-700">
                    {{ $reply->isi }}
                </p>

            </div>


            {{-- =================================================
                 ACTIONS
            ================================================== --}}
            <div class="mt-2 flex flex-wrap items-center gap-4 px-2">

                {{-- Time --}}
                <span class="text-[11px] font-medium text-slate-400">
                    {{ $reply->created_at->diffForHumans() }}
                </span>


                {{-- Reply --}}
                @auth

                    <button
                        type="button"
                        onclick="openReplyForm({{ $reply->id }}, @js($reply->user->name ?? 'User'))"
                        class="text-xs font-bold text-slate-500 transition hover:text-blue-600"
                    >
                        <i class="bi bi-reply-fill mr-1"></i>
                        Balas
                    </button>

                @endauth


                {{-- Delete Own Reply --}}
                @auth

                    @if ($reply->user_id === auth()->id())

                        <form
                            method="POST"
                            action="{{ route('forum.replies.destroy', $reply) }}"
                            onsubmit="return confirm('Yakin ingin menghapus komentar ini?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="text-xs font-bold text-slate-400 transition hover:text-red-500"
                            >
                                <i class="bi bi-trash3 mr-1"></i>
                                Hapus
                            </button>

                        </form>

                    @endif

                @endauth

            </div>


            {{-- =================================================
                 REPLY FORM
            ================================================== --}}
            @auth

                <div
                    id="reply-form-{{ $reply->id }}"
                    class="mt-3 hidden"
                >

                    <form
                        method="POST"
                        action="{{ route('forum.reply.store', $thread) }}"
                        class="rounded-2xl border border-blue-100 bg-blue-50/50 p-3"
                    >
                        @csrf

                        {{-- Parent Reply --}}
                        <input
                            type="hidden"
                            name="parent_id"
                            value="{{ $reply->id }}"
                        >


                        <div class="flex gap-2">

                            {{-- Current User Avatar --}}
                            <a
                                href="{{ route('profile.public', auth()->user()) }}"
                                class="h-8 w-8 shrink-0 overflow-hidden rounded-full"
                            >

                                @if (auth()->user()->avatar)

                                    <img
                                        src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                        alt="Foto {{ auth()->user()->name }}"
                                        class="h-full w-full object-cover"
                                    >

                                @else

                                    <div
                                        class="flex h-full w-full items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 text-xs font-black text-white"
                                    >
                                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                                    </div>

                                @endif

                            </a>


                            {{-- Input --}}
                            <textarea
                                name="isi"
                                rows="2"
                                required
                                maxlength="5000"
                                placeholder="Tulis balasan..."
                                class="min-w-0 flex-1 resize-none rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-700 outline-none placeholder:text-slate-400 focus:border-blue-300 focus:ring-4 focus:ring-blue-100"
                            ></textarea>

                        </div>


                        {{-- Form Actions --}}
                        <div class="mt-3 flex items-center justify-end gap-2">

                            <button
                                type="button"
                                onclick="closeReplyForm({{ $reply->id }})"
                                class="rounded-xl px-3 py-2 text-xs font-bold text-slate-500 transition hover:bg-white hover:text-slate-700"
                            >
                                Batal
                            </button>


                            <button
                                type="submit"
                                class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2 text-xs font-bold text-white transition hover:bg-blue-700"
                            >
                                Kirim

                                <i class="bi bi-send-fill"></i>
                            </button>

                        </div>

                    </form>

                </div>

            @endauth


            {{-- =================================================
                 CHILDREN / RECURSIVE REPLIES
            ================================================== --}}
            @if ($reply->children->count())

                <div
                    class="relative mt-4 space-y-4 border-l-2 border-slate-100 pl-4 sm:pl-5"
                >

                    @foreach ($reply->children as $child)

                        @include('forum.partials.reply', [
                            'reply' => $child,
                            'thread' => $thread,
                        ])

                    @endforeach

                </div>

            @endif

        </div>

    </div>
</div>