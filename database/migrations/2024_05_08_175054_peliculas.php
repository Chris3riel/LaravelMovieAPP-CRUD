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
        //
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('fecha_lanzamiento');
            $table->string('duracion');
            $table->string('clasificacion');
            $table->string('sinopsis');
            $table->string('presupuesto');
            $table->string('estudio');
            $table->string('nombre_director');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
