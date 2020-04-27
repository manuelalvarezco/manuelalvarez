@extends('layouts.app')

@section('title', 'Contacto')


@section('content')

<div class="container mt-4" >
    <div class="row">
        <div class="col-md-6 text-center">
            <img style="max-width: 100%" src="{{url('/img/producto.png')}}" alt="producto">
          </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
          <h2 class="titulo text-dark text-uppercase">Contáctanos</h2>
        <contact-form-component></contact-form-component>
      </div>

    </div>



      </div>

@endsection
