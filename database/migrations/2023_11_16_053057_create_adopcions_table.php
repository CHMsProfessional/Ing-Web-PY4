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
        Schema::create('adopcions', function (Blueprint $table) {
            $table->id('adopcion_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('mascota_id');
            $table->date('fechaAdopcion');
            $table->foreign('cliente_id')->references('cliente_id')->on('clientes')->onDelete('cascade');
            $table->foreign('mascota_id')->references('mascota_id')->on('mascotas')->onDelete('cascade');

            $table->unique('mascota_id', 'Unique_Adopcion_Mascota');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopcions');
    }
};
