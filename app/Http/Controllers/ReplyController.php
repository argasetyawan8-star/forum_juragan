<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use App\Notifications\ReplyNotification;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request, Thread $thread)
    {
        $validated = $request->validate([
            'isi' => ['required', 'string', 'max:5000'],
            'parent_id' => ['nullable', 'integer', 'exists:replies,id'],
        ], [
            'isi.required' => 'Balasan tidak boleh kosong.',
            'isi.max' => 'Balasan maksimal 5000 karakter.',
            'parent_id.exists' => 'Komentar yang ingin dibalas tidak ditemukan.',
        ]);

        $parent = null;

        /*
        |--------------------------------------------------------------------------
        | Jika ini adalah balasan terhadap komentar
        |--------------------------------------------------------------------------
        */
        if (!empty($validated['parent_id'])) {
            $parent = Reply::with('user')
                ->where('id', $validated['parent_id'])
                ->where('thread_id', $thread->id)
                ->firstOrFail();
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan reply
        |--------------------------------------------------------------------------
        */
        $reply = Reply::create([
            'thread_id' => $thread->id,
            'user_id' => auth()->id(),
            'parent_id' => $parent?->id,
            'isi' => $validated['isi'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Load relasi untuk notification
        |--------------------------------------------------------------------------
        */
        $reply->load([
            'user',
            'thread.user',
        ]);

        /*
        |--------------------------------------------------------------------------
        | NOTIFIKASI
        |--------------------------------------------------------------------------
        */

        if ($parent) {

            /*
            | Jika membalas komentar seseorang,
            | pemilik komentar mendapat notifikasi.
            */
            if ($parent->user_id !== auth()->id()) {
                $parent->user->notify(
                    new ReplyNotification($reply)
                );
            }

        } else {

            /*
            | Jika komentar baru pada thread,
            | pemilik thread mendapat notifikasi.
            */
            if (
                $thread->user_id !== auth()->id()
                && $thread->user
            ) {
                $thread->user->notify(
                    new ReplyNotification($reply)
                );
            }
        }

        return redirect()
            ->route('forum.show', $thread->slug)
            ->with(
                'success',
                $parent
                    ? 'Balasan berhasil dikirim.'
                    : 'Komentar berhasil dikirim.'
            );
    }
}