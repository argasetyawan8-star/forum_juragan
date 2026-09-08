<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserLink extends Model
{
    protected $fillable = [
        'user_id',
        'label',
        'url',
        'icon',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}