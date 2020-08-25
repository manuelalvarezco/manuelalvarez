@extends('layouts.dashboard')
@section('title', 'Posts')
@section('content')
    <div class="row justify-content-end">
        <div class="col-md-10">
            <div class="d-flex justify-content-end">
                <a href="{{ route('services.create') }}" class="btn btn-sm btn-primary btn-create">Crear</a>
            </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="card-columns">
                                @foreach($services as $service)
                                <div class="card">
                                  <div class="card-body">
                                    @if ($service->image)
                                    <img src="{{ $service->get_image }}" class="card-img-top">
                                    @endif
                                    <h5 class="card-title mt-2">{{ $service->title }}</h5>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-outline-success" href="{{ route('services.edit', $service) }}"  class="btn btn-sm btn-success">Editar</a>
                                        <form action="{{ route('services.destroy', $service) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Are you Sure?')">Eliminar</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                              </div>
                        </div>
                    </div>
                    {{ $services->links() }}

        </div>
    </div>
@endsection
