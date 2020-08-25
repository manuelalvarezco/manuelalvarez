@extends('layouts.dashboard')
@section('title', 'Create Project')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Project</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form
                        action="{{ route('projects.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        >

                        <div class="form-group">
                            <label for="title">Título *</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="file">Imagen</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" id="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tecnology">Tecnology</label>
                            <select class="form-control" id="tecnology" name="tecnology">
                              <option value="Angular">Angular</option>
                              <option value="Laravel">Laravel</option>
                              <option value="Vue">Vue</option>
                            </select>
                          </div>
                        <div class="form-group">
                            <label for="body">Contenido *</label>
                            <textarea name="body" id="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="iframe">Contenido embebido</label>
                            <textarea name="iframe" id="iframe" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
