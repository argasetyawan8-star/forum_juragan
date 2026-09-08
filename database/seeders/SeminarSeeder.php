<?php

namespace Database\Seeders;

use App\Models\Seminar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeminarSeeder extends Seeder
{
    public function run(): void
    {
        Seminar::create([
            'judul' => 'Leadership untuk Pemilik Bisnis',
            'slug' => Str::slug('Leadership untuk Pemilik Bisnis'),
            'deskripsi' => 'Seminar praktis untuk membantu pemilik bisnis membangun kepemimpinan yang kuat dan tim yang produktif.',
            'pembicara' => 'Budi Santoso',
            'jabatan_pembicara' => 'Business Coach & Founder',
            'tanggal' => '2026-09-20',
            'jam_mulai' => '09:00',
            'jam_selesai' => '12:00',
            'format' => 'online',
            'lokasi' => 'Zoom Meeting',
            'link_meeting' => null,
            'harga' => 150000,
            'kapasitas' => 100,
            'sertifikat' => true,
            'materi' => true,
            'gambar' => null,
            'status' => 'published',
            'is_featured' => true,
        ]);

        Seminar::create([
            'judul' => 'Strategi Bisnis di Era Digital',
            'slug' => Str::slug('Strategi Bisnis di Era Digital'),
            'deskripsi' => 'Pelajari strategi membangun dan mengembangkan bisnis di tengah perubahan digital yang semakin cepat.',
            'pembicara' => 'Andi Pratama',
            'jabatan_pembicara' => 'Digital Business Consultant',
            'tanggal' => '2026-09-27',
            'jam_mulai' => '13:00',
            'jam_selesai' => '16:00',
            'format' => 'hybrid',
            'lokasi' => 'Jakarta & Zoom Meeting',
            'link_meeting' => null,
            'harga' => 200000,
            'kapasitas' => 150,
            'sertifikat' => true,
            'materi' => true,
            'gambar' => null,
            'status' => 'published',
            'is_featured' => true,
        ]);

        Seminar::create([
            'judul' => 'Membangun Tim yang Produktif',
            'slug' => Str::slug('Membangun Tim yang Produktif'),
            'deskripsi' => 'Membangun budaya kerja dan sistem tim yang dapat meningkatkan produktivitas bisnis.',
            'pembicara' => 'Rina Maharani',
            'jabatan_pembicara' => 'HR & Business Consultant',
            'tanggal' => '2026-10-04',
            'jam_mulai' => '09:00',
            'jam_selesai' => '12:00',
            'format' => 'offline',
            'lokasi' => 'Yogyakarta',
            'link_meeting' => null,
            'harga' => 175000,
            'kapasitas' => 75,
            'sertifikat' => true,
            'materi' => true,
            'gambar' => null,
            'status' => 'draft',
            'is_featured' => false,
        ]);
    }
}