@extends('layouts.app')

@section('title', 'Inicio')


@section('content')
    <main-component></main-component>
    <div class="mb-4">
        <register-component></register-component>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-5 offset-1">
          <img src="/img/icono.png" width="55" alt="icono">
          <p class="fs-20">Biowell es una crema corporal con efecto relajante y refrescante que te ayuda a <b>reducir de manera real la sensación
            de hinchazón y pesadez,</b> además te ayuda a <b>mejorar visblemente la apariencia de la piel</b></p>
            <p class="fs-20">Ha sido <b>formulada de manera responsable y eficaz por médicos expertos en investigación. Su fórmula contiene ingredientes naturales
            </b> como aceite de semillas de cáñamo, aceite de almendras, mentol, árnica y extracto de fruta de cafe,
            que brindan múltiples beneficios para tu cuerpo</p>
            <button class="owned-btn">
                <div class="owned-btn__icon">
                    <img width="25" src="/img/whatsapp-icon-white.png" alt="contactanos">
                </div>
                <span class="owned-btn__text">Comprar</span>
            </button>
        </div>
        <div class="col-md-6 prueba">
        </div>
      </div>

      <div class="row mt-5">
          <div class="col-md-12 mt-5 text-center">
            <img width="100" src="/img/logo-main.png" alt="biowell">
            <h5>Recibe Biowell en tu casa</h5>
            <h2 class="primary-color">Compra online aquí:</h2>

            <img width="200" src="/img/logo-main.png" alt="biowell">

            <div class="shopers row">
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="/img/logo-linio.png" alt="linio">
                    <button class="mt-3 owned-btn__secondary">
                        Comprar
                    </button>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="/img/logo-biowellness.png" alt="biowellness">
                    <button class="mt-2 owned-btn__secondary">
                        Comprar
                    </button>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="/img/logo-falabella.png" alt="falabella">
                    <button class="mt-2 owned-btn__secondary">
                        Comprar
                    </button>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="/img/logo-falabella.png" alt="falabella">
                    <button class="mt-2 owned-btn__secondary">
                        Comprar
                    </button>
                </div>
            </div>
          </div>
      </div>
      
      </div>
      
      <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="d-flex">
              <div class="group">
                <div class="d-flex align-items-center ml-2 mr-2">
                  <img src="/img/icono.png" width="55" alt="icono">
                  <span class="fs-22">Relajante</span>
                </div>
              </div>
              <div class="group">
                <div class="d-flex align-items-center ml-2 mr-2">
                  <img src="/img/icono.png" width="55" alt="icono">
                  <span class="fs-22">Humectante</span>
                </div>
              </div>
              <div class="group">
                <div class="d-flex align-items-center ml-2 mr-2">
                  <img src="/img/icono.png" width="55" alt="icono">
                  <span class="fs-22">Refrescante</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="d-flex justify-content-center">

        <img style="max-width:600px" src="/img/individual.png" alt="biowell">
      </div>
      

      
    <div class="mt-4 mb-4">
        <ingredients-component></ingredients-component>
    </div>

    <mini-logo-component></mini-logo-component>
@endsection