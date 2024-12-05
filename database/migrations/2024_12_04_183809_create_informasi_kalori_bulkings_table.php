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
        Schema::create('informasi_kalori_bulkings', function (Blueprint $table) {
            $table->id();
            $table->string('total_kalori');
            $table->string('makanan');
            $table->string('snack');
            $table->text('tambahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_kalori_bulkings');
    }
};
