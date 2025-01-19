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
        Schema::create('olahraga_diet_calisthenics', function (Blueprint $table) {
            $table->id();
            $table->string('day'); // Hari seperti "Senin", "Selasa"
            $table->string('category')->nullable(); // Kategori seperti "Upper Body", "Kardio/REST"
            $table->text('exercises'); // Daftar latihan atau aktivitas
            $table->text('notes')->nullable(); // Catatan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olahraga_diet_calisthenics');
    }
};
