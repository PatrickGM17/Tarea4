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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->String('Apellidos');
            $table->String('Nombres');
            $table->date('FechaDeNacimiento');
            $table->string('Asignatura');
            $table->string('Telefono');
            $table->string('Correo')->unique();
            $table->string('Password')->nullable()->default(bcrypt('secret'));;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
