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
            
            //datos comunes
            $table->id();
            $table->string('nombre')->notNullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('telefono')->notNullable();
            $table->string('password')->notNullable();
            $table->enum('tipo_acceso', ['dj', 'negocio','admin'])->notNullable();

            //datos dj
            $table->string('apellidos')->nullable();
            $table->string('ciudad')->nullable();

           
            //datos locales
            $table->string ('direccion')->nullable();
            $table->string ('aforo')->nullable();

            //relacion n:1 con tabla locals para cerrar los tipos de locales
            $table->unsignedBigInteger('tipo_local')->nullable();
            $table->foreign('tipo_local')->references('id')->on('locals')->onDelete('cascade');



            // Relación n:1 con suscripciones
            $table->unsignedBigInteger('suscripcion_id')->nullable();
            $table->foreign('suscripcion_id')->references('id')->on('suscripcions')->onDelete('cascade');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
