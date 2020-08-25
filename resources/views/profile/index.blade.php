@extends('layouts.dashboard')
@section('title', 'Profile')
@section('content')
<div class="d-flex justify-content-end">
    <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form
            action="{{ route('services.store') }}"
            method="POST"
            enctype="multipart/form-data"
            >

            <div class="form-group">
                <label for="title">Título *</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="projects">Proyectos</label>
                <input type="text" name="projects" class="form-control" id="projects">
            </div>
            <div class="form-group">
                <label for="file">Imagen</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="form-group">
                @csrf
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
        </div>

        <div class="col-md-6">
            <form
            action="{{ route('certificates.store') }}"
            method="POST"
            enctype="multipart/form-data"
            >

            <div class="form-group">
                <label for="title">Título *</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="school">Instituto</label>
                <input type="text" name="school" class="form-control" id="school">
            </div>
            <div class="form-group">
                <label for="file">Imagen</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="form-group">
                @csrf
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>

</div>
@endsection
