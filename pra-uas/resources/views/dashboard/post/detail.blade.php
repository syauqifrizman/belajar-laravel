@extends('layouts.main')

@section('content')
    <div class="bg-body-secondary">
        <div>
            <h2>
                {{ $post->title }}
            </h2>
            <div>
                <a class="btn btn-info text-light" href="{{ route('getMyPost') }}">Back to Dashboard</a>
                <a href="{{ route('editPostPage', ['post' => $post->slug]) }}">Edit</a>
                <form action="{{ route('deletePost', ['post' => $post->slug]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
        <h5>
            {{-- Author: <a class="text-decoration-none" href="/about/{{ $post->user->username }}">{{ $post->user->name }}</a> in --}}
            Author: <a class="text-decoration-none" href="{{ route('getAuthorInfo', ['author' => $post->user->username]) }}">{{ $post->user->name }}</a> in
            {{-- <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> --}}
            <a href="{{ route('getAllPostCategory', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
        </h5>
        @if ($post->img_url)
            <div>
                <img src="{{ asset('storage/' . $post->img_url) }}" alt="">
            </div>
        @endif
        <div>
            {{ $post->body }}
        </div>
    </div>

    <div>

    </div>
@endsection
