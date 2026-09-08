<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();

            // Informasi utama seminar
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('deskripsi')->nullable();

            // Detail seminar
            $table->string('pembicara');
            $table->string('jabatan_pembicara')->nullable();

            // Jadwal
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');

            // Lokasi
            $table->enum('format', ['online', 'offline', 'hybrid'])
                ->default('online');

            $table->string('lokasi')->nullable();
            $table->string('link_meeting')->nullable();

            // Harga dan kapasitas
            $table->unsignedInteger('harga')->default(0);
            $table->unsignedInteger('kapasitas')->nullable();

            // Materi dan fasilitas
            $table->boolean('sertifikat')->default(false);
            $table->boolean('materi')->default(false);

            // Gambar seminar
            $table->string('gambar')->nullable();

            // Status seminar
            $table->enum('status', ['draft', 'published', 'completed', 'cancelled'])
                ->default('draft');

            // Featured untuk ditampilkan lebih menonjol di landing page
            $table->boolean('is_featured')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminars');
    }
};