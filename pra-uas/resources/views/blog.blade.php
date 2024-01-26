@extends('layouts.main')

@section('content')

    <div>
        <h2>All Post</h2>
        <div>
            <form action="{{ route('blogPage') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count() > 0)
        <div>
            @foreach ($posts as $post)
                <article class="mb-5 border-bottom">
                    <div>
                        <h2>
                            {{-- <a class="text-decoration-none" href="/blog/{{ $post->slug }}">{{ $post->title }}</a> --}}
                            <a class="text-decoration-none" href="{{ route('getPost', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                        </h2>
                        <p>
                            {{-- Author: <a class="text-decoration-none" href="/about/{{ $post->user->username }}">{{ $post->user->name }}</a> in --}}
                            Author: <a class="text-decoration-none" href="{{ route('getAuthorInfo', ['author' => $post->user->username]) }}">{{ $post->user->name }}</a> in
                            {{-- <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> --}}
                            <a class="text-decoration-none" href="{{ route('getAllPostCategory', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
                        </p>
                        <p>
                            {{ $post->excerpt }}
                        </p>
                        {{-- <a class="text-decoration-none mb-2" href="/blog/{{ $post->slug }}">Read more...</a> --}}
                        <a class="text-decoration-none mb-2" href="{{ route('getPost', ['post' => $post->slug]) }}">Read more...</a>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <div>
            <h2>No Post Available</h2>
        </div>
    @endif
@endsection
