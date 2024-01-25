@extends('layouts.main')

@section('content')
    <h1>Post Categories</h1>
    @foreach ($categories as $category)
        <div class="mb-5 border-bottom">
            <h2>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h2>
            @foreach ($category->post as $post)
                <ul>
                    <li>
                     <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    </li>
                </ul>
            @endforeach
        </div>
    @endforeach
@endsection
