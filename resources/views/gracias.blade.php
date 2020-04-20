@extends('layouts.app')

@section('title', 'Gracias')


@section('content')

<div style="min-height:300px;background-color:#25A5A4" class="d-flex justify-content-center align-items-center text-center" style="padding-bottom: 0;">

  <div class="container d-flex flex-column">
    <h1 class="thanks titulo text-white">Gracias!</h1>
    <div class="d-flex justify-content-center align-items-center text-center">
      <a style="text-decoration: none" class="titulo text-white" href="https://ecommerce.biowell.co">
        <img src="{{url('/img/icono-blanco.png')}}" width="55" alt="icono">
        Biowell.co
      </a>
    </div>
  </div>



</div>

<div class="container mt-2">
  <div class="row datos-usuario">
    <div class="col-md-6">
      <img style="max-width:100%" width="620" src="{{url('/img/individual.png')}}" alt="producto">
    </div>
    <div class="col-md-6">

      <div class="d-flex flex-column">
        <span>{{ $processingDate }}</span>
        <h3 class="text-dark titulo text-uppercase">Hola {{ $merchant_name }}!</h3>
        <h5 class="mt-2 text-dark subtitulo">A continuación está el resumen de tu compra:</h5>
          <div class="row">
            <div class="col-md-6">
              <p class="text-dark subtitulo text-uppercase">Producto</p>
            </div>
            <div class="col-md-6">
                <h4 class="subtitulo">
                    Crema Corporal Biowell
                </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="text-dark subtitulo text-uppercase">Estado de la transacción</p>
            </div>
            <div class="col-md-6">
                <h4 class="subtitulo">
                    {{ $transactionState }}</div>
                </h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="text-dark subtitulo text-uppercase">Valor Pagado</p>
            </div>
            <div class="col-md-6">
                <h4 class="subtitulo">
                    COP ${{ number_format($TX_VALUE) }}</div>
                </h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="text-dark subtitulo text-uppercase">Dirección de envío</p>
            </div>
            <div class="col-md-6">
                <h4 class="subtitulo">
                    {{ $merchant_address }}</div>
                </h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="text-dark subtitulo text-uppercase">Código de referencia</p>
            </div>
            <div class="col-md-6">
                <h4 class="subtitulo">
                    {{ $referenceCode }}</div>
                </h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="text-dark subtitulo text-uppercase">Método de pago</p>
            </div>
            <div class="col-md-6">
                <h4 class="subtitulo">
                    {{ $lapPaymentMethod }}</div>
                </h4>
          </div>
          <div class="p-mobile">
            <h6>* Algunos datos se ocultan por seguridad</p>
          </div>

          <p class="text-center subtitulo">TIENES DUDAS?  ESCRÍBENOS <a style="text-decoration:none" href="{{ url('contact') }}">AQUÍ</a> </p>
      </div>
    </div>
  </div>
</div>

@endsection
