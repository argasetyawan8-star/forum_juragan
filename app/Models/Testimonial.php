<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
        'perusahaan',
        'isi',
        'foto',
        'urutan',
        'status',
    ];

    protected $casts = [
        'urutan' => 'integer',
        'status' => 'boolean',
    ];
}