@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" class="card-img-top" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">
                        {{ $project->body }}
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; Realizado con {{ $project->tecnology }}
                        </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
