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
    Schema::create('postulaciones', function (Blueprint $table) {
        $table->id();
        $table->foreignId('empleo_id')->constrained('empleos')->cascadeOnDelete();
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->text('carta_presentacion')->nullable();
        $table->enum('estado', ['pendiente', 'en_revision', 'aceptado', 'rechazado'])->default('pendiente');
        $table->dateTime('fecha_postulacion')->useCurrent();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('postulaciones');
}
};
