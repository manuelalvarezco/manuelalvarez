@extends('layouts.app')
@section('title', 'Projects' )
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-xs-12">
            <div>
                @if ($project->image)
                        <img src="{{ $project->get_image }}" class="card-img-top">
                    @endif
                <div class="card-body">
                    @if($project->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                        {!! $project->iframe !!}
                        </div>
                    @endif
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">
                        {{ $project->body }}
                    </p>
                    <div class="d-flex align-items-center justify-content-lg-between flex-wrap">

                        <p class="text-muted mb-0">
                            <em>
                                &ndash; Realizado con {{ $project->tecnology }}
                            </em>
                        </p>
                        <small>URL: <a href="{{ $project->url }}">{{ $project->title }}</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
