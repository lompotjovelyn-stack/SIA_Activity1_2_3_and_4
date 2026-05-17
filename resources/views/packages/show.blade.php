@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{ route('packages.index') }}" class="btn btn-link">← Back to packages</a>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">{{ $package->name }}</h2>
            <p class="text-muted">Price: {{ $package->price ? '₱'.$package->price : 'TBD' }} • Good for: {{ $package->good_for ?? '—' }}</p>
            <p class="card-text">{{ $package->description }}</p>
            <div class="mt-3">
                <a href="{{ route('packages.edit', $package) }}" class="btn btn-outline-secondary">Edit</a>
                <form action="{{ route('packages.destroy', $package) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this package?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <h4>Book this package</h4>
    @include('packages.form', ['package' => $package])

@endsection
