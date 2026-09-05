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
        Schema::create('threads', function (Blueprint $table) {
            $table->id();

            // Pemilik thread
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Kategori forum
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table->string('judul');
            $table->string('slug')->unique();
            $table->longText('isi');

            // Statistik
            $table->unsignedBigInteger('views')->default(0);

            // Status thread
            $table->string('status')->default('published');

            // Thread penting yang ditampilkan di atas
            $table->boolean('is_pinned')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};