@extends('layouts.app')
@section('title','Login')
@section('content')
    <div class="row justify-content-center align-items-center" style="min-height: 70vh">
        <div class="col-md-6">
            <h5 class="text-center mb-2">Manuel Álvarez</h5>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email">Usuario</label>
                  <input type="email" class="form-control" aria-describedby="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                  <label for="password">Código</label>
                  <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </form>
        </div>
    </div>
@endsection
