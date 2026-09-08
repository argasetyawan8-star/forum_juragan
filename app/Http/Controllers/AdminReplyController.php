<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminReplyController extends Controller
{
    /**
     * Menampilkan semua balasan.
     */
    public function index(Request $request)
    {
        $query = Reply::with([
            'user',
            'thread',
        ]);

        // Search berdasarkan isi reply,
        // nama/email user, atau judul thread.
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('isi', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery
                            ->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                    })
                    ->orWhereHas('thread', function ($threadQuery) use ($search) {
                        $threadQuery->where(
                            'judul',
                            'like',
                            "%{$search}%"
                        );
                    });
            });
        }

        $replies = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view(
            'admin.forum.replies.index',
            compact('replies')
        );
    }

    /**
     * Menghapus balasan.
     */
    public function destroy(Reply $reply): RedirectResponse
    {
        $thread = $reply->thread;

        $reply->delete();

        return redirect()
            ->route('admin.forum.threads.show', $thread)
            ->with(
                'success',
                'Balasan berhasil dihapus.'
            );
    }
}