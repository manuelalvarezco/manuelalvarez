@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($projects as $project)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">
                        {{ $project->get_excerpt }}
                        <a href="{{ route('project', $project) }}">Leer Más</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $project->user->name }}
                        </em>
                        {{ $project->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection
