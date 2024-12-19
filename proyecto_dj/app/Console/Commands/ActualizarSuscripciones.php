<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Suscripcion;
use Carbon\Carbon;

class ActualizarSuscripciones extends Command
{
    protected $signature = 'suscripciones:actualizar';
    protected $description = 'Actualiza las suscripciones cambiando su estado a inactivo si han expirado.';

    public function handle()
    {
        $now = Carbon::now();

        // Procesar suscripciones de un mes
        $suscripcionesMensuales = Suscripcion::where('estado_pago', 'activo')
            ->where('cantidad_cobro', 5.99)
            ->whereDate('created_at', '<=', $now->subMonth())
            ->update(['estado_pago' => 'noPaid', 'estado' => 'inactivo']);

        // Procesar suscripciones de un año
        $suscripcionesAnuales = Suscripcion::where('estado_pago', 'activo')
            ->where('cantidad_cobro', 49.99)
            ->whereDate('created_at', '<=', $now->subYear())
            ->update(['estado_pago' => 'noPaid','estado' => 'inactivo']);

        $this->info("Suscripciones actualizadas: {$suscripcionesMensuales} mensuales, {$suscripcionesAnuales} anuales.");
    }
}
