@extends('layouts.main')

@section('content')
    <div>
        @foreach ($posts as $post)
            <article class="mb-5 border-bottom">
                <div>
                    <h2>
                        <a class="text-decoration-none" href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    </h2>
                    <p>
                        Author: <a class="text-decoration-none" href="/about/{{ $post->user->username }}">{{ $post->user->name }}</a> in
                        <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </p>
                    <p>
                        {{ $post->excerpt }}
                    </p>
                    <a class="text-decoration-none mb-2" href="/blog/{{ $post->slug }}">Read more...</a>
                </div>
            </article>
        @endforeach
    </div>
@endsection
