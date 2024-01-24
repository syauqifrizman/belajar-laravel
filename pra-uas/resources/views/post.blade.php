@extends('layouts.main')

@section('content')
    <div class="bg-body-secondary">
        <h2>
            {{ $post->title }}
        </h2>
        <h5>
            Author: {{ $post->author }} in
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        <div>
            {{ $post->body }}
        </div>
    </div>

    <div>
        <button class="btn-primary">
            <a href="/blog">Back to blog</a>
        </button>
    </div>
@endsection
