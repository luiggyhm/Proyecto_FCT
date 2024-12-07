<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Checkout\Session as CheckoutSession;

class SuscripcionController extends Controller
{
    public function pagarConStripe(Request $request)
    {
        //validación de datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        //consigue el archivo de configuración con las credenciales
        Stripe::setApiKey(Config::get('stripe.secret'));

        // Usar el email del usuario autenticado o un email de prueba en modo sandbox
        //$customerEmail = auth()->check() ? auth()->user()->email : 'test@example.com';

        try {
            // Crear un cliente en Stripe con el correo
            $customer = \Stripe\Customer::create([
                //'email' => $customerEmail,
            ]);

            // Crear la sesión de pago con el ID del cliente
            $checkoutSession = CheckoutSession::create([
                'payment_method_types' => ['card'],
                'customer' => $customer->id,
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => $request->nombre,
                        ],
                        'unit_amount' => $request->precio * 100, // Stripe maneja los importes en centimos
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                //envia a estas rutas para indicar el error o si esta ok
                'success_url' => route('estadoPagoStripe') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('estadoPagoStripe'),
            ]);

            return redirect($checkoutSession->url);
        } catch (\Exception $ex) {
            Log::error('Error al crear sesión de pago en Stripe', ['exception' => $ex->getMessage()]);
            return back()->withErrors(['error' => 'Error al procesar el pago con Stripe.']);
        }
    }



    public function estadoPagoStripe(Request $request)
    {
        Log::debug('Debug: Inicio del método estadoPagoStripe');

        //crea la session
        $sessionId = $request->input('session_id');

        //si no existe la session es error
        if (!$sessionId) {
            $status = 'Lo sentimos! El pago a través de Stripe no se pudo realizar.';
            Log::error('Error: Falta de session_id en la respuesta de Stripe');
            return redirect('/')->with(compact('status'));
        }

        //consigue el archivo de configuración con las credenciales
        Stripe::setApiKey(Config::get('stripe.secret'));

        try {
            $session = CheckoutSession::retrieve($sessionId);
            $paymentIntent = $session->payment_intent; //Obtiene el id del pago
            $clienteId = $session->customer; //Obtiene el Id del cliente
            $customerEmail = $session->customer_details->email; // Obtener el email del cliente

            // Verificar que los datos existen antes de acceder a ellos
            if (isset($session->payment_status) && $session->payment_status === 'paid' && $clienteId) {
                Suscripcion::create([
                    'pago_id' => $paymentIntent,
                    'cliente_id' => $clienteId,
                    'token' => $sessionId,
                    'email' => $customerEmail,
                    'estado_pago' => $session->payment_status,
                    'cantidad_cobro' => $session->amount_total / 100,
                    'tipo_moneda' => $session->currency,
                    'descripcion_transacccion' => $session->display_items[0]->custom->name ?? 'Descripción no disponible',
                ]);

                Log::debug('Debug: Suscripción creada en la base de datos');
                $status = 'Gracias! El pago a través de Stripe se ha realizado correctamente.';
                return redirect('/')->with(compact('status'));
            } else {
                Log::error('Error: El estado de pago no es "paid" o cliente_id es nulo', [
                    'payment_status' => $session->payment_status,
                    'cliente_id' => $clienteId,
                ]);
                $status = 'Lo sentimos! El pago a través de Stripe no se pudo realizar.';
                return redirect('/')->with(compact('status'));
            }
        } catch (\Exception $ex) {
            Log::error('Error al recuperar la sesión de pago en Stripe', ['exception' => $ex->getMessage()]);
            $status = 'Lo sentimos! El pago a través de Stripe no se pudo realizar.';
            return redirect('/')->with(compact('status'));
        }
    }
}
