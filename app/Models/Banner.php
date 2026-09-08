<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'judul',
        'subjudul',
        'gambar',
        'teks_tombol',
        'link',
        'urutan',
        'status',
    ];

    protected $casts = [
        'urutan' => 'integer',
        'status' => 'boolean',
    ];
}