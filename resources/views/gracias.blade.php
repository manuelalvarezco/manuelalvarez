@extends('layouts.app')

@section('title', 'Gracias')


@section('content')

<div class="container" style="padding-bottom: 0;">
  <div class="main" style="background-image: url('./img/main.png')">
  <div class="row">
    <div class="col-md-6 d-flex flex-column align-items-center">
      <img width="250" src="{{url('/img/logo-main.png')}}" alt="logo">
      <div class="d-flex flex-column text-center">
        <span class="fs-25 text-bold primary-color titulo" >GRACIAS</span>
        <div class="divider"></div>
        <small class="fs-16 primary-color">Conoce más de nuestros productos en</small>
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
    <a class="btn" style="text-decoration:none;color:white" href="{{url('/')}}">
        <span class="fs-25">
        Regresar al inicio
        </span>
      </a>
    </div>
    </div>
    
    </div>
    
</div>

@endsection