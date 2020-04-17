@extends('layouts.app')

@section('title', 'Gracias')


@section('content')

<div style="min-height:500px;background-color:#25A5A4" class="d-flex justify-content-center align-items-center text-center" style="padding-bottom: 0;">
  
  <div class="container d-flex flex-column">
    <h1 style="font-size: 8em;font-weight: 500" class="titulo text-white display-1">Gracias!</h1>
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
        <h2 class="text-dark titulo">Hola {{ $merchant_name }}!</h2>
        <h5 class="mt-2 text-dark subtitulo">A continuación está el resumen de tu compra:</h5>
          <div class="row">
            <div class="col-md-6">
              <small class="text-dark titulo">Producto</small>
            </div>
            <div class="col-md-6">Crema Corporal Biowell</div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <small class="text-dark titulo">Estado de la transacción</small>
            </div>
            <div class="col-md-6">{{ $transactionState }}</div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <small class="text-dark titulo">Valor Pagado</small>
            </div>
            <div class="col-md-6">COP ${{ number_format($TX_VALUE) }}</div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <small class="text-dark titulo">Dirección de envío</small>
            </div>
            <div class="col-md-6">{{ $merchant_address }}</div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <small class="text-dark titulo">Código de referencia</small>
            </div>
            <div class="col-md-6">{{ $referenceCode }}</div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <small class="text-dark titulo">Método de pago</small>
            </div>
            <div class="col-md-6">{{ $lapPaymentMethod }}</div>
          </div>
          <div class="p-mobile">
            <small>* Algunos datos se ocultan por seguridad</small>
          </div>
        
      </div>
    </div>
  </div>
</div>

@endsection