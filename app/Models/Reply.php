<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reply extends Model
{
    protected $fillable = [
        'thread_id',
        'user_id',
        'isi',
    ];

    /**
     * Thread yang dibalas
     */
    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class);
    }

    /**
     * User yang membuat balasan
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}