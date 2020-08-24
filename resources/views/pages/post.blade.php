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
                </div>
            </div>
            <buttons-component></buttons-component>
            <comments-component></comments-component>

        </div>
    </div>
@endsection
