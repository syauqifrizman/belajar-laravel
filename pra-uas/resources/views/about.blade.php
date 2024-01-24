@extends('layouts.main')

@section('content')
    <div>
        <p>{{ $name }}</p>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $image }}" width="200">
    </div>
@endsection
