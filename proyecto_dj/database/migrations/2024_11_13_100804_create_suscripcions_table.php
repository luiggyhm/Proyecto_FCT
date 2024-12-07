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
            $table->string('pago_id')->unique();
            $table->string('cliente_id');
            $table->string('token');
            $table->string('estado_pago');
            $table->decimal('cantidad_cobro', 8, 2);
            $table->string('tipo_moneda');
            $table->text('descripcion_transacccion')->nullable();
            $table->string('email')->nullable();
            
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
