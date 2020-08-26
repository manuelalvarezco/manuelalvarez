@extends('layouts.dashboard')
@section('title', 'Edit Service')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Service</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form
                        action="{{ route('services.update', $service) }}"
                        method="POST"
                        enctype="multipart/form-data"
                        >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Título *</label>
                            <input type="text" name="title" class="form-control" id="title" required value="{{ old('title', $service->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="file">Imagen</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="projects">Proyectos realizados</label>
                            <input type="text" name="projects" id="projects" class="form-control" value="{{ old('projects', $service->projects) }}">
                        </div>


                        <div class="form-group">

                            <input type="submit" value="Actualizar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
