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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id('mascota_id');
            $table->string('tipo');
            $table->string('nombre');
            $table->string('raza')->nullable();
            $table->string('color')->nullable();
            $table->string('tamano')->nullable();
            $table->tinyInteger('disponibilidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
