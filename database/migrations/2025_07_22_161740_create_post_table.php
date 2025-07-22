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
        Schema::create('post', function (Blueprint $table) {
             $table->id();
            $table->string('titulo');
            $table->text('contenido');
            $table->enum('estado', ['publicado', 'borrado', 'inactivo'])->default('inactivo');
            $table->string('url_imagen')->nullable();
            $table->date('fecha_publicacion')->nullable();
            $table->timestamps(); // incluye created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
