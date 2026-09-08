<?php

namespace App\Notifications;

use App\Models\Reply;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class ReplyNotification extends Notification
{
    use Queueable;

    public function __construct(
        public Reply $reply
    ) {
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        $isCommentOnThread = $this->reply->parent_id === null;

        return [
            'type' => $isCommentOnThread ? 'thread_comment' : 'reply',
            'reply_id' => $this->reply->id,
            'thread_id' => $this->reply->thread_id,
            'thread_slug' => $this->reply->thread->slug,
            'thread_title' => $this->reply->thread->judul,
            'actor_name' => $this->reply->user->name,

            'message' => $isCommentOnThread
                ? 'mengomentari diskusi kamu.'
                : 'membalas komentar kamu.',
        ];
    }
}