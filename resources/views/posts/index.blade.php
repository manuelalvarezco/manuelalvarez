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
                            @foreach($posts as $post)
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $post->title }}
                                        </h5>
                                        @if ($post->image)
                                            <img src="{{ $post->get_image }}" class="card-img-top">
                                        @endif
                                        @if($post->iframe)
                                            <div class="embed-responsive embed-responsive-16by9">
                                            {!! $post->iframe !!}
                                            </div>
                                        @endif
                                        <p class="card-text">
                                            {{ $post->get_excerpt }}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a class="card-link" href="{{ route('posts.edit', $post) }}"  class="btn btn-sm btn-success">Editar</a>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
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
                    {{ $posts->links() }}

        </div>
    </div>
@endsection
