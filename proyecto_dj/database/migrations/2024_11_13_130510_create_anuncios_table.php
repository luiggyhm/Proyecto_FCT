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
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->string ('titulo')->notNullable();
            $table->double ('precio')->notNullable();
            $table->text ('descripcion')->notNullable();
            $table->integer('telefono')->notNullable();
            $table->text('otros_generos')-> nullable(); //Guarda array de generos
            $table->string('imagen'); // Guardar la ruta de la imagen

            //tipo de genero músical: house, regueton, etc
            $table->unsignedBigInteger('genero_id')->nullable();
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('set null');


            //si es dj
            $table->string ('ciudad')->nullable();
            $table->string ('localidad')->nullable();


            //si es negocio
            $table->text ('direccion')->nullable();
            $table->text ('aforo')->nullable();

            //tipo de negocio: bar, discoteca, local, etc...
            $table->unsignedBigInteger('tipo_local')->nullable(); 
            $table->foreign('tipo_local')->references('id')->on('locals')->onDelete('cascade');

            $table->string ('tipo_anuncio')->nullable();
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios');
    }
};
