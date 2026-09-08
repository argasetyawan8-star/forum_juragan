<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeminarRegistration extends Model
{
    protected $fillable = [
        'seminar_id',
        'user_id',
        'nama',
        'email',
        'whatsapp',
        'nama_usaha',
        'jenis_usaha',
        'harapan',
        'status',
    ];

    public function seminar(): BelongsTo
    {
        return $this->belongsTo(Seminar::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}