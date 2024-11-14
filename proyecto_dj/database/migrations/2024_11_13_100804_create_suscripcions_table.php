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
        Schema::create('suscripcions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('paypal_subscripcion_id'); // ID de suscripción de PayPal
            $table->string('estado')->default('Pendiente'); // Estado de la suscripción, por defecto pendiente
            $table->timestamp('start_date')->nullable(); //fecha que se hace
            $table->timestamp('end_date')->nullable(); //fecha que termina
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //relación
            
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suscripcions');
    }
};
