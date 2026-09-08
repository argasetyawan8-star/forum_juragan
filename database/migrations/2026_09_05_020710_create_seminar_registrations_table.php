<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seminar_registrations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('seminar_id')
                ->constrained('seminars')
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('nama');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('nama_usaha')->nullable();
            $table->string('jenis_usaha')->nullable();
            $table->text('harapan')->nullable();

            $table->enum('status', [
                'registered',
                'confirmed',
                'attended',
                'cancelled',
            ])->default('registered');

            $table->timestamps();

            $table->unique(['seminar_id', 'email']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seminar_registrations');
    }
};