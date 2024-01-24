@extends('layouts.main')

@section('content')

    <h1>Post Category: {{ $category }}</h1>

    @foreach ($posts as $post)
        <article>
            <div class="bg-body-secondary">
                <h2>
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                {{-- <h5>Author: {{ $post["author"] }}</h5> --}}
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
    @endforeach
@endsection
