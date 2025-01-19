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
        Schema::create('makanan_harian_diet_perempuans', function (Blueprint $table) {
            $table->id(); 
            $table->string('waktu'); 
            $table->string('jenis'); 
            $table->string('jumlah'); 
            $table->string('keterangan')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan_harian_diet_perempuans');
    }
};
