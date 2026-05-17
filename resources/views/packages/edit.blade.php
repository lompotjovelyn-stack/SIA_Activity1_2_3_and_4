@extends('layouts.app')

@section('content')
    <h2>Edit Package</h2>
    <form action="{{ route('packages.update', $package) }}" method="POST">
        @csrf
        @method('PUT')
        @include('packages.form-fields')
        <button class="btn btn-primary">Save</button>
    </form>
@endsection
