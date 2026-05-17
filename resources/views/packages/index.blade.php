@extends('layouts.app')

@section('content')
    <div class="hero mb-4 rounded shadow-sm">
        <div class="container">
            <h1 class="display-6">Our Catering Packages</h1>
            <p class="lead">Choose from curated packages for any occasion.</p>
        </div>
    </div>

    <div class="row g-3">
        @foreach($packages as $package)
            <div class="col-md-4">
                <div class="card card-package h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $package->name }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($package->description, 100) }}</p>
                        <p class="mb-1"><strong>Price:</strong> {{ $package->price ? '₱'.$package->price : 'TBD' }}</p>
                        <p class="mb-2"><small>Good for: {{ $package->good_for ?? '—' }}</small></p>
                        <a href="{{ route('packages.show', $package) }}" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($packages->isEmpty())
        <div class="mt-4 alert alert-info">No packages yet — add one.</div>
    @endif
@endsection
