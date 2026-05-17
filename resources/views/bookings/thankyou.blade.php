@extends('layouts.app')

@section('content')
    <div class="text-center py-5">
        <h2>Thank you!</h2>
        <p>Your booking request was received. We'll contact you soon.</p>
        <a href="{{ route('packages.index') }}" class="btn btn-primary">Back to packages</a>
    </div>
@endsection
