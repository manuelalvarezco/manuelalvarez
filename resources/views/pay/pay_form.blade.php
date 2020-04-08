@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pasarela de pago PayU</div>

                <div class="card-body">

                    <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                        <!-- Url Production: https://gateway.payulatam.com/ppp-web-gateway -->
                        <input name="merchantId"    type="hidden"  value="{{$merchantId}}">
                        <input name="accountId"     type="hidden"  value="{{$accountId}}">
                        <input name="description"   type="hidden"  value="Viowellness">
                        <input name="referenceCode" type="hidden"  value="{{$referenceCode}}">
                        <input name="amount"        type="hidden"  value="{{$amount}}">
                        <input name="tax"           type="hidden"  value="0">
                        <input name="taxReturnBase" type="hidden"  value="0">
                        <input name="currency"      type="hidden"  value="{{$currency}}">
                        <input name="signature"     type="hidden"  value="{{$signature}}">
                        <input name="test"          type="hidden"  value="1">
                        <input name="responseUrl"   type="hidden"  value="">
                        <input name="confirmationUrl" type="hidden"  value="">
                        <input name="shippingCity"    type="hidden"  value="Bogota">
                        <input name="shippingCountry" type="hidden"  value="CO">
                        <div class="col-md-12">
                            Para efectuar el pago sera dirigido a la plataforma <img width="60" src="{{asset('img/payu2x.png')}}" alt="">
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" name="buyerFullName" class="form-control" placeholder="Nombre completo" id="">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" required="required" name="buyerEmail" class="form-control" placeholder="Correo Electronico" id="">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" required="required" name="telephone" class="form-control" placeholder="Teléfono" id="">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" required="required" name="shippingAddress" class="form-control" placeholder="Dirección de envío" id="">
                        </div>
                        <div class="col-md-12 text-center">
                            <input class="btn btn-success" type="submit"value="Ir a pagar">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
