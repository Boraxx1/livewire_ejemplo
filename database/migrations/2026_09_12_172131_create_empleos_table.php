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
        Schema::create('empleos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained('empresas')->cascadeOnDelete();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('ubicacion');
            $table->enum('modalidad', ['presencial', 'remoto', 'hibrido']);
            $table->enum('tipo_contrato', ['tiempo_completo', 'medio_tiempo', 'temporal', 'freelance']);
            $table->decimal('salario', 10, 2)->nullable();
            $table->enum('estado', ['activo', 'pausado', 'cerrado'])->default('activo');
            $table->dateTime('fecha_publicacion')->useCurrent();
            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleos');
    }
};
