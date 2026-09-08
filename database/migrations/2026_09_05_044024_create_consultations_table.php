<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('nama');
            $table->string('email');
            $table->string('whatsapp');

            $table->string('nama_usaha')->nullable();
            $table->string('jenis_usaha')->nullable();

            $table->string('layanan');

            $table->text('masalah');
            $table->text('tujuan')->nullable();

            $table->string('preferensi_waktu')->nullable();

            $table->unsignedInteger('budget')->nullable();

            $table->enum('status', [
                'pending',
                'contacted',
                'scheduled',
                'completed',
                'cancelled',
            ])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};