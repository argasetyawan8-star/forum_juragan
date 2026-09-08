<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seminar extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'pembicara',
        'jabatan_pembicara',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'format',
        'lokasi',
        'link_meeting',
        'harga',
        'kapasitas',
        'sertifikat',
        'materi',
        'gambar',
        'status',
        'is_featured',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'harga' => 'integer',
        'kapasitas' => 'integer',
        'sertifikat' => 'boolean',
        'materi' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function registrations(): HasMany
    {
        return $this->hasMany(SeminarRegistration::class);
    }
}