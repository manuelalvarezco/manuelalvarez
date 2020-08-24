@extends('layouts.dashboard')
@section('title', 'Posts')
@section('content')
    <div class="row justify-content-end">
        <div class="col-md-10">
            <div class="d-flex justify-content-end">
                <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary btn-create">Crear</a>
            </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="card-columns">
                                @foreach($projects as $project)
                                <div class="card">
                                  <div class="card-body">
                                    @if ($project->image)
                                    <img src="{{ $project->get_image }}" class="card-img-top">
                                    @endif
                                    @if($project->iframe)
                                        <div class="embed-responsive embed-responsive-16by9">
                                        {!! $project->iframe !!}
                                        </div>
                                    @endif
                                    <h5 class="card-title mt-2">{{ $project->title }}</h5>
                                    <p class="card-text">{{ $project->get_excerpt }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $project->tecnology }}</small></p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-outline-success" href="{{ route('projects.edit', $project) }}"  class="btn btn-sm btn-success">Editar</a>
                                        <form action="{{ route('projects.destroy', $project) }}" method="POST">
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
                    {{ $projects->links() }}

        </div>
    </div>
@endsection
