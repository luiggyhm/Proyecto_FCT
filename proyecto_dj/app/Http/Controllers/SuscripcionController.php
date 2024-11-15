<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$paypalSubscriptionId;
        $subscription = new Suscripcion();
        $subscription->user_id = auth()->id(); // ID del usuario autenticado
        //$subscription->paypal_suscripcion_id = $paypalSubscriptionId; // ID de la suscripción de PayPal
        $subscription->status = 'ACTIVE'; // O el estado inicial de la suscripción
        $subscription->start_date = now(); // Fecha de inicio de la suscripción
        $subscription->save();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
