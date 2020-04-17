<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\PayuResponse;
use DB;

class PayController extends Controller
{
    public function pay(Request $request)
    {

        $parameters = DB::table('payuParameters')->first();

        $time          = Carbon::now();
        $referenceCode = $time->format('dmyhis');
        $apiKey        = $parameters->apiKey;
        $merchantId    = $parameters->merchantId;
        $accountId     = $parameters->accountId;
        $currency      = "COP";
        if($request->amount){
            $amount        = $request->amount;
        }else{
            $amount = '12000';
        }


        $signature = md5($apiKey."~".$merchantId."~".$referenceCode."~".$amount."~".$currency);

        $data = array(
            'amount' => $amount,
            'signature' => $signature,
            'referenceCode' => $referenceCode,
            'merchantId' => $merchantId,
            'accountId' => $accountId,
            'currency' => $currency
        );


        return response()->json($data);
        //return view('pay.pay_form', compact('amount', 'signature', 'referenceCode', 'merchantId', 'accountId', 'currency'));
    }

    public function responsePayU()
    {
        // Indica el estado de la transacción en el sistema.
        $state_pol            = $_POST['state_pol'];
        // El código de respuesta de PayU.
        $response_code_pol    = $_POST['response_code_pol'];
        // Es la referencia de la venta o pedido. Deber ser único por cada transacción que se envía al sistema.
        $reference_sale       = $_POST['reference_sale'];
        // La referencia o número de la transacción generado en PayU.
        $reference_pol        = $_POST['reference_pol'];
        // El identificador interno del medio de pago utilizado.
        $payment_method       = $_POST['payment_method'];
        // El tipo de medio de pago utilizado para el pago
        $payment_method_type  = $_POST['payment_method_type'];
        // Es el monto total de la transacción.
        $value                = $_POST['value'];
        // Es el valor del IVA de la transacción, si se envía el IVA nulo el sistema aplicará el 19% automáticamente.
        $tax                  = $_POST['tax'];
        // La fecha en que se realizó la transacción.
        $transaction_date     = $_POST['transaction_date'];
        // La moneda respectiva en la que se realiza el pago.
        $currency             = $_POST['currency'];
        // Campo que contiene el correo electrónico del comprador
        $email_buyer          = $_POST['email_buyer'];
        // Es la descripción de la venta.
        $description          = $_POST['description'];
        // La dirección de entrega de la mercancía.
        $shipping_address     = $_POST['shipping_address'];
        // La ciudad de entrega de la mercancía.
        $shipping_city        = $_POST['shipping_city'];
        // El teléfono de residencia del comprador.
        $phone                = $_POST['phone'];
        // Identificador del medio de pago.
        $payment_method_id    = $_POST['payment_method_id'];
        // El mensaje de respuesta de PAYU.
        $response_message_pol = $_POST['response_message_pol'];
        // Identificador de la transacción.
        $transaction_id       = $_POST['transaction_id'];
        // Medio de pago con el cual se hizo el pago.
        $payment_method_name  = $_POST['payment_method_name'];
        // Nombre corto del comprador.
        $nickname_buyer       = $_POST['nickname_buyer'];

        $save_resp = new PayuResponse();
    	$save_resp->state_pol            = $state_pol;
    	$save_resp->response_code_pol    = $response_code_pol;
    	$save_resp->reference_sale       = $reference_sale;
    	$save_resp->reference_pol        = $reference_pol;
    	$save_resp->payment_method       = $payment_method;
    	$save_resp->payment_method_type  = $payment_method_type;
    	$save_resp->value                = $value;
    	$save_resp->tax                  = $tax;
    	$save_resp->transaction_date     = $transaction_date;
    	$save_resp->currency             = $currency;
    	$save_resp->email_buyer          = $email_buyer;
    	$save_resp->description          = $description;
    	$save_resp->shipping_address     = $shipping_address;
    	$save_resp->shipping_city        = $shipping_city;
    	$save_resp->phone                = $phone;
    	$save_resp->payment_method_id    = $payment_method_id;
    	$save_resp->response_message_pol = $response_message_pol;
    	$save_resp->transaction_id       = $transaction_id;
    	$save_resp->payment_method_name  = $payment_method_name;
    	$save_resp->nickname_buyer       = $nickname_buyer;
    	$save_resp->save();
    }

    public function gracias(Request $request){

        $merchant_id = $request->merchantId;
        $merchant_name = $request->merchant_name;
        $referenceCode = $request->referenceCode;
        $TX_VALUE = $request->TX_VALUE;
        $transactionState = $request->transactionState;
        $lapPaymentMethod = $request->lapPaymentMethod;
        $transactionId = $request->transactionId;

    

        if ($transactionState == 4 ) {
            $transactionState = "Transacción aprobada";
        }

        else if ($transactionState == 6 ) {
            $transactionState = "Transacción rechazada";
        }

        else if ($transactionState == 104 ) {
            $transactionState = "Error";
        }

        else if ($transactionState == 7 ) {
            $transactionState = "Transacción pendiente";
        }

        else {
            $transactionState=$request->mensaje;
        }

        return view('gracias', compact('merchant_id','merchant_name','referenceCode','TX_VALUE','transactionState','lapPaymentMethod','transactionId'));
        
    }
}
