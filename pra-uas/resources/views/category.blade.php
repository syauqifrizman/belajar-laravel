@extends('layouts.main')

@section('content')

    <h1>Post Category: {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <div class="">
                <h2>
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                <p>
                    Author: <a class="text-decoration-none" href="/about/{{ $post->user->username }}">{{ $post->user->name }}</a>
                </p>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
    @endforeach
@endsection
