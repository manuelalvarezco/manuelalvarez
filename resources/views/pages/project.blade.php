@extends('layouts.app')
@section('title', 'Projects' )
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-xs-12">
            <div>
                <img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" class="card-img-top" alt="{{ $project->title }}">
                <div class="card-body">
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
