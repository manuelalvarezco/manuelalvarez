<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{url('/img/bio-ico.png')}}">
    <title>Biowell - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">


          <a class="navbar-brand d-flex align-items-center" href="/">
              <img src="{{ url('img/icono-blanco.png') }}" width="80" alt="logo">
              <h2 class="mt-3 titulo" style="color:white;">Biowell</h2>
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link titulo" href="{{ url('/') }}">INICIO <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link titulo" href="{{ url('/faqs') }}">FAQS</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link titulo" href="{{ url('/contact') }}">CONTACTO</a>
                </li>
            </ul>
          </div>
      </div>
        </nav>

    <div id="app">
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>
</html>
