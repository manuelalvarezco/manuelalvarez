<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class PayController extends Controller
{
    public function pay()
    {
        $time          = Carbon::now();
        $referenceCode = $time->format('dmyhis');
        $apiKey        = "4Vj8eK4rloUd272L48hsrarnUA";
        $merchantId    = "508029";
        $accountId     = "512321";
        $currency      = "COP";
        $amount        = "20000";

        $signature = md5($apiKey."~".$merchantId."~".$referenceCode."~".$amount."~".$currency);

        return view('pay.pay_form', compact('amount', 'signature', 'referenceCode', 'merchantId', 'accountId', 'currency'));
    }
}
