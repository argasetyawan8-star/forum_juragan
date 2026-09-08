<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('about')->nullable()->after('bio');
            $table->string('jabatan', 100)->nullable()->after('nama_usaha');
            $table->string('bidang_usaha', 150)->nullable()->after('jabatan');
            $table->string('lokasi', 150)->nullable()->after('bidang_usaha');
            $table->string('website')->nullable()->after('lokasi');
            $table->string('whatsapp', 30)->nullable()->after('website');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'about',
                'jabatan',
                'bidang_usaha',
                'lokasi',
                'website',
                'whatsapp',
            ]);
        });
    }
};