@extends('layouts.dashboard')
@section('title', 'Create Post')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Certificate</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form
                        action="{{ route('certificates.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        >
                        @csrf
                        <div class="form-group">
                            <label for="title">Título *</label>
                            <input type="text" name="title" class="form-control" id="title" required >
                        </div>
                        <div class="form-group">
                            <label for="file">Imagen</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="school">Instituto</label>
                            <input type="text" name="school" id="school" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" id="url" class="form-control" >
                        </div>
                        <div class="form-group">

                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
