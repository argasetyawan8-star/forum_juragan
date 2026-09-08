<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consultation extends Model
{
    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'whatsapp',
        'nama_usaha',
        'jenis_usaha',
        'layanan',
        'masalah',
        'tujuan',
        'preferensi_waktu',
        'budget',
        'status',
    ];

    protected $casts = [
        'budget' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}