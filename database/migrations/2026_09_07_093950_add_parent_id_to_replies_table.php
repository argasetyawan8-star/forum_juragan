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
        Schema::table('replies', function (Blueprint $table) {
            $table->foreignId('parent_id')
                ->nullable()
                ->after('user_id')
                ->constrained('replies')
                ->cascadeOnDelete();

            $table->index(['thread_id', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('replies', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropIndex(['thread_id', 'parent_id']);
            $table->dropColumn('parent_id');
        });
    }
};