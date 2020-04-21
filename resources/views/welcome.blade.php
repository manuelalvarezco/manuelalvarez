@extends('layouts.app')

@section('title', 'Inicio')


@section('content')
<div class="container" style="padding-bottom: 0;">
  <div class="main" style="background-image: url('./img/main.png')">
  <div class="row">
    <div class="col-md-6 d-flex flex-column align-items-center">
      <img width="250" src="{{url('/img/logo-main.png')}}" alt="logo">
      <div class="d-flex flex-column text-center">
        <span class="fs-20 subtitulo primary-color">Crema Humectante</span>
        <span class="fs-25 text-bold primary-color titulo" >ANTIOXIDANTE</span>
        <div class="divider"></div>
        <span  class="fs-25 primary-color">Crema corporal</span>
        <small class="fs-16 primary-color">con extracto de semillas de cáñamo</small>
        <div class="d-flex justify-content-center mt-4">
          <a href="#">
            <a href="https://www.instagram.com/biowell.co/" target="_blank">
              <img width="70" src="{{url('/img/instagram.png')}}" alt="instagram">
            </a>
          </a>
          <a href="https://www.facebook.com/Biowell.co/" target="_blank">
          <img width="70" src="{{url('/img/facebook.png')}}" alt="facebook">
          </a>

        </div>
        <div class="d-flex justify-content-center">
          <button class=" owned-btn__secondary" type="button" data-toggle="modal" data-target="#exampleModal">
            <img width="30" src="{{url('/img/icono-compra.png')}}" alt="biowell"> Comprar
        </button>
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <img style="max-width:100%" width="620" src="{{url('/img/producto.png')}}" alt="producto">
    </div>

  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="d-flex">
          <div class="group">
            <div class="group-item">
              <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
              <span class="fs-22">Relajante</span>
            </div>
          </div>
          <div class="group">
            <div class="group-item">
              <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
              <span class="fs-22">Humectante</span>
            </div>
          </div>
          <div class="group">
            <div class="group-item">
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
          <register-component></register-component>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-5 offset-owner">
          <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
          <p class="fs-20 subtitulo">Biowell es una crema corporal con efecto relajante y refrescante que te ayuda a <b>reducir de manera real la sensación
            de hinchazón y pesadez,</b> además te ayuda a <b>mejorar visblemente la apariencia de la piel</b></p>
            <p class="fs-20 subtitulo">Ha sido <b>formulada de manera responsable y eficaz por médicos expertos en investigación. Su fórmula contiene ingredientes naturales
            </b> como aceite de semillas de cáñamo, aceite de almendras, mentol, árnica y extracto de fruta de cafe,
            que brindan múltiples beneficios para tu cuerpo</p>
            <button class="owned-btn" type="button" data-toggle="modal" data-target="#exampleModal">
                <div class="owned-btn__icon">
                    <img width="25" src="{{url('/img/whatsapp-icon-white.png')}}" alt="contactanos">
                </div>
                <span class="owned-btn__text">Comprar</span>
            </button>
        </div>
        <div class="col-md-6">
          <img style="max-width:100%" width="620" src="{{url('/img/individual.png')}}" alt="producto">
        </div>
      </div>

      <div class="row mt-2">
          <div class="col-md-12 mt-4 text-center">
            <a type="button" data-toggle="modal" data-target="#exampleModal"> <img width="35" src="{{url('/img/icono-compra.png')}}" alt="biowell"> </a>
            <h6>Recibe Biowell en tu casa!</h6>
            <h2 class="primary-color titulo">Compra online aquí:</h2>

            <img width="200" src="{{url('/img/logo-main.png')}}" alt="biowell">
            <div class="mt-2">

              <button class=" owned-btn__secondary" type="button" data-toggle="modal" data-target="#exampleModal">
                <img width="30" src="{{url('/img/icono-compra.png')}}" alt="biowell"> Comprar
            </button>
            </div>
            <div class="shopers row">
                <div class="shoper-item col-md-3">
                    <img class="mb-2 mb-3 shoper-item__img" style="max-width: 100%" src="{{url('/img/logo-linio.png')}}" alt="linio">
                    <a style="text-decoration: none" target="_blank" href="https://www.linio.com.co/p/biowell-crema-antioxidante-100g-lgaqvb?qid=ef6ff9e334a09c6a141aa18afbe8951f&oid=BI156HB1D7JWSLCO&position=1&sku=BI156HB1D7JWSLCO" class=" owned-btn__secondary" type="button" >
                        Comprar
                    </a>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="{{url('/img/logo-biowellness.png')}}" alt="biowellness">
                    <button class=" owned-btn__secondary" type="button" data-toggle="modal" data-target="#exampleModal">
                        Comprar
                    </button>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img mb-3" style="max-width: 100%" src="{{url('/img/sol-verde.png')}}" alt="sol-verde">
                    <a style="text-decoration: none" target="_blank" href="https://solverde.com.co/producto/crema-humectante-y-antioxidante-biowell/" class=" owned-btn__secondary" type="button" >
                        Comprar
                    </a>
                </div>
                <div class="shoper-item col-md-3">
                    <img class="shoper-item__img" style="max-width: 100%" src="{{url('/img/logo-falabella.png')}}" alt="falabella">
                    <a style="text-decoration: none" target="_blank" href="https://www.falabella.com.co/falabella-co/product/4268745/Crema-antioxidante-Biowell/4268745" class=" owned-btn__secondary" type="button" >
                        Comprar
                    </a>
                </div>
            </div>
          </div>
      </div>

      </div>

      <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="d-flex">
              <div class="group">
                <div class="group-item">
                  <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                  <span class="fs-22">Relajante</span>
                </div>
              </div>
              <div class="group">
                <div class="group-item">
                  <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                  <span class="fs-22">Humectante</span>
                </div>
              </div>
              <div class="group">
                <div class="group-item">
                  <img src="{{url('/img/icono.png')}}" width="55" alt="icono">
                  <span class="fs-22">Refrescante</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="contendor-imagen" style="background-image:url('https://elintranews.com/wp-content/uploads/2019/06/YOGA-1.jpg')">
            <div style="height: 100%" class="container d-flex align-items-center">
              <div class="col-md-4 justify-left">
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <img width="200" src="{{url('/img/logo-biowell-blanco.png')}}" alt="Biowell">
                  <h3 style="margin-top: 16%;" class="text-white"> Te acompaña en <br> <span class="titulo">la rutina de tu día</span> </h3>
                </div>
              </div>
            </div>
          </div>

          <div class="contenedor-icons">
            <div style="height: 100%"  class="container d-flex align-items-center justify-content-center">
              <div class="row">
                <div class="col-md-4 d-flex  justify-content-center">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img width="100" src="{{url('/img/icono-blanco.png')}}" alt="Biowell">
                    <h4 class="mt-5 subtitulo text-white">En la mañana te humecta</h4>
                  </div>
                </div>
                <div class="col-md-4 d-flex  justify-content-center">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img width="100" src="{{url('/img/icono-blanco.png')}}" alt="Biowell">
                    <h4 class="mt-5 subtitulo text-white">En la tarde te refresca</h4>
                  </div>
                </div>
                <div class="col-md-4 d-flex  justify-content-center">
                  <div class="d-flex flex-column align-items-center text-center ">
                    <img width="100" src="{{url('/img/icono-blanco.png')}}" alt="Biowell">
                    <h4 class="mt-5 subtitulo text-white">En la noche te relaja</h4>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="contenedor-comparacion">
            <div class="container d-flex justify-content-center align-items-center flex-column">
              <h2 class="mt-5 subtitulo">Tu cuerpo y tu piel antes y después de <strong class="titulo text-dark">Biowell</strong> </h2>
              <img style="max-width: 100%;max-height: 100%" width="500" src="https://vivanda.vteximg.com.br/arquivos/ids/165119-1000-1000/63616.jpg" alt="biowell">
            </div>
          </div>


      <div class="text-center">

        <img style="max-width:600px" src="{{url('/img/individual.png')}}" alt="biowell">
      </div>



    <div class="mt-4 mb-4">
      <div class="mb-5">
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

    <div class="mt-4 mb-4">
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


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="">
        <div class="text-center">

          <img style="max-width:100%" width="320" src="{{url('/img/individual.png')}}" alt="producto">
        </div>

      </div>
      <pay-form-component></pay-form-component>
    </div>
  </div>
</div>
@endsection
