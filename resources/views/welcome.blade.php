@extends('layouts.app')

@section('title', 'Inicio')


@section('content')
    <main-component></main-component>
    <div class="mb-4">
        <register-component></register-component>
    </div>
    <div class="mt-4 mb-4">
        <ingredients-component></ingredients-component>
    </div>
@endsection