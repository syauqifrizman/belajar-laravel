@extends('layouts.main')

@section('content')
    <div>
        <h2>Info User:</h2>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <img src="img/{{ $image }}" alt="{{ $image }}" width="200">
    </div>

    <div>
        <h2 class="mt-2">Info Article/Post</h2>
        @foreach ($user->post as $post)
            <div>
                <ul>
                    <li>
                        <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
