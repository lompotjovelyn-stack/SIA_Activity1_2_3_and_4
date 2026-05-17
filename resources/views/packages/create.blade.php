@extends('layouts.app')

@section('content')
    <h2>Add Package</h2>
    <form action="{{ route('packages.store') }}" method="POST">
        @csrf
        @include('packages.form-fields')
        <button class="btn btn-primary">Create</button>
    </form>
@endsection
