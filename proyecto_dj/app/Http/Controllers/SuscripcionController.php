<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Rest\ApiContext;

//use de paypal
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;

class SuscripcionController extends Controller
{
    private $apiContext;

    //este construcctor accede a los datos que tenemos en el la carpeta de conf y este a su vez en el .env
    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $this->apiContext->setConfig($payPalConfig['settings']);
    }

    public function pagarConPaypal()
    {
        $cliente = new Payer();
        //seleccionamos el metodo de pago que será por paypal
        $cliente->setPaymentMethod('paypal');

        //Ejecuta el pago que se debe hacer
        $cantidadDeCobro = new Amount();

        //podemos indicarle que sea el precio de lo que se quiere adquierir
        $cantidadDeCobro->setTotal('3.99');
        //tipo de moneda
        $cantidadDeCobro->setCurrency('€');


        //se crea transacción por la cantidad indicada, dado que solo puede adquir un producto, en caso ser más de uno modificarlo
        $transacion = new Transaction();
        $transacion->setAmount($cantidadDeCobro);
        $transacion->setDescription('Compra de ....');

        $rutaDeVuelta = url('errorPago');


        //agregamos las rutas que queremos mostrar cuando se hace el pago ok o cancelado si lo cancela el comprador
        $redireccionDeUrls = new RedirectUrls();
        $redireccionDeUrls->setReturnUrl($rutaDeVuelta)
            ->setCancelUrl($rutaDeVuelta);

        $pago = new Payment();
        $pago->setIntent('sale')
            ->setPayer($cliente)
            ->setTransactions(array($transacion))
            ->setRedirectUrls($redireccionDeUrls);


        //creamos un objeto pago para la cobrarlo
        try {
            $pago->create($this->apiContext);

            //redirección aprobada por paypal
            return redirect()->away($pago->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            //muestra la excepción, pero se debería de mostrar una vista con el error
            echo $ex->getData();
        }
    }


    //metodo para que se realice el pago
    public function estadoPago(Request $request)
    {
        //dd($request->all()); pintamos toda la info que envia paypal

        //recuperamos el id del pago, el id de quien lo ha pagado y el token
        $idDelPago = $request->input('paymentId');
        $idDelPagador = $request->input('PayerID');
        $token = $request->input('token');

        if (!$idDelPago || !$idDelPagador || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';

            //mensaje que podemos mostrar en la vista fallo
            return redirect('/paypal/fallo')->with(compact('status'));
        }

        //Obtenemos un objeto pago que necesita todos los datos antes nombrados para realizar el pago
        $pago = Payment::get($idDelPago, $this->apiContext);

        //ejecutamos el pago
        $ejecucion = new PaymentExecution();
        $ejecucion->setPayerId($idDelPagador);

        /** Ejecuta el pago **/
        $resultado = $pago->execute($ejecucion, $this->apiContext);
        //podemos usar dd($result); para ver los resultados que nos dan al ejecutarse el pago

        //Si el pago está aceptado, guarda datos en la BD
        if ($resultado->getState() === 'approved') {
            // Crea una entrada nueva de suscripción
            Suscripcion::create([
                'pago_id' => $idDelPago,
                'cliente_id' => $idDelPagador,
                'token' => $token,
                'estado_pago' => $resultado->getState(),
                'cantidad_cobro' => $resultado->getTransactions()[0]->getAmount()->getTotal(),
                'tipo_moneda' => $resultado->getTransactions()[0]->getAmount()->getCurrency(),
                'descripcion_transacccion' => $resultado->getTransactions()[0]->getDescription(),
            ]);

            // El pago fue exitoso, se puede ingestar este dato en la vista 
            $status = 'Gracias! El pago a través de PayPal se ha realizado correctamente.';
            return redirect('/home')->with(compact('status'));
        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return redirect('/cesta')->with(compact('status'));


        /*
        mostraje que podemos mostrar en la vista
        @if(session('status')) 
        //podemos mostrar cualquien mensaje, inyección de codigo o alert desde la vista
        @endif
        */
    }
}
