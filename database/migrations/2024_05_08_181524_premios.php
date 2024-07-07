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
        Schema::create('premios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_premio');
            $table->string('fecha');
            $table->string('categoria');
            $table->string('id_pelicula');
            $table->string('id_actor');
            $table->string('id_director');
            
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
