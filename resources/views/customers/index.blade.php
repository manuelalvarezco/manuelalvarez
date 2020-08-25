@extends('layouts.dashboard')
@section('title', 'Posts')
@section('content')
    <div class="row justify-content-end">
        <div class="col-md-10">
            <h2>Customers</h2>
            <div class="row">

                @foreach($customers as $customer)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $customer->name }}</h5>
                            <span class="card-subtitle">{{ $customer->email }}</span>
                            <p class="card-text">{{ $customer->message }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
