<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'Manajemen Karyawan',
                'slug' => 'manajemen-karyawan',
                'deskripsi' => 'Diskusi seputar pengelolaan karyawan, tim, dan budaya kerja.',
            ],
            [
                'nama_kategori' => 'Rekrutmen',
                'slug' => 'rekrutmen',
                'deskripsi' => 'Tips mencari, menyeleksi, dan mendapatkan karyawan terbaik.',
            ],
            [
                'nama_kategori' => 'Payroll & Gaji',
                'slug' => 'payroll-gaji',
                'deskripsi' => 'Diskusi tentang penggajian, payroll, tunjangan, dan administrasi karyawan.',
            ],
            [
                'nama_kategori' => 'SOP & Operasional',
                'slug' => 'sop-operasional',
                'deskripsi' => 'Berbagi pengalaman mengenai SOP dan pengelolaan operasional bisnis.',
            ],
            [
                'nama_kategori' => 'Kepemimpinan',
                'slug' => 'kepemimpinan',
                'deskripsi' => 'Belajar menjadi pemimpin dan membangun tim yang solid.',
            ],
            [
                'nama_kategori' => 'Produktivitas Bisnis',
                'slug' => 'produktivitas-bisnis',
                'deskripsi' => 'Strategi meningkatkan produktivitas dan efisiensi bisnis.',
            ],
            [
                'nama_kategori' => 'Motivasi & Pengembangan',
                'slug' => 'motivasi-pengembangan',
                'deskripsi' => 'Diskusi motivasi, pengembangan diri, dan pengembangan karyawan.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}