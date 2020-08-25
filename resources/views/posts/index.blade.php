@extends('layouts.dashboard')
@section('title', 'Posts')
@section('content')
    <div class="row justify-content-end">
        <div class="col-md-10">
            <div class="d-flex justify-content-end">
                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
            </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="card-columns">
                                @foreach($posts as $post)
                                <div class="card">
                                  <div class="card-body">
                                    @if ($post->image)
                                    <img src="{{ $post->get_image }}" class="card-img-top">
                                    @endif
                                    @if($post->iframe)
                                        <div class="embed-responsive embed-responsive-16by9">
                                        {!! $post->iframe !!}
                                        </div>
                                    @endif
                                    <h5 class="card-title mt-2">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->get_excerpt }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $post->tecnology }}</small></p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-outline-success" href="{{ route('posts.edit', $post) }}"  class="btn btn-sm btn-success">Editar</a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
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
                    {{ $posts->links() }}

        </div>
    </div>
@endsection
