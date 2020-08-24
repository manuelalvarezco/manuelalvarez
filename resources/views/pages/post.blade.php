@extends('layouts.app')
@section('title', 'Posts' )
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-xs-12">
            <div>
                @if ($post->image)
                        <img src="{{ $post->get_image }}" class="card-img-top">
                    @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5 class="card-title">{{ $post->title }}</h5>
                    @if($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !!}
                        </div>
                    @endif

                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <small>Comentarios</small>
                        </div>
                        <div class="comments-box d-flex flex-column mt-2">
                            @foreach($post->comments as $value)
                            <div class="comments-item d-flex flex-column">
                                <p class="text-muted ">
                                    {{ $value->body }}
                                </p>

                            </div>
                            @endforeach

                        </div>
                    </div>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="body">Comentar</label>
                            <textarea required maxlength="100" class="form-control" id="body" name="body" rows="2"></textarea>
                        </div>
                        <input type="hidden" value="{{ $post->id }}" name="post_id">
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
