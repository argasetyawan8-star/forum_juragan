<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'nama_kategori',
        'slug',
        'deskripsi',
    ];

    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class);
    }
}