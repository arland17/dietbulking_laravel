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
        Schema::create('olahraga_diets', function (Blueprint $table) {
            $table->id();
            $table->text('activities'); // Daftar aktivitas olahraga
            $table->string('schedule'); // Jadwal latihan
            $table->text('notes'); // Catatan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olahraga_diets');
    }
};
