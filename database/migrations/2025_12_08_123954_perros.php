<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');

            $table->string('nombre');
            $table->decimal('peso', 5, 2);
            $table->string('raza');

            $table->enum('tipo_comida', ['pienso_normal', 'pienso_sensible', 'casera', 'mixta']);
            $table->enum('tamanio', ['pequenio', 'mediano', 'grande']);
            $table->enum('sexo', ['macho', 'hembra']);

            $table->string('foto')->nullable();

            $table->boolean('esterilizado');
            $table->boolean('vacunado_al_dia');
            $table->boolean('sociable_con_perros');
            $table->boolean('sociable_con_personas');

            $table->string('alergias')->nullable();
            $table->string('enfermedades')->nullable();
            $table->string('medicacion')->nullable();

            $table->integer('edad');
            $table->string('microchip')->unique();

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
