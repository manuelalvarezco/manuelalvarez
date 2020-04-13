@extends('layouts.app')

@section('title', 'Inicio')


@section('content')
<div class="container" style="padding-bottom: 0;">
  <div class="main" style="background-image: url('./img/main.png')">
  <div class="row">
    <div class="col-md-6 d-flex flex-column align-items-center">
      <img width="250" src="{{url('/img/logo-main.png')}}" alt="logo">
      <div class="d-flex flex-column text-center">
        <span class="fs-20 primary-color">Crema Humectante</span>
        <span class="fs-25 text-bold primary-color" >ANTIOXIDANTE</span>
        <div class="divider"></div>
        <span  class="fs-25 primary-color">Crema corporal</span>
        <small class="fs-16 primary-color">con extracto de semillas de cáñamo</small>
        <div class="d-flex justify-content-center mt-4">
          <a href="#">
          <img width="70" src="{{url('/img/instagram.png')}}" alt="instagram">
          </a>
          <a href="#">
          <img width="70" src="{{url('/img/facebook.png')}}" alt="facebook">
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <img style="max-width:100%" width="620" src="{{url('/img/producto.png')}}" alt="producto">
    </div>
    
  </div>
  <div style="min-height:100px" class="row mt-4 d-flex justify-content-center">
    <div class="about-info" style="background-image: url('./img/bg-button.png')">
      <a href="#" style="text-decoration:none;color:white">
        <span class="fs-25">
        Equilibra tu piel con <strong>Biowell</strong>
        </span>
      </a>
    </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <div class="d-flex">
            <div class="group">
              <div class="d-flex align-items-center ml-owned mr-2">
                <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                <span class="fs-22">Relajante</span>
              </div>
            </div>
            <div class="group">
              <div class="d-flex align-items-center ml-owned mr-2">
                <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                <span class="fs-22">Humectante</span>
              </div>
            </div>
            <div class="group">
              <div class="d-flex align-items-center ml-owned mr-2">
                <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                <span class="fs-22">Refrescante</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
</div>
    <div class="mb-4">
      <div class="footer">
        <div class="contenedor">
          <section class="logo">
            <img class="logo-img" src="{{url('/img/icono-blanco.png')}}" alt="biowwell">
          </section>
          <section class="formulario">
            <h3 class="titulo">
              Regístrate y recibe los mejores concejos médicos para aumentar tu bienestar y relajación
            </h3>
            <div class="formulario-imputs">
              <label class="formulario-imputs__label" for="email">Tu correo electrónico</label>
              <input type="text" class="formulario-imputs__input" placeholder="Correo electrónico">
              <div class="formulario-imputs__box">
                <input type="checkbox" class="formulario-imputs__checkbox" name="term" id="term">
                <label class="terms" for="term">Acepto la política de protección de datos personales</label>
              </div>
              <button class="formulario-imputs__button">REGISTRARME</button>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-5 offset-1">
          <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
          <p class="fs-20">Biowell es una crema corporal con efecto relajante y refrescante que te ayuda a <b>reducir de manera real la sensación
            de hinchazón y pesadez,</b> además te ayuda a <b>mejorar visblemente la apariencia de la piel</b></p>
            <p class="fs-20">Ha sido <b>formulada de manera responsable y eficaz por médicos expertos en investigación. Su fórmula contiene ingredientes naturales
            </b> como aceite de semillas de cáñamo, aceite de almendras, mentol, árnica y extracto de fruta de cafe,
            que brindan múltiples beneficios para tu cuerpo</p>
            <button class="owned-btn">
                <div class="owned-btn__icon">
                    <img width="25" src="{{url('/img/whatsapp-icon-white.png')}}" alt="contactanos">
                </div>
                <span class="owned-btn__text">Comprar</span>
            </button>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <img style="max-width:100%" width="620" src="{{url('/img/individual.png')}}" alt="producto">
        </div>
      </div>

      <div class="row mt-2">
          <div class="col-md-12 mt-4 text-center">
            <img width="35" src="{{url('/img/icono-compra.png')}}" alt="biowell">
            <h5>Recibe Biowell en tu casa</h5>
            <h2 class="primary-color">Compra online aquí:</h2>

            <img width="200" src="{{url('/img/logo-main.png')}}" alt="biowell">
            <div class="mt-2">

              <img width="35" src="{{url('/img/icono-compra.png')}}" alt="biowell">
            </div>
            <div class="shopers row">
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="{{url('/img/logo-linio.png')}}" alt="linio">
                    <button class="mt-3 owned-btn__secondary">
                        Comprar
                    </button>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="{{url('/img/logo-biowellness.png')}}" alt="biowellness">
                    <button class="mt-2 owned-btn__secondary">
                        Comprar
                    </button>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="{{url('/img/sol-verde.png')}}" alt="sol-verde">
                    <button class="mt-2 owned-btn__secondary">
                        Comprar
                    </button>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="{{url('/img/logo-falabella.png')}}" alt="falabella">
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
                <div class="d-flex align-items-center ml-owned mr-2">
                  <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                  <span class="fs-22">Relajante</span>
                </div>
              </div>
              <div class="group">
                <div class="d-flex align-items-center ml-2 mr-2">
                  <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                  <span class="fs-22">Humectante</span>
                </div>
              </div>
              <div class="group">
                <div class="d-flex align-items-center ml-owned mr-2">
                  <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                  <span class="fs-22">Refrescante</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="d-flex justify-content-center">

        <img style="max-width:600px" src="{{url('/img/individual.png')}}" alt="biowell">
      </div>
      

      
    <div class="mt-4 mb-4">
      <div class="">
        <h3 class="ingredients-title text-center mt-4 mb-4">Ingredientes naturales</h3>
        <div class="ingredients mt-5">
          <div class="ingredients-box">
              <div class="box-item">
                <img src="{{url('/img/canamo.jpg')}}" alt="image" class="box-item__img">
                <h5 class="box-item__title">
                  Semilla de camaño
                </h5>
                <span class="box-item__subtitle">
                  Propiedades nutricionales y antioxidantes
                </span>
              </div>
              <div class="box-item">
                <img src="{{url('/img/almendras.jpg')}}" alt="image" class="box-item__img">
                <h5 class="box-item__title">
                  Aceite de almendras
                </h5>
                <span class="box-item__subtitle">
                  Propiedades nutricionales y acondicionadoras
                </span>
              </div>
              <div class="box-item">
                <img src="{{url('/img/mentol.jpg')}}" alt="image" class="box-item__img">
                <h5 class="box-item__title">
                  Mentol
                </h5>
                <span class="box-item__subtitle">
                  Propiedades nutricionales y anticépticas
                </span>
              </div>
              <div class="box-item">
                <img src="{{url('/img/cafe.jpg')}}" alt="image" class="box-item__img">
                <h5 class="box-item__title">
                  Mucílago de café
                </h5>
                <span class="box-item__subtitle">
                  Propiedades antioxidantes
                </span>
              </div>
              <div class="box-item">
                <img src="{{url('/img/florarnica.jpg')}}" alt="image" class="box-item__img">
                <h5 class="box-item__title">
                  Flor árnica
                </h5>
                <span class="box-item__subtitle">
                  Propiedades análgesicas y antiinflamatorias
                </span>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="minilogos">
        <div class="minilogos-box">
            <div class="minilogo-item">
              <img src="{{url('/img/minilogo1.png')}}" alt="image" class="minilogo-item__img">
              <h5 class="minilogo-item__title">
                Contiene <br> ingredientes <br> naturales
              </h5>
            </div>
            <div class="minilogo-item">
              <img src="{{url('/img/minilogo2.png')}}" alt="image" class="minilogo-item__img">
              <h5 class="minilogo-item__title">
                No ha sido probada <br> en animales y <br> es libre de crueldad
              </h5>
            </div>
            <div class="minilogo-item">
              <img src="{{url('/img/minilogo3.png')}}" alt="image" class="minilogo-item__img">
              <h5 class="minilogo-item__title">
                Es libre de <br> parabenos
              </h5>
            </div>
            <div class="minilogo-item">
              <img src="{{url('/img/minilogo4.png')}}" alt="image" class="minilogo-item__img">
              <h5 class="minilogo-item__title">
                No contiene <br> colorantes <br> artificiales
              </h5>
            </div>
            <div class="minilogo-item">
              <img src="{{url('/img/minilogo5.png')}}" alt="image" class="minilogo-item__img">
              <h5 class="minilogo-item__title">
                Producto <br> 100% colombiano
              </h5>
            </div>
        </div>
      </div>
    </div>
@endsection