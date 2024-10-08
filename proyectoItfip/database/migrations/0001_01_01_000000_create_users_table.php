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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_users'); 
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();
            $table->string('correo_institucional')->unique();
            $table->string('contraseña');
            $table->string('cedulaCiudadania');
            $table->enum('cargo', ['N/A', 'Vicerrectora', 'decano/a', 'coordinador', 'docente']);
            $table->string('numero_telefono', 20);
            $table->foreignId('facultad')->constrained('facultades', 'id_facultades');
            $table->foreignId('programa_academico')->constrained('programa_academico', 'id_prog_acad');
            $table->enum('rol', ['N/A', 'administrador', 'subadministrador', 'usuario']);
            $table->enum('estado', ['activo', 'inactivo']);
            $table->dateTime('fecha_sistema');
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('facultades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('facultades', function (Blueprint $table) {
            $table->id('id_facultades'); 
            $table->string('nombre_facultad');
            $table->string('ciclas_nomb_facu');
            $table->enum('estado', ['Activo', 'Inactivo']);
            $table->dateTime('fecha_sistema');
            $table->timestamps(); 
    
        });    Schema::create('programa_academico', function (Blueprint $table) {
            $table->id('id_prog_acad');
            $table->string('nombre_prog_acad');
            $table->string('codigo_prog_acad');
            $table->enum('estado', ['Activo', 'Inactivo']);
            $table->dateTime('fecha_sistema');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('facultades');
        Schema::dropIfExists('programa_academico');



    }
};
