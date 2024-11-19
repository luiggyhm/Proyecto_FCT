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
        Schema::create('ftp_users', function (Blueprint $table) {
            $table->id();
            $table->string('alias')->unique();
            $table->string('password');
            $table->string('directorio_raiz');
            $table->enum('tipo_user', ['admin', 'cliente']); // Tipo de usuario
            $table->enum('estado', ['activo', 'inactivo'])->default('activo'); // Estado del usuario


            //relación con la base de datos 1:1 de usuario
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ftp_users');
    }
};
