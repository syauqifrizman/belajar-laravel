@extends('layouts.main')

@section('content')
    <h1>Post Categories</h1>
    @foreach ($categories as $category)
        <div class="bg-body-secondary">
            <h2>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h2>
        </div>
    @endforeach
@endsection
