@extends('layouts.dashboard')
@section('title', 'Services')
@section('content')
    <div class="row justify-content-end">
        <div class="col-md-10">
            <div class="d-flex justify-content-end">
                <a href="{{ route('services.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
            </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            @foreach($services as $service)
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">

                                        @if ($service->image)
                                            <img src="{{ $service->get_image }}" class="card-img-top">
                                        @endif
                                        <h5 class="card-title">
                                            {{ $service->title }}
                                        </h5>
                                        <div class="d-flex justify-content-between">
                                            <a class="card-link" href="{{ route('services.edit', $service) }}"  class="btn btn-sm btn-success">Editar</a>
                                            <form action="{{ route('services.destroy', $service) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Are you Sure?')">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $services->links() }}

        </div>
    </div>
@endsection
