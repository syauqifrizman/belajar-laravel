@extends('layouts.main')

@section('content')
    <article>
        @foreach ($posts as $post)
            <div class="bg-body-secondary">
                <h2>
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                {{-- <h5>Author: {{ $post["author"] }}</h5> --}}
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        @endforeach
    </article>
@endsection
